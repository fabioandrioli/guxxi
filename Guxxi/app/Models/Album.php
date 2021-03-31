<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'service_id',
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
