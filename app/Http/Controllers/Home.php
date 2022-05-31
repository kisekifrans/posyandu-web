<?php

namespace App\Http\Controllers;

use App\Models\Balitas;
use App\Models\Bumils;
use App\Models\Kaders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index() {
        return view('posyandu.welcome');
    }

}
