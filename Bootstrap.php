<?php

/**
 * module bootstrap
 */
class TextileBootstrap extends Knowledgeroot_Module_Bootstrap_Abstract {
    public function _initTextile() {
	$parser = new Textile_Parser();

	Knowledgeroot_Registry::set('Knowledgeroot_Content_Parser', $parser);
    }
}
