<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SelectController extends Controller
{
    public function UniqueSelect()
    {
        $result = DB::table('1stable')->distinct()->get();
        return $result;
    }

    public function SingleColum()
    {
        $result = DB::table('1stable')->select('Fname')->get();
        return $result;
    }

    public function multipleColum()
    {
        $result = DB::table('1stable')->select('Fname', 'Address')->get();
        return $result;
    }
}
