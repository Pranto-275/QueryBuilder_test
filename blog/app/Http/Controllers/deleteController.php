<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class deleteController extends Controller
{
    public function deleteData()
    {
        $result = DB::table('1stable')->where('Fname', '=', 'asd')->delete();
        if ($result == true) {
            return "delete";
        } else {
            return "Failed";
        }
    }

    public function deleteDataAll()
    {
        $result = DB::table('1stable')->delete();
        if ($result == true) {
            return "delete";
        } else {
            return "Failed";
        }
    }
}
