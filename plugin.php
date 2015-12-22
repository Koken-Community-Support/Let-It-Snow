<?php

class BaldursPhotographyLetItSnow extends KokenPlugin {

	function __construct()
	{
		$this->require_setup = false;
		$this->register_hook('before_closing_body', 'render');
	}

	function render()
	{

		$flakeChar		= $this->data->let_it_snow_char;
		$minsize		= $this->data->let_it_snow_minsize;
		$maxsize		= $this->data->let_it_snow_maxsize;
		$newon			= $this->data->let_it_snow_newon;
		$flakecolor1	= $this->data->let_it_snow_flakecolor1;
		$flakecolor2	= $this->data->let_it_snow_flakecolor2;
		$flakecolor3	= $this->data->let_it_snow_flakecolor3;
		$path			= $this->get_path();

		echo <<<OUT
<script src="{$path}/jquery.snow.min.js"></script>
<script>
	$(document).ready( function(){
		$.fn.snow({ flakeChar: "{$flakeChar}", minSize: {$minsize}, maxSize: {$maxsize}, newOn: {$newon}, flakeColor: ["{$flakecolor1}", "{$flakecolor2}", "{$flakecolor3}"] });
	});
</script>
OUT;
	}
}
