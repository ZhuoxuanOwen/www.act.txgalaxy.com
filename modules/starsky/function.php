<?php defined('SYSPATH') or die('No direct script access.');


/**
	读取cms内容文件，先从缓存中读取
*/
function load_cms_content($file){

	$path = DOCROOT.'/cms/'.$file;


	var_dump(is_readable($file));

	return file_get_contents($file);
}