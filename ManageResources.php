<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script type="text/javascript" language="javascript"></script>

    <title>KPMG</title>
</head>
<style>

    body{
       
        margin: 0px;
        font-family: 'UNIVERSFORKPMG-BOLD';
        src: url("font/UNIVERSFORKPMG-BOLD.TTF") format("truetype");
    }


    @font-face {    
        font-family: 'UNIVERSFORKPMG-BOLD';
        src: url("font/UNIVERSFORKPMG-BOLD.TTF") format("truetype");
    }

    p{
        font-family: 'UNIVERSFORKPMG-BOLD';
        src: url("font/UNIVERSFORKPMG-BOLD.TTF") format("truetype");
    }

    .box-selection {
        height:80px;
        width:120px;
        background-size: contain;
        display: inline-block;
        margin:20px;
        background-image:url('assets/Rectangle-80.png');
        background-repeat:no-repeat;
        color: #FFFFFF;
        text-align: center;
        font-size: 25px;
        cursor:pointer;
        position: relative;
        right:-40px;
        
        
        
    }

    .box-selection-text {
        height:80px;
        width:80px;
        background-size: contain;
        display: inline-block;
        
        background-image:url('assets/Rectangle-80.png');
        background-repeat:no-repeat;
        color: #FFFFFF;
        text-align: center;
        font-size: 25px;
        vertical-align: middle;
        width:400px;
        background-image:none;
        color: #000000;
        margin-top:5%;
        
    }

    .vertical-center {
        margin: 0;
        position: relative;
        top: 30%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        font-size:20px;

        
    }
    .vertical-centers {
        margin: 0;
        position: relative;
        left:-45px;
        top: 27%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        
        color:grey;
        font-size:30px;
    }
    .img1{
        float:right;
        padding-right:200px;
    }
    .box-selection1 {
        height:80px;
        float: right;
        width:27%;
        top:60%;
        
 }
 
 .add-button {
        right:300px;
        bottom:90px;
        position: fixed;
        cursor:pointer;
    }
    
    .del-image {
        height:32px;
        margin-top:13%;
        
    }
    .text{
        margin-left: 30%;
        border:solid grey;
        
    }
    .edit{
        
        height:60px;
        width:150px;
        background-size: contain;
       background-image:url('assets/Rectangle-80.png');
        background-repeat:no-repeat;
        color: #FFFFFF;
        cursor:pointer;
        margin-left:600px;
        margin-top:%;
        font-size:25px;
        padding-top:13px;
        text-align:center;
        position: relative;
        margin-left:30%;
     }
     .log{
        margin-left: 100%;
        margin-top:-6%;
    }

    

</style>
<body>
        <div class="search" id = "searchDiv" style="margin: auto;width: 100%;position: absolute;top: 60px">

<form action="select_template.php" method="post">
<div style="width: 800px;height:100px;margin:auto;">
    <div style="height:50px;float: left;background-image:url('assets/login.png');background-repeat:no-repeat;padding-left:50px;cursor:pointer;"onclick="location.href='Mural.php';"></div>
    <div style="height:50px;text-align: center;color: #00338D;text-align: center;font-size: 45px;margin:0px;">
Manage Resources</div>
<div class="log"><img src="assets/Logout button.png" alt=""></div>
<div style="width: 1000px;margin:auto;height:100px;">
    <div class="box-selection-text"onclick="location.href='';">
        <div class="vertical-centers">
           Resource 01
        </div>
    </div>
    <div class="box-selection" >
        <div class="vertical-center"onclick="location.href='EditResource.php';">
            Edit 
        </div>
    </div>
    <div class="box-selection" >
        <div class="vertical-center">
            Delete
        </div>
    </div>
    
</div>

<div style="width:  1000px;margin:auto;height:100px;">
    <div class="box-selection-text"onclick="location.href='.php';">
        <div class="vertical-centers">
        Resource 02
        </div>
    </div>
    <div class="box-selection" >
        <div class="vertical-center"onclick="location.href='EditResource.php';">
            Edit
        </div>
    </div>
    <div class="box-selection" >
        <div class="vertical-center">
            Delete
        </div>
    </div>
    
</div>

<div style="width:  1000px;margin:auto;height:100px;">
    <div class="box-selection-text"onclick="location.href='.php';">
        <div class="vertical-centers">
        Resource 03
        </div>
    </div>
    <div class="box-selection" >
        <div class="vertical-center"onclick="location.href='EditResource.php';">
        Edit
        </div>
    </div>
    <div class="box-selection" >
        <div class="vertical-center">
            Delete
        </div>
    </div>
</div>
    <div style="width:  1000px;margin:auto;height:100px;">
    <div class="box-selection-text"onclick="location.href='';">
        <div class="vertical-centers">
        Resource 04
        </div>
    </div>
    <div class="box-selection" >
        <div class="vertical-center"onclick="location.href='EditResource.php';">
        Edit
        </div>
    </div>
    <div class="box-selection" >
        <div class="vertical-center">
            Delete
        </div>
    </div>
    <div class="add-button"onclick="location.href='AddResource.php';"><img src="assets/Add Button.png"></div>
    <div class="edit"onclick="location.href='Mural.php';">
    Save
</div>
</div>

</form>
        </div>
</body>
</html>
