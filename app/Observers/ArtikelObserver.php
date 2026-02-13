<?php

namespace App\Observers;

use App\Models\Artikel;
use App\Models\ActivityLog;
class ArtikelObserver
{
    public function created(Artikel $artikel)
    {
        session()->flash('success', 'Artikel berhasil ditambahkan');

        ActivityLog::create([
            'model' => 'Artikel',
            'data'  => $artikel->toArray(),
        ]);
    }

    public function updated(Artikel $artikel)
    {
        session()->flash('success', 'Artikel berhasil diupdate');
    }

    public function deleted(Artikel $artikel)
    {
        session()->flash('success', 'Artikel berhasil dihapus');
    }
}
