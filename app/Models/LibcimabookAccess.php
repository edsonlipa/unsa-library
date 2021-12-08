<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibcimabookAccess extends Model
{
    use HasFactory;
    protected $connection = 'pgsql_libcimabook';
    protected $table = 'access';
    
    protected $primaryKey = null;
    public $incrementing = false;
}
