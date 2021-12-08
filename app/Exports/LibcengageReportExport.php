<?php

namespace App\Exports;

use App\Models\Legis;
use App\Models\AlumnoEmail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;


class LibaedsReportExport implements FromCollection,WithHeadings//FromQuery 
{

    public function collection()
    {
        $account_legis = Legis::select('first_name', 'last_name', 'email', 'created_on', 'updated_on')->get();
        foreach($account_legis as $user){
            $parts_email = explode('@', $user->email);
            $first_email = current($parts_email);     
            $alumno_email=AlumnoEmail::where('mail',$first_email)->first();
            if($alumno_email){
                $alumno=$alumno_email->alumno;
                if($alumno){
                    $user->cui=$alumno->cui;
                    $user->dni=$alumno->dic;
                    $primera_matricula_21=$alumno_email->alumno->primera_matricula_21;
                    if($primera_matricula_21){
                        $user->escuela=$primera_matricula_21->escuela->nesc;
                    }
                }
            }
            \Log::debug(["account"=>$user]);
        }
        return $account_legis;
    }

    public function headings(): array
    {
        return [ "NOMBRES", "APELLIDOS", "CORREOUNSA", "CREATED","UPDATED", "DNI","CUI","CARRERA CON MATRICULA ACTIVA"];
    }
   
}
