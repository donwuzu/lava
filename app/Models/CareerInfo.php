<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerInfo extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'education', 'skills', 'experience', 'linkedin'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
