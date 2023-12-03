<?php
require_once 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hotel Rooms</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .room-card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Our Hotels</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card room-card">
                    <img src="./image/hotel-standart.jpeg" alt="Standard Room">
                    <div class="card-body">
                        <h5 class="card-title">Standard Room</h5>
                        <p class="card-text">Comfortable and affordable standard room.</p>
                        <a href="insertHotel.php" class="btn btn-primary">Book Now</a>
                        <a href="https://www.youtube.com/watch?v=7Y1Zw9-nPpw&ab_channel=ditagusma" class="btn btn-info">View Video</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card room-card">
                    <img src="./image/deluxe-hotel.jpeg" class="card-img-top" alt="Deluxe Room">
                    <div class="card-body">
                        <h5 class="card-title">Deluxe Room</h5>
                        <p class="card-text">Deluxe room with the best services.</p>
                        <a href="insertHotel.php" class="btn btn-primary">Book Now</a>
                        <a href="https://www.youtube.com/watch?v=EW9_aPe5PMk&ab_channel=SecretTicketHunter" class="btn btn-info">View Video</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card room-card">
                    <img src="./image/executive-hotel.jpeg" class="card-img-top" alt="Executive Room">
                    <div class="card-body">
                        <h5 class="card-title">Executive Room</h5>
                        <p class="card-text">Spacious executive room with premium services.</p>
                        <a href="insertHotel.php" class="btn btn-primary">Book Now</a>
                        <a href="https://www.youtube.com/watch?v=vmc1OMD45zs&ab_channel=NadkizStory" class="btn btn-info">View Video</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>