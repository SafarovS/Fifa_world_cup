<?php

//Europe random code
if(isset($_POST['europe'])){
    $euro= "SELECT * FROM `teams` WHERE couter='Europe' ORDER BY rand() LIMIT 1";
    $resEuro= mysqli_query($con, $euro);
    $Eurofetch= mysqli_fetch_assoc($resEuro);

    $grprand= "SELECT * FROM `groupname` ORDER BY rand() LIMIT 1";
    $resgrprand= mysqli_query($con, $grprand);
    $grpfetch= mysqli_fetch_assoc($resgrprand);

    $EtmId= $Eurofetch['id'];
    $Euroteamname= $Eurofetch['name'];
    $Euroteamcounter= $Eurofetch['couter'];
    $Euroteamflag= $Eurofetch['flag'];
    $grpIdEur = $grpfetch['id'];
    $GrpnameEur= $grpfetch['name'];
    $GrpposEur= $grpfetch['positon'];

    //Cheking test
    $eurchek= mysqli_query($con, "SELECT * FROM groups WHERE couter= '$Euroteamcounter' AND group_name = '$GrpnameEur'");
    if(mysqli_num_rows($eurchek) > 0) {
        echo "<div class='popup'>
        <button id='close'>&times;</button>
        <h2>Random Error</h2>
        <p>
           This <b>$GrpnameEur</b> group in valid for <b>$Euroteamname</b> !!! 
           Please repaid
        </p>
        <form action='/' method='post'>
        <input type='submit' name='europe' value='Repaid' class='btn btn-primary px-5'>
        </form>
    </div> ";
          
    }else {
      //insert groups table

      $insgrpEur="INSERT INTO groups(name,couter,group_name,grp_positon,flag) VALUES('$Euroteamname','$Euroteamcounter','$GrpnameEur','$GrpposEur','$Euroteamflag')";
      $resinsgrpEur=mysqli_query($con, $insgrpEur);
      if($resinsgrpEur){
          $delEuro="DELETE FROM teams WHERE id = $EtmId";
          $resdlt=mysqli_query($con, $delEuro);
          if($resdlt){
              $delgrpsEur= "DELETE FROM groupname WHERE id = $grpIdEur";
              $resdelEur= mysqli_query($con, $delgrpsEur);
          }if($resdelEur){
            echo "
                    <div class='popup'>
                    <button id='close'>&times;</button>
                    <h2><b>$Euroteamname</b> $GrpposEur </h2>
                    <img src='imag/$Euroteamflag  ' alt=''>
                    <button class= 'btn btn-primary px-5' id='popupbtn'>OK</button>
                    </div> ";
          }else{
            echo "
            <div class='popup'>
            <button id='close'>&times;</button>
            <h2>Error </h2>
            <p>We have some erorr!!</p>
            <button class= 'btn btn-primary px-5' id='popupbtn'>OK</button>
            </div> ";
          }
      }
    }
    
}

//Asian random code

if(isset($_POST['asia'])){
    $asia= "SELECT * FROM `teams` WHERE couter='Asia' ORDER BY rand() LIMIT 1";
    $resAsia= mysqli_query($con, $asia);
    $Asiafetch= mysqli_fetch_assoc($resAsia);

    $grprand= "SELECT * FROM `groupname` ORDER BY rand() LIMIT 1";
    $resgrprand= mysqli_query($con, $grprand);
    $grpfetch= mysqli_fetch_assoc($resgrprand);

    $AstmId= $Asiafetch['id'];
    $Asiateamname= $Asiafetch['name'];
    $Asiateamcounter= $Asiafetch['couter'];
    $Asiateamflag= $Asiafetch['flag'];
    $grpIdAsi = $grpfetch['id'];
    $GrpnameAsi= $grpfetch['name'];
    $GrpposAsi= $grpfetch['positon'];
    //Cheking test
    $asiachek= mysqli_query($con, "SELECT * FROM groups WHERE couter= '$Asiateamcounter' AND group_name = '$GrpnameAsi'");
    if(mysqli_num_rows($asiachek)> 0){
        echo "<div class='popup'>
        <button id='close'>&times;</button>
        <h2>Random Error</h2>
        <p>
           This<b>$GrpnameAsi</b> group in valid for <b>$Asiateamname</b>!!! 
           Please repaid
        </p>
        <form action='/' method='post'>
        <input type='submit' name='asia' value='Repaid' class='btn btn-primary px-5'>
        </form>
    </div> ";
    }else {
        //insert groups table

        $insgrpAsi="INSERT INTO groups(name,couter,group_name,grp_positon,flag) VALUES('$Asiateamname','$Asiateamcounter','$GrpnameAsi','$GrpposAsi','$Asiateamflag')";
        $resinsgrpAsi=mysqli_query($con, $insgrpAsi);
        if($resinsgrpAsi){
            $delAsia="DELETE FROM teams WHERE id = $AstmId";
            $resdltAsia=mysqli_query($con, $delAsia);
            if($resdltAsia){
                $delgrpsAsi= "DELETE FROM groupname WHERE id = $grpIdAsi";
                $resdelAsi= mysqli_query($con, $delgrpsAsi);
            }if($resdelAsi){
                echo "
                    <div class='popup'>
                    <button id='close'>&times;</button>
                    <h2><b>$Asiateamname</b> $GrpposAsi </h2>
                    <img src='imag/$Asiateamflag  ' alt=''>
                    <button class= 'btn btn-primary px-5' id='popupbtn'>OK</button>
                    </div> ";
            }else{
                echo "
            <div class='popup'>
            <button id='close'>&times;</button>
            <h2>Error </h2>
            <p>We have some erorr!!</p>
            <button class= 'btn btn-primary px-5' id='popupbtn'>OK</button>
            </div> ";
            }
        }
      }

    
}

//Africa random code

if(isset($_POST['africa'])){
    $africa= "SELECT * FROM `teams` WHERE couter='Afrika' ORDER BY rand() LIMIT 1";
    $resAfrc= mysqli_query($con, $africa);
    $Afrcafetch= mysqli_fetch_assoc($resAfrc);

    $grprand= "SELECT * FROM `groupname` ORDER BY rand() LIMIT 1";
    $resgrprand= mysqli_query($con, $grprand);
    $grpfetch= mysqli_fetch_assoc($resgrprand);

    $AftmId= $Afrcafetch['id'];
    $Africateamname= $Afrcafetch['name'];
    $Africateamcounter= $Afrcafetch['couter'];
    $Africateamflag= $Afrcafetch['flag'];
    $grpIdAfr = $grpfetch['id'];
    $GrpnameAfr= $grpfetch['name'];
    $GrpposAfr= $grpfetch['positon'];

    //Cheking test
    $africachek= mysqli_query($con, "SELECT * FROM groups WHERE couter= '$Africateamcounter' AND group_name = '$GrpnameAfr'");
    if(mysqli_num_rows($africachek) > 0){
        echo "<div class='popup'>
        <button id='close'>&times;</button>
        <h2>Random Error</h2>
        <p>
           This <b>$GrpnameAfr</b>  group in valid for <b>$Africateamname</b>!!! 
           Please repaid
        </p>
        <form action='/' method='post'>
        <input type='submit' name='africa' value='Repaid' class='btn btn-primary px-5'>
        </form>
    </div> ";
    }else{
        //insert groups table

        $insgrpAfr="INSERT INTO groups(name,couter,group_name,grp_positon,flag) VALUES('$Africateamname','$Africateamcounter','$GrpnameAfr','$GrpposAfr','$Africateamflag')";
        $resinsgrpAfr=mysqli_query($con, $insgrpAfr);
        if($resinsgrpAfr){
            $delAfrca="DELETE FROM teams WHERE id = $AftmId";
            $resdltAfrc=mysqli_query($con, $delAfrca);
            if( $resdltAfrc){
                $delgrpsAfrc= "DELETE FROM groupname WHERE id = $grpIdAfr";
                $resdelAfr= mysqli_query($con, $delgrpsAfrc);
            }if($resdelAfr){
                echo "
                <div class='popup'>
                <button id='close'>&times;</button>
                <h2><b>$Africateamname</b> $GrpposAfr </h2>
                <img src='imag/$Africateamflag  ' alt=''>
                <button class= 'btn btn-primary px-5' id='popupbtn'>OK</button>
                </div> ";
            }else{
                echo "
            <div class='popup'>
            <button id='close'>&times;</button>
            <h2>Error </h2>
            <p>We have some erorr!!</p>
            <button class= 'btn btn-primary px-5' id='popupbtn'>OK</button>
            </div> ";
            }
        }
      }

    
}

//South America random code
if(isset($_POST['Samerica'])){
    $samerca= "SELECT * FROM `teams` WHERE couter='south America' ORDER BY rand() LIMIT 1";
    $resSam= mysqli_query($con, $samerca);
    $samfetch= mysqli_fetch_assoc($resSam);

    $grprand= "SELECT * FROM `groupname` ORDER BY rand() LIMIT 1";
    $resgrprand= mysqli_query($con, $grprand);
    $grpfetch= mysqli_fetch_assoc($resgrprand);

    $SamtmId= $samfetch['id'];
    $Samteamname= $samfetch['name'];
    $Samteamcounter= $samfetch['couter'];
    $Samteamflag= $samfetch['flag'];
    $grpIdsam = $grpfetch['id'];
    $Grpnamesam= $grpfetch['name'];
    $Grppossam= $grpfetch['positon'];

    //Cheking test
    $samchek= mysqli_query($con, "SELECT * FROM groups WHERE couter= '$Samteamcounter' AND group_name = '$Grpnamesam'");
    if(mysqli_num_rows($samchek)> 0){
        echo "<div class='popup'>
        <button id='close'>&times;</button>
        <h2>Random Error</h2>
        <p>
           This <b>$Grpnamesam</b> group in valid for <b>$Samteamname</b>!!! 
           Please repaid
        </p>
        <form action='/' method='post'>
        <input type='submit' name='Samerica' value='Repaid' class='btn btn-primary px-5'>
        </form>
    </div> ";
    }else{
        //insert groups table

        $insgrpsam="INSERT INTO groups(name,couter,group_name,grp_positon,flag) VALUES('$Samteamname','$Samteamcounter','$Grpnamesam','$Grppossam','$Samteamflag')";
        $resinsgrpsam=mysqli_query($con, $insgrpsam);
        if($resinsgrpsam){
            $delSam="DELETE FROM teams WHERE id = $SamtmId";
            $resdltSam=mysqli_query($con, $delSam);
            if($resdltSam){
                $delgrpsSam= "DELETE FROM groupname WHERE id = $grpIdsam";
                $resdelsam= mysqli_query($con, $delgrpsSam);
            }if($resdelsam){
                echo "
                <div class='popup'>
                <button id='close'>&times;</button>
                <h2><b>$Samteamname</b> $Grppossam </h2>
                <img src='imag/$Samteamflag  ' alt=''>
                <button class= 'btn btn-primary px-5' id='popupbtn'>OK</button>
                </div> ";
            }else{
                echo "
            <div class='popup'>
            <button id='close'>&times;</button>
            <h2>Error </h2>
            <p>We have some erorr!!</p>
            <button class= 'btn btn-primary px-5' id='popupbtn'>OK</button>
            </div> ";
            }
        }
      }

    
}

//North America random code

if(isset($_POST['Namerica'])){
    $namerca= "SELECT * FROM `teams` WHERE couter='North America' ORDER BY rand() LIMIT 1";
    $resNam= mysqli_query($con, $namerca);
    $namfetch= mysqli_fetch_assoc($resNam);

    $grprand= "SELECT * FROM `groupname` ORDER BY rand() LIMIT 1";
    $resgrprand= mysqli_query($con, $grprand);
    $grpfetch= mysqli_fetch_assoc($resgrprand);

    $NamtmId= $namfetch['id'];
    $Namteamname= $namfetch['name'];
    $Namteamcounter= $namfetch['couter'];
    $Namteamflag= $namfetch['flag'];
    $grpIdnam = $grpfetch['id'];
    $Grpnamenam= $grpfetch['name'];
    $Grpposnam= $grpfetch['positon'];

    //Cheking test
    $namchek= mysqli_query($con, "SELECT * FROM groups WHERE couter= '$Namteamcounter' AND group_name = '$Grpnamenam'");
    if(mysqli_num_rows($namchek)> 0){
        echo "<div class='popup'>
        <button id='close'>&times;</button>
        <h2>Random Error</h2>
        <p>
           This <b>$Grpnamenam</b> group in valid for <b>$Namteamname</b>!!! 
           Please repaid
        </p>
        <form action='/' method='post'>
        <input type='submit' name='Namerica' value='Repaid' class='btn btn-primary px-5'>
        </form>
    </div> ";
    }else{
        //insert groups table

        $insgrpnam="INSERT INTO groups(name,couter,group_name,grp_positon,flag) VALUES('$Namteamname','$Namteamcounter','$Grpnamenam','$Grpposnam','$Namteamflag')";
        $resinsgrpnam=mysqli_query($con, $insgrpnam);
        if($resinsgrpnam){
            $delNam="DELETE FROM teams WHERE id = $NamtmId";
            $resdltNam=mysqli_query($con, $delNam);
            if($resdltNam){
                $delgrpsNam= "DELETE FROM groupname WHERE id = $grpIdnam";
                $resdelnam= mysqli_query($con, $delgrpsNam);
            }if($resdelnam){
                echo "
                <div class='popup'>
                <button id='close'>&times;</button>
                <h2><b>$Namteamname</b> $Grpposnam </h2>
                <img src='imag/$Namteamflag  ' alt=''>
                <button class= 'btn btn-primary px-5' id='popupbtn'>OK</button>
                </div> ";
            }else{
                echo "
            <div class='popup'>
            <button id='close'>&times;</button>
            <h2>Error </h2>
            <p>We have some erorr!!</p>
            <button class= 'btn btn-primary px-5' id='popupbtn'>OK</button>
            </div> ";
            }
        }
      }

    
}