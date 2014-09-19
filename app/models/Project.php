<?php

class Project extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['tel1', 'tel2', 'email', 'price', 'name', 'address', 'security'];

	public function languages() {
        return $this->belongsToMany('Language')->withPivot('name', 'address', 'security');    
    }

}