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
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css.map">
    <link rel="stylesheet" href="./bootstrap/all.min.css">
    <title>Fifa world cup</title>
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var html= '<tr><td style="width=200px;"><input type="text" name="teamname[]" class="form-control" required></td><td style="width=200px;"><select name="teamcouter[]" id="" class="form-control "><option value="">--Select Country--</option><option value="Europe">Europe</option><option value="Asia">Asia</option><option value="Africa">Africa</option><option value="South Amerca">South Amerca</option><option value="North Amerca">North Amerca</option><option value="Oceania">Oceania</option></select></td><td style="width:100px;"><input type="text" name="teamflag[]" class="form-control" required></td><td style="width=100px;"><input type="button" value="Remove" id="remove" class="btn btn-danger w-100"></td></tr>';
            var max=50;
            var x=1;

            $("#add").click(function(){
                if(x <= max){
                    $("#table-faild").append(html);
                    x++;
                }
            });
            $("#table-faild").on('click', '#remove', function(){
                $(this).closest('tr').remove();
                x--;
            });
        });
        $(document).ready(function () {
            $('#limit').on('change', function(){
                var limit= $(this).val();
                if(limit){
                    $.get("vewis/ajax.php",
                    {limnt: limit},
                    function(data){
                        $('#span').html(data);
                    });
                }else{
                    alert('ok');
                }
            });
            
        });
    </script>
</head>
<body>
    <?php echo $heading; 
    
?>
    <?php require './php/create.php' ?>
        <h2>FIFA WORLD CUP 2023 <span id="span"></span></h2>
        <div class="cotainer">
            <div class="row">
                <div class="col-md-6">
                <div class="insert-all-team shadow-lg">
                        <span class= "inser-chiqar">Add team</span>
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Insert team</h4>
                        
                            <div class="input-group">
                                <form action="/create" method="post">
                                <table class="table" id="table-faild">
                                    <tr>
                                        <th>Team Name</th>
                                        <th>Team Counter</th>
                                        <th>Team flag</th>
                                        <th>add/remove</th>
                                    </tr>
                                    <tr>
                                        <td style="width=200px;"><input type="text" name="teamname[]" class="form-control" required></td>
                                        <td style="width=200px;">
                                            <select name="teamcouter[]" id="" class="form-control ">
                                                <option value="">--Select Country--</option>
                                                <option value="Europe">Europe</option>
                                                <option value="Asia">Asia</option>
                                                <option value="Africa">Africa</option>
                                                <option value="South Amerca">South Amerca</option>
                                                <option value="North Amerca">North Amerca</option>
                                                <option value="Oceania">Oceania</option>
                                            </select>
                                        </td>
                                        <td style="width=100px;"><input type="text" name="teamflag[]" class="form-control" required></td>
                                        <td><input type="button" value="Add"  id="add" class="btn btn-primary w-100" ></td>
                                    </tr>
                                </table>
                                <input type="submit" value="Insert" name="save" class="btn btn-success w-100">
                                </form>
                            </div>
                            
                            
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="disp-allteam shadow-lg">            
                            <div class="header">
                                <h3>FIFA all teams</h3>
                                <div class="instrment">
                                    <i class="fas fa-search"></i>
                                    <input type="search" name="" class="form-control m-3">
                                    <select name="" class="form-control m-3">
                                        <option value="">--Change Coutry--</option>
                                        <option value="Europe">Europe</option>
                                        <option value="Asia">Asia</option>
                                        <option value="Africa">Africa</option>
                                        <option value="South America">South America</option>
                                        <option value="North America">North America</option>
                                        <option value="Oceania">Oceania</option>
                                    </select>
                                    <select class="form-control m-3"  id="limit" style="width: 100px;">
                                        <option value="15">15</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="250">250</option>
                                        <option value="500">500</option>
                                    </select>
                                </div>
                            </div>
                            <div class="bodycontent">
                                <table class="table table-hover">
                                    <tr>
                                        <th>chek</th>
                                        <th>Flag</th>
                                        <th>Name</th>
                                        <th>Coutry</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php while($row= mysqli_fetch_assoc($resallteam)){
                                             $allteams[] = $row;
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" name="" id="check"></td>
                                        <td><img src="imag/<?=$row['flag']; ?>" alt="" style="width: 120px; height: 60px;"></td>
                                        <td><?=$row['name'];?></td>
                                        <td><?=$row['couter']; ?></td>
                                        <td><input type="button" value="Edid" class="btn btn-success"> <input type="button" value="delet" class="btn btn-danger"></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="./js/create.js"></script>
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