<?php

return [

	/*
    |--------------------------------------------------------------------------
    | TapPayment service mode
    |--------------------------------------------------------------------------
    |
    | Mode can take only two values: "live" and "test"
    |
    */

	"mode" => env( 'TAP_PAYMENT_MODE', "live" ),

	/*
    |--------------------------------------------------------------------------
    | TapPayment authentication details
    |--------------------------------------------------------------------------
    |
    | "username" and "password" fields are mandatory for authorization feature.
	| "token" field must exist in the same array format as you receive from API.
	| For example
	|
	|   "access_token" => "Your Token String",
    |
    |
    |
    */

	"auth" => [
		"username"     => env( 'TAP_PAYMENT_USERNAME' ),
		"password"     => env( 'TAP_PAYMENT_PASSWORD' ),
		"access_token" => env( 'TAP_PAYMENT_PASSWORD' )
	]
];