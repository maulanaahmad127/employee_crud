<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 'company';
    protected $fillable = [
        'id', 'nama', 'alamat'
    ];
}
