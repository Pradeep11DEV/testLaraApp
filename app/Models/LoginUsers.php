<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginUsers extends Model
{
    protected $table        = 'login_db';
    protected $primaryKey   = 'id';
    protected $fillable     = ['login_name','login_email'];
    use HasFactory;
}
