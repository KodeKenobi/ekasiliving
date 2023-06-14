<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
if (!isset($_SESSION['uemail'])) {
    header("location:login.php");
}

//// code insert
//// add code
$error="";
$msg="";
if(isset($_POST['add']))
{
	
    // Get the current timestamp
    $publishTime = time();

	$title=$_POST['title'];
	$content=$_POST['content'];
	$ptype=$_POST['ptype'];
	$bhk=$_POST['bhk'];
	$bed=$_POST['bed'];
	$balc=$_POST['balc'];
	$hall=$_POST['hall'];
	$stype=$_POST['stype'];
	$bath=$_POST['bath'];
	$kitc=$_POST['kitc'];
	$floor=$_POST['floor'];
	$price=$_POST['price'];
	$city=$_POST['city'];
	$asize=$_POST['asize'];
	$loc=$_POST['loc'];
	$province=$_POST['province'];
	$status=$_POST['status'];
	$uid=$_SESSION['uid'];
	$feature=$_POST['feature'];
	$propertyage=$_POST['propertyage'];
	
	// Process the feature options
	$feature = '';

	// Check if the radio button is checked and add its value to the feature string
	// $feature = isset($_POST['property_age']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Property Age : </span>' . $_POST['property_age'] . '</li>' : '';


	// $feature = isset($_POST['property_age']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Property Age From : </span>' . '<select class="form-control" name="property_age" required>
	// <option value="" disabled selected>Select Age</option>
	// <option value="1"' . ($_POST['property_age'] == '1' ? ' selected' : '') . '>1</option>
	// <option value="2"' . ($_POST['property_age'] == '2' ? ' selected' : '') . '>2</option>
	// <option value="3"' . ($_POST['property_age'] == '3' ? ' selected' : '') . '>3</option>
	// <option value="4"' . ($_POST['property_age'] == '4' ? ' selected' : '') . '>4</option>
	// <option value="5"' . ($_POST['property_age'] == '5' ? ' selected' : '') . '>5</option>
	// <option value="6"' . ($_POST['property_age'] == '6' ? ' selected' : '') . '>6</option>
	// <option value="7"' . ($_POST['property_age'] == '7' ? ' selected' : '') . '>7</option>
	// <option value="8"' . ($_POST['property_age'] == '8' ? ' selected' : '') . '>8</option>
	// <option value="9"' . ($_POST['property_age'] == '9' ? ' selected' : '') . '>9</option>
	// <option value="10"' . ($_POST['property_age'] == '10' ? ' selected' : '') . '>10</option>
	// </select></li>' : '';


	// $feature = isset($_POST['type']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Property Type : </span>' . '<select class="form-control" name="type" required>
	// <option value="" disabled selected>Select Property Type</option>
	// <option value="back_room"' . ($_POST['type'] == 'back_room' ? ' selected' : '') . '>Back Room</option>
	// <option value="apartment"' . ($_POST['type'] == 'apartment' ? ' selected' : '') . '>Apartment</option>
	// <option value="flat"' . ($_POST['type'] == 'flat' ? ' selected' : '') . '>Flat</option>
	// <option value="house"' . ($_POST['type'] == 'house' ? ' selected' : '') . '>House</option>
	// </select></li>' : '';




	// $feature = isset($_POST['swimming_pool']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Swimming Pool : </span>' . $_POST['swimming_pool'] . '</li>' : '';
	// $feature = isset($_POST['parking']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Parking : </span>' . $_POST['parking'] . '</li>' : '';
	// $feature = isset($_POST['gym']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">GYM : </span>' . $_POST['gym'] . '</li>' : '';
	// $feature = isset($_POST['type']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Type : </span>' . $_POST['type'] . '</li>' : '';
	// $feature = isset($_POST['security']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Security : </span>' . $_POST['security'] . '</li>' : '';
	// $feature = isset($_POST['dining_capacity']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Dining Capacity : </span>' . $_POST['dining_capacity'] . '</li>' : '';
	// $feature = isset($_POST['temple']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Temple : </span>' . $_POST['temple'] . '</li>' : '';
	// $feature = isset($_POST['third_party']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">3rd Party : </span>' . $_POST['third_party'] . '</li>' : '';
	// $feature = isset($_POST['elevator']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Elevator : </span>' . $_POST['elevator'] . '</li>' : '';
	// $feature = isset($_POST['cctv']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">CCTV : </span>' . $_POST['cctv'] . '</li>' : '';
	// $feature = isset($_POST['water_supply']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Water Supply : </span>' . $_POST['water_supply'] . '</li>' : '';
	// $feature = isset($_POST['parking2']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Parking : </span>' . $_POST['parking2'] . '</li>' : '';
	// $feature = isset($_POST['deposit']) ? '<li class="mb-3"><span class="text-secondary font-weight-bold">Deposit : </span>' . $_POST['deposit'] . '</li>' : '';
	
	$totalfloor=$_POST['totalfl'];
	
	$aimage=$_FILES['aimage']['name'];
	$aimage1=$_FILES['aimage1']['name'];
	$aimage2=$_FILES['aimage2']['name'];
	$aimage3=$_FILES['aimage3']['name'];
	$aimage4=$_FILES['aimage4']['name'];
	
	// $fimage=$_FILES['fimage']['name'];
	// $fimage1=$_FILES['fimage1']['name'];
	// $fimage2=$_FILES['fimage2']['name'];
	
	$temp_name  =$_FILES['aimage']['tmp_name'];
	$temp_name1 =$_FILES['aimage1']['tmp_name'];
	$temp_name2 =$_FILES['aimage2']['tmp_name'];
	$temp_name3 =$_FILES['aimage3']['tmp_name'];
	$temp_name4 =$_FILES['aimage4']['tmp_name'];
	
	// $temp_name5 =$_FILES['fimage']['tmp_name'];
	// $temp_name6 =$_FILES['fimage1']['tmp_name'];
	// $temp_name7 =$_FILES['fimage2']['tmp_name'];
	
	move_uploaded_file($temp_name,"admin/property/$aimage");
	move_uploaded_file($temp_name1,"admin/property/$aimage1");
	move_uploaded_file($temp_name2,"admin/property/$aimage2");
	move_uploaded_file($temp_name3,"admin/property/$aimage3");
	move_uploaded_file($temp_name4,"admin/property/$aimage4");
	
	// move_uploaded_file($temp_name5,"admin/property/$fimage");
	// move_uploaded_file($temp_name6,"admin/property/$fimage1");
	// move_uploaded_file($temp_name7,"admin/property/$fimage2");
	
	$sql="insert into property (title,pcontent,type,bhk,stype,bedroom,bathroom,balcony,kitchen,hall,floor,size,price,location,city,province,feature,pimage,pimage1,pimage2,pimage3,pimage4,uid,status,totalfloor, publish_time, propertyage)
	values('$title','$content','$ptype','$bhk','$stype','$bed','$bath','$balc','$kitc','$hall','$floor','$asize','$price',
	'$loc','$city','$province','$feature','$aimage','$aimage1','$aimage2','$aimage3','$aimage4','$uid','$status','$totalfloor', '$publishTime', '$propertyage')";


    $result = mysqli_query($con, $sql);
    if ($result) {
        $msg = "<p class='alert alert-success'>Property Inserted Successfully</p>";

        // Calculate the expiry date by adding 3 months to the publish time
        $expiryTime = strtotime('+3 months', $publishTime);

        // Display a warning message if the current time is after the expiry date
        if (time() > $expiryTime) {
            $warning = "<p class='alert alert-warning'>This post will be removed soon.</p>";
        }
    } else {
        $error = "<p class='alert alert-warning'>Property Not Inserted Some Error</p>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon-2.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<!--	Title
	=========================================================-->
	<title>Exclusive Kasi Living - Submit Property</title>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Submit Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Submit Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Submit Property</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
                        <form method="post" enctype="multipart/form-data">
								<div class="description">
									<h5 class="text-secondary">Basic Information</h5><hr>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
										<div class="row">

											<div class="col-xl-6">
											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Property Type</label>
												<div class="col-lg-9">
													<label class="form-control"><input type="radio" name="ptype" value="back_room" required> Back Room</label>
													<label class="form-control"><input type="radio" name="ptype" value="apartment" required> Apartment</label>
													<label class="form-control"><input type="radio" name="ptype" value="flat" required> Flat</label>
													<label class="form-control"><input type="radio" name="ptype" value="house" required> House</label>
												</div>
											</div>
											</div>


											<div class="col-xl-6">
											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Selling Type</label>
												<div class="col-lg-9">
													<label class="form-control"><input type="radio" name="stype" value="rent" required> Rent</label>
													<label class="form-control"><input type="radio" name="stype" value="sale" required> Sale</label>
												</div>
											</div>
											</div>


											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label" name="bath">Bathroom</label>
													<div class="col-lg-9">
														<!-- <select class="form-control" required name="stype" name="bath"> -->
														<select class="form-control" name="bath">
															<option value="" name="">Select Bathroom</option>
															<option value="1" name="bath" required>1</option>
															<option value="2" name="bath" required>2</option>
															<option value="3" name="bath" required>3</option>
															<option value="4" name="bath" required>4</option>
															<option value="5" name="bath" required>5</option>
															<option value="6" name="bath" required>6</option>
															<option value="7" name="bath" required>7</option>
															<option value="8" name="bath" required>8</option>
															<option value="9" name="bath" required>9</option>
															<option value="10" name="bath" required>10</option>
														</select>
													</div>
												</div>
											</div>


											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label" name="kitc">Kitchen</label>
													<div class="col-lg-9">
														<!-- <select class="form-control" required name="stype" name="bath"> -->
														<select class="form-control" name="kitc">
															<option value="" name="">Select Kitchen</option>
															<option value="1" name="kitc" required>1</option>
															<option value="2" name="kitc" required>2</option>
															<option value="3" name="kitc" required>3</option>
															<option value="4" name="kitc" required>4</option>
															<option value="5" name="kitc" required>5</option>
															<option value="6" name="kitc" required>6</option>
															<option value="7" name="kitc" required>7</option>
															<option value="8" name="kitc" required>8</option>
															<option value="9" name="kitc" required>9</option>
															<option value="10" name="kitc" required>10</option>
														</select>
													</div>
												</div>
											</div>




											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label" name="bed">Bedroom</label>
													<div class="col-lg-9">
														<!-- <select class="form-control" required name="stype" name="bath"> -->
														<select class="form-control" name="bed">
															<option value="" name="">Select Bedroom</option>
															<option value="1" name="bed" required>1</option>
															<option value="2" name="bed" required>2</option>
															<option value="3" name="bed" required>3</option>
															<option value="4" name="bed" required>4</option>
															<option value="5" name="bed" required>5</option>
															<option value="6" name="bed" required>6</option>
															<option value="7" name="bed" required>7</option>
															<option value="8" name="bed" required>8</option>
															<option value="9" name="bed" required>9</option>
															<option value="10" name="bed" required>10</option>
														</select>
													</div>
												</div>
											</div>




											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label" name="balc">Balcony</label>
													<div class="col-lg-9">
														<!-- <select class="form-control" required name="stype" name="bath"> -->
														<select class="form-control" name="balc">
															<option value="" name="">Select Balcony</option>
															<option value="1" name="balc" required>1</option>
															<option value="2" name="balc" required>2</option>
															<option value="3" name="balc" required>3</option>
															<option value="4" name="balc" required>4</option>
															<option value="5" name="balc" required>5</option>
															<option value="6" name="balc" required>6</option>
															<option value="7" name="balc" required>7</option>
															<option value="8" name="balc" required>8</option>
															<option value="9" name="balc" required>9</option>
															<option value="10" name="balc" required>10</option>
														</select>
													</div>
												</div>
											</div>


										</div>


										<h5 class="text-secondary">Price & Location</h5><hr>

										<div class="row">
											<div class="col-xl-6">
											    <div class="form-group row">
											        <label class="col-lg-3 col-form-label">Price</label>
											        <div class="col-lg-9">
											            <input type="text" class="form-control" name="price" required placeholder="Enter Price">
											        </div>
											    </div>

											    <div class="form-group row">
											        <label class="col-lg-3 col-form-label">Province</label>
											        <div class="col-lg-9">
											            <select class="form-control" name="province" required onchange="populateCities(this)">
											                <option value="">Select Province</option>
											                <option value="Eastern Cape">Eastern Cape</option>
											                <option value="Free State">Free State</option>
											                <option value="Gauteng">Gauteng</option>
											                <option value="KwaZulu-Natal">KwaZulu-Natal</option>
											                <option value="Limpopo">Limpopo</option>
											                <option value="Mpumalanga">Mpumalanga</option>
											                <option value="North West">North West</option>
											                <option value="Northern Cape">Northern Cape</option>
											                <option value="Western Cape">Western Cape</option>
											            </select>
											        </div>
											    </div>

											    <div class="form-group row">
											        <label class="col-lg-3 col-form-label">City</label>
											        <div class="col-lg-9">
											            <select class="form-control" name="city" required>
											                <option value="">Select City</option>
											            </select>
											        </div>
											    </div>

											</div>


											
											<div class="col-xl-6">


												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="asize" required placeholder="Enter Area Size (in meters)">
													</div>
												</div>


												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="loc" required placeholder="Enter Address">
													</div>
												</div>
												
											</div>
										</div>
										

										<h5 class="text-secondary">Features</h5><hr>

										<div class="row">
										<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label" name="propertyage">Property Age From</label>
													<div class="col-lg-9">
														<!-- <select class="form-control" required name="stype" name="bath"> -->
														<select class="form-control" name="propertyage">
															<option value="" name="">Select Balcony</option>
															<option value="1" name="propertyage" required>1</option>
															<option value="2" name="propertyage" required>2</option>
															<option value="3" name="propertyage" required>3</option>
															<option value="4" name="propertyage" required>4</option>
															<option value="5" name="propertyage" required>5</option>
															<option value="6" name="propertyage" required>6</option>
															<option value="7" name="propertyage" required>7</option>
															<option value="8" name="propertyage" required>8</option>
															<option value="9" name="propertyage" required>9</option>
															<option value="10" name="propertyage" required>10</option>
														</select>
													</div>
												</div>
											</div>


											<div class="col-xl-6">
											    <div class="form-group row">
											        <label class="col-lg-3 col-form-label">Property Type</label>
											        <div class="col-lg-9">
														<ul>
														  	<li class="mb-3 ">
																<select class="form-control" name="type" required>
																	<option value="" disabled selected>Select Property Type</option>
																	<option value="back_room" <?php if ($_POST['type'] == 'back_room') echo 'selected'; ?>>Back Room</option>
																	<option value="apartment" <?php if ($_POST['type'] == 'apartment') echo 'selected'; ?>>Apartment</option>
																	<option value="flat" <?php if ($_POST['type'] == 'flat') echo 'selected'; ?>>Flat</option>
																	<option value="house" <?php if ($_POST['type'] == 'house') echo 'selected'; ?>>House</option>
																</select>
														  	</li>
														</ul>
											        </div>
											    </div>
											</div>

											
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Swimming Pool : </label>
													<div class="col-lg-9 col-lg-3 col-form-label">
														<label class="radio-inline">
          													<input type="radio" name="swimming_pool" value="Yes" required <?php if ($_POST['swimming_pool'] == 'Yes') echo 'checked'; ?>> Yes
          												</label>
          												<label class="radio-inline">
          													<input type="radio" name="swimming_pool" value="No" required <?php if ($_POST['swimming_pool'] == 'No') echo 'checked'; ?>> No
          												</label>
													</div>
												</div>
											</div>


											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Parking : </label>
													<div class="col-lg-9 col-lg-3 col-form-label">
														<label class="radio-inline">
            											  <input type="radio" name="parking" value="Yes" required <?php if ($_POST['parking'] == 'Yes') echo 'checked'; ?>> Yes
            											</label>
            											<label class="radio-inline">
            											  <input type="radio" name="parking" value="No" required <?php if ($_POST['parking'] == 'No') echo 'checked'; ?>> No
            											</label>
													</div>
												</div>
											</div>



										</div>











<div class="form-group row">
	<label class="col-lg-2 col-form-label">Feature</label>
	<div class="col-lg-9">
    <!-- <p class="alert alert-danger">* Important Please Do Not Remove Below Content Only Change <b>Yes</b> Or <b>No</b> or Details and Do Not Add More Details</p> -->



	<div class="col-xl-6">
	<div class="form-group row">

        <ul>
          <li class="mb-3"><span class="text-secondary font-weight-bold">GYM : </span>
            <label class="radio-inline">
              <input type="radio" name="gym" value="Yes" required <?php if ($_POST['gym'] == 'Yes') echo 'checked'; ?>> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="gym" value="No" required <?php if ($_POST['gym'] == 'No') echo 'checked'; ?>> No
            </label>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul>
          <li class="mb-3"><span class="text-secondary font-weight-bold">Type : </span>Appartment</li>
          <li class="mb-3"><span class="text-secondary font-weight-bold">Security : </span>
            <label class="radio-inline">
              <input type="radio" name="security" value="Yes" required <?php if ($_POST['security'] == 'Yes') echo 'checked'; ?>> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="security" value="No" required <?php if ($_POST['security'] == 'No') echo 'checked'; ?>> No
            </label>
          </li>
          <li class="mb-3"><span class="text-secondary font-weight-bold">Dining Capacity : </span>10 People</li>
          <li class="mb-3"><span class="text-secondary font-weight-bold">Temple  : </span>
		  <label class="radio-inline">
              <input type="radio" name="temple" value="Yes" required <?php if ($_POST['temple'] == 'Yes') echo 'checked'; ?>> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="temple" value="No" required <?php if ($_POST['temple'] == 'No') echo 'checked'; ?>> No
            </label>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul>
          <li class="mb-3"><span class="text-secondary font-weight-bold">3rd Party : </span>
            <label class="radio-inline">
              <input type="radio" name="third_party" value="Yes" required <?php if ($_POST['third_party'] == 'Yes') echo 'checked'; ?>> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="third_party" value="No" required <?php if ($_POST['third_party'] == 'No') echo 'checked'; ?>> No
            </label>
          </li>
          <li class="mb-3"><span class="text-secondary font-weight-bold">Elevator : </span>
            <label class="radio-inline">
              <input type="radio" name="elevator" value="Yes" required <?php if ($_POST['elevator'] == 'Yes') echo 'checked'; ?>> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="elevator" value="No" required <?php if ($_POST['elevator'] == 'No') echo 'checked'; ?>> No
            </label>
          </li>
          <li class="mb-3"><span class="text-secondary font-weight-bold">CCTV : </span>
            <label class="radio-inline">
              <input type="radio" name="cctv" value="Yes" required <?php if ($_POST['cctv'] == 'Yes') echo 'checked'; ?>> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="cctv" value="No" required <?php if ($_POST['cctv'] == 'No') echo 'checked'; ?>> No
            </label>
          </li>
          <li class="mb-3"><span class="text-secondary font-weight-bold">Water Supply : </span><?php echo $_POST['water_supply']; ?></li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul>
          <li class="mb-3"><span class="text-secondary font-weight-bold">Parking : </span>
            <label class="radio-inline">
              <input type="radio" name="parking2" value="Yes" required <?php if ($_POST['parking2'] == 'Yes') echo 'checked'; ?>> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="parking2" value="No" required <?php if ($_POST['parking2'] == 'No') echo 'checked'; ?>> No
            </label>
          </li>
          <li class="mb-3"><span class="text-secondary font-weight-bold">Deposit : </span>
            <label class="radio-inline">
              <input type="radio" name="deposit" value="Yes" required <?php if ($_POST['deposit'] == 'Yes') echo 'checked'; ?>> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="deposit" value="No" required <?php if ($_POST['deposit'] == 'No') echo 'checked'; ?>> No
            </label>
          </li>
          <li class="mb-3"><span class="text-secondary font-weight-bold">Electricity : </span><?php echo $_POST['electricity']; ?></li>
          <li class="mb-3"><span class="text-secondary font-weight-bold">Utilities : </span><?php echo $_POST['utilities']; ?></li>
        </ul>
      </div>
    </div>
    <!---feature area end---->
  </div>
</div>











												
										<h5 class="text-secondary">Image & Status</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage2" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage4" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"  required name="status">
															<option value="">Select Status</option>
															<option value="available">Available</option>
															<option value="sold out">Sold Out</option>
														</select>
													</div>
												</div>
												<!-- <div class="form-group row">
													<label class="col-lg-3 col-form-label">Basement Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage1" type="file">
													</div>
												</div> -->
											</div>
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage1" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage3" type="file" required="">
													</div>
												</div>
												
												<!-- <div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage" type="file">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Ground Floor Plan Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="fimage2" type="file">
													</div>
												</div> -->
											</div>
										</div>
										<div class="row">
											<div class="col-xl-12">
													<div class="form-group row">
														<label class="col-lg-2 col-form-label">Title</label>
														<div class="col-lg-9">
															<input type="text" class="form-control" name="title" required placeholder="Enter Title, eg, Room For Rent">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-lg-2 col-form-label">Description</label>
														<div class="col-lg-9">
															<textarea class="tinymce form-control" name="content" rows="10" cols="30"></textarea>
														</div>
													</div>

											</div>

											<input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:200px;">
										</div>
										
								</div>
								</form>
                    </div>            
            </div>
        </div>
	<!--	Submit property   -->
        
        
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 

<script>
    function populateCities(selectElement) {
        var cities = {
            "Eastern Cape": ["Aliwal North", "Bhisho", "Butterworth", "Cradock", "Despatch", "East London", "Fort Beaufort", "Graaff-Reinet", "Grahamstown", "Joubertina", "King William's Town", "Kirkwood", "Mthatha", "Port Alfred", "Port Elizabeth", "Queenstown", "Somerset East", "Steynsburg", "Uitenhage"],
            "Free State": ["City D", "City E", "City F"],
            "Gauteng": ["City G", "City H", "City I"],
            "KwaZulu-Natal": ["City J", "City K", "City L"],
            "Limpopo": ["City M", "City N", "City O"],
            "Mpumalanga": ["City P", "City Q", "City R"],
            "North West": ["City S", "City T", "City U"],
            "Northern Cape": ["City V", "City W", "City X"],
            "Western Cape": ["City Y", "City Z"]
        };

        var citySelect = document.getElementsByName("city")[0];
        var selectedProvince = selectElement.value;

        // Clear existing options
        citySelect.innerHTML = '<option value="">Select City</option>';

        // Populate cities based on the selected province
        if (selectedProvince in cities) {
            var provinceCities = cities[selectedProvince];
            for (var i = 0; i < provinceCities.length; i++) {
                var option = document.createElement("option");
                option.text = provinceCities[i];
                option.value = provinceCities[i];
                citySelect.appendChild(option);
            }
        }
    }
</script>

<script src="js/jquery.min.js"></script> 
<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/tinymce/init-tinymce.min.js"></script>
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>