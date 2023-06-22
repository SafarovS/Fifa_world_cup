<?php
require "./php/connect.php";
require "./php/function.php";
require "./php/output.php";


$heading= "
<div class='container-fuild'>
    <div class='flex'>
        <div class='col-2'> 
            <div class='logo'><img src='imag/logo.png' alt=''></div>
        </div>
        <div class='col-8'>
            <nav class= 'navbar'>
                <a href='/' >Home</a>
                <a href='/about' class='active'>About</a>
                <a href='/create'>Create</a>
                <a href='/View'>View</a>
            </nav>
        </div>
        <div class='col-2'>
            <span>text</span>
            <span>text</span>
            <span>text</span>
        </div>
    </div>
</div>";

require "./veiws/about.php";
?>