<?php

namespace App\Observers;

use App\Models\Artikel;

class ArtikelObserver
{
    public function created(Artikel $artikel)
    {
        session()->flash('success', 'Artikel berhasil ditambahkan');
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
