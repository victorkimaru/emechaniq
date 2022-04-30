<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hexa Bokeh Theme - Contact Form</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2026 Hexa Bokeh
http://www.tooplate.com/view/2026-hexa-bokeh
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="newheader.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

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

<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" />    
    
    <!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
    
    <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
    $(function() {
        $('#map a').lightBox();
    });
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
        
        <div id="tooplate_middle_sp">
            <div id="mid_title">
                    Nunc ullamcorper auctor erat eu porta	
                </div>
                <p>Sed sollicitudin dapibus gravida. Vivamus ut lacus at felis varius facilisis. Sed semper felis at mi posuere sit amet pulvinar justo luctus. Aenean vel lacus nec tellus fringilla dapibus. Aliquam erat volutpat. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                <div id="learn_more"><a href="#">Learn More</a></div>
            <div class="cleaner"></div>
        </div> <!-- end of middle -->
        
        <div id="tooplate_main">
        	
            <div class="col_w420 float_l">
                <div id="contact_form">
            
                    <h4>Send a message</h4>
                    
                    <form method="post" name="contact" action="#">

						<label for="author">Name:</label> <input type="text" maxlength="40" id="author" class="input_field" name="author" />
						<div class="cleaner h10"></div>
		
						<label for="email">Email:</label> <input type="text" maxlength="40" id="email" class="input_field" name="email" />
						<div class="cleaner h10"></div>
								
						<label for="subject">Subject:</label> <input type="text" maxlength="40" id="subject" class="input_field" name="subject" />
						<div class="cleaner h10"></div>
	
						<label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
						<div class="cleaner h10"></div>
	
						<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                    
            		</form>
            
                </div> 
            </div>
                
            <div class="col_w420 float_r">
                <h4>Our Location</h4>
                <div id="map">
                    <a href="images/map_big.jpg" title="Location">
                        <img width="300" height="200" src="images/map_thumb.jpg" alt="Location Map" class="image_wrapper" />
                    </a>
              </div>                
                <div class="cleaner h30"></div>
                
                <h4>Our Address</h4>
                <h6><strong>Company Name</strong></h6>
                1440-2880   Fusce at tortor non quam, <br />
                Ut hendrerit sem sed purus , 11550 <br />
                Praesent sit amet<br /><br />
				
				Tel: 080-010-1170<br />
				Fax: 090-010-2230<br />
                Email: mechaniq@gmail.com<br/>
            </div>
            
            <div class="cleaner"></div>
        </div><div id="tooplate_main_bottom"></div>
    
    	<div id="tooplate_footer">
            
        <?php require ('footer.php');?>
            
        </div>
    
    </div> <!-- end of tooplate_wrapper -->
</div> <!-- end of tooplate_outer_wrapper -->

</body>
</html>