<?php

class BaldursPhotographyLetItSnow extends KokenPlugin {

	function __construct()
	{
		$this->require_setup = true;
		$this->register_hook('before_closing_body', 'render');
	}

	function render()
	{

		$minsize	= $this->data->let_it_snow_minsize;
		$maxsize	= $this->data->let_it_snow_maxsize;
		$newon		= $this->data->let_it_snow_newon;
		$flakecolor	= $this->data->let_it_snow_flakecolor;
		$path		= $this->get_path();

		echo <<<OUT
<script src="{$path}/jquery.snow.min.1.0.js"></script>
<script>
	$(document).ready( function(){
		$.fn.snow({ minSize: {$minsize}, maxSize: {$maxsize}, newOn: {$newon}, flakeColor: '{$flakecolor}' });
	});
</script>
OUT;
	}
}
