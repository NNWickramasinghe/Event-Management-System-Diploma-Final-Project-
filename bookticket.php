<?php require 'connection.php'; ?>
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
.h2{
	font-size: 10rem;
	text-transform: uppercase;
	color: var(--white);
	text-shadow: var(--text-shadow);
}

table.ttable {
	margin: auto;
	width: 900px;
	border-collapse: collapse;
	border: 1px solid #0C090A; 
}


table.ttable thead th {
	padding: 8px;
	background-color: #fde9d9;
	font-size: large;
}


table.ttable th, table.ttable td {
	padding: 5px;
	border-width: 2px;
	border-style: solid;
	border-color: #f79646 #ccc;
}

table.ttable td tr{
	text-align: right;
}

table.ttable tbody th {
	text-align: left;
	font-weight: normal;
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
    font-size: 40px;
    font-family: Agbalumo;
}
h2{
    font-size: 20px;
    font-family: Agbalumo;
}
.bg-img {
  /* The image used */
  background-image: url("finalpic/hi4.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

 .bordered-content {
    border: 2px solid red;
    padding: 10px;
        }

.booking .book-form{
    padding: 2rem;
    background: var(--light-bg);
}

.booking .book-form .flex{
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
}

.booking .book-form .flex .inputBox{
    flex: 1 1 41rem;
}

.booking .book-form .flex .inputBox input{
    width: 100%;
    padding: 1.2rem 1.4rem;
    font-size: 1.6rem;
    color: var(--light-black);
    text-transform: none;
    margin-top: 1.5rem;
    border: var(--border);
}

.booking .book-form .flex .inputBox input:focus{
    background: var(--black);
    color: var(--white);
}

.booking .book-form .flex .inputBox input:focus::placeholder{
    color: var(--light-white);
}

.booking .book-form .flex .inputBox span{
    font-size: 1.5rem;
    color: var(--light-black);
}

.booking .book-form .btn{
    margin-top: 2rem;
}

.footer{
    background-color: #71797E;
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
    <a href="userhome.php" class="logo">EventEase</a>
    <nav class="navbar">
      <a href="userhome.php">home</a>
      <a href="ueventview.php">view</a>
      <a href="bookticket.php">book</a>
      <a href="loginfrom.php">logout</a>
    </nav>

		<div id="menu-btn" class="fa fa-bars"></div>
        
			
	</section>

	<div class="heading" style="background:url(finalpic/j.jpg) no-repeat">
		<h1>view event</h1>
	</div>


</section>

<?php


if(isset($_GET['eventId'])) {
    $eventId = $_GET['eventId'];

    
    $event_query = "SELECT * FROM event_details WHERE eventId = $eventId";
    $event_result = mysqli_query($conn, $event_query);
    $event_row = mysqli_fetch_assoc($event_result);

    if ($event_row) {
       
        echo "<br>";
        echo "<br>";
        echo '<form style="margin: auto; width: 600px; border: 5px solid SlateBlue; padding: 20px; background: white; border-radius: 10px; text-align: center; font-size: 25px;" action="#" method="post">';
        echo "<h1>Event Details:</h1>";
        echo "<p>Event Name: " . $event_row['eventName'] . "</p>";
        echo "<p>Event Venue: " . $event_row['eventVenue'] . "</p>";
        echo "<p>Date & Time: " . $event_row['eventDate&Time'] . "</p>";

      
        $ticket_query = "SELECT * FROM ticket_details WHERE eventId = $eventId";
        $ticket_result = mysqli_query($conn, $ticket_query);

        if ($ticket_result && mysqli_num_rows($ticket_result) > 0) {
            
            echo "<h1>Ticket Types:</h1>";
            while ($ticket_row = mysqli_fetch_assoc($ticket_result)) {
                echo "<p>Price: $" . $ticket_row['price'] . "</p>";
                echo "<p>Description: " . $ticket_row['description'] . "</p>";
                echo "<p>Available Quantity: " . $ticket_row['availableQty'] . "</p>";
                echo "<br>";

            }
            echo "</form>";
            echo "<br>";
            echo "<br>";
        } else {
            
            echo "<p>No ticket types available for this event.</p>";
        }
    } else {
        
        echo "No event found for the provided Event ID.";
    }

} else {
   
    echo "Event ID is missing.";
}


if(isset($_POST['submit'])) {
 
    $selectedType = $_POST['type'];
    $quantity = $_POST['quantity'];
    if(isset($_SESSION['email'])) {
        $userEmail = $_SESSION['email']; 
    } else {
        echo "User email not found in session.";
        exit(); 
    }

    
    $ticket_query = "SELECT ticketId, availableQty FROM ticket_details WHERE description = '$selectedType' AND eventId = $eventId";
    $ticket_result = mysqli_query($conn, $ticket_query);
    $ticket_row = mysqli_fetch_assoc($ticket_result);
    $ticketId = $ticket_row['ticketId'];
    $availableQty = $ticket_row['availableQty'];

    
    if ($availableQty < $quantity) {
        echo "Not enough tickets available.";
        exit(); // Stop further execution
    }

    
    $remainingQty = $availableQty - $quantity;

    
    $update_query = "UPDATE ticket_details SET availableQty = $remainingQty WHERE ticketId = $ticketId";
    if(mysqli_query($conn, $update_query)) {
        $datetime = date("Y-m-d H:i:s"); 
        $insert_query = "INSERT INTO customer_ticket_details (ticketId, userEmail, date_time, type, qty) VALUES ('$ticketId', '$userEmail', '$datetime', '$selectedType', '$quantity')";
        if(mysqli_query($conn, $insert_query)) {
            echo "<script>alert('Ticket booked successfully!');</script>";
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error updating available quantity: " . mysqli_error($conn);
    }
}

?>

<section class="booking">
    <h1 class="heading-title">Booking Details</h1>
    <form class="book-form" method="POST" enctype="multipart/form-data">
        <div class="flex">
            <div id="ticketFields">
                <div class="ticket">
                    <div class="inputBox">
                        <label style="font-size: 20px;" for="type">Choose ticket type:</label>
                        <select name="type" id="type">
                            <?php
                            
                            $ticket_query = "SELECT description FROM ticket_details WHERE eventId = $eventId";
                            $ticket_result = mysqli_query($conn, $ticket_query);

                            if ($ticket_result && mysqli_num_rows($ticket_result) > 0) {
                                while ($ticket_row = mysqli_fetch_assoc($ticket_result)) {
                                    echo '<option value="' . $ticket_row['description'] . '">' . $ticket_row['description'] . '</option>';
                                }
                            } else {
                                
                                echo '<option value="">No ticket types available</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="inputBox">
                        <label style="font-size: 20px;" for="availableQty">Enter Qty do you want :</label>
                        <input type="number" name="quantity" placeholder="Enter Qty" required>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <input type="submit" class="btn" name="submit" value="Submit">
    </form>
</section>

<?php

if(isset($_SESSION['email'])) {
    $userEmail = $_SESSION['email']; 

    
    $ticket_details_query = "SELECT c.*, t.eventId, e.eventName FROM customer_ticket_details c 
    INNER JOIN ticket_details t ON c.ticketId = t.ticketId 
    INNER JOIN event_details e ON t.eventId = e.eventId 
    WHERE c.userEmail = '$userEmail'";
    $ticket_details_result = mysqli_query($conn, $ticket_details_query);

    if ($ticket_details_result && mysqli_num_rows($ticket_details_result) > 0) {
        // Display customer's ticket details
        echo "<h2 style='margin: auto; text-align: center; font-size: 25px;'>Ticket Details:</h2>";
        echo "<br>";
        echo '<table width="90%" style="margin: auto; border: 1px solid; border-collapse: collapse; text-align: center; font-size: 25px;font-family: "Times New Roman"">';
        echo "<tr><th>Event Name</th><th>Ticket Type</th><th>Quantity</th><th>Date & Time</th></tr>";
        while ($ticket_details_row = mysqli_fetch_assoc($ticket_details_result)) {
            echo "<tr>";
            echo "<td>" . $ticket_details_row['eventName'] . "</td>";
            echo "<td>" . $ticket_details_row['type'] . "</td>";
            echo "<td>" . $ticket_details_row['qty'] . "</td>";
            echo "<td>" . $ticket_details_row['date_time'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<br>";
    } else {
        echo "<p>No ticket details found for the current user.</p>";
    }
}
?>









    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> view</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
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
    
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="script.js"></script>	
    
    </body>
    </html>