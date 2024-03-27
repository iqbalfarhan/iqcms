<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'slug',
        'content',
        'tags',
        'photo',
        'show',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function getLabelAttribute(){
        return implode(' - ', [
            $this->created_at->format('d F Y H:i'),
            $this->user->name,
        ]);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
