<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
		
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon-2.png">

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
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/flaticon.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Peekobot custom properties (CSS variables) - set these! -->
    <style>
    :root {
        --peekobot-height: 80vh;
        --peekobot-avatar: url();
    }
    </style>
    <!-- Peekobot styles -->
    <link rel="stylesheet" href="css/peekobot.css">

    <!--	Title
	=========================================================-->
    <title>Exclusive Kasi Living - Home</title>

</head>

<!-- Chat Bot Code -->
<!-- <div id="assistant-widget-05cb6cd7-272e-4c5a-9a4c-fb1036d47ed4"></div>
  <script src="https://unpkg.com/assistant-widget@1.5.6/dist/lib.js"></script>
  <script>
      WAWidget.init({
          el: document.querySelector("#assistant-widget-05cb6cd7-272e-4c5a-9a4c-fb1036d47ed4"),
          endpoint: "https://assistant.workativ.com/widget",
          widget_id: "05cb6cd7-272e-4c5a-9a4c-fb1036d47ed4",
          openByDefault: false
      });
  </script> -->
<!-- Chat Bot Code End -->



<!-- Chatbot Widget Container --
<div id="chatbot-widget-container">
  <div id="chatbot-widget-header">
    <h2>Chat with me!</h2>
    <button id="chatbot-widget-toggle"><i class="fas fa-chevron-up"></i></button>
  </div>
  <div id="chatbot-widget-body">
    <div id="chatbot-widget-messages"></div>
    <form id="chatbot-widget-form">
      <input type="text" id="chatbot-widget-input" autocomplete="off">
      <button type="submit"><i class="fas fa-paper-plane"></i></button>
    </form>
  </div>
</div>

<!-- Chatbot Widget Styles --



<style>
#chatbot-widget-container {
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 300px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0px 0px 5px #ccc;
  z-index: 9999;
}

#chatbot-widget-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #eee;
  padding: 10px;
  border-bottom: 1px solid #ccc;
  border-radius: 5px 5px 0px 0px;
}

#chatbot-widget-header h2 {
  margin: 0;
  font-size: 16px;
  font-weight: normal;
}

#chatbot-widget-toggle {
  background-color: transparent;
  border: none;
  font-size: 24px;
  cursor: pointer;
  outline: none;
}

#chatbot-widget-body {
  display: none;
  padding: 10px;
}

#chatbot-widget-messages {
  height: 200px;
  overflow-y: scroll;
  display: flex;
  gap: 10px;
  margin-bottom: 10px;
  flex-direction: column;
  scroll-behavior: smooth; /* add this line */
}

.chatbot-widget-message {
  max-width: 70%;
  padding: 10px;
  border-radius: 5px;
  font-size: 16px;
  line-height: 1.5;
  box-shadow: 0px 0px 5px #ccc;
}

.chatbot-widget-user-message {
  align-self: flex-end;
  background-color: #d1e8ff;
  color: #000;
}

.chatbot-widget-chatbot-message {
  align-self: flex-start;
  background-color: #fff;
  color: #000;
}

#chatbot-widget-form {
  display: flex;
  margin-top: 10px;
}

#chatbot-widget-form input[type="text"] {
  flex: 1;
  padding: 12px;
  border: solid 1px #ccc;
  border-radius: 10px;
  background-color: #F4F4F4;
  height: 50px;
  font-size: 16px;
  color: #333;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
}

#chatbot-widget-form input[type="text"]:focus {
  outline: none;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}

#chatbot-widget-form button[type="submit"] {
  padding: 12px 20px;
  border: none;
  background-color: #fff;
  color: #000;
  border-radius: 0px 50px 50px 0px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}


</style>

<!-- Chatbot Widget Script --
<script>
  const chatbotWidgetContainer = document.getElementById('chatbot-widget-container');
  const chatbotWidgetHeader = document.getElementById('chatbot-widget-header');
  const chatbotWidgetToggle = document.getElementById('chatbot-widget-toggle');
  const chatbotWidgetBody = document.getElementById('chatbot-widget-body');
  const chatbotWidgetMessages = document.getElementById('chatbot-widget-messages');
  const chatbotWidgetForm = document.getElementById('chatbot-widget-form');
  const chatbotWidgetInput = document.getElementById('chatbot-widget-input');

  function showChatbotWidget() {
    chatbotWidgetBody.style.display = 'block';
    chatbotWidgetToggle.textContent = '-';
  }

  function hideChatbotWidget() {
    chatbotWidgetBody.style.display = 'none';
    chatbotWidgetToggle.textContent = '+';
  }

  function toggleChatbotWidget() {
    if (chatbotWidgetBody.style.display === 'none') {
      showChatbotWidget();
    } else{
hideChatbotWidget();
}
}

function addMessageToWidget(message, sender) {
  const messageDiv = document.createElement('div');
  messageDiv.classList.add('chatbot-widget-message');
  if (sender === 'user') {
    messageDiv.classList.add('chatbot-widget-user-message');
    messageDiv.innerHTML = `<div class="chatbot-widget-user-message-bubble">${message}</div>`;
  } else {
    messageDiv.classList.add('chatbot-widget-chatbot-message');
    messageDiv.innerHTML = `<div class="chatbot-widget-chatbot-message-bubble">${message}</div>`;
  }
  chatbotWidgetMessages.appendChild(messageDiv);
}

chatbotWidgetToggle.addEventListener('click', toggleChatbotWidget);

chatbotWidgetForm.addEventListener('submit', (event) => {
  event.preventDefault();
  const userMessage = chatbotWidgetInput.value;
  addMessageToWidget(userMessage, 'user');
  chatbotWidgetInput.value = '';
  
  if (userMessage.toLowerCase().includes('hello')) {
    addMessageToWidget('Hi there!', 'chatbot');
  } else if (userMessage.toLowerCase().includes('how are you') || userMessage.toLowerCase().includes('how are you doing') || userMessage.toLowerCase().includes('how do you do')) {
    addMessageToWidget('I am a chatbot, so I am always good. How can I assist you?', 'chatbot');
  } else if (userMessage.toLowerCase().includes('bye')) {
    addMessageToWidget('Goodbye!', 'chatbot');
    setTimeout(hideChatbotWidget, 1000); // hide the widget after 1 second
  } else if (userMessage.toLowerCase().includes('exit')) {
    hideChatbotWidget();
  } else {
    addMessageToWidget('I am sorry, I did not understand. Can you please try again?', 'chatbot');
  }
});


</script>

End of Chatbot Widget Script -->



<body>

    <!--	Page Loader  -->
    <!--<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>  -->
    <!--	Page Loader  -->

    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php");?>
            <!--	Header end  -->

            <!--	Banner Start   -->
            <div class="overlay-black w-100 slider-banner1 position-relative animate__animated animate__slideInDown"
                style="background-image: url('images/banner/04.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-12">
                            <div class="text-white">
                                <h1 class="mb-4 animate__animated animate__slideInRight"><span
                                        class="text-primary">Township</span>
                                    Properties </h1>
                                <h1 class="mb-4 animate__animated animate__slideInLeft"><span
                                        class="text-warning">Welcome</span> <span>To Your</span>
                                    New Home</h1>
                                <form method="post" action="propertygrid.php">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="type">
                                                    <option value="">Select Type</option>
                                                    <option value="Room">Room</option>
                                                    <option value="Back Room">Back Room</option>
                                                    <option value="Apartment">Apartment</option>
                                                    <option value="Flat">Flat</option>
                                                    <option value="House">House</option>
                                                    <option value="Cottage">Cottage</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="stype">
                                                    <option value="">Select Status</option>
                                                    <option value="Rent">Rent</option>
                                                    <option value="Sale">Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="city"
                                                    placeholder="Enter City" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-2">
                                            <div class="form-group">
                                                <button type="submit" name="filter" class="btn btn-primary w-100">Search
                                                    Property</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner End  -->

            <!--	Text Block One
		======================================================-->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2>
                        </div>
                    </div>
                    <div class="text-box-one">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <!-- <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-rent text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Kasi Property</a></h5>
                                
                            </div> -->
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-for-rent fas fa-home text-primary flat-medium"
                                        aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Kasi Renting</a>
                                    </h5>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-list fas fa-list text-primary flat-medium"
                                        aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Kasi Listing</a>
                                    </h5>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <!-- <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-diagram text-primary flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Kasi Investments</a></h5>
                               
                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-----  Our Services  ---->

            <!--	Popular Places -->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">Kasi Property Rentals</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 pb-1">
                                <div
                                    class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9">
                                    <img src="images/thumbnail4/1.jpg" style="height:340px" alt="Kasi Property Rentals">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
									$query=mysqli_query($con,"SELECT count(city) as prop_count, property.* FROM property where city like '%soweto%'");
										while($row=mysqli_fetch_assoc($query))
											{
									?>
                                        <h4 class="hover-text-primary text-capitalize"><a
                                                href="stateproperty.php?id=<?php echo $row['city']?>"><?php echo $row['city'];?></a>
                                        </h4>
                                        <span><?php 
											$total = $row['prop_count'];
											echo $total;?> Properties Listed</span>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 pb-1">
                                <div
                                    class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9">
                                    <img src="images/thumbnail4/2.jpg" style="height:340px" alt="Kasi Property Rentals">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
									$query=mysqli_query($con,"SELECT count(city), property.* FROM property where city='Brakpan' or 'Soweto'");
										while($row=mysqli_fetch_array($query))
											{
									?>
                                        <h4 class="hover-text-primary text-capitalize"><a
                                                href="stateproperty.php?id=<?php echo $row['city']?>"><?php echo $row['city'];?></a>
                                        </h4>
                                        <span><?php 
											$total = $row[0];
											echo $total;?> Properties Listed</span>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 pb-1">
                                <div
                                    class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9">
                                    <img src="images/thumbnail4/3.jpg" style="height:340px" alt="Kasi Property Rentals">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
									$query=mysqli_query($con,"SELECT count(city), property.* FROM property where city='alexandra' or 'Alexandra'");
										while($row=mysqli_fetch_array($query))
											{
									?>
                                        <h4 class="hover-text-primary text-capitalize"><a
                                                href="stateproperty.php?id=<?php echo $row['city']?>"><?php echo $row['city'];?></a>
                                        </h4>
                                        <span><?php 
											$total = $row[0];
											echo $total;?> Properties Listed</span>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- <div class="col-md-6 col-lg-3 pb-1">
                            <div class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9"> <img src="images/thumbnail4/4.jpg" alt="">
                                <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                    <?php
										$query=mysqli_query($con,"SELECT count(state), property.* FROM property where state='gauteng' or 'Gauteng'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <h4 class="hover-text-primary text-capitalize"><a href="stateproperty.php?id=<?php echo $row['17']?>"><?php echo $row['state'];?></a></h4>
                                    <span><?php 
												$total = $row[0];
												echo $total;?> Properties Listed</span> </div>
									<?php } ?>
                            </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--	Popular Places -->

            <!--	Recent Properties  -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-secondary double-down-line text-center mb-4">Recent Property</h2>
                        </div>
                        - <div class="col-md-6">
                        <ul class="nav property-btn float-right" id="pills-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link py-3 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">New</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Featured</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Top Sale</a> </li>
                            <li class="nav-item"> <a class="nav-link py-3" id="pills-contact-tab3" data-toggle="pill" href="#pills-resturant" role="tab" aria-controls="pills-contact" aria-selected="false">Best Sale</a> </li>
                        </ul>
                    </div> -
                        <div class="col-md-12">
                            <div class="tab-content mt-4" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home">
                                    <div class="row">

                                        <?php $query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
										while($row=mysqli_fetch_array($query))
										{
									?>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="featured-thumb hover-zoomer mb-4">
                                                <div class="overlay-black overflow-hidden position-relative"> <img
                                                        src="admin/property/<?php echo $row['20'];?>" alt="pimage"
                                                        style="height:340px">
                                                    <div class="featured bg-primary text-white">New</div>
                                                    <div class="sale bg-secondary text-white text-capitalize">For
                                                        <?php echo $row['5'];?></div>
                                                    <!-- <div class="price text-primary"><b>$<?php echo $row['14'];?> </b><span class="text-white"><?php echo $row['12'];?> Sqft</span></div> -->
                                                </div>
                                                <div class="featured-thumb-data shadow-one text-center">
                                                    <div class="p-3">
                                                        <h5
                                                            class="text-secondary hover-text-primary mb-2 text-capitalize">
                                                            <a
                                                                href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a>
                                                        </h5>
                                                        <span class="location text-capitalize"><i
                                                                class="fas fa-map-marker-alt text-primary"></i>
                                                            <?php echo $row['17'] . ', ' . $row['18'];?></span>
                                                    </div>
                                                    <div class="bg-gray quantity px-4 pt-4 text-center">
                                                        <ul>
                                                            <!-- <li><span><?php echo $row['12'];?></span> Sqft</li> -->
                                                            <li><span><?php echo $row['6'];?></span> Rooms</li>
                                                            <li><span><?php echo $row['7'];?></span> Baths</li>
                                                            <li><span><?php echo $row['9'];?></span> Kitchen</li>
                                                            <li><span><?php echo $row['8'];?></span> Balcony</li>
                                                        </ul>
                                                    </div>

                                                    <!-- <div class="p-4 d-inline-block w-100">
        <div class="float-left text-capitalize"><i class="fas fa-user text-primary mr-1"></i>By : <?php echo $row['uname'];?></div>
        <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 6 Months Ago</div>
    </div> -->
                                                </div>

                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Recent Properties  -->

            <!--	Why Choose Us -->
            <div class="full-row living bg-one overlay-secondary-half"
                style="background-image: url('images/haddyliving.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="living-list pr-4">
                                <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                                <ul>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="fas fa-award flat-medium float-left d-table mr-4 text-primary"
                                            aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Certified professionals</h5>
                                            <p>It is our commitment to provide you with exceptional service from a team
                                                of highly skilled, uniquely talented individuals with high integrity,
                                                extensive professional knowledge and experience, far‐reaching
                                                connections and excellence in home marketing.</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="fas fa-building flat-medium float-left d-table mr-4 text-primary"
                                            aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Powerful Ideas</h5>
                                            <p>Not all ideas are created equal. The success of your sale or purchase
                                                will depend on the quality of the ideas used to ensure you get the best
                                                results.</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="fas fa-user flat-medium float-left d-table mr-4 text-primary"
                                            aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Trusted Team</h5>
                                            <p>Every single day - we take a stand for our clients. As expert real estate
                                                strategists - we simply won’t do the deal unless it’s a great deal and
                                                you are completely happy.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--	why choose us -->

            <!--	How it work -->
            <!-- <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">1</div>
                            <div class="left-arrow"><i class="flaticon-investor flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">2</div>
                            <div class="left-arrow"><i class="flaticon-search flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">3</div>
                            <div><i class="flaticon-handshake flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

            <!--	How It Work -->

            <!--	Achievement
        ============================================================-->
            <div class="full-row overlay-light mt-5"
                style="background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="fact-counter">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-house flat-large text-primary" aria-hidden="true"></i>
                                    <?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
                                    <?php } ?>
                                    <div class="text-dark h5">Property Available</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-house flat-large text-primary" aria-hidden="true"></i>
                                    <?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='sale'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
                                    <?php } ?>
                                    <div class="text-dark h5">Sale Property Available</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-house flat-large text-primary" aria-hidden="true"></i>
                                    <?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='rent'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                    <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
                                    <?php } ?>
                                    <div class="text-dark h5">Rent Property Available</div>
                                </div>
                            </div>
                            <!-- <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                <?php
										$query=mysqli_query($con,"SELECT count(uid) FROM user");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Registered Users</div>
                            </div>
                        </div> -->

                        </div>
                    </div>
                </div>
            </div>



            <!--	Testonomial -->
            <!-- <div class="full-row">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
						<div class="content-sidebar p-4">
							<div class="mb-3 col-lg-12">
								<h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Testimonial</h4>
									<div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-primary">
									
										<?php
													
												$query=mysqli_query($con,"select feedback.*, user.* from feedback,user where feedback.uid=user.uid and feedback.status='1'");
												while($row=mysqli_fetch_array($query))
													{
										?>
										<div class="item">
											<div class="p-4 bg-primary down-angle-white position-relative">
												<p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i><?php echo $row['2']; ?>. <i class="fas fa-quote-right mr-2 text-white"></i></p>
											</div>
											<div class="p-2 mt-4">
												<span class="text-primary d-table text-capitalize"><?php echo $row['uname']; ?></span> <span class="text-capitalize"><?php echo $row['utype']; ?></span>
											</div>
										</div>
										<?php }  ?>
										
									</div>
							</div>
						 </div>
					</div>
				</div>
			</div>
		</div> -->
            <!--	Testonomial -->


            <!--	Footer   start-->
            <?php include("include/footer.php");?>
            <!--	Footer   start-->


            <!-- Scroll to top -->
            <!-- <a href="#" class="bg-primary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>  -->
            <!-- End Scroll To top -->
        </div>
    </div>
    <!-- Wrapper End -->

    <!--	Js Link
============================================================-->
    <script src="js/jquery.min.js"></script>
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
    <script src="js/YouTubePopUp.jquery.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/conversation.js"></script>
    <script src="js/peekobot.js"></script>

    <!-- Chat Bot Time Out Code -->
    <script>
    window.onload = () => {

        setTimeout(() => {
            var chat_bot = document.querySelectorAll("button");
            chat_bot[0].click();
            // chat_bot.click();
            // console.log(chat_bot[0]);
        }, 2000);

    }
    </script>
    <!-- Chat Bot Time Out Code End -->



    <!-- <script>
window.onload = function () {
  var span = document.createElement('span');

  span.className = 'fas';
  span.style.display = 'none';
  document.body.insertBefore(span, document.body.firstChild);
  
  alert(window.getComputedStyle(span, null).getPropertyValue('font-family'));
    
  document.body.removeChild(span);
};
</script> -->




</body>

</html>