<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
    'titre',
    'contenu',
    'image',
    'id_user',
    'id_categorie'
];
public function Categorie() {
return $this->belongsTo(categorie::class,'id_categorie');
}
public function User() {
    return $this->belongsTo(User::class,'id_user');
    }
}
