<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");							
?>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
  @media (max-width: 767px) {
    .nav.item {
      margin-left: 17px;
      margin-top: -32px;
    }
    .navbar-brand {
    display: flex;
    align-items: center;
  }

  .navbar-brand img {
    margin-right: 208px !important; /* Optional: Add some spacing between the logo and text */
  }
  }


</style>

<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
    <div class="top-header bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="top-contact list-text-white d-table">

                        <?php if(isset($_SESSION['uphone'])) { ?>

                        <li><a href="#"><i
                                    class="fas fa-phone-alt text-primary mr-1"></i><?php echo $_SESSION['uphone']; ?></a>
                        </li>

                        <?php } else { ?>

                        <li><a href="#"><i class="fas fa-phone-alt text-primary mr-1"></i>(012) 345 678 102</a>
                        </li>
                        <?php } ?>


                        <?php if(isset($_SESSION['uemail'])) { ?>

                        <li><a href="#"><i
                                    class="fas fa-envelope text-primary mr-1"></i><?php echo $_SESSION['uemail']; ?></a>
                        </li>

                        <?php } else { ?>

                        <li><a href="#"><i class="fas fa-envelope text-primary mr-1"></i>info@kasirentals.com</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="top-contact float-right">
                        <ul class="list-text-white d-table">
                            <li>
                                <i class="fas fa-user text-primary mr-1"></i>
                                <?php if(isset($_SESSION['uemail'])) { ?>
                                <a href="logout.php">Logout</a>&nbsp;&nbsp;
                                <?php } else { ?>
                                <a href="login.php">Login</a>&nbsp;&nbsp;
                                <?php } ?>
                                |
                            </li>
                            <li><i class="fas fa-user text-primary mr-1"></i><a href="register.php"> Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-nav secondary-nav hover-primary-nav py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative"
                            href="index.php"><img class="nav-logo animate__animated animate__slideInDown"
                                src="img_new/logo.png" alt="" style="height: 55px;"></a><b
                            class="animate__animated animate__slideInDown link-dark"
                            style="color:black; font-size:large;"><span><a href="" style="color:black;"></a></span></b>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"> <span
                                class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto ">
                                <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button"
                                        aria-haspopup="true" aria-expanded="false">Home</a></li>

                                <li class="nav-item"> <a class="nav-link" href="about.php">About</a> </li>

                                <!-- <li class="nav-item"> <a class="nav-link" href="agent.php">Agent</a> </li> -->

                                <li class="nav-item"> <a class="nav-link" href="property.php">Properties</a> </li>
                                <!-- <li class="nav-item"> <a class="nav-link" href="contact.php"></a>Contact </li> -->

                                <?php  if(isset($_SESSION['uemail']))
										{ ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Landlord Registration</a>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item"> <a class="nav-link" href="feature.php">Your Property</a>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link" href="submitproperty.php">Add
                                                Property</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>
                                    </ul>
                                </li>
                                <?php } else { ?>
                                <li class="nav-item"> <a class="nav-link" href="login.php">Landlord Registration</a>
                                </li>
                                <?php } ?>

                            </ul>


                            <a class="btn btn-primary d-none d-xl-block" href="contact.php">Contact Us</a>
                            <!-- &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;<a style="color: #25d366;"
                            href="https://api.whatsapp.com/send/?phone=<?php echo $_SESSION['uphone']; ?>&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer" role="button">
                                <i class="fab fa-whatsapp fa-2x"></i></a>
                            &nbsp;&nbsp;&nbsp;&nbsp; -->

                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <?php  
                                if(isset($_SESSION['uemail'])) { // Check if the 'uemail' session variable is set
                            ?>
                            <?php if(isset($_SESSION['uname'])) { ?>
                            <i class="nav item"><?php echo $_SESSION['uname']; ?></i>
                            <?php } ?>
                            <?php 
                                } 
                            ?>


                            <!-- <?php if(isset($_SESSION['uemail'])) { ?>
                            <li><a href="#"><i
                                        class="fas fa-envelope text-primary mr-1"></i><?php echo $_SESSION['uemail']; ?></a>
                            </li>
                            <?php } else { ?>
                            <li><a href="#"><i class="fas fa-envelope text-primary mr-1"></i>office@example.com</a></li>
                            <?php } ?> -->


                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

</html>