<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;
class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['userId','postId','message','createdAt'];

    public function user(){
        return $this->belongsTo(User::class, 'userId');
    }
    public function post(){
        return $this->belongsTo(Post::class,'postId');
    }
}
