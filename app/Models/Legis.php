<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legis extends Model
{
    use HasFactory;

    protected $connection = 'pgsql_legis';
    protected $table = 'users';

}
