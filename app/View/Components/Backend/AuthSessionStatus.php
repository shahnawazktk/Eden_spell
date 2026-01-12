<?php

namespace App\View\Components\Backend;

use Illuminate\View\Component;

class AuthSessionStatus extends Component
{
    public $status;

    public function __construct($status = null)
    {
        $this->status = $status;
    }

    public function render()
    {
        return view('backend.component.auth-session-status');
    }
}