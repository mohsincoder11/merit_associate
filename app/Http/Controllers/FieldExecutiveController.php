<?php

namespace App\Http\Controllers;
use App\Models\FieldExecutive;
use Illuminate\Http\Request;

class FieldExecutiveController extends Controller
{
    public function index_field_executive()
    {
       
        return view('dashboard-field');
    }

    public function field_valuation()
    {
      return view('valuation-field');
    }

    public function field_report()
    {
      return view('report-field');
    }

    public function field_reminder()
    {
      return view('reminder-field');
    }

  
}
