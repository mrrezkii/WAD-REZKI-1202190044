<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['vaccines'];

    public function vaccines()
    {
        return $this->belongsTo(Vaccines::class, 'vaccine_id');
    }
}
