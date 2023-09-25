<?php

namespace App\Observers;

use App\Models\Airport;
use Illuminate\Support\Str;

class AirportObserver
{
    /**
     * Handle the Airport "created" event.
     *
     * @param  \App\Models\Airport  $airport
     * @return void
     */
    public function created(Airport $airport)
    {
        $airport->slug = Str::slug($airport->title);
        $airport->save();
    }

    /**
     * Handle the Airport "updated" event.
     *
     * @param  \App\Models\Airport  $airport
     * @return void
     */
    public function updated(Airport $airport)
    {
        //
    }

    /**
     * Handle the Airport "deleted" event.
     *
     * @param  \App\Models\Airport  $airport
     * @return void
     */
    public function deleted(Airport $airport)
    {
        //
    }

    /**
     * Handle the Airport "restored" event.
     *
     * @param  \App\Models\Airport  $airport
     * @return void
     */
    public function restored(Airport $airport)
    {
        //
    }

    /**
     * Handle the Airport "force deleted" event.
     *
     * @param  \App\Models\Airport  $airport
     * @return void
     */
    public function forceDeleted(Airport $airport)
    {
        //
    }
}
