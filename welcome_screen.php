<?php
/*include_once('config.php');
include_once('jwt.php');
$status=1;
$postData = array(&$status);
$url = $apiBaseUrl.'cms/showWelcome.php';

$jsonResponse = rest_call('POST',$url, $postData,'multipart/form-data',"Bearer ".$_COOKIE['kpmg-access']);

$response = json_decode($jsonResponse,true);*/
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/stylewelcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>KPMG</title>

		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
		<script>
			$(document).ready(function() {
				// opne browser link click
				$("span a").click(function(event){
					if($(this).attr('id')=="openBrowser")
					{
						$("#changeModel").css('display','block');
						//document.getElementById("changeModel").style.display = "block";
						//$("#browserdiv").css('visibility','visible');
						$('#inputtest').val($(this).attr('value'));
					}
				});
// search button click
				$("#textbtn").click(function(){
					

					
					var request = $.ajax({
							type: "POST",
							url: "filesearch.php",
							data: {Tags: $("#filetag").val()},
							dataType: "html"
					});

					request.done(function(msg) {
						$('#filebrowser').html(msg);
					});

					request.fail(function(jqXHR, textStatus) {
					  alert( "Request failed: " + textStatus );
					});
					
				});
				
				//$('#filebrowser').load('filelist.php?filePath='+$("#filePath").val(), function() {
				//});
				window.CallParent = function() {
					$("#changeModel").css('display','none');
        		}
			});
			

		</script>
</head>
<style>
body {
    
    margin: 0px;
    font-family: 'UNIVERSFORKPMG-BOLD';
    src: url("font/UNIVERSFORKPMG-BOLD.TTF") format("truetype");
}


@font-face {
    font-family: 'UNIVERSFORKPMG-BOLD';
    src: url("font/UNIVERSFORKPMG-BOLD.TTF") format("truetype");
}

p {
    font-family: 'UNIVERSFORKPMG-BOLD';
    src: url("font/UNIVERSFORKPMG-BOLD.TTF") format("truetype");
}
.btn{
    margin-top: 10px;
    background-color: #003060;
    color: white;
    height:40px;
    width:150px;
    border-radius: 10px;
border:none;
font-size: 20px;


}
.btn-1{
    margin-top: 10px;
    background-color: #003060;
    color: white;
    height:40px;
    width:150px;
    border-radius: 10px;
border:none;
font-size: 20px;
margin-Left:50px;
}
.del-image1{
    margin-right: 10px;
}
.del-image2{
position:absolute;
left:86%;
top:410px;
}
.ABC{
    font-size: 20px;
    /* word-wrap: break-word; */
    padding-Left:5px;
    word-wrap: break-word;
    border-width: 1px;

}
.del-image3{
    position:absolute;
    left:86%;
    top:520px;
}
.del-image4{
    position:absolute;
    left:86%;
    top:630px;
}
.del-image7{
    position:absolute;
    left:86%;
    top:920px;
}
.del-image6{
    position:absolute;
    left:86%;
    top:820px;
}
.del-image5{
    position:absolute;
    left:86%;
    top:730px;
}
.btn{
    position:relative;
    right:50px;
    bottom:10px;
}
.CBA{
    position:relative;
    left:45%;
    top:68%;
}
</style>

<body>
    <div class="search" id="searchDiv" style="margin: auto;width: 100%;position: absolute;top: 100px">
<input type="hidden" name="inputtest" id="inputtest"/>

        <div style="width: 800px;height:100px;margin:auto;">
            <div style="height:50px;float: left;background-image:url('assets/login.png');background-repeat:no-repeat ;padding-left:50px;margin-top:10px"
                onclick="location.href='select_template.php';"></div>
            <div style="height:60px;text-align: center;color: #00338D;text-align: center;font-size: 61px;margin:0px;">
                Welcome Screen</div>
                <div style='margin-Left:800px;margin-Top:-5%'><img src="assets/Logout button.png" alt=""></div>
        </div>

        <div style="width: 800px;margin:auto;height:100px;">
            <div class="box-selection-text">
                <div class="vertical-center4">
                    Welcome Video:Video.mp4 <?php #echo $response['loop_vid_name']; ?>
					<!-- <input type="text" name="welcomevid" id="welcomevid" disabled/> -->
                    
                </div>
            </div>
            <div class="box-selection">
                <button id="myBtn" class="btn">View</button>
               
            </div>
            <div class=" box-selection">
				<!-- <span><a id="openBrowser" value="welcomevid" class="btn">Change</a></span> -->
                <button id="change" class="btn-1" id="openBrowser">Change</button>
            </div>
        </div>

        <div style="width: 800px;margin:auto;height:100px;">
            <div class="box-selection-text">
                <div class="vertical-center4">
                    Welcome Screen Logo:Logo.png <?php #echo $response['KPMG_logo_name']; ?>
					<!-- <input type="text" name="welcomelogo" id="welcomelogo" disabled/> -->
                </div>
                <!-- <div><img src="assets/Info button.png" alt=""></div> -->
            </div>
            <div class="box-selection">
                <button id="myBtn1" class="btn">View</button>
                
            </div>
            <div class="box-selection">
				<!-- <span><a id="openBrowser" value="welcomelogo" class="btn">Change</a></span> -->
                <button id="changeLogo" class="btn-1">Change</button>
            </div>
        </div>

        <div style="width: 800px;margin:auto;height:100px;">
            <div class="box-selection-text">
                <div class="vertical-center4">
                    Welcome Screen BG: BG.png <?php #echo $response['bg_vid_name']; ?>
					<!-- <input type="text" name="welcomebg" id="welcomebg" disabled/> -->
                </div>
            </div>
            <div class="box-selection">
                <button id="myBtn2" class="btn">View</button>
            </div>
            <div class="box-selection">
				<!-- <span><a id="openBrowser" value="welcomebg" class="btn">Change</a></span> -->
                <button id="changeBg" class="btn-1">Change</button>
            </div>
        </div>


        <div style="width: 800px;margin:auto;height:100px;">
            <div class="box-selection-text">
                <div class="vertical-center4">
                    <img class="del-image1" src="assets/Info button.png" alt="welcome-text">Welcome Text:Header Text
                </div>

            </div>
            <div class="box-selection1">
                <div class="vertical-center1">
                    <input class='ABC' placeholder='Innovation centre Nesco',
                        style="width: 300px;height: 40px; border-radius: 10px; border: 1px solid grey;background-image:url('assets/Group 159.png');background-repeat:no-repeat;padding-right:50px;background-position:right;">
                        <?php #echo $response['header_text']; ?></input>

                    <img class="del-image2" src="assets/Highlight Header Text.png" alt="delImage">
                </div>
            </div>


        </div>

        <div style="width: 800px;margin:auto;height:100px;">
            <div class="box-selection-text">
                <div class="vertical-center3">
                    SubHeader Text1
                </div>
            </div>
            <div class="box-selection2">
                <div class="vertical-center2">
                    <input class='ABC' placeholder='KPMG in india welcomes nameplaceholder For a workshop with orgplaceholder At timeplaceholder on date placeholder',
                        style="width: 300px;height: 70px; border-radius: 10px; border: 1px solid grey;background-image:url('assets/Group 159.png');background-repeat:no-repeat;padding-right:50px;background-position:right;">
                        <?php #echo $response['sub_text1']; ?></textarea>
                    <img class="del-image3" src="assets/Highlight Header Text.png" alt="header" />

                </div>
            </div>
            <div class="box-selection1">
                <div class="vertical-center1">

                </div>
            </div>
        </div>

        <div style="width: 800px;margin:auto;height:100px;">
            <div class="box-selection-text">
                <div class="vertical-center3">
                    SubHeader Text2
                </div>
            </div>
            <div class="box-selection2">
                <div class="vertical-center2">
                    <input class='ABC' placeholder='KPMG in india welcomes nameplaceholder For a workshop with orgplaceholder At timeplaceholder on date placeholder',
                        style="width: 300px;height: 70px; border-radius: 10px; border: 1px solid grey;background-image:url('assets/Group 159.png');background-repeat:no-repeat;padding-right:50px;background-position:right;">
                        <?php #echo $response['sub_text2']; ?></input>
                    <img class="del-image4" src="assets/Highlight Header Text.png" alt="header" />

                </div>
            </div>

        </div>
        <div style="width: 800px;margin:auto;height:100px;">
            <div class="box-selection-text">
                <div class="vertical-center3">
                    SubHeader Text3
                </div>
            </div>
            <div class="box-selection2">
                <div class="vertical-center2">
                    <input class='ABC' placeholder='KPMG in india welcomes nameplaceholder For a workshop with orgplaceholder At timeplaceholder on date placeholder',
                        style="width: 300px;height: 70px; border-radius: 10px; border: 1px solid grey;background-image:url('assets/Group 159.png');background-repeat:no-repeat;padding-right:50px;background-position:right;">
                        <?php #echo $response['sub_text3']; ?></input>
                    <img class="del-image5" src="assets/Highlight Header Text.png" alt="header" />

                </div>
            </div>
        </div>
        <div style="width: 800px;margin:auto;height:100px;">
            <div class="box-selection-text">
                <div class="vertical-center3">
                    SubHeader Text4
                </div>
            </div>
            <div class="box-selection2">
                <div class="vertical-center2">
                    <input class='ABC' placeholder='KPMG in india welcomes nameplaceholder For a workshop with orgplaceholder At timeplaceholder on date placeholder',
                        style="width: 300px;height: 70px; border-radius: 10px; border:1px solid grey;background-image:url('assets/Group 159.png');background-repeat:no-repeat;padding-right:50px;background-position:right;">
                        <?php #echo $response['sub_text4']; ?></input>
                    <img class="del-image6" src="assets/Highlight Header Text.png" alt="header" />

                </div>
            </div>

        </div>

        <div style="width: 800px;margin:auto;height:100px;">
            <div class="box-selection-text">
                <div class="vertical-center3">
                    Footer Text
                </div>
                
            </div>
            <div class="box-selection2">
                <div class="vertical-center2">
                    <input class='ABC' placeholder='KPMG in india welcomes nameplaceholder For a workshop with orgplaceholder At timeplaceholder on date placeholder',
                        style="width: 300px;height: 70px; border-radius: 10px; border:1px solid grey;background-image:url('assets/Group 159.png');background-repeat:no-repeat;padding-right:50px;background-position:right;">
                        <?php #echo $response['footer_text']; ?></input>
                    <img class="del-image7" src="assets/Highlight Header Text.png" alt="header" />

                </div>
            </div>
            <div class=CBA>      
                <button class=btn>Save</button>
            </div>


        </div>
        <!-- <div class="edit">
            Save
        </div> -->


        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="close">&times;</span>
                    <h2>Welcome Video</h2>
                </div>
                <div class="modal-body">
                    <video width="500" height="500" controls class="video">
                        <source src="<?php #echo $response['loop_vid']; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

            </div>

        </div>
        <div id="myModal1" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="close1">&times;</span>
                    <h2>Welcome Screen Logo</h2>
                </div>
                <!-- <div class="modal-body">
                    <img class="modal-image" src="<?php #echo $response['KPMG_logo']; ?>" alt="logo" class="logo" />
                </div> -->
            </div>
        </div>
        <div id="myModal2" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="close2">&times;</span>
                    <h2>Welcome Screen BG</h2>
                </div>
                <div class="modal-body">
                    <video width="500" height="500" controls class="video">
                        <source src="<?php #echo $response['bg_vid']; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>

            </div>

        </div>
        <div id="changeModel" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="changePopupClose">&times;</span>

                    <div style="width: 800px;height:100px;margin:auto;">

                        <div
                            style="height:60px;text-align: center;color: #00338D;text-align: center;font-size: 61px;margin:0px;">
                            Welcome Screen</div>

                    </div>
                </div>
                <div class="modal-body changePopup">
                    <div class="example" style="margin:auto;">

                        <input type="text" name="filetag" id="filetag"  placeholder="Search..">
                        <button type="submit" name="textbtn" id="textbtn"><i class="fa fa-search"></i></button>
                    </div>
                    <div style="text-align:left;width:93%" id ="filebrowser">

                    </div>
                </div>

            </div>

        </div>
    </div>
    <div id="changeViewModel" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeChangeViewModel">&times;</span>
                <h2>Welcome Video</h2>
            </div>
            <div class="modal-body">
                <video width="500" height="500" controls class="video">
                    <source src="#" type="video/mp4" id="changeVideoShow">
                    
                    
                    Your browser does not support the video tag.
                </video>
            </div>
           
       
        </div>
    </div>
    <script src="assets/js/welcomeScript.js">
    </script>


</body>

</html>