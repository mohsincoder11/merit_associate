<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bank_Controller extends Controller
{
    public function bank_dashboard()
    {
        return view('Bank_panel.bank_dashboard');
    }
}
