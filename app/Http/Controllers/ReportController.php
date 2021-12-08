<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legis;
use App\Models\LibaedsAccess;
use App\Models\LibcengageAccess;
use App\Models\LibcimabookAccess;
use App\Models\LibeurekaAccess;
use App\Models\LibeuromonitorAccess;
use App\Models\McgrawhillAccess;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LegisReportExport;

class ReportController extends Controller
{
    public function libs_report()
    {
        \Log::debug(["iduser name"=>"nothing"]);
        return Excel::download(new LegisReportExport, 'libs_report.xlsx');
    }

    public function libaeds_report()
    {
        $users_legis = LibaedsAccess::all();
        foreach($users_legis as $user){
            \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        }
        return count($users_legis);
    }
    
    public function libcengage_report()
    {
        $users_legis = LibcengageAccess::all();
        // foreach($users_legis as $user){
        //     \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        // }
        return count($users_legis);
    }    

    public function libcimabook_report()
    {
        $users_legis = LibaedsAccess::all();
        foreach($users_legis as $user){
            \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        }
        return count($users_legis);
    }    
    
    public function libeureka_report()
    {
        $users_legis = LibaedsAccess::all();
        foreach($users_legis as $user){
            \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        }
        return count($users_legis);
    }    
    
    public function libeuromonitor_report()
    {
        $users_legis = LibaedsAccess::all();
        foreach($users_legis as $user){
            \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        }
        return count($users_legis);
    }

    public function mcgrawhill_report()
    {
        $users_legis = LibaedsAccess::all();
        foreach($users_legis as $user){
            \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        }
        return count($users_legis);
    }
}
