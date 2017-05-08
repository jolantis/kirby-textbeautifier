<?php
// Filter that beautifies Kirbytext before outout

// Add hair spaces around en/em dashes
kirbytext::$pre[] = function($kirbytext, $value) {
	return preg_replace("/(\S)(---|--|—|–)(\S)/", "$1&#8202;$2&#8202;$3", $value);
};
