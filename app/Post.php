<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	 protected $fillable = array('title','author');

    public function user()
    {
        return $this->belongsTo('User');
    }

}
