<?php

namespace App\View\Components;

use App\Models\Rubrika;
use Illuminate\View\Component;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $rubrikos = Rubrika::all();
        return view('layouts.guest', compact("rubrikos"));
        // return view('layouts.guest');
    }
}
