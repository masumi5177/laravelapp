<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AddController extends Controller
{
    public function insert(Request $request){
        $item = DB::select('select * from');
    }
}