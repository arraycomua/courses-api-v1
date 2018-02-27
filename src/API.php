<?php namespace Money;

class API {
	public function __construct($ip, $token, $code) {
		return @file_get_contents($ip.'/currencies/'.$code.'?token='.$token);
	}
}