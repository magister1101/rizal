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

                <div class="col-md-12 left-side animated slow slideInLeft">
                    <audio controls id="player" hidden>
                        <source src="assets/work.mp3" type="audio/mpeg">
                    </audio>
                    <p class="fs-1">The Philippines in the 19th Century Context</p>
                    <div>
                        <button class="btn btn-outline-info" onclick="document.getElementById('player').play()">Play</button>
                        <button class="btn btn-outline-info" onclick="document.getElementById('player').pause()">Pause</button>
                    </div>
                </div>
                <!-- end of col-md6 -->

                <div class="col-md-6 text-dark mt-3 animated slow slideInLeft" data-os="fade-right">
                    <div id="content">
                        <p class="fs-1">Noli Me Tangere</p>
                        <p>Rizal's debut novel, published in 1887, Noli Me Tangere (Touch Me Not) is a poignant exploration of the social injustices and moral decay under Spanish colonial rule. The narrative unfolds through the experiences of Juan Crisostomo Ibarra, a young Filipino returning from Europe, who is idealistic and hopeful for societal change. Through Ibarra's journey, Rizal masterfully exposes the corruption, abuse of power, and religious hypocrisy prevalent in Philippine society at the time.</p>
                        <p class="mt-2"> The novel delves into themes such as education, religion, and colonial oppression. Ibarra's quest for educational reform and his desire to uplift his fellow Filipinos symbolizes Rizal's own aspirations for his country. Moreover, the character of Maria Clara embodies the plight of Filipino women, trapped between societal expectations and personal desires.</p>
                    </div>
                </div>

                <div class="col-md-6 animated slow slideInRight" data-os="flip-right">
                    <img src="assets/noli.jpg" class="img-fluid" alt="" style="height:75%; margin-left: 20%;">
                </div>

                <div class="col-md-6 animated" data-aos="flip-right">
                    <img src="assets/el.jpg" class="img-fluid" alt="" style="height:75%; margin-left: 20%;">
                </div>

                <div class="col-md-6 text-dark mt-3" data-aos="fade-left">
                    <div id="content">
                        <p class="fs-1">El Filibusterismo</p>
                        <p>darker sequel to Noli Me Tangere, reflecting Rizal's evolving perspective on colonial resistance. In this novel, Rizal portrays the disillusionment and despair that had grown within him after witnessing the harsh realities of Spanish rule and the failure of peaceful reform efforts.</p>
                        <p class="mt-2"> The protagonist, Simoun, is revealed to be the disillusioned Ibarra, now returning to the Philippines with a different agenda—a desire for vengeance and revolutionary change. Simoun's character embodies the consequences of oppression and the transformation of idealism into radicalism. Through his actions, Rizal explores the complexities of revolutionary movements, cautioning against the dangers of unchecked anger and the pursuit of revenge.</p>
                    </div>
                </div>


                <div class="col-md-12 text-dark mt-3" data-aos="fade-up">
                    <div id="content">
                        <p class="fs-1">Literary and Social Critique</p>
                        <p>Both Noli Me Tangere and El Filibusterismo are not merely literary works but powerful social commentaries that sparked national consciousness and paved the way for revolution. Rizal's depiction of societal ills—such as colonial exploitation, social inequality, and cultural oppression—resonated deeply with Filipinos striving for independence. His novels became rallying cries for reform and catalysts for collective action against Spanish colonial rule.</p>
                        <p class="mt-2"> Through vivid characters and intricate plots, Rizal illuminated the struggles and aspirations of his people, challenging readers to confront the injustices of their time. The themes of corruption, abuse of power, and the quest for justice explored in his novels remain pertinent today, transcending their historical context to provoke discussions on universal human values and societal change.</p>
                    </div>
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