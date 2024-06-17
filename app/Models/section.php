<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class section extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'thumbnail', 'content', 'post_as'];
    // akan mengatur kolom kolom mana saja yang bisa digunakan untuk dimasukan

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {
            if ($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
        // ini untuk mengatur jika ada file gambar lama yang diganti dengan baru
        // maka gambar tersebut akan langsung menimpa gambar yang lama agar mencegah terjadinya penumpukan file
    }
}
