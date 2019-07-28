<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission');
    }


    /**
     * Get the roles name field capital letter.
     * @param  string  $value
     * @return void
     */
    public function getNameAttribute($value)
    {
//        return ucwords($value);
        return implode('-', array_map('ucfirst', explode('-', $value)));
    }

    /**
     * Set the roles name small latter.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

}
