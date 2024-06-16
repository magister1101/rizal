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
</head>

<body>
    <?php
    include 'constants/navbar.php';
    ?>


    <div class="d-flex justify-content-center align-items-center vh-extend">
        <div class="container">
            <div class="row text-light">
                <div class="col-md-6 left-side">
                    <audio controls id="player" hidden>
                        <source src="assets/RA1425.mp3" type="audio/mpeg">
                    </audio>
                    <div>
                        <button class="btn btn-outline-info" onclick="document.getElementById('player').play()">Play</button>
                        <button class="btn btn-outline-info" onclick="document.getElementById('player').pause()">Pause</button>
                    </div>
                    <p class="h1">The Historical Background of Republic Act No. 1425: The Rizal Law</p>
                    <p class="h3 fw-light justified ">Hello, readers! Today, we're diving into the backstory and significance of Republic Act No. 1425, commonly known as the Rizal Law. This pivotal legislation, signed into effect on June 12, 1956, by President Ramon Magsaysay, plays a crucial role in shaping the educational landscape of the Philippines. But why is it essential to delve into the life and contributions of José Rizal? Let's explore this with insights from our esteemed colleagues, Joana and Juvyn.</p>
                </div>
                <div class="col-md-6 right-side d-flex justify-content-center align-items-center">
                    <img src="assets/rizal-law.jpg" class="img-thumbnail" alt="" style="height:75%;">
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center vh-extend">
        <div class="container">
            <div class="row text-light">
                <div class="col-md-6 right-side d-flex justify-content-center align-items-center">
                    <img src="assets/rizal-ph.jpg" class="img-thumbnail" alt="" style="height:75%;">
                </div>
                <div class="col-md-6 left-side">
                    <p class="h1">The Significance of José Rizal in Philippine History</p>
                    <p class="h3 fw-light justified ">José Protasio Rizal Mercado y Alonzo Realonda, more commonly known as José Rizal, is a towering figure in Philippine history. His intellectual prowess, literary genius, activism, and nation-building efforts are unmatched. Despite not initially being the favored choice for the national hero, Rizal's impact on the Filipino struggle against Spanish colonial rule solidified his status. Intriguingly, before Rizal was chosen, there were five other contenders for the title of national hero. Rizal's keen understanding of the Filipino plight under Spanish rule is vividly depicted in his literary masterpieces "Noli Me Tangere" and "El Filibusterismo." These novels served as a clarion call for social awakening, laying the groundwork for the Philippine Revolution. Rizal's works ignited the spark of nationalism and inspired many Filipinos to fight for independence.</p>
                </div>

            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center vh-extend">
        <div class="container">
            <div class="row text-light">
                <div class="col-md-6 left-side">
                    <p class="h1">Rizal Day: A Tribute to a National Hero</p>
                    <p class="h3 fw-light justified ">President Emilio Aguinaldo designated December 20, 1898, as Rizal Day, honoring José Rizal's life and valor. Rizal's ultimate sacrifice on December 30, 1896, symbolizes his unwavering dedication to the country's freedom and sovereignty. Rizal Day serves as a reminder of his contributions and the enduring legacy he left behind.</p>
                    <p class="h2">The Controversial Retraction</p>
                    <p class="h3 fw-light justified ">A contentious aspect of Rizal's narrative is his retraction, which has ignited debates and dialogues over the years. This aspect of his life sheds light on the complexities of his character and the political climate of his time. Despite this controversy, Rizal's contributions to Philippine history and his vision for a liberated and enlightened Philippines remain undisputed.</p>
                </div>
                <div class="col-md-6 right-side d-flex justify-content-center align-items-center">
                    <img src="assets/rizal-3.jpg" class="img-thumbnail" alt="" style="height:75%;">
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center vh-extend">
        <div class="container">
            <div class="row text-light">
                <div class="col-md-6 right-side d-flex justify-content-center align-items-center">
                    <img src="assets/rizal-4.jpg" class="img-thumbnail" alt="" style="height:55%;">
                </div>
                <div class="col-md-6 left-side">
                    <p class="h1">The Origins of the Rizal Law</p>
                    <p class="h3 fw-light justified ">Understanding the origins of the Rizal Law is imperative. Senate Bill No. 438 laid the groundwork for Republic Act No. 1425. The primary aim of this bill was to instill nationalism and foster a deeper understanding of Philippine history among the youth. By mandating the study of Rizal's life, works, and writings in both public and private schools, the law ensures that future generations learn about our past and draw inspiration from national heroes like José Rizal.</p>
                    <p class="h1">The Legacy of Republic Act No. 1425</p>
                    <p class="h3 fw-light justified ">The Rizal Law stands as a testament to José Rizal's enduring legacy and his vision for a liberated and enlightened Philippines. By delving into his life and works, students glean invaluable insights into the trials and triumphs of our nation. The law ensures that Rizal's courage, patriotism, and unwavering dedication to the country continue to resonate in the hearts and minds of every Filipino.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center vh-extend">
        <div class="container">
            <div class="row text-light">

                <div class="col-md-6 left-side">
                    <p class="h1">Conclusion</p>
                    <p class="h3 fw-light justified ">in conclusion, Republic Act No. 1425, or the Rizal Law, is more than just legislation; it is a bridge connecting our past to our present and future. By studying the life and works of José Rizal, we honor his legacy and ensure that his vision for a free and enlightened Philippines lives on. Our history serves as the compass guiding our present and shaping our future, and it is paramount that we uphold the principles advocated by our national hero.</p>
                </div>
                <div class="col-md-6 right-side d-flex justify-content-center align-items-center">
                    <img src="assets/rizal-5.jpg" class="img-thumbnail" alt="" style="height:100%;">
                </div>

            </div>
        </div>
    </div>


    <?php
    include 'constants/footer.php';
    ?>

</body>

</html>