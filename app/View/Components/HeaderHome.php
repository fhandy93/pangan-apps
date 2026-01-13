<?php

namespace App\View\Components;

use App\Models\Notification;
use App\Models\Transnotif;
use Illuminate\Support\Facades\Auth;
use App\Models\Visitorcounter;
use Illuminate\View\Component;
use Carbon\Carbon;

class HeaderHome extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.header-home');
    }
}
