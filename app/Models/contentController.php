<?php 

	include 'Content.php';
	function showListArticle(){
		$ar = $mysqli-> query("CALL titleList()");
		$row =$ar ->fetch_object();
	}

	function getContent($article){
		$ck = $mysqli ->query("CALL cekContent($article)");

		if($ck){
		$ar = $mysqli-> query("CALL showContent($article)");
		$row = $ar -> fetch_object();	
		}else(
			pesanGagal();
		)
	}

	function pesanGagal(){
		echo "Conten sedang di update";
	}


 ?>