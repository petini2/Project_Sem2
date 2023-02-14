<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movies';

    public $timestamps = false;
    protected $fillable = [
        'MovieName',
        'Language',
        'Genre',
        'Language',
        'Status',
        'ReleaseDate',
        'Duration',
        'ImgURL',
        'Trailer',
        'Description'
    ];
    public function castlist() {
        return $this->hasMany(CastList::class);
    }

    public function casts() {
        return $this->belongsToMany(Cast::class, 'castlists');
    }
    public function interestedmovie() {
        return $this->belongsToMany(InterestedMovie::class);
    }
}
