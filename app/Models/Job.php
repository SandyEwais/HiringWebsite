<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['employer-name','employer-email','employer-phone','employer-location','employer-website','employer-description','title','salary','category','image','description'];
}
