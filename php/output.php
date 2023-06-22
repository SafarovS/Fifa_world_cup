<?php

$outa= "SELECT * FROM `groups` WHERE group_name = 'A' ORDER BY `grp_positon` ASC LIMIT 4";
$resouta= mysqli_query($con, $outa);
 mysqli_num_rows($resouta);
    $teamsa =[];
while($rowa = mysqli_fetch_assoc($resouta)){
    $teamsa [] = $rowa;
}

$outb= "SELECT * FROM `groups` WHERE group_name = 'B' ORDER BY `grp_positon` ASC LIMIT 4";
$resoutb= mysqli_query($con, $outb);
 mysqli_num_rows($resoutb);
    $teamsb =[];
while($rowb = mysqli_fetch_assoc($resoutb)){
    $teamsb [] = $rowb;
}

$outc= "SELECT * FROM `groups` WHERE group_name = 'C' ORDER BY `grp_positon` ASC LIMIT 4";
$resoutc= mysqli_query($con, $outc);
 mysqli_num_rows($resoutc);
    $teamsc =[];
while($rowc = mysqli_fetch_assoc($resoutc)){
    $teamsc [] = $rowc;
}

$outd= "SELECT * FROM `groups` WHERE group_name = 'D' ORDER BY `grp_positon` ASC LIMIT 4";
$resoutd= mysqli_query($con, $outd);
 mysqli_num_rows($resoutd);
    $teamsd =[];
while($rowd = mysqli_fetch_assoc($resoutd)){
    $teamsd [] = $rowd;
}

$oute= "SELECT * FROM `groups` WHERE group_name = 'E' ORDER BY `grp_positon` ASC LIMIT 4";
$resoute= mysqli_query($con, $oute);
 mysqli_num_rows($resoute);
    $teamse =[];
while($rowe = mysqli_fetch_assoc($resoute)){
    $teamse [] = $rowe;
}

$outf= "SELECT * FROM `groups` WHERE group_name = 'F' ORDER BY `grp_positon` ASC LIMIT 4";
$resoutf= mysqli_query($con, $outf);
 mysqli_num_rows($resoutf);
    $teamsf =[];
while($rowf = mysqli_fetch_assoc($resoutf)){
    $teamsf [] = $rowf;
}
/// Teams rows

$eur=mysqli_query($con, "SELECT * FROM `teams` WHERE couter= 'Europe'" );
$outeur= mysqli_num_rows($eur);
if($outeur > 0){
    $randbteur= "<div class='randPot'><h3>$outeur</h3> <span>Pot1</span> <input type='submit' name='europe' value='Random' class='btn btn-primary '></div>
    ";
}else{
    $randbteur= "";
}

$asian=mysqli_query($con, "SELECT * FROM `teams` WHERE couter= 'Asia'" );
$outasia= mysqli_num_rows($asian);
if($outasia > 0){
    $randbtasi= "<div class='randPot'><h3>$outasia</h3> <span>Pot2</span> <input type='submit' name='asia' value='Random' class='btn btn-primary '></div>
    ";
}else{
    $randbtasi= "";
}

$afrca=mysqli_query($con, "SELECT * FROM `teams` WHERE couter= 'Afrika'" );
$outafrc= mysqli_num_rows($afrca);
if($outafrc > 0){
    $randbtafr= "<div class='randPot'><h3>$outafrc</h3> <span>Pot3</span> <input type='submit' name='africa' value='Random' class='btn btn-primary '></div>
    ";
}else{
    $randbtafr= "";
}

$samerca=mysqli_query($con, "SELECT * FROM `teams` WHERE couter= 'south America'" );
$outsamerca= mysqli_num_rows($samerca);
if($outsamerca > 0){
    $randbtnsam= "<div class='randPot'><h3>$outsamerca</h3> <span>Pot4</span> <input type='submit' name='Samerica' value='Random' class='btn btn-primary '></div>
    ";
}else{
    $randbtnsam= "";
}

$namerca=mysqli_query($con, "SELECT * FROM `teams` WHERE couter= 'North America'" );
$outnamerca= mysqli_num_rows($namerca);
if($outnamerca > 0){
    $randbtnnam= "<div class='randPot'><h3>$outnamerca</h3> <span>Pot5</span> <input type='submit' name='Namerica' value='Random' class='btn btn-primary '></div>
    ";
}else{
    $randbtnnam= "";
}

