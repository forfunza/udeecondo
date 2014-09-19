<?php

class Unit extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['unit','parking'];

	public function languages() {
        return $this->belongsToMany('Language')->withPivot('name','building');    
    }

}