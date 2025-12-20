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
        'uzytkownik',
        'strona_id',
        'tlumacz'
    ];  

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTlumaczAttribute()
    {
        return [];
    }

    public function setTlumaczAttribute($value)
    {
        //dd($value);
    }

    public function save(Array $array = [] ){

        //  dd($this);

        if(env('APP_LOCALE','pl') == $this->jezyk){
            parent::save($array);
            $this->strona_id = $this->getKey();
        }

        parent::save($array);
    }
}
