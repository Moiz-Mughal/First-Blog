<?php

namespace App\Models;
use App\Models\Comment;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'cate_id',
        'name',
        'title',
        'description',
        'profile_image',
    ];
    public function comments()
    {
     return $this->hasMany(comment::class,'student_id','id');
    }



    public function category()
    {
     return $this->belongsTo(category::class,'cate_id','id');
    }

}