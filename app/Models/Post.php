<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Créer un lien entre tables au sens des bases de données relationnelles : entre la table des utilisateurs et celle des posts.
    // Un post peut avoir un seul user : 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // pour indiquer quels champs seront éditables par les utilisateurs :
    protected $fillable = [
        'description', 'img_url', 'user_id',
        "title", "picture", "content" 
        ];

}
