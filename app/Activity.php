<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    protected $table=[
        'activity_log'
    ];
    protected $fillable = [
        'log_name', 'description', 'causer_type', 'properties', 'updated_at'
    ];
}
