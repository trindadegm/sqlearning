<?php
class page {
	var $content = '';

	function __construct($content) {
		$this->content($content);
	}

	function get_content(): string {
		return $this->content;
	}
}
?>
