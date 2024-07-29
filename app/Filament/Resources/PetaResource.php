<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Peta;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Filament\Resources\PetaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PetaResource\RelationManagers;

class PetaResource extends Resource
{
    protected static ?string $model = Peta::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('thumbnail')
                        ->required()->image()->disk('public'),
                    Forms\Components\RichEditor::make('content')
                        ->required(),
                    Forms\Components\Select::make('post_as')->optionS([
                        'AWAN_CB' => 'AWAN_CB',
                        'PRAKIRAAN_AREA_00_UTC' => 'PRAKIRAAN_AREA_00_UTC',
                        'CLOUD_TYPE' => 'CLOUD_TYPE',
                        'MEDIUM_LEVEL_SIGWX' => 'MEDIUM_LEVEL_SIGWX',
                        'HIGH_LEVEL_SIGWX' => 'HIGH_LEVEL_SIGWX',
                        'WIND' => 'WIND'
                    ])
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('post_as')->searchable(),
                // Tables\Columns\TextColumn::make('content'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(function (Collection $records) {
                    foreach ($records as $key => $value) {
                        if ($value->thumbnail) {
                            Storage::disk('public')->delete($value->thumbnail);
                        }
                        // untuk mengatur penghapusan secara banyak
                    }
                }),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPetas::route('/'),
            'create' => Pages\CreatePeta::route('/create'),
            'edit' => Pages\EditPeta::route('/{record}/edit'),
        ];
    }
}
