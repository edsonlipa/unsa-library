<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matriculas21 extends Model
{
    use HasFactory;
    protected $connection = "mysql_siac";
    protected $table = 'acpma21';  
    
    public function alumno()
    {        
        return $this->belongsTo(Alumno::class, 'cui', 'cui');
    }
}
