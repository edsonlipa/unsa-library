<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $connection = "mysql_siac";
    protected $table = 'acdiden';

    public function alumno_escuelas()
    {
        return $this->hasMany(AlumnoEscuela::class, 'cui', 'cui');
    }
    public function alumno_matriculados_21()
    {
        return $this->hasMany(Matriculas21::class, 'cui', 'cui');
    }
    public function primera_matricula_21()
    {
        return $this->belongsTo(Matriculas21::class, 'cui', 'cui');
    }
    

}
