<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    // Table Name
    protected $table = 'companies';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
