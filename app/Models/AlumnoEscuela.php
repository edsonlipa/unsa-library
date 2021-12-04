<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnoEscuela extends Model
{
    use HasFactory;

    protected $connection = "mysql_siac";
    protected $table = 'acdidal';  
    
    public function alumno()
    {        
        return $this->belongsTo(Alumno::class, 'cui', 'cui');
    }

    public function escuela()
    {        
        return $this->belongsTo(Escuela::class, 'nues', 'nues');
    }    
}
