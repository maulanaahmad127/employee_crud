<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 'employee';
    protected $fillable = [
        'id', 'nama', 'atasan_id', 'company_id'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
    
}