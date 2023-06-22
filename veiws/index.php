<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/style.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap/sb-admin-2.min.css">
    <link rel="stylesheet" href="./bootstrap/all.min.css">
    <title>Fifa world cup</title>
</head>
<body>
    <div class="container-fuild">
        <?php echo $heading; ?>
    <h2>FIFA WORLD CUP 2023</h2>
        <div class="pots">
            <form action="/" method="post" class="form">
                <?php echo $randbteur ; ?>
                <?php echo $randbtasi ; ?>
                <?php echo $randbtafr ; ?>
                <?php echo $randbtnsam ; ?>
                <?php echo $randbtnnam ; ?>
                
            </form>
            
        </div>
        <div class=" center">
            
            <div class=" grops col-12">
            
               <div class="grop m-3">
                    <div class="card card-body shadow mb-2">
                        <div class="contant ">
                        <h3>A group</h3>
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">   
                            <tr>
                                <th>id</th>
                                <th>flag</th>
                                <th>name</th>
                            </tr>
                        <?php foreach($teamsa as $teama) : ?>
                            <tr>
                                <th><?=$teama['grp_positon']; ?></th>
                                <th><img src="imag/<?=$teama['flag']; ?>" alt=""></th>
                                <th><span class="team-name"><?=$teama['name']; ?></span></th>
                            </tr>
                        <?php endforeach; ?>
                        </table> 
                        
                        </div>
                    </div>
                </div>

                <div class="grop m-3">
                    <div class="card card-body shadow mb-2">
                        <div class="contant ">
                        <h3>B group</h3>
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">   
                            <tr>
                                <th>id</th>
                                <th>flag</th>
                                <th>name</th>
                            </tr>
                        <?php foreach($teamsb as $teamb) : ?>
                            <tr>
                                <th><?=$teamb['grp_positon']; ?></th>
                                <th><img src="imag/<?=$teamb['flag']; ?>" alt=""></th>
                                <th><span class="team-name"><?=$teamb['name']; ?></span></th>
                            </tr>
                        <?php endforeach; ?>
                        </table> 
                        
                        </div>
                    </div>
                </div>
               
                <div class="grop m-3">
                    <div class="card card-body shadow mb-2">
                        <div class="contant ">
                        <h3>C group</h3>
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">   
                            <tr>
                                <th>id</th>
                                <th>flag</th>
                                <th>name</th>
                            </tr>
                        <?php foreach($teamsc as $teamc) : ?>
                            <tr>
                                <th><?=$teamc['grp_positon']; ?></th>
                                <th><img src="imag/<?=$teamc['flag']; ?>" alt=""></th>
                                <th><span class="team-name"><?=$teamc['name']; ?></span></th>
                            </tr>
                        <?php endforeach; ?>
                        </table> 
                        
                        </div>
                    </div>
                </div>
               
                <div class="grop m-3">
                    <div class="card card-body shadow mb-2">
                        <div class="contant ">
                        <h3>D group</h3>
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">   
                            <tr>
                                <th>id</th>
                                <th>flag</th>
                                <th>name</th>
                            </tr>
                        <?php foreach($teamsd as $teamd) : ?>
                            <tr>
                                <th><?=$teamd['grp_positon']; ?></th>
                                <th><img src="imag/<?=$teamd['flag']; ?>" alt=""></th>
                                <th><span class="team-name"><?=$teamd['name']; ?></span></th>
                            </tr>
                        <?php endforeach; ?>
                        </table> 
                        
                        </div>
                    </div>
                </div>
               
                <div class="grop m-3">
                    <div class="card card-body shadow mb-2">
                        <div class="contant ">
                        <h3>E group</h3>
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">   
                            <tr>
                                <th>id</th>
                                <th>flag</th>
                                <th>name</th>
                            </tr>
                        <?php foreach($teamse as $teame) : ?>
                            <tr>
                                <th><?=$teame['grp_positon']; ?></th>
                                <th><img src="imag/<?=$teame['flag']; ?>" alt=""></th>
                                <th><span class="team-name"><?=$teame['name']; ?></span></th>
                            </tr>
                        <?php endforeach; ?>
                        </table> 
                        
                        </div>
                    </div>
                </div>
               
                <div class="grop m-3">
                    <div class="card card-body shadow mb-2">
                        <div class="contant ">
                        <h3>F group</h3>
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">   
                            <tr>
                                <th>id</th>
                                <th>flag</th>
                                <th>name</th>
                            </tr>
                        <?php foreach($teamsf as $teamf) : ?>
                            <tr>
                                <th><?=$teamf['grp_positon']; ?></th>
                                <th><img src="imag/<?=$teamf['flag']; ?>" alt=""></th>
                                <th><span class="team-name"><?=$teamf['name']; ?></span></th>
                            </tr>
                        <?php endforeach; ?>
                        </table> 
                        
                        </div>
                    </div>
                </div>
               
            </div>
                  
        </div>

        
    </div>
    
    

    <script src="./venor/jquery.min.js"></script>
    <script src="./venor/bootstrap.bundle.min.js"></script>
    <script src="./venor/sb-admin-2.min.js"></script>
    <script src="./venor/jquery.easing.min.js"></script>
    <script>
        document.querySelector("body").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none"; });
        document.querySelector("#close").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";  });
        document.querySelector("#popupbtn").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";   });
</script>
    
</body>
</html>