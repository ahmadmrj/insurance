<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    const CREATED_AT = 'created_at';
    
    protected $table_name = 'forms';

    protected $fillable = [];
}
