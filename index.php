<?php  
    $protocol = isset($_SERVER['HTTPS']) === true ? 'https' : 'http';
    $url = $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    $parsed = parse_url($url);
    if (strpos($parsed['host'],'launch') > -1){
    	header( 'Location: landing.php' ) ;

    }else{
    	header( 'Location: landing.php' ) ;  	
    }

?>