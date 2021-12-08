<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibeuromonitorAccess extends Model
{
    use HasFactory;
    protected $connection = 'pgsql_libeuromonitor';
    protected $table = 'access';
    
    protected $primaryKey = null;
    public $incrementing = false;
}
