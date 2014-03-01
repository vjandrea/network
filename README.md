Network helpers
===============

This is a work-in-progress collection of functions useful for storing network data in a database.
The available methods are:

`mac2long` - Converts a MAC address in a long int. Default separators are ':' and '-'

`long2mac` -  Converts a long int into a MAC address. Default separator is ':'


Installation
------------

Add `"vjandrea/network"` to your project's `composer.json`.

	"require": {
		"vjandrea/network": "dev-master"
	},
	"minimum-stability" : "dev"

Then update via composer

    composer update

Remember to add `use VJAndrea\Network;` when you want to use the function provided by this helper.

