<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    public function student()
    {
        return $this->belongsTo(Student::class);
    }


    use HasFactory;
    protected $fillable = ['title', 'file_path', 'student_id', 'user_id'];
}
