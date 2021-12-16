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
use App\Exports\LibaedsReportExport;
use App\Exports\LibcengageReportExport;
use App\Exports\LibcimabookReportExport;
use App\Exports\LibeurekaReportExport;
use App\Exports\LibeuromonitorReportExport;
use App\Exports\McgrawhillReportExport;


class ReportController extends Controller
{
    public function libs_report()
    {
        \Log::debug(["iduser name"=>"nothing"]);
        return Excel::download(new LegisReportExport, 'libs_report.xlsx');
    }

    public function libaeds_report()
    {
        // $users_legis = LibaedsAccess::all();
        // foreach($users_legis as $user){
        //     \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        // }
        // return count($users_legis);
        return Excel::download(new LibaedsReportExport, 'libaeds_report.xlsx');

    }
    
    public function libcengage_report()
    {
        // $users_legis = LibcengageAccess::all();
        // // foreach($users_legis as $user){
        // //     \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        // // }
        // return count($users_legis);
        return Excel::download(new LibcengageReportExport, 'libcengage_report.xlsx');

    }    

    public function libcimabook_report()
    {
        // $users_legis = LibaedsAccess::all();
        // foreach($users_legis as $user){
        //     \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        // }
        // return count($users_legis);
        return Excel::download(new LibcimabookReportExport, 'libcimabook_report.xlsx');

    }    
    
    public function libeureka_report()
    {
        // $users_legis = LibaedsAccess::all();
        // foreach($users_legis as $user){
        //     \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        // }
        // return count($users_legis);
        return Excel::download(new LibeurekaReportExport, 'libeureka_report.xlsx');

    }    
    
    public function libeuromonitor_report()
    {
        // $users_legis = LibaedsAccess::all();
        // foreach($users_legis as $user){
        //     \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        // }
        // return count($users_legis);
        return Excel::download(new LibeuromonitorReportExport, 'libeuromonitor_report.xlsx');

    }

    public function mcgrawhill_report()
    {
        // $users_legis = LibaedsAccess::all();
        // foreach($users_legis as $user){
        //     \Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        // }
        // return count($users_legis);
        return Excel::download(new McgrawhillReportExport, 'mcgrawhill_report.xlsx');

    }
}
