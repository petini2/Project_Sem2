<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;
    protected $table = 'casts';

    public $timestamps = false;

    protected $fillable = [
        'Name',
        'Gender',
        'DOB',
        'Picture'
    ];
    public function castlist()
    {
        return $this->hasMany(CastList::class);
    }
}
