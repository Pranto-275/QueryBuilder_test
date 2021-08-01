<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function UpdateData()
    {
        $result = DB::table('migrationtable')->where('Fname', '=', 'a')->update(['Fname' => 'pranto']);

        if ($result == true) {
            return 'Update';
        } else {
            return 'Failed';
        }
    }
}
