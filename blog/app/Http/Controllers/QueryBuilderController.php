<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class QueryBuilderController extends Controller
{


    // public function getAll()
    // {
    //     $result = DB::table('1stable')->where('Fname', '=', 'asd')->first();
    //     return  json_encode($result);
    // }

    // public function findrows()
    // {
    //     $result = DB::table('1stable')->find(4);
    //     return  json_encode($result);
    // }


    // public function findcolum()
    // {
    //     $result = DB::table('1stable')->pluck('Fname');
    //     return json_encode($result);
    // }

    // public function multiplefindcolum()
    // {
    //     $result = DB::table('1stable')->pluck('Fname', 'id');
    //     return json_encode($result);
    // }

    // public function specificfindcolum()
    // {
    //     $result = DB::table('1stable')->where('id', '=', '2')->value('Fname');
    //     return json_encode($result);
    // }
}
