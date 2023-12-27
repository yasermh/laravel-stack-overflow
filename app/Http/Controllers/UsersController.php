<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class UsersController extends Controller
{
    public function excel(){


        $campaign = "All_Leads_";

        $currentDate = date('Y-m-d');

        $FileName = $campaign.'_'.date('Y-m-d').'_'.date("H:i:s").".xlsx";

        return Excel::download(new UsersExport, $FileName);

    }
}
