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


Usage examples
--------------

Remember to add `use VJAndrea\Network;` when you want to use the function provided by this helper.

Example: i want to convert a MAC address to an integer for easier database storage:

````
$mac = '01-23-45-67-89-0A';

$long = Network::mac2long($mac); // $long value now is 1250999896330
````

Example: i want to take a MAC address that i saved as integer in the db and format it properly for the user:

````
$long = 1250999896330;

$mac = Network::long2mac($long); // $mac value now is '01:23:45:67:89:0A'
````

