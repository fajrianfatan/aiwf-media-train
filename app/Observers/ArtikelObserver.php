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
            'method' => 'Create',
            'data'  => $artikel->toArray(),
        ]);
    }

    public function updated(Artikel $artikel)
    {
        session()->flash('success', 'Artikel berhasil diupdate');
        ActivityLog::create([
            'model' => 'Artikel',
            'method' => 'Update',
            'data'  => $artikel->toArray(),
        ]);
    }

    public function deleted(Artikel $artikel)
    {
        session()->flash('success', 'Artikel berhasil dihapus');
        ActivityLog::create([
            'model' => 'Artikel',
            'method' => 'Delete',
            'data'  => $artikel->toArray(),
        ]);
    }
}
