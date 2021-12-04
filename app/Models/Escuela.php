<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Escuela extends Model
{
    use HasFactory;

    protected $connection= 'mysql_siac';
    protected $table = 'actescu';
    protected $primaryKey = 'nues';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'area',
        'facu',
        'nive',
        'nues',
        'escu',
        'espe',
        'nesc',
        'fin',
        'ffin',
        'napr',
        'flc',
        'fln',
        'hom',
        'muj',
        'ctes',
        'ninv',
        'nnor',
        'nseg',
        'nter',
        'ncua',
        'total',
        'cegre',
    ];

    public function alumno_escuelas()
    {
        return $this->hasMany(AlumnoEscuela::class, 'nues', 'nues');
    }

    /**
     * Get all of the especialidades for the Escuela
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function especialidades(): HasMany
    // {
    //     return $this->hasMany(Especialidad::class, 'nues', 'nues');
    // }

    
    // public function facultad()
    // {
    //     return $this->belongsTo(Facultad::class, 'facu', 'facu');
    // }
}