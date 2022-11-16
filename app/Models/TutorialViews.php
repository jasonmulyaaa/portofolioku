<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorialViews extends Model
{
    protected $table = 'tutorial_visit';
    protected $guarded;
    use HasFactory;
}
