<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function LeftJoinData()
    {
        $result = DB::table('1stable')
            ->LeftJoin('migrationtable', '1stable.Fname', '=', 'migrationtable.Fname')
            ->get();

        return $result;
    }


    public function RightJoinData()
    {
        $result = DB::table('1stable')
            ->rightJoin('migrationtable', '1stable.Fname', '=', 'migrationtable.Fname')
            ->get();

        return $result;
    }
}
