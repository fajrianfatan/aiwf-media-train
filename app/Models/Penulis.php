<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
class Penulis extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable =[
        'nama',
        'bidang',

    ];
    public function buku(): BelongsTo
    {
        return $this->belongsTo(Buku::class);
    }

    public function artikel(): BelongsTo
    {
        return $this->belongsTo(Artikel::class);
    }
}
