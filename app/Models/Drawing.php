<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drawing extends Model
{
    protected $fillable = [
    	'category_id',
    	'admin_id',
    	'name',
    	'description',
    	'date_created',
    	'image_path',
    ];

    /**
     *
     * Relationships
     * 
     */
    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }

    public function admin()
    {
    	return $this->belongsTo('App\Models\Users\Admin');
    }

    /**
     *
     * Renders
     * 
     */
    public function renderName()
    {
        if($this->name):
            return $this->name;
        endif;

        return 'Untitled';
    }

    public function renderDescription()
    {
        if($this->description):
            return $this->description;
        endif;

        return 'N/A';
    }

    public function renderDateCreated()
    {
        if($this->date_created):
            return $this->date_created;
        endif;

        return 'N/A';
    }

    public function renderImage()
    {
        $path = asset('storage/default-images/no-image.png');

        if ($this->image_path):
            $path = asset('storage/' . $this->image_path);
        endif;

        return $path;
    }
}
