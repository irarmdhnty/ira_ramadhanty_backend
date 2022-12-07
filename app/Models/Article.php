<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = [
        'title',
        'image',
        'content'
    ];

    public function welcome()
    {
        return $this->hasMany(Welcome::class);
    }

    public function user(){
        return$this->belongsTo(User::class);
    }
}
