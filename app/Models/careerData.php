<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class careerData extends Model
{
    use HasFactory;



    protected $fillable = [
        'user_id',
        'education',
        'skills',
        'experience',
        'linkedin',
        'file_name',
        'file_path',
        'file_type',
    ];

    // Relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
