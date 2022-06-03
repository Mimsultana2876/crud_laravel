<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_Model extends Model
{
    use HasFactory;
    protected $table="crud";
    protected $fillable=['post_title','post_author'];
}
