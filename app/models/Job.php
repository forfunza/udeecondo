<?php

class Job extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['sex','age','name','description','requirement','information'];

	public function languages() {
        return $this->belongsToMany('Language')->withPivot('name','description','requirement','information');    
    }

}