<?php

if(! function_exists('page_title')){
	function page_title ($title){
		if($title === ''){
			return 'Larasarte mk'; 
		}else{
			return $title . ' | Laracarte'  ;
		}
	}
}