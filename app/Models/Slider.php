<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory, HasTranslations;
    public $translatable = ['title'];
    protected $fillable = ['title',  'image'];
    const PATH = 'images/sliders/';
}
