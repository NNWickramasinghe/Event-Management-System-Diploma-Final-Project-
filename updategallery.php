<?php
    require 'connection.php';
    
    // Check if form is submitted
    if(isset($_POST["submit"])) {
        if($_FILES["eventImage"]["error"] === 4) {
            echo "<script>alert('Image Does Not Exist');</script>";
        } else {
            $fileName = $_FILES["eventImage"]["name"];
            $fileSize = $_FILES["eventImage"]["size"];
            $tmpName = $_FILES["eventImage"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            
            if(!in_array($imageExtension, $validImageExtension)) {
                echo "<script>alert('Invalid Image Extension');</script>";
            } else if($fileSize > 1000000) {
                echo "<script>alert('Image Size Is Too Large');</script>";
            } else {
                $newImageName = uniqid() . '.' . $imageExtension;

                if(move_uploaded_file($tmpName, 'uploads/' . $newImageName)) {
                    $query = "INSERT INTO gallery_update (eventImage) VALUES ('$newImageName')";
                    if(mysqli_query($conn, $query)) {
                        echo "<script>alert('Image Uploaded Successfully');</script>";
                    } else {
                        echo "<script>alert('Error uploading image');</script>";
                    }
                } else {
                    echo "<script>alert('Error moving uploaded file');</script>";
                }
            }
        }
    }

    // Fetch images from database
    $images = [];
    $query = "SELECT * FROM gallery_update";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $images[] = $row['eventImage'];
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gallery</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">	
	<link rel="stylesheet"  href="style.css">
    <style>
        .swiper-slide {
            margin: 0; /* Remove margin */
            padding: 0; /* Remove padding */
        }

        .swiper-slide img {
            max-height: 600px;
            max-width: 100%;
            object-fit: cover;
        }
    </style>
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
		<h1>gallery</h1>
	</div>
    <section class="gallery">
    <div class="swiper-container">
    <div class="swiper-wrapper">
                <?php foreach ($images as $image): ?>
                    <div class="swiper-slide">
                        <img style="height: 650px;width: 100%;" src="uploads/<?php echo $image; ?>" alt="Gallery Image">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
  <!-- Link Swiper's JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            loop: true,
            autoplay: {
                delay: 1000,
            },
        });
    </script>	

<section class="booking">
	<h1 class="heading-title">update gallery!</h1>
	<form  class="book-form" method="POST"  enctype="multipart/form-data">
		<div class="flex">
            <div class="inputBox">
                <label for="eventImage">Image : </label>
                <input type="file" name="eventImage" id="eventImage" accept=".jpg, .jpeg, .png" value="">
            </div>
		</div>
		<input type="submit"  class="btn" name="submit">
	</form>
</section>



<section class="footer">
	<div class="box-container">
		<div class="box">
			<h3>quick links</h3>
			<a href="home.php"><i class="fas fa-angle-right"></i> home</a>
			<a href="about.php"><i class="fas fa-angle-right"></i> about</a>
			<a href="package.php"><i class="fas fa-angle-right"></i> gallery</a>
			<a href="book.php"><i class="fas fa-angle-right"></i> create</a>
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
	<div class="hr"><hr></div>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script type="text/javascript" src="script.js"></script>	

</body>
</html>