<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    	'name',
    	'cover_photo_path',
    ];

    /**
     *
     * Relationships
     * 
     */
    public function drawings()
    {
    	return $this->hasMany('App\Models\Drawing');
    }

    /**
     *
     * Renders
     * 
     */
    public function renderName()
    {
        return $this->name;
    }

    public function renderCoverPhoto()
    {
        $path = env('AWS_URL') . '/default-images/no-image.png';

        if ($this->cover_photo_path):
            $path = env('AWS_URL') . '/' . $this->cover_photo_path;
        endif;

        return $path;
    }
}
