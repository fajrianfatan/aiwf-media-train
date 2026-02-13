<?php

namespace App\Observers;

use App\Models\Berita;
use App\Models\ActivityLog;

class BeritaObserver
{
    /**
     * Handle the Berita "created" event.
     */
    public function created(Berita $berita): void
    {
        session()->flash('success', 'Berita berhasil ditambahkan');
        ActivityLog::create([
            'model' => 'Berita',
            'method' => 'Create',
            'data'  => $berita->toArray(),
        ]);
    }

    /**
     * Handle the Berita "updated" event.
     */
    public function updated(Berita $berita): void
    {
        session()->flash('success', 'Berita berhasil diupdate');
        ActivityLog::create([
            'model' => 'Berita',
            'method' => 'Update',
            'data'  => $berita->toArray(),
        ]);
    }

    /**
     * Handle the Berita "deleted" event.
     */
    public function deleted(Berita $berita): void
    {
        session()->flash('success', 'Berita berhasil dihapus');
        ActivityLog::create([
            'model' => 'Berita',
            'method' => 'Delete',
            'data'  => $berita->toArray(),
        ]);
    }

    /**
     * Handle the Berita "restored" event.
     */
    public function restored(Berita $berita): void
    {
        //
    }

    /**
     * Handle the Berita "force deleted" event.
     */
    public function forceDeleted(Berita $berita): void
    {
        //
    }
}
