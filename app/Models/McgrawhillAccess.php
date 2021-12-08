<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class McgrawhillAccess extends Model
{
    use HasFactory;
    protected $connection = 'pgsql_mcgrawhill';
    protected $table = 'access';
    
    protected $primaryKey = null;
    public $incrementing = false;
}
