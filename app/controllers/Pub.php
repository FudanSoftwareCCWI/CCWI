<?php
class Pub{	
	public static function pub_sidebar($path){
		$activities = opendir($path);
		$i=0;
		while (($file = readdir($activities)) !== false) { 
			if(pathinfo($file, PATHINFO_EXTENSION)=='html'){
				printf(PubModel::make_li($i+1,pathinfo($file, PATHINFO_FILENAME)));
				$i++;
			}
		}
		closedir($activities); 
	}
	
	public static function pub_sidebar_delete($path){
		$activities = opendir($path);
		$i=0;
		while (($file = readdir($activities)) !== false) { 
			if(pathinfo($file, PATHINFO_EXTENSION)=='html'){
				printf(PubModel::make_li_delete($i+1,pathinfo($file, PATHINFO_FILENAME)));
				$i++;
			}
		}
		closedir($activities); 
	}
	
	public static function pub_content($path){
		$activities = opendir($path);
		$i=0;
		while (($file = readdir($activities)) !== false) { 
			if(pathinfo($file, PATHINFO_EXTENSION)=='html'){
				echo(PubModel::make_content($i+1,substr(pathinfo($file, PATHINFO_FILENAME),12),substr($file,0,10),$path.$file));
				$i++;
			}
		}
		closedir($activities); 
	}	
}