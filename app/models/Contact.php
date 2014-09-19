<?php

class Contact extends \Eloquent {
	protected $fillable = ['firstname','lastname','tel','email','topic','message'];
}