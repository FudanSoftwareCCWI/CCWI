<?php
class initializer
{
	public static function initialize()	{
		set_include_path(get_include_path().PATH_SEPARATOR . "core/main");
		set_include_path(get_include_path().PATH_SEPARATOR . "core/config/");
		set_include_path(get_include_path().PATH_SEPARATOR . "core/helpers");
		set_include_path(get_include_path().PATH_SEPARATOR . "core/libraries");
		set_include_path(get_include_path().PATH_SEPARATOR . "app/controllers");
		set_include_path(get_include_path().PATH_SEPARATOR . "app/models");
		set_include_path(get_include_path().PATH_SEPARATOR . "app/views");
		//include_once("core/config/config.php");
	}
}
?>