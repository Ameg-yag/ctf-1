#!/usr/bin/env php
<?php

// print_r($argv);

function x($s, $k = null)
{
	$key = $k ?: '####';
    $key = "qw8J";
	// $key = "qw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jqw8Jq";
	// $text = $in;
    $o = '';

    // Iterate through each character
    for ($i = 0; $i < strlen($s); $i++) {
    	$o .= $s[$i] ^ $key[$i % strlen($key)];
    }
	
	//echo $o, PHP_EOL;
	return $o;
}

function main($args)
{
	$a = ["showpassword" => "yes", "bgcolor" => "#ffffff"];
	$s = $args[1];


	// echo x(base64_decode($s), json_encode($a)), PHP_EOL; return;
	// print $s;	
	// echo $s, PHP_EOL;
	// echo base64_decode($s), PHP_EOL;
	return $s ? d($s) : e($a);
}

function d($s)
{
	return json_decode(x(base64_decode($s)), true);
}

function e($s)
{
	return base64_encode(x(json_encode($s)));
}

print_r(main($argv));
echo PHP_EOL;
