<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// ------------------------------------------------------------------------

if (!function_exists('asset'))
{
	function asset($data)
	{
		return base_url().'public/'.$data;
	}
}

if (!function_exists('generate_sn'))
{
	function generate_sn()
	{
		$length = 10;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}

if (!function_exists('time_beautifier'))
{
	function time_beautifier_now() {
		setlocale(LC_ALL, 'id_ID');
		$date = strftime("%A, %e %B %Y");
		return $date;
	}
}
