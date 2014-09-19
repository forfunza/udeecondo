<?php

class Language extends \Eloquent {
	protected $fillable = [];

	public function facilities() {
        return $this->belongsToMany('Facility')->withPivot('name');    
    }

    public function units() {
        return $this->belongsToMany('Unit')->withPivot('name','building');    
    }

    public function rooms() {
        return $this->belongsToMany('Room')->withPivot('name');    
    }

    public function news() {
        return $this->belongsToMany('News')->withPivot('name','description');    
    }

    public function projects() {
        return $this->belongsToMany('Project')->withPivot('name','address','security');    
    }
}