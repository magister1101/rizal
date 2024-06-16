<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizal</title>
    <?php  include 'bootstrap.php';?>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php
    include 'constants/navbar.php';
    ?>

    <div class="rizal-page d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row text-light">
                <div class="col-md-6 left-side banner animated slow zoomIn">
                    <!-- Left side content -->
                    <p class="h3 fw-light">The man behind our freedom</p>
                    <p class="h1">Discover the <br> history of Rizal.</p>
                    <p class="h4 fw-light letter lh-1">Join us on a journey through the corridors of history, where each page is a gateway to a new understanding, a new revelation, and a new perspective. This blog-like web-system strives to make the past come alive through engaging storytelling through audio, and thought-provoking discussions.</p>
                    <audio controls id="player" hidden>
                        <source src="assets/rizal_life-story.mp3" type="audio/mpeg">
                    </audio>
                    <div>
                        <button class="btn btn-outline-info" onclick="document.getElementById('player').play()">Play</button>
                        <button class="btn btn-outline-info" onclick="document.getElementById('player').pause()">Pause</button>
                    </div>
                </div>
                <div class="col-md-6 right-side ">
                    <!-- Right side content -->
                </div>
            </div>
        </div>
        <br>
    </div>

    <?php 
    include 'constants/footer.php';?>
    <?php
        include 'jss.php';
    ?>

 <script type="text/javascript">
  AOS.init({
    easing: 'ease-in-out-sine',
    duration: 1000
  });
 </script>


</body>

</html>