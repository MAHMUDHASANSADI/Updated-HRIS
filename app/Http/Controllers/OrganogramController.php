<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganogramController extends Controller
{
    public function organogram()
    {
        return view ('organogram.organogram');
    }
}
