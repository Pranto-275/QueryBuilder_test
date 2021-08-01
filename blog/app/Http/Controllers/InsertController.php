<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function InsertData()
    {
        $result = DB::table('1stable')->insert(['Fname' => 'pranto', 'Address' => 'kashimpur']);
        if ($result == true) {
            return "update";
        } else {
            return "update Failed";
        }
    }
}
