<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Database\Factories\StudentFactory;
use Database\Factories\TeacherFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fullName () {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function TeacherFactory()
    {
        return TeacherFactory::new();
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function StudentFactory()
    {
        return StudentFactory::new();
    }
}
