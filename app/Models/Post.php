<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tag;
class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['categoryId','tagId','title','description','image','content', 'subscribe','createdAt','updatedAt'];

    public function cate(){
        return $this->belongsTo(Category::class, 'categoryId');
    }
    public function tag(){
        return $this->belongsTo(Tag::class,'tagId');
    }
    public static function search($term){
        return static::where('title','like','%'.$term.'%')->get();
    }
}
