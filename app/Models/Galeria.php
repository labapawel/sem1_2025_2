<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = ['title','images'];
    protected $casts = [
        'images'=>'array'
    ];

    protected $attributes = [
        'images' => '[]',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function save(array $options = [])
    {
        if (!isset($this->attributes['user_id']) && auth()->check()) {
            $this->attributes['user_id'] = auth()->id();
        }

        return parent::save($options);
    }
}
