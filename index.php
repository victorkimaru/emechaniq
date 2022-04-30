    <?php 


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>eMechaniQ</title>
<meta name="keywords" content="" />
<meta name="description" content="" />



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

            <div id="mid_right">
                <div id="mid_title">
                Welcome To MechaniQ 
                </div>
                <p>Mechaniq welcomes you to a new world of quick solution to your mechanical problems.We are dovoted to providing quality spareparts to ensure long life for your vehicle</p>
            </div>

            <div class="cleaner"></div>
        </div> <!-- end of tooplate_middle -->

        <div id="tooplate_main">

            <div class="col_w900">
            <div class="col_allw280 fp_service_box">
                <h3>MechaniQ Services</h3>
                
                <p> <h6>Mechaniq provides a quick and instant linkage between mechanics and drivers/car owners. Mechaniq works closely! with genuine sparepart Manufacturers to facilate acquisition of original and authentic spareparts to your car. Also look to empower mechanics around the globe</h6></p>
                <a class="more" href="#">Detail</a>
            </div>

            <div class="col_allw280 fp_service_box">

            </div>

            <div class="col_allw280 fp_service_box col_last">

            </div>

            <div class="cleaner"></div>
        </div>

        <div class="col_w900 col_w900_last">
            <div class="col_w580 float_l">

				<h2>Welcome To MechaniQ </h2>
                
                    <h6>100% Certified. Reliable. Affordable</h6>
                <img src="images/tooplate_image_01.png" alt="image" class="image_wrapper image_fl" />
                <p><em>Vestibulum mauris purus, tincidunt auctor pretium at, blandit vel nisi. Donec accumsan semper lobortis.</em></p>
                <p>Hexa Bokeh is one of the <a rel="nofollow" href="http://www.tooplate.com/free-templates">free templates</a> by tooplate. You may edit and apply this template for any purpose.  Credits go to <a rel="nofollow" href="http://www.photovaco.com">Free Photos</a> for photos and <a rel="nofollow" href="http://www.thewebdesignblog.co.uk">thewebdesignblog.co.uk</a> for icons. Quisque in diam a justo condimentum molestie.</p>

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
