<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = ['id'];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
