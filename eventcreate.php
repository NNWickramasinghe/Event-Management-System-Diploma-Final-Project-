<?php
    require 'connection.php';
    if(isset($_POST["submit"])){
        $name = $_POST["eventName"];
        $venu = $_POST["eventVenue"];
        $timee = $_POST["eventDate&Time"];
        $type = $_POST['type'];
        if($_FILES["eventImage"]["error"]  ===  4){
            echo
            "<script> alert('Image Does Not Exist'); </script>"
            ;
        }
        else{
            $fileName = $_FILES["eventImage"]["name"];
            $fileSize = $_FILES["eventImage"]["size"];
            $tmpName = $_FILES["eventImage"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if(!in_array($imageExtension, $validImageExtension)){
                echo
                "<script> alert('Invalid Image Extension'); </script>"
                ;

            }
            else if($fileSize > 1000000){
                echo
                "<script> alert('Image Size Is Too Large'); </script>"
                ;
            }
            else{
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, 'uploads/' . $newImageName);
                $query = "INSERT INTO event_details VALUES('', '$name','$venu','$newImageName','$timee','$type')";
                mysqli_query($conn, $query);
                
                header("Location: ticket.php");
                exit();
                ;
            }
        }
    }
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>event</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet"  href="style.css">
</head>
<body>
	<!--header-->
  <section class="header">
    <a href="eventhome.php" class="logo">EventEase</a>
    <nav class="navbar">
      <a href="eventhome.php">home</a>
      <a href="updategallery.php">gallery</a>
      <a href="eventcreate.php">create</a>
      <a href="ticket.php">ticket</a>
      <a href="selectartist.php">select</a>
      <a href="eventview.php">view</a>
      <a href="loginfrom.php">logout</a>
    </nav>

		<div id="menu-btn" class="fa fa-bars"></div>
        
			
	</section>

	<div class="heading" style="background:url(finalpic/j.jpg) no-repeat">
		<h1>create event</h1>
	</div>

<section class="booking">
	<h1 class="heading-title">create event!</h1>
	<form  class="book-form" method="POST"  enctype="multipart/form-data">
		<div class="flex">
			<div class="inputBox">
				<label for="eventName">event name :</label>
				<input type="text" placeholder="enter your name" name="eventName" id="eventName" required>
			</div>
			<div class="inputBox">
				<label for="eventVenue">venue :</label>
				<input type="text" placeholder="enter you event place" name="eventVenue" id="eventVenue" required>
			</div>
            <div class="inputBox">
                <label for="eventImage">Image : </label>
                <input type="file" name="eventImage" id="eventImage" accept=".jpg, .jpeg, .png" value="">
            </div>
			<div class="inputBox">
				<label for="eventDate&Time">event time :</label>
				<input type="datetime-local"  name="eventDate&Time" id="timeeeventDate&Time">
			</div>
            <div class="inputBox">
                    <label for="type">Choose event type:</label>
                    <select name="type" id="type">
                        <option value="indoor">indoor</option>
                        <option value="outdoor">outdoor</option>
                    </select>
            </div>
		</div>
        <input type="submit"  class="btn"  name="submit">
	</form>
</section>


    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> gallery</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> select</a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> 091 1234567</a>
                <a href="#"><i class="fas fa-phone"></i> 091 9876543</a>
                <a href="#"><i class="fas fa-envelope"></i> eventease@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Sri Lanka,Wackwalla,Galle,001</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>
    </section>
    
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="script.js"></script>	
    
    </body>
    </html>