<?php
	$homelink = 'http://www.pokertube.com/';
	
	$content = file_get_contents($homelink);
	
	$find_id = strstr($content,"<div class=\"ep1 thumb large\">");
	
	$feed_array = explode("<div class=\"ep1 thumb large",$find_id);
	
	array_shift($feed_array);
	//var_dump($feed_array);
	
	$video_array = array();
	$video_titles = array();
	foreach($feed_array as $fa)
	{
		// get all the titles for the videos
		$n0 = strstr($fa,"<img");
		$n1 = explode(">",$n0);
		$n2 = explode("alt=\"",$n1[0]);
		$n3 = str_replace("\"","",$n2[1]);
		array_push($video_titles,$n3);
		
		// get all the video urls
		$t = explode("<span",$fa);
		$k = str_replace("<a href=\"","",$t[0]);
		$k = str_replace("\">","",$k);
		$k = str_replace("videos","embed",$k);
		array_push($video_array,$k);
	}
	
	$feed_result = "";
	foreach($video_array as $key => $t)
	{
		$feed_result.='<h3 class="video_title">'.$video_titles[$key].'</h3><iframe width="258" height="180" src="'.$t.'" frameborder="0" allowfullscreen></iframe>';
	}

	/*$find_url = strstr($find_id,"<a href=");
	$find_video = explode("<span",$find_url);
	$find_link = explode("\">",strstr($find_video[0],"http"));
	$feed_result = str_replace("videos","embed",$find_link[0]);*/
?>
