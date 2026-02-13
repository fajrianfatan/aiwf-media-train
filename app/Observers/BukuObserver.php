<?php

namespace App\Observers;

use App\Models\Buku;
use App\Models\ActivityLog;

class BukuObserver
{
    /**
     * Handle the Buku "created" event.
     */
    public function created(Buku $buku): void
    {
        session()->flash('success', 'Buku berhasil ditambahkan');
        ActivityLog::create([
            'model' => 'Buku',
            'method' => 'Create',
            'data'  => $buku->toArray(),
        ]);
    }

    /**
     * Handle the Buku "updated" event.
     */
    public function updated(Buku $buku): void
    {
        session()->flash('success', 'Buku berhasil diupdate');
        ActivityLog::create([
            'model' => 'Buku',
            'method' => 'Update',
            'data'  => $buku->toArray(),
        ]);
    }


    /**
     * Handle the Buku "deleted" event.
     */
    public function deleted(Buku $buku): void
    {
        session()->flash('success', 'Buku berhasil dihapus');
        ActivityLog::create([
            'model' => 'Buku',
            'method' => 'Delete',
            'data'  => $buku->toArray(),
        ]);

    }

    /**
     * Handle the Buku "restored" event.
     */
    public function restored(Buku $buku): void
    {
        //
    }

    /**
     * Handle the Buku "force deleted" event.
     */
    public function forceDeleted(Buku $buku): void
    {
        //
    }
}
