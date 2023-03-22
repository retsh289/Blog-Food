<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Subscribe extends Model
{
    use HasFactory;
    protected $table = 'subscribe';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['userId','name','payment','price','createdAt'];

    public function user(){
        return $this->belongsTo(User::class, 'userId');
    }

}
