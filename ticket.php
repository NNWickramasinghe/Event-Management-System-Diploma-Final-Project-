<?php
    require 'connection.php';
    
    // Retrieve last entered event ID
    $getLastEventIdQuery = "SELECT eventId FROM event_details ORDER BY eventId DESC LIMIT 1";
    $result = mysqli_query($conn, $getLastEventIdQuery);
    $lastEventId = 0; // Default value
    if ($row = mysqli_fetch_assoc($result)) {
        $lastEventId = $row['eventId'];
    }

    if(isset($_POST["submit"])){
        // Loop through each ticket type submitted
        foreach($_POST['ticket'] as $ticket){
            $description = $ticket['description'];
            $price = $ticket['price'];
            $availableQty = $ticket['availableQty'];

            $query = "INSERT INTO ticket_details (eventId, description, price, availableQty) 
                      VALUES ('$lastEventId', '$description', '$price', '$availableQty')";
            mysqli_query($conn, $query);
        }

        header("Location: selectartist.php");
        exit();
    }
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ticket</title>
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
        <h1>Ticket Details</h1>
    </div>

    <section class="booking">
        <h1 class="heading-title">Ticket Details</h1>
        <form class="book-form" method="POST" enctype="multipart/form-data">
            <div class="flex">
                <div id="ticketFields">
                    <!-- Dynamic fields for each ticket type -->
                    <div class="ticket">
                        <div class="inputBox">
                            <label  for="description">Description :</label>
                            <input type="text" placeholder="Enter description about ticket" name="ticket[0][description]" required>
                        </div>
                        <div class="inputBox">
                            <label for="price">Price :</label>
                            <input type="number" placeholder="Enter price of ticket" name="ticket[0][price]" required>
                        </div>
                        <div class="inputBox">
                            <label  for="availableQty">Available Qty :</label>
                            <input type="number" placeholder="Enter available Qty" name="ticket[0][availableQty]" required>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <button style="color: red; font-size: 20px;" type="button" onclick="addTicket()">Add More Ticket Type</button>
            <br>
            <input type="submit" class="btn" name="submit" value="Submit">
        </form>
    </section>

    <script>
        function addTicket() {
            var ticketFields = document.getElementById('ticketFields');
            var ticketCount = ticketFields.getElementsByClassName('ticket').length;

            var ticketDiv = document.createElement('div');
            ticketDiv.className = 'ticket';

            ticketDiv.innerHTML = `
                <div class="inputBox">
                    <label for="description">Description :</label>
                    <input type="text" placeholder="Enter description about ticket" name="ticket[${ticketCount}][description]" required>
                </div>
                <div class="inputBox">
                    <label for="price">Price :</label>
                    <input type="number" placeholder="Enter price of ticket" name="ticket[${ticketCount}][price]" required>
                </div>
                <div class="inputBox">
                    <label for="availableQty">Available Qty :</label>
                    <input type="number" placeholder="Enter available Qty" name="ticket[${ticketCount}][availableQty]" required>
                </div>
            `;

            ticketFields.appendChild(ticketDiv);
        }
    </script>
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
