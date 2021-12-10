<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccines extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = ['id'];

    public function patients()
    {
        return $this->hasMany(Patients::class);
    }
}
