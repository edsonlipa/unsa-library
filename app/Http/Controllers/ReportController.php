<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legis;


class ReportController extends Controller
{
    public function libs_report()
    {
        $users_legis = Legis::all();
        foreach($users_legis as $user){
            //\Log::debug(["id"=>$user->id,"user name"=>$user->names]);
        }
        return count($users_legis);
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
