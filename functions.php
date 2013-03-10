<?php

function getMapInfo($url){
	$url="http://maps.oc.tc/".$url."/map.xml";
	$xml=new SimpleXMLElement($url,NULL,true);
	$name=$xml->xpath('name');
	$mapName=(string)$name[0];
	$version=$xml->xpath('version');
	$mapVersion=(string)$version[0];
	$authors=$xml->xpath('authors/author');
	$mapAuthors=array();
	foreach($authors as $author){
		$author=(string)$author[0];
		array_push($mapAuthors,$author);
	}
	$teams=$xml->xpath('teams/team');
	$mapTeams=array();
	foreach($teams as $team){
		$player_num=$team->attributes()[1];
		$team=$player_num." ".(string)$team[0];
		array_push($mapTeams,$team);
	}
	$arr=array("MapName"=>$mapName,"MapVersion"=>$mapVersion,"MapAuthors"=>$mapAuthors,"MapTeams"=>$mapTeams);
	return $arr;
}

function bestRush(){
	include("connect.php");
	include("disconnect.php");
}

?>