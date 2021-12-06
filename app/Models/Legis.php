<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legis extends Model
{
    use HasFactory;

    protected $connection = 'pgsql_legis';
    protected $table = 'account';
    
    protected $primaryKey = null;
    public $incrementing = false;
    // public function alumno_email()
    // {        

    //     $parts_email = explode('@', $this->email);
    //     $first_email = current($parts_email);     

    //     return $this->belongsTo(AlumnoEmail::class, 'cui', 'cui');
    // }

}
