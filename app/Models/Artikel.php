<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
class Artikel extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =[
        'judul',
        'penulis_id',
        'kategori',
        'tanggal_terbit',
        'body'
    ];

   protected $casts = [
        'tanggal_terbit' => 'datetime'
    ];

    public function penulis()
    {
        return $this->belongsTo(Penulis::class);
    }
}
