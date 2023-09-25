<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AirportDescription extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    private $airport;
    public function __construct($airport)
    {
        $this->airport = $airport;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.airport-description',['airport' => $this->airport]);
    }
}
