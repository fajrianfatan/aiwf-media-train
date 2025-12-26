<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
class Buku extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =[
        'judul',
        'penulis_id',
        'penerbit',
        'tahun_terbit',
        'body'
    ];
    public function penulis()
    {
        return $this->belongsTo(Penulis::class);
    }
}
