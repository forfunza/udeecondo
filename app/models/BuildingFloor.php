<?php

class BuildingFloor extends \Eloquent {
	protected $fillable = ['no','image','building_id'];

	public function building()
    {
        return $this->belongsTo('Building');
    }
}