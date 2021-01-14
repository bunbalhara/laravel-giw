<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable
{
    use HasFactory, Notifiable, InteractsWithMedia;
    protected $table= 'calculator_users';

}
