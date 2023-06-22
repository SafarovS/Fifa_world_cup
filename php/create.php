<?php
require 'connect.php';
 if(isset($_POST['save'])){
    $Tname= $_POST['teamname'];
    $Tcounter= $_POST['teamcouter'];
    $Tflag= $_POST['teamflag'];
    foreach ($Tname as $key => $value) {
        $save= "INSERT INTO allteams(name,couter,flag)VALUES('".$value."','".$Tcounter[$key]."', '".$Tflag[$key]."')";
        $query= mysqli_query($con, $save);
        
    }
 }

 $outallteam= "SELECT * FROM `allteams` ORDER BY `allteams`.`id` DESC ";
 $resallteam= mysqli_query($con, $outallteam );
 mysqli_num_rows($resallteam);
    $allteams = [];




 
?>