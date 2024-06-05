<?php require 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>events</title>
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
		<h1>view event</h1>
	</div>


</section>

<?php

$cEventDetails = mysqli_query($conn, "SELECT * FROM event_details ORDER BY eventId DESC");


if ($cEventDetails !== false) {
    
    foreach ($cEventDetails as $row) :
        
        $eventId = $row['eventId'];
        $select_event_artist_query = mysqli_prepare($conn, "SELECT userEmail FROM select_event_artist WHERE eventId = ? AND status != ?");
        $status_to_exclude = 'relevant_status'; 
        mysqli_stmt_bind_param($select_event_artist_query, "is", $eventId, $status_to_exclude);
        mysqli_stmt_execute($select_event_artist_query);
        mysqli_stmt_bind_result($select_event_artist_query, $userEmail);

        // Store fetched userEmails in an array
        $userEmails = [];
        while (mysqli_stmt_fetch($select_event_artist_query)) {
            $userEmails[] = $userEmail;
        }
        mysqli_stmt_close($select_event_artist_query);
?>
        <br>
        <form method="POST" action="#">
            <div class="bg-img">
                <h1><?php echo $row["eventName"] ?></h1>
                <img src="uploads/<?php echo $row['eventImage']; ?>" width="250" height="250" alt="<?php echo $row['eventName']; ?>">
                <h2>Venue: <?php echo $row["eventVenue"] ?></h2>
                <h2>Date & Time: <?php echo $row["eventDate&Time"] ?></h2>
                <h2>Type: <?php echo $row["type"] ?></h2>

                <?php
                $participatingArtistsQuery = mysqli_query($conn, "SELECT ud.userName 
                                                             FROM select_event_artist sea
                                                             INNER JOIN user_details ud ON sea.userEmail = ud.userEmail
                                                             WHERE sea.eventId = $eventId AND sea.status = 'Accepted'");

                if ($participatingArtistsQuery !== false && mysqli_num_rows($participatingArtistsQuery) > 0) {
                ?>
                    <h2>Participating Artists:</h2>
                    <ul>
                        <?php
                        while ($artist = mysqli_fetch_assoc($participatingArtistsQuery)) {
                            echo "<li style='font-size: 15px;font-weight: bold;'>" . $artist['userName'] . "</li>";
                        }
                        ?>
                    </ul>
                <?php
                } else {
                    echo "<h2>No participating artists</h2>";
                }
                ?>
                <!-- End of participating artists -->

                <!-- Hidden input to store the event ID -->
                <input type="hidden" name="eventId" value="<?php echo $row['eventId']; ?>">

                <!-- Delete button -->
                <button type="submit" class='btn btn-primary btn-sm' name="delete_event">DELETE</button>
            </div>
        </form>
        <br>
<?php
    endforeach;
} else {
    // Handle the error for event_details query
    echo "Error fetching event details: " . mysqli_error($conn);
}
?>







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