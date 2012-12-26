<?php

class Textile_Parser extends Knowledgeroot_Content_Parser_Abstract {
	public function parse($content) {
		// load Textile
		require_once('Textile.php');

		// init textile
		$textile = new Textile();

		// parse and return content
		return $textile->TextileThis($content);
	}
}