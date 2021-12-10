<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['vaccines'];

    public function vaccines()
    {
        return $this->belongsTo(Vaccine::class, 'vaccine_id');
    }
}
