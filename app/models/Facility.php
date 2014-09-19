<?php

class Facility extends \Eloquent {
	protected $fillable = ['image'];
	public static $rules = [
		// 'title' => 'required'
	];

	public function languages() {
        return $this->belongsToMany('Language')->withPivot('name');    
    }
}