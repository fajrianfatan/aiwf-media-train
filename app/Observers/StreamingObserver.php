<?php

namespace App\Observers;

use App\Models\Streaming;
use App\Models\ActivityLog;

class StreamingObserver
{
    /**
     * Handle the Streaming "created" event.
     */
    public function created(Streaming $streaming): void
    {
        session()->flash('success', 'Video berhasil ditambahkan');
        ActivityLog::create([
            'model' => 'Streaming',
            'method' => 'Create',
            'data'  => $streaming->toArray(),
        ]);
    }

    /**
     * Handle the Streaming "updated" event.
     */
    public function updated(Streaming $streaming): void
    {
        session()->flash('success', 'Video berhasil diupdate');
        ActivityLog::create([
            'model' => 'Streaming',
            'method' => 'Update',
            'data'  => $streaming->toArray(),
        ]);
    }

    /**
     * Handle the Streaming "deleted" event.
     */
    public function deleted(Streaming $streaming): void
    {
        session()->flash('success', 'Video berhasil dihapus');
        ActivityLog::create([
            'model' => 'Streaming',
            'method' => 'Delete',
            'data'  => $streaming->toArray(),
        ]);
    }

    /**
     * Handle the Streaming "restored" event.
     */
    public function restored(Streaming $streaming): void
    {
        //
    }

    /**
     * Handle the Streaming "force deleted" event.
     */
    public function forceDeleted(Streaming $streaming): void
    {
        //
    }
}
