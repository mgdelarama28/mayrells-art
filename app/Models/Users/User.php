<?php

namespace App\Models\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'profile_picture_path',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** Renders */
    public function renderFirstName()
    {
        return $this->first_name;
    }

    public function renderLastName()
    {
        return $this->last_name;
    }

    public function renderFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function renderProfilePicture()
    {
        $path = env('AWS_URL') . '/default_images/no_image.png';

        if ($this->profile_picture_path){
            $path = env('AWS_URL') . '/' . $this->profile_picture_path;
        }

        return $path;
    }

    public function renderEmail()
    {
        return $this->email();
    }
}
