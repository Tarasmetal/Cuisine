<?php


	function cuisine_get_all_fonts(){
		$fonts = array_merge( cuisine_get_google_fonts(), cuisine_get_basic_fonts() );
		asort( $fonts );
		return $fonts;
	}

	function cuisine_get_google_fonts(){
		$fonts = array('Alice' => 'Alice', 'Antic' => 'Antic', 'Ruluko' => 'Rukolo', 'Marko+One' => 'Marko One', 'Voltaire' => 'Voltaire', 'Capriola' => 'Capriola', 'Advent+Pro' => 'Advent Pro', 'Ropa+Sans' => 'Ropa Sans', 'Droid+Sans' => 'Droid Sans', 'Lobster' => 'Lobster');
		asort( $fonts );
		return $fonts;
	}

	function cuisine_get_basic_fonts(){
		$fonts = array('arial' => 'Arial', 'helvetica' => 'Helvetica', 'georgia' => 'Georgia', 'times' => 'Times', 'Trebuchet MS' => 'Trebuchet MS', 'calibri' => 'Calibri');
		asort( $fonts );
		return $fonts;
	}

	/**
	*	Get's the propper Google font name
	*/
	function cuisine_santize_font_name($name){
		return str_replace( '+', ' ', $name );
	}


?>