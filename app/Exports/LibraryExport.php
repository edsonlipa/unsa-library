<?php

namespace App\Exports;

use App\Models\Legis;
use App\Models\AlumnoEmail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;


class LibraryExport implements FromCollection,WithHeadings//FromQuery 
{

    // private $sheet_name;
    // private $proceso_fase_aula_id;

    // public function __construct()
    // {
        
    // }

    // /**
    //  * @return Builder
    //  */
    // public function query()
    // {
    //     return Legis::query()->whereYear("created_on", 2020);
    // }
    public function collection()
    {
        $account_legis = Legis::all();
        foreach($account_legis as $user){
//            $email=$user->email;
            $parts_email = explode('@', $user->email);
            $first_email = current($parts_email);     
            \Log::debug(["alumno_email"=>$user->email]);
           // \Log::debug(["firstpart"=>$first_email]);
            $alumno_email=AlumnoEmail::where('mail',$first_email)->first();
           // \Log::debug(["firstpart"=>$alumno_email]);
            if($alumno_email){
                $alumno=$alumno_email->alumno;
                if($alumno){
                    $primera_matricula_21=$alumno_email->alumno->primera_matricula_21;
                    if($primera_matricula_21){
                        $user->escuela=$primera_matricula_21->escuela->nesc;
                    }
    
                }
            }
        }
        return $account_legis;
    }

    public function headings(): array
    {
        return ["user_id","APELLIDOS", "NOMBRES", "CORREOUNSA", "DNI", "CELULAR", "CORREOPERSONAL","SALON","SALON","SALON"];
    }
   
}
