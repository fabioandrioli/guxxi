<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'reply',
        'answer_id',
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function rate(){
        return $this->belongsTo(Rate::class);
    }
}
