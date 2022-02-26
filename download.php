<?php 
include 'dbconnect.php';
$qry = $conn->query("SELECT * FROM jobs where id=".$_GET['jobid'])->fetch_array();

extract($_POST);

 		$fname=$qry['cv'];   
       $file = ("esume/".$fname);
       $fname = explode('_',$fname);
       unset($fname[0]);
       $fname = implode("",$fname);
       header ("Content-Type: ".filetype($file));
       header ("Content-Length: ".filesize($file));
       header ("Content-Disposition: attachment; filename=".$fname);

       readfile($file);