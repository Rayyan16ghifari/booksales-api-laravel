<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres'; // Pastikan ini sesuai dengan nama tabel

    public static function getData()
    {
        return self::all();
    }
}
