<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $table = 'offers';

    public $timestamps = false;
    protected $fillable=[
        'Title',
        'Content',
        'ImgURL'
    ];
}
