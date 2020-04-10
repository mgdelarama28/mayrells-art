<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'subject',
        'message',
    ];

    /** 
     * 
     * Renders
     * 
     */
    public function renderSenderName()
    {
        return $this->name;
    }

    public function renderSenderEmail()
    {
        return $this->email;
    }

    public function renderContactNumber()
    {
        return $this->contact_number;
    }

    public function renderSubject()
    {
        return $this->subject;
    }

    public function renderMessage()
    {
        return $this->message;
    }
}
