<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Membre;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'ddp','photo', 'contenu'];

    public function Membre()
    {
        return $this->belongsTo(Membre::class,'membres_id');
    }
}
