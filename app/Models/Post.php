<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'ddp','photo', 'contenu'];

    public function Users()
    {
        return $this->HasOne(User::class,'users_id');
    }

  
 public function comment()
 {
     return $this->hasMany(Comments::class, 'id', 'users_id', 'posts_id', 'comment' )->orderBy('created_at', 'DESC');
 }

}
