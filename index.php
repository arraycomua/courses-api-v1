<?php

function __construct1($ip, $token, $code) {
	return @file_get_contents($ip.'/currencies/'.$code.'?token='.$token);
}