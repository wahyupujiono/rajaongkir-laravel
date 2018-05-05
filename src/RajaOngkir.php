<?php

namespace wahyupujiono\RajaOngkirLaravel;

use wahyupujiono\RajaOngkirLaravel\app\Provinsi;
use wahyupujiono\RajaOngkirLaravel\app\Kota;
use wahyupujiono\RajaOngkirLaravel\app\Cost;

class RajaOngkir {
	public function Provinsi(){
		return new Provinsi;
	}

	public function Kota(){
		return new Kota;
	}

	public function Cost($attributes){
		return new Cost($attributes);
	}
}