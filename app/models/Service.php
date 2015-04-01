<?php

class Service extends BaseModel {

	// Add your validation rules here
	public static $rules = [
        'nama' => 'required'	
    ];

	// Don't forget to fill this array
	protected $fillable = ['nama', 'lokasi', 'jasa', 'biaya_servis', 'kontak', 'jam_buka', 'rekomendasi', 'review', 'rating'];

}