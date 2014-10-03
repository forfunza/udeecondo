<?php

class Building extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['name','floor','sort_order'];

	public function languages() {
        return $this->belongsToMany('Language')->withPivot('name');    
    }

    public function buildingfloors()
    {
        return $this->hasMany('BuildingFloor');
    }

}