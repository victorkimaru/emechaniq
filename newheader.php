<div  class="newheader">
    
                <ul>
                    <li>
                        <a href="index.php" class="<?php if(strpos($_SERVER['REQUEST_URI'], "index.php") !== false) { echo 'active'; } ?>">Home</a>
                    </li>
                    
                    <li>
                        <a href="about.php" class="<?php if(strpos($_SERVER['REQUEST_URI'], "about.php") !== false) { echo 'active'; } ?>">About Us</a>
                    </li>
                    <!-- <li> -->
                        <!-- <a href="portfolio.php" >Portfolio</a> -->
                    <!-- </li> -->
                    <li>
                        <a href="blog.php" class="<?php if(strpos($_SERVER['REQUEST_URI'], "blog.php") !== false) { echo 'active'; } ?>">Our Journey</a>
                    </li>
                    <li>
                        <a href="contact.php" class="<?php if(strpos($_SERVER['REQUEST_URI'], "contact.php") !== false) { echo 'active'; } ?>">Contact Us</a>
                    </li>
                </ul>