<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Roles extends Model
{
    use HasFactory;

    public function membres():BelongsToMany
    {
        return $this->belongsToMany(Membres::class);

    }

}
