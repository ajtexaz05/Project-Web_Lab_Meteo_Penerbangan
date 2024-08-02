<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\TanyaJawab;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TanyaJawabResource\Pages;
use App\Filament\Resources\TanyaJawabResource\RelationManagers;

class TanyaJawabResource extends Resource
{
    protected static ?string $model = TanyaJawab::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\TextInput::make('pertanyaan')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\RichEditor::make('jawaban')
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pertanyaan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jawaban')->limit(20),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListTanyaJawabs::route('/'),
            'create' => Pages\CreateTanyaJawab::route('/create'),
            'edit' => Pages\EditTanyaJawab::route('/{record}/edit'),
        ];
    }
}
