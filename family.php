<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizal</title>
    <?php
    include 'bootstrap.php';
    ?>
    <link rel="stylesheet" href="css/index.css">
    <style>
        .rizal-page {
            background-image: url('assets/family.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <?php
    include 'constants/navbar.php';
    ?>

    <div class="rizal-page d-flex justify-content-center align-items-center text-center vh-extend-50">
        <div class="container w-50">
            <div class="row text-light">
                <div class="col-md-12 right-side">
                    <audio controls id="player" hidden>
                        <source src="assets/family.mp3" type="audio/mpeg">
                    </audio>

                    <p class="h1">The Family of Rizal – Mercado</p>
                    <div>
                        <button class="btn btn-outline-info" onclick="document.getElementById('player').play()">Play</button>
                        <button class="btn btn-outline-info" onclick="document.getElementById('player').pause()">Pause</button>
                    </div>
                    <br>
                    <p class="h5 fw-light justified">
                        The Rizal family, particularly the Mercado branch, provides a captivating glimpse into the personal life and influences that shaped Jose Rizal, the revered national hero of the Philippines. From Francisco Mercado, his father, to Teodora Alonso, his mother, and their ten children, each member of the family contributed uniquely to Rizal's upbringing and legacy.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center m-5">
        <div class="container">
            <div class="row text-light">
                <div class="col-md-6 left-side">
                    <p class="h1">Francisco Mercado</p>
                    <p class="h3 fw-light justified ">The Rizal family, particularly the Mercado branch, provides a captivating glimpse into the personal life and influences that shaped Jose Rizal, the revered national hero of the Philippines. From Francisco Mercado, his father, to Teodora Alonso, his mother, and their ten children, each member of the family contributed uniquely to Rizal's upbringing and legacy.</p>
                </div>
                <div class="col-md-6 right-side d-flex justify-content-center align-items-center">
                    <img src="assets/francisco.jpg" class="img-thumbnail" alt="" style="height:100%;">
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mb-5">
        <div class="container">
            <div class="row text-light">
                <div class="col-md-6 right-side d-flex justify-content-center align-items-center">
                    <img src="assets/teodora.jpg" class="img-thumbnail" alt="" style="height:100%;">
                </div>
                <div class="col-md-6 left-side">
                    <p class="h1">Teodora Alonso</p>
                    <p class="h3 fw-light justified ">Teodora Alonso, born in Manila, was a woman of remarkable intellect and cultural refinement. Highly educated and possessing literary talent, Teodora was not only a loving mother but also a businesswoman of note. Rizal spoke highly of his mother, praising her mathematical prowess and extensive reading habits. Teodora's legacy of strength and resilience endured even after her passing at the age of 85 in Binondo, where she declined a government pension, citing her family's steadfast patriotism over financial gain.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mb-3 text-light text-center">
        <div class="col-md-6">
            <p class="h1">RIZAL SIBLINGS</p>
            <p class="h3 fw-light justified">Jose Rizal was one of eleven children, each contributing to the fabric of the Mercado family's rich history:</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-3">
        <div class="row">
            <div class="card bg-dark text-light" style="width: 18rem;">
                <img src="assets/satur.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Saturnina was the eldest, who married Manuel T. Hidalgo and raised a family of five children.</p>
                </div>
            </div>
            <div class="card bg-dark text-light" style="width: 18rem;">
                <img src="assets/paci.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Paciano, Rizal's elder brother, played a pivotal role in his upbringing, acting as a second father figure and supporting Jose's education in Spain.</p>
                </div>
            </div>
            <div class="card bg-dark text-light" style="width: 18rem;">
                <img src="assets/narci.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Narcisa married Antonio Lopez, a teacher and musician.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mb-3">
        <div class="row">
            <div class="card bg-dark text-light" style="width: 18rem;">
                <img src="assets/oli.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Olympia tragically passed away due to complications from childbirth.</p>
                </div>
            </div>
            <div class="card bg-dark text-light" style="width: 18rem;">
                <img src="assets/lucia.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Lucia married Mariano Herbosa of Calamba, facing adversity due to her association with Rizal.</p>
                </div>
            </div>
            <div class="card bg-dark text-light" style="width: 18rem;">
                <img src="assets/maria.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Maria (Biang) married Daniel Faustino Cruz of Biñan, Laguna.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mb-3">
        <div class="row">
            <div class="card bg-dark text-light" style="width: 18rem;">
                <img src="assets/rizal-5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Jose Rizal himself, renowned for his intellect, writings, and pivotal role in Philippine history.</p>
                </div>
            </div>
            <div class="card bg-dark text-light" style="width: 18rem;">
                <img src="assets/conce.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Concepcion, who passed away at a young age, profoundly impacting Rizal.</p>
                </div>
            </div>
            <div class="card bg-dark text-light" style="width: 18rem;">
                <img src="assets/josef.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Josefa (Panggoy), who lived with epilepsy and passed away at 80.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center mb-3">
        <div class="row">
            <div class="card bg-dark text-light" style="width: 18rem;">
                <img src="assets/trini.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Trinidad, the family's longest-living member, who reached 83 years.</p>
                </div>
            </div>
            <div class="card bg-dark text-light" style="width: 18rem;">
                <img src="assets/sole.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Soledad, the youngest, who married Pantaleon Quintero.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-3 text-light text-center">
        <div class="col-md-6">
            <p class="h3 fw-light justified">The lives of Rizal's siblings reflect a spectrum of joys and sorrows, triumphs and hardships, each contributing to the resilience and character of the Mercado family. Their collective experiences provided Rizal with a nurturing environment that nurtured his intellectual curiosity and nationalist sentiments.</p>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center vh-extend text-dark text-center bg-light">
        <div class="col-md-6">
            <p class="h1">Legacy and Impact</p><br>
            <p class="h3 fw-light justified">Jose Rizal's legacy as a national hero is inseparable from the values instilled by his family. Their unity in the face of adversity, resilience amidst challenges, and unwavering support for one another laid the foundation for Rizal's convictions and actions. The Mercado family's story serves as a testament to the strength of familial bonds and their enduring influence on shaping the trajectory of Philippine history.

                Studying the family dynamics of the Rizals not only offers insights into the personal life of Jose Rizal but also underscores the importance of familial support, education, and cultural heritage in fostering the growth of leaders and heroes. Their journey inspires reflection on the values of strength, resilience, and unity, echoing through generations as a beacon of hope and inspiration for the Filipino people.</p>
        </div>
    </div>


    <?php
    include 'constants/footer.php';
    ?>




</body>

</html>