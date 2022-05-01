    <?php 


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>eMechaniQ</title>
<link rel="icon" type="image/x-icon" href="/images/logo.jpeg">
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript">
	var flashvars = {};
	flashvars.xml_file = "photo_list.xml";
	var params = {};
	params.wmode = "transparent";
	var attributes = {};
	attributes.id = "slider";
	swfobject.embedSWF("flash_slider.swf", "flash_grid_slider", "440", "220", "9.0.0", false, flashvars, params, attributes);
</script>

<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="newheader.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="ddsmoothmenu.js">
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>
<body>

<div id="tooplate_outer_wrapper">
	<div id="tooplate_wrapper">
    	<div id="tooplate_header">

        <div id="site_title"><a href="index.php"><img src="images/logo.jpeg" alt="" ></a></div>

                
		    <?php require ('newheader.php');?>

            <div class="cleaner"></div>
        </div> <!-- end of forever header -->

        <div id="tooplate_middle">
            <!-- <div id="mid_slider">
            </div> -->
            <div class="col_allw280 fp_service_box">

            <img  src="images/logo.jpg" height="75%" width="75%"/>


            </div>

            <div id="mid_right">
                
                <div id="mid_title">
                Welcome To eMechaniQ 
                </div>

                <p >eMechaniq welcomes you to a new world of quick solutions to your mechanical problems by linking you directly to trustworthy Mechanics.We are dovoted to providing quality spareparts to ensure long life for your vehicle</p>
            </div>

            <div class="cleaner"></div>
        </div> <!-- end of tooplate_middle -->

        <div id="tooplate_main">

            <div class="col_w900">
            <div class="col_allw280 fp_service_box">
                <h3>eMechaniQ Services</h3>

                <p> We are an effective service providers offering in app purchases of authentic
                 spareparts. Maintenance Scheduling and timely link to mechanics who service your vehicles. We also empower
                  Mechanics through certification programs around the Globe.</p>
                <!-- <a class="more" href="#">Detail</a> -->
            </div>

            <div class="col_allw280 fp_service_box">

            <img  src="images/mech1.jpg" id="mech1" class="mech1"  height="270" width="600"/>


            </div>

            <div class="col_allw280 fp_service_box col_last">

            </div>

            <div class="cleaner"></div>
        </div>

        <div class="col_w900 col_w900_last">
            <div class="col_w580 float_l">

				<h2>Why Us </h2>
                
                    <h6>100% Certified. Reliable. Affordable</h6>
                
                <p> With us you are assured a long life -span for your vehicles since we provide you with quality service through our reliable mechanics and access to original spareparts.
                        Choose eMechaniQ today and enjoy access to quality service, accountability and discounts with time.</p>
                        <br>
                 <a href="contact.php" class="btn-main">Contact Us</a>       
                        
                
            </div>
            <div class="col_allw280 fp_service_box">

            <img  src="images/mech4.jpg" id="mech4" class="mech4"  height="250" width="320"/>


            </div>
            <div class="col_w280 float_r">


            </div>

            <div class="cleaner"></div>
		</div>

        </div><div id="tooplate_main_bottom"></div>

    	<div id="tooplate_footer">

		<?php require ('footer.php');?>

        </div>

    </div> <!-- end of tooplate_wrapper -->
</div> <!-- end of tooplate_outer_wrapper -->

</body>
</html>