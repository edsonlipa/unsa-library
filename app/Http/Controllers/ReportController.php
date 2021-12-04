<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legis;
use Maatwebsite\Excel\Facades\Excel;



class ReportController extends Controller
{
    public function libs_report()
    {
        $account_legis = Legis::all();
        foreach($account_legis as $user){
            //\Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        }
        return ;
    }
    public function libaeds_report()
    {
        $users_legis = Legis::all();
        foreach($users_legis as $user){
            //\Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        }
        return count($users_legis);
    }
}
