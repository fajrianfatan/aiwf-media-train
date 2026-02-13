<?php

namespace App\Observers;

use App\Models\Penulis;
use App\Models\ActivityLog;

class PenulisObserver
{
    /**
     * Handle the Penulis "created" event.
     */
    public function created(Penulis $penulis): void
    {
        session()->flash('success', 'Penulis berhasil ditambahkan');
        ActivityLog::create([
            'model' => 'Penulis',
            'method' => 'Create',
            'data'  => $penulis->toArray(),
        ]);
    }

    /**
     * Handle the Penulis "updated" event.
     */
    public function updated(Penulis $penulis): void
    {
        session()->flash('success', 'Penulis berhasil diupdate');
        ActivityLog::create([
            'model' => 'Penulis',
            'method' => 'Update',
            'data'  => $penulis->toArray(),
        ]);
    }

    /**
     * Handle the Penulis "deleted" event.
     */
    public function deleted(Penulis $penulis): void
    {
        session()->flash('success', 'Penulis berhasil dihapus');
        ActivityLog::create([
            'model' => 'Penulis',
            'method' => 'Delete',
            'data'  => $penulis->toArray(),
        ]);
    }

    /**
     * Handle the Penulis "restored" event.
     */
    public function restored(Penulis $penulis): void
    {
        //
    }

    /**
     * Handle the Penulis "force deleted" event.
     */
    public function forceDeleted(Penulis $penulis): void
    {
        //
    }
}
