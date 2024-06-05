<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>about</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
    --main-color:#8083D1;
    --black:#222;
    --white:#fff;
    --light-black:#777;
    --light-white:#fff9;
    --dark-bg:rgbo(0,0,0,.7);
    --light-bg:#eee;
    --border:.1rem solid var(--black);
    --box-shadow:0 .5rem 1rem rgbo(0,0,0,.1);
    --box-shadow:0  1.5rem 3rem rgbo(0,0,0,.3);

}


*{
    font-family: 'Poppins', sans-serif;
    margin: 0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-decoration: none;
    text-transform: capitalize;

}



html{
    font-size: 62.5%;
    overflow-x: hidden;
}

html::-webkit-scrollbar{
    width: 1rem;
}

html::-webkit-scrollbar-track{
    background-color: var(--main-color);
}

section{
    padding: 5rem 10%;
}

table, th, td {
  border: 1px solid;
  font-size: 20px;
}


@keyframes fadeIn{
    0%{
        transform: scale(0);
        opacity: 0;
    }
}


.heading{
    background-size: cover !important;
    background-position: center !important;
    padding-top: 10rem;
    padding-bottom: 15rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.heading h1{
    font-size: 10rem;
    text-transform: uppercase;
    color: var(--white);
    text-shadow: var(--text-shadow);
}


.btn{
    display: inline-block;
    background:var(--black);
    margin-top: 1rem;
    color: var(--white);
    font-size: 1.7rem;
    padding: 1rem 3rem;
    cursor: pointer;
}

.btn:hover{
    background: var(--main-color);
}

.heading-title{
    text-align: center;
    margin-bottom: 3rem;
    font-size: 6rem;
    text-transform: uppercase;
    color: var(--black);
}

.header{
    position: sticky;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    background-color: var(--white);
    display: flex;
    padding-top: 2rem;
    padding-bottom: 2rem;
    box-shadow: var(--box-shadow);
    align-items: center;
    justify-content: space-between;
}

.header .logo{
    font-size: 2.5rem;
    color: var(--black);

}

.header .navbar a{
    font-size: 2rem;
    margin-left: 2rem;
    color: var(--black);
}

.header .navbar a:hover{
    color: var(--main-color);
}

#menu-btn{
    font-size: 2.5rem;
    cursor: pointer;
    color: var(--black);
    display: none;
}       
.container0 {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  background-color: #98AFC7;
  margin: auto;
}
.container0 header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container0 .form {
  margin-top: 30px;
}
.container0 .form .input-box {
  width: 100%;
  margin-top: 20px;
}
.container0 .input-box label {
  color: #292929;
  font-size: 18px;
}
.container0 .form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.container0 .input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.container0 .form .column {
  display: flex;
  column-gap: 15px;
}
.container0 .form .gender-box .select0-box {
  margin-top: 20px;
}
.container0 .gender-box .select0-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.container0 .form :where(.gender-option, .select-option, .gender .select) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.container0 .form .gender .select {
  column-gap: 5px;
}
.container0 .gender .select input {
  accent-color: rgb(130, 106, 251);
}
.container0 .form :where(.gender .select input, .gender .select label) {
  cursor: pointer;
}
.container0 .gender .select label {
  color: #707070;
}
.container0 .address :where(input, .select-box) {
  margin-top: 15px;
}
.container0 .select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.container0 .form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.container0 .form button:hover {
  background: rgb(88, 56, 250);
}
form {
    margin: auto;
    width: 600px;
    border: 5px solid black;
    padding: 20px;
    background: white;
    border-radius: 10px;
    text-align: center;
}
h1{
    font-size: 20px;
    font-family: Agbalumo;
}
h2{
    font-size: 20px;
    font-family: Agbalumo;
}
.bg-img {
  /* The image used */
  background-image: url("finalpic/bg.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.bg2-img {
  /* The image used */
  background-image: url("finalpic/bg7.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.footer{
    background-color: #3A3B3C;
    background-size: cover;
    background-position: center;
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap: 3rem;
}

.footer .box-container .box h3{
    color:var(--white);
    font-size: 2.5rem;
    padding-bottom: 2rem;
}

.footer .box-container .box a{
    color:var(--light-white);
    font-size: 1.5rem;
    padding-bottom: 1.5rem;
    display: block;
}

.footer .box-container .box a i{
    color:svar(--main-color);
    padding-right: .5rem;
    transition: .2s linear;
}

.footer .box-container .box a:hover i{
    padding-right: 2rem;
}

.footer .credit{
    text-align: center;
    padding-top: 3rem;
    margin-top: 3rem;
    border-top: .1rem solid var(--light-white);
    font-size: 2rem;
    color: var(--white);
}

.footer .credit span{
    color:var(--main-color);
}

/Responsive/
@media screen and (max-width: 500px) {
  .container0 .form .column {
    flex-wrap: wrap;
  }
  .container0.form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}
@media (max-width:768px){

    #menu-btn{
    display: inline-block;
    transition: .2s linear;
    }

    #menu-btn.fa-times{
        transform: rotate(180deg);
    }

    .header .navbar{
        position: absolute;
        top: 99%; left: 0; right: 0;
        background-color: var(--white);
        border-top: var(--border);
        padding: 2rem;
        transition: .2s linear;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    .header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }
    .header .navbar a{
        display: block;
        margin: 2rem;
        text-align: center;
    }

}

@media (max-width:450px){

    html{
        font-size: 50%;
    }

    .heading-title{
        font-size: 3.5rem;
    }
}
    </style>
</head>
<body>
    <!--header-->
    <section class="header">
    <a href="singerhome.php" class="logo">EventEase</a>
    <nav class="navbar">
      <a href="singerhome.php">home</a>
      <a href="singerprofile.php">profile</a>
      <a href="seventview.php">view</a>
      <a href="loginfrom.php">logout</a>
    </nav>      
    </section>
    <div class="heading" style="background:url(finalpic/j.jpg) no-repeat">
        <h1>my profile</h1>
    </div>
    <br>
    <br>
    <br>
<?php

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventmanagementdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['email'])) {
    $currentUserEmail = $_SESSION['email'];

    
    $selectEventIdQuery = "SELECT eventId FROM select_event_artist WHERE userEmail = '$currentUserEmail' AND status = 'Pending' LIMIT 1";
    $selectEventIdResult = $conn->query($selectEventIdQuery);

    if ($selectEventIdResult->num_rows > 0) {
        $selectEventIdRow = $selectEventIdResult->fetch_assoc();
        $eventId = $selectEventIdRow['eventId'];

        // Query to fetch event details based on eventId
        $eventDetailsQuery = "SELECT * FROM event_details WHERE eventId = $eventId LIMIT 1";
        $eventDetailsResult = $conn->query($eventDetailsQuery);

        if ($eventDetailsResult->num_rows > 0) {
            // Event details found, display them along with accept and reject buttons
            $eventDetailsRow = $eventDetailsResult->fetch_assoc();
            echo '<form action="#" method="post">';
            echo '<div>';
            echo '<p style="font-style: oblique; font-size:20px;">If you like to participate the event</p>';
            echo '<p style="font-style: oblique; font-size:15px;">Name: ' . $eventDetailsRow["eventName"] . '</p>';
            echo '<p style="font-style: oblique; font-size:15px;">Date & Time: ' . $eventDetailsRow["eventDate&Time"] . '</p>';
            echo '<p style="font-style: oblique; font-size:15px;">Location: ' . $eventDetailsRow["eventVenue"] . '</p>';
            echo '<p style="font-style: oblique; font-size:15px;">Type: ' . $eventDetailsRow["type"] . '</p>';
            echo '<br>';
            echo '<button style=" background-color: #6495ED; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;" type="submit" name="acceptButton">Accept</button>';
            echo '<button style=" background-color: #6495ED; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;" type="submit" name="rejectButton">Reject</button>';
            echo '</div>';
            echo '</form>';
            echo '<br>';
        }
    } 

// Query to retrieve accepted event details from event_details table based on current user's email
$acceptedEventsQuery = "SELECT ed.*
                        FROM event_details ed
                        INNER JOIN select_event_artist sea ON ed.eventId = sea.eventId
                        WHERE sea.userEmail = '$currentUserEmail' AND sea.status = 'Accepted'";

$acceptedEventsResult = $conn->query($acceptedEventsQuery);

if ($acceptedEventsResult->num_rows > 0) {
    // Displaying accepted event details within one form
    echo '<form style="margin: auto; width: 600px; border: 5px solid SlateBlue; padding: 20px; background: white; border-radius: 10px; text-align: center; font-size: 25px;" action="#" method="post">';
    echo '<h2>Accepted Events</h2>';
    while ($row = $acceptedEventsResult->fetch_assoc()) {
        echo '<p style="font-style: oblique; font-size:15px;">Name: ' . $row["eventName"] . '</p>';
        echo '<p style="font-style: oblique; font-size:15px;">Date & Time: ' . $row["eventDate&Time"] . '</p>';
        echo '<p style="font-style: oblique; font-size:15px;">Location: ' . $row["eventVenue"] . '</p>';
        echo '<p style="font-style: oblique; font-size:15px;">Type: ' . $row["type"] . '</p>';
        echo '<br>';
    }
    echo '</form>'; 
    echo '<br>';
    echo '<br>';
} else {
    // If no accepted events found
    echo "No accepted events found.";
}
 

    // Query to retrieve user details and artist details
    $sql = "SELECT ad.*, ud.*
            FROM artist_details ad
            INNER JOIN user_details ud ON ad.userEmail = ud.userEmail
            WHERE ad.userEmail = '$currentUserEmail'
            LIMIT 1";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();

        // Check if profile image exists
        if ($row['profileImage']) {
            // Displaying user details along with the image
            echo '<form style="margin: auto; width: 600px; border: 5px solid SlateBlue; padding: 20px; background: white; border-radius: 10px; text-align: center; font-size: 25px;" action="#" method="post">';
            echo '<div>';
            echo '<img style="border-radius: 50%; height: 240px; width: 240px; border: 4px solid SlateBlue; padding: 5px;" scr="data:image/finalpic/jpeg;base64,'.base64_encode($row['profileImage']).'"';
            echo '<br>';
            echo '<p style="font-style: oblique;">Name: ' . $row["userName"] . '</p>';
            echo '<p style="font-style: oblique;">Email: ' . $row["userEmail"] . '</p>';
            echo '<p style="font-style: oblique;">Phone number: ' . $row["contactNumb"] . '</p>';
            echo '<p style="font-style: oblique;">Birth date: ' . $row["birthday"] . '</p>';
            echo '<p style="font-style: oblique;">Gender: ' . $row["gender"] . '</p>';
            echo '<p style="font-style: oblique;">Address: ' . $row["userAddress"] . '</p>';
            echo '<p style="font-style: oblique;">Indoor Payment cost: ' . $row["perEventChargeIndoor"] . '</p>';
            echo '<p style="font-style: oblique;">Outdoor Payment cost: ' . $row["perEventChargeOutdoor"] . '</p>';
            echo '<br>';
            echo '</div>';
            echo '</form>';

        } else {
            // If no profile image found
            echo "Profile image not found.";
        }
    } else {
        // User's email does not exist in the 'artist_details' table or there is no data
        echo "User email not found in 'artist_details' table or no data associated.";
    }
} else {
    // User is not logged in or session is not set
    echo "User is not logged in.";
}

if (isset($_POST['acceptButton'])) {
    // Update status to 'Accepted' only for the current user
    $updateStatusQuery = "UPDATE select_event_artist SET status = 'Accepted' WHERE eventId = $eventId AND userEmail = '$currentUserEmail'";
    if ($conn->query($updateStatusQuery) === TRUE) {
        echo "Event accepted successfully!";
        // Reload the page to hide the form after updating status
        echo '<script>window.location.reload()</script>';
    } else {
        echo "Error updating status: " . $conn->error;
    }
} elseif (isset($_POST['rejectButton'])) {
    // Update status to 'Rejected' only for the current user
    $updateStatusQuery = "UPDATE select_event_artist SET status = 'Rejected' WHERE eventId = $eventId AND userEmail = '$currentUserEmail'";
    if ($conn->query($updateStatusQuery) === TRUE) {
        echo "Event rejected successfully!";
        // Reload the page to hide the form after updating status
        echo '<script>window.location.reload()</script>';
    } else {
        echo "Error updating status: " . $conn->error;
    }
}

$conn->close();
?>





<br>
<br>
<br>
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> gallery</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> profile</a>
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
            <a href="#"><i class="fas fa-envelope"></i> lightingbug@gmail.com</a>
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


</body>
</html> 
