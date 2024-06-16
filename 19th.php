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
    <link rel="stylesheet" href="css/aos.css">


</head>

<body>
    <?php
    include 'constants/navbar.php';
    ?>
    <section id="rizal-page-2">
        <div class="container mt-5 text-light">
            <div class="row">

                <div class="col-md-6 left-side animated slow slideInLeft">
                    <audio controls id="player" hidden>
                        <source src="assets/19th.mp3" type="audio/mpeg">
                    </audio>
                    <p class="fs-1">The Philippines in the 19th Century Context</p>
                    <div>
                        <button class="btn btn-outline-info" onclick="document.getElementById('player').play()">Play</button>
                        <button class="btn btn-outline-info" onclick="document.getElementById('player').pause()">Pause</button>
                    </div>
                </div>
                <!-- end of col-md6 -->

                <div class="col-md-12 text-dark fw-bold mt-2 animated slow zoomIn" id="content">
                    <p>The 19th century was a pivotal era in Philippine history, marked by significant changes, turmoil, and the struggle for identity. During this time, nationalist sentiments began to stir among the Filipino people, influenced by liberal ideas and driven by a desire for change and independence from Spanish colonial rule.</p>
                    <p class="mt-2"> One of the most notable developments was the rise of the educated illustrados, who spearheaded a propaganda movement that sought to challenge the oppressive status quo and call for reforms. Their intellectual awakening and defiance against Spanish oppression laid the groundwork for the eventual push towards independence.</p>
                    <p class="mt-2">The Philippine Revolution of 1896-1898 stands as a powerful testament to the courage and resilience of the Filipino people. Despite facing significant odds, they rose up with unwavering determination against Spanish colonial rule. The revolution was characterized by armed resistance and widespread mobilization, reflecting a collective resolve to achieve independence.</p>
                    <p>Politically, the Spanish colonial system imposed strict control over the islands, with the Gobernador y Capitan-General wielding considerable power. Filipinos were largely relegated to minor offices and systematically denied basic rights and education, perpetuating a cycle of disenfranchisement. Socially, the Philippines was deeply stratified, with Spanish officials and the colonial elite occupying the highest echelons while the majority of Filipinos faced significant hardships and discrimination.</p>
                    <p>Education was another battleground in the struggle for freedom. Spanish authorities used it as a tool of control, emphasizing religious teachings and discouraging critical thinking. The curriculum maintained the status quo and suppressed revolutionary ideas, further hindering intellectual progress.</p>
                    <p>Education was another battleground in the struggle for freedom. Spanish authorities used it as a tool of control, emphasizing religious teachings and discouraging critical thinking. The curriculum maintained the status quo and suppressed revolutionary ideas, further hindering intellectual progress.</p>
                    <p> Despite these obstacles, the resilience and determination of the Filipino people endured. Their perseverance laid the groundwork for the Philippines we know today, serving as a powerful reminder of the importance of fighting for justice and equality. The 19th century was a defining period in Philippine history, characterized by a burgeoning sense of nationalism and the relentless pursuit of freedom. As we reflect on this era, it is crucial to honor the sacrifices of those who came before us and draw inspiration from their unwavering commitment to the cause of liberty and justice.</p>
                </div>


            </div>
        </div>
        <br>
    </section>
    <?php
    include 'constants/footer.php';
    ?>


</body>

</html>




<?php include 'jss.php'; ?>

<script type="text/javascript">
    AOS.init({
        easing: 'ease-in-out-sine',
        duration: 1000
    });
</script>