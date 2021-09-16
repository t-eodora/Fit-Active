<!DOCTYPE html>

<html>

<head>  
    <title>Fit&Active</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- START HEADER -->

    <header id="main-header">

        <div class="container">
            <div id="nav-logo">
                <img src="img/logo.png" alt="Logo Image" width="60" height="60">
                <h1>Fit&Active</h1>
            </div>
            <nav id="nav-main">
                <a href="#" class="nav-link active" value="landing">Home</a>
                <a href="#" class="nav-link" value="membership">Membership</a>
                <a href="#" class="nav-link" value="about">About</a>
                <a href="#" class="nav-link" value="services">Services</a>
                <a href="#" class="nav-link" value="gallery">Gallery</a>
                <a href="#" class="nav-link" value="staff">Staff</a>
                <a href="#" class="nav-link" value="contact">Contact</a>
            </nav>
        </div>

    </header>

    <!-- END HEADER -->

    <!-- START MAIN CONTENT -->

    <div id="main-content" style="display: block;">

        <!-- START LANDING -->
    
        <div id="landing" class="page">
    
            <div class="container">
                <h2>THE FIRST TRAINING IS 51% OF THE WAY TO SUCCESS</h2>
                <p>
                    Motivation is what gets you started. Hard work gives a result that keeps you going.
                </p>
            </div>
    
        </div>
    
        <!-- END LANDING -->
    
        <!-- START JOIN -->
    
        <div id="about" class="page">
    
            <div class="container">
                <h3>JOIN THE BEST</h3>
                <p>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam sint non fugiat,
                   sunt perferendis aliquid facilis voluptatem quis rem autem nobis sed temporibus
                   est laudantium excepturi numquam incidunt labore eos? 
                </p>
                <a id="to-membership" class="btn" href="#">Membership</a>
            </div>
    
        </div>
        
        <!-- END JOIN -->
    
        <!-- START SERVICES -->
    
        <div id="services" class="page">
    
            <div class="container">
                <h4>What we provide:</h4>
                <div class="slider">
                    <div class="service">
                        <img class="service-img" alt="Gym" src="img/gym1.jpg">
                        <p class="service-text">GYM</p>
                    </div>
                    <div class="service">
                        <img class="service-img" alt="Pool" src="img/pool.jpg">
                        <p class="service-text">POOL</p>
                    </div>
                    <div class="service">
                        <img class="service-img" alt="Sports" src="img/sports.jpg">
                        <p class="service-text">SPORTS</p>
                    </div>
                </div>
            </div>
    
        </div>
    
        <!-- END SERVICES -->
    
        <!-- START GALLERY -->
    
        <div id="gallery" class="page">
    
            <div class="container">
                <div id="gallery-slider"></div>
            </div>
    
        </div>
    
        <!-- END GALLERY -->
    
        <!-- START STAFF -->
    
        <div id="staff" class="page">
    
            <div class="container">
                <h5>OUR STAFF</h5>
                <div class="staff-container">
    
                    <div
                        class="textOverImage"
                        style="background: url('img/staff/1.jpg') no-repeat center center/cover;"
                        data-title="Ana Peric"
                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ornare suspendisse sed nisi lacus sed viverra tellus in. Amet luctus venenatis lectus magna.
                        In egestas erat imperdiet sed.">
                    </div>
    
                    <div
                        class="textOverImage"
                        style="background: url('img/staff/2.jpg') no-repeat center center/cover;"
                        data-title="Petar Peric"
                        data-text="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ornare suspendisse sed nisi lacus sed viverra tellus in. Amet luctus venenatis lectus magna.
                        In egestas erat imperdiet sed.">
                    </div>
    
                </div>
            </div>
    
        </div>
    
        <!-- END STAFF -->

    </div>

    <!-- END MAIN CONTENT -->

    <!-- START MEMBERSHIP CONTENT -->

    <div id="membership-content" style="display: none;">

        <div class="container">
            <form id="main-form" method="post" action="<?=$_SERVER['PHP_SELF'];?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="membership">Membership</label>
                    <select name="membership" id="membership">
                        <option value="30">Basic ($30)</option>
                        <option value="40" selected>Premium ($40)</option>
                        <option value="50">VIP ($50)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="trainer">Trainer ($20 per session)</label>
                    <div class="radio-group">
                        <input type="radio" name="trainer" id="no" value="0" checked>
                        <label for="no">Without personal trainer</label>
                        <input type="radio" name="trainer" id="yes" value="1">
                        <label for="yes">With personal trainer</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="frequency">Times per week</label>
                    <select name="frequency" id="frequency">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" selected>3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <input id="submit-button" type="submit" value="Calculate Price!" class="btn" name="SubmitButton">
            </form>

            <?php
                $price = 'Fill in the form to find out!';
                if(isset($_POST['SubmitButton'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $membership = $_POST['membership'];
                    $trainer = $_POST['trainer'];
                    $frequency = $_POST['frequency'];
                    $price = $membership + ($trainer * 80 * $frequency);
                }
            ?>
    
            <p id="price">Total price: <span>$<?php echo $price; ?></span></p>

        </div>

    </div>

    <!-- END MEMBERSHIP CONTENT -->

    <!-- START FOOTER -->

    <footer id="main-footer">

        <div class="container">

            <div class="footer-left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1724.4051614303532!2d20.479968177838373!3d44.78263158506673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2srs!4v1598465186458!5m2!1sen!2srs"
                    height="100%"
                    width="100%"
                    aria-hidden="false"
                    tabindex="0">
                </iframe>
            </div>
            <div class="footer-center">
                <div>
					<i class="fa fa-map-marker"></i>
					<p><span>Danijelova 32</span> Belgrade, Serbia</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1.555.555.5555</p>
				</div>

				<div>
					<i id="contact" class="fa fa-envelope"></i>
					<p><a href="mailto:support@fitandactive.com">support@fitandactive.com</a></p>
				</div>
            </div>
            <div class="footer-right">
                <p>
					<span>About the company</span>
                    Lorem ipsum dolor sit amet, consectateur adispicing elit.
                    Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>
            </div>

        </div>

    </footer>

    <div class="footer-credits">

        <div class="container">
            <p>
                Made with&nbsp; <span style="color: #9F1D35;">&#10084;</span>&nbsp; by Teodora Milosevic. &copy;
                <?php echo date("Y"); ?>
            </p>
        </div>

    </div>

    <!-- END FOOTER -->
    
    <!-- START SCRIPTS -->

    <script type="text/javascript" src="slider.js"></script>
    <script type="text/javascript" src="pages.js"></script>

    <!-- END SCRIPTS -->

</body>

</html>