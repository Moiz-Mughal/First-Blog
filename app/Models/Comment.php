<?php

namespace App\Models;

use App\Models\user;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = [
        'comment_body',
        'student_id',
        'user_id',
    ];

    public function blog()
    {
        return $this->belongsTo(Student::class,'student_id', 'id');
        
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
        
    }

   
}
