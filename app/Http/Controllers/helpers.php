<?php 
	
	//active state in navigation
	function navIsActive($nav) {
		
		if(strpos(URL::current(), $nav) !== false) {
			
			return 'active';
			
		}
		
	}