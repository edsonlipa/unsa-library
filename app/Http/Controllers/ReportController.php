<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legis;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LibraryExport;




class ReportController extends Controller
{
    public function libs_report()
    {
        //$account_legis = Legis::all();
        // foreach($account_legis as $user){
        //     //\Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        // }
//        return (new LibraryExport)->download('libs_report.xlsx');
        \Log::debug(["iduser name"=>"nothing"]);

        return Excel::download(new LibraryExport, 'libs_report.xlsx');

    }
    public function libaeds_report()
    {
        $users_legis = LibaedsAccess::all();
        foreach($users_legis as $user){
            \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        }
        return count($users_legis);
    }
}
