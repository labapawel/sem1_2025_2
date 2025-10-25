<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'strony';

    protected $fillable = [
        'parent_id',
        'kolejnosc',
        'tytul',
        'zawartosc',
        'url',
        'jezyk',
        'opublikowana',
        'aktywny',
        'domenu',
        'user_id',
        'uzytkownik'
    ];  

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
