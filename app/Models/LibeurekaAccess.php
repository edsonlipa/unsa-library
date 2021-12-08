<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibeurekaAccess extends Model
{
    use HasFactory;
    protected $connection = 'pgsql_libeureka';
    protected $table = 'access';
    
    protected $primaryKey = null;
    public $incrementing = false;
}
