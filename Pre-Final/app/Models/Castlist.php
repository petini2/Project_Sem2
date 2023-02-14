<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Castlist extends Model
{
    use HasFactory;
    protected $table = 'castlists';

    public $timestamps = false;

    protected $fillable = [
        'cast_id',
        'movie_id',
        'Role'
    ];

    public function movie() {
        return $this->belongsTo(Movie::class);
    }
    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }
}
