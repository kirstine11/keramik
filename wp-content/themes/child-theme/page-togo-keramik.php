<?php
/**
 * The template for displaying front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

get_header();
?>
<!--Fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

<style>
    .infografik {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        max-width: 960px;
        gap: 10px;
    }

    .step img {
        width: 150px;
    }

    .step {
        width: 100%;
        text-align: center;
    }

    .step p {
        color: black;
        font-family: 'Quicksand', sans-serif;
        word-break: break-word;
    }

</style>
<template>
    <article class="loopart">
        <img src="" alt="keramikpakke_billede" class="keramikpakkeimg">
        <h2 class="pakkenr"></h2>
        <div class="tekst">
            <h2 class="titel"></h2>
            <p class="beskrivelse"></p>
            <p class="pris"></p>
            <button class="read_more">Læs mere</button>
        </div>
    </article>
</template>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <div>

            <div id="kreamikhead">
                <h1>To go keramik</h1>
                <h6>Hos Kreamik har du også mulighed for at købe ToGo keramikpakker. Nedenfor kan du se hvordan det fungerer.</h6>
            </div>
            <section class="infografik">
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/vaelgkeramikpakker.png" alt="kasse med keramik">
                    <h4>Vælg keramikpakke</h4>
                    <p>Pensler lånes med. Har du andre ønsker du skriv til kontakt@kreamik.dk.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/vaelgfarver.png">
                    <h4>Vælg tre farver</h4>
                    <p>Ønsker du flere farver? Du kan vælge mellem 50 farver. Tilkøb koster 25 kr.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/book.png">
                    <h4>Book afhentningsdag</h4>
                    <p>Her har du mulighed for at booke din afhentningsdag.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/mobilepay-1.png" alt="kasse med keramik">
                    <h4>Betal på mobilepay</h4>
                    <p>Betal på nummeret bla bla</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/hent.png" alt="kasse med keramik">
                    <h4>Hent din keramikpakke</h4>
                    <p>Hent din keramikpakke om lørdagen mellem 13-15. Her vil du også få nogle tips og tricks med på vejen.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/aflever.png" alt="kasse med keramik">
                    <h4>Aflever keramik til brænding</h4>
                    <p>Aflever dit malede keramik til brænding samt pensler på lørdage mellem 13-15.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/braender.png" alt="kasse med keramik">
                    <h4>Vi brænder dit keramik</h4>
                    <p>Vi glaserer og brænder dit keramik, hvilket er inkluderet i pakkeprisen.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/afhentigen.png" alt="kasse med keramik">
                    <h4>Afhent efter 1-2 uger</h4>
                    <p>Afhent dit færdige keramik efter 1-2 uger på lørdage mellem 13-15.</p>
                </div>
            </section>

            <nav id="filtrering"><button data-keramikpakke="alle">Alle</button> <button data-keramikpakke="6"> Krus </button>
                <button data-keramikpakke="5"> <img src=""> Vase </button>
                <button data-keramikpakke="13"> <img src=""> Skål </button>
                <button data-keramikpakke="14"> <img src=""> Fad </button>
                <button data-keramikpakke="15"> <img src=""> Figur </button>
                <button data-keramikpakke="16"> <img src=""> Andet </button>
            </nav>

        </div>

        <section id="keramikcontainer">
        </section>
    </main> <!-- #main -->
</section> <!-- #primary -->


<script>
    let keramikpakke;
    let indhold;
    let filterKeramikpakke = "alle";
    const dbUrl = "http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-json/wp/v2/keramikpakke?per_page=100";
    const catUrl = "http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-json/wp/v2/indhold";

    async function getJson() {
        const data = await fetch("http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-json/wp/v2/keramikpakke?per_page=100");
        const catdata = await fetch("http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-json/wp/v2/indhold");
        keramikpakke = await data.json();
        indhold = await catdata.json();
        console.log(indhold);
        visKeramikpakker();
        opretknapper();
    };


    function opretknapper() {
        indhold.forEach(cat => {
            document.querySelector("#filtrering").innerHTML
        })
        addEventListenerToButtons();
    }

    function addEventListenerToButtons() {
        document.querySelectorAll("#filtrering button").forEach(elm => {
            elm.addEventListener("click", filtrering);
        })
    };



    function filtrering() {
        filterKeramikpakke = this.dataset.keramikpakke;
        console.log(filterKeramikpakke);
        visKeramikpakker();

    }




    function visKeramikpakker() {
        let temp = document.querySelector("template");
        let container = document.querySelector("#keramikcontainer")
        container.innerHTML = "";
        keramikpakke.forEach(keramikpakke => {
            if (filterKeramikpakke == "alle" || keramikpakke.indhold.includes(parseInt(filterKeramikpakke))) {

                let klon = temp.cloneNode(true).content;
                klon.querySelector(".keramikpakkeimg").src = keramikpakke.billede.guid;
                klon.querySelector("h2").textContent = keramikpakke.title.rendered;
                //                klon.querySelector(".beskrivelse").textContent = keramikpakke.beskrivelse;
                klon.querySelector(".pris").textContent = keramikpakke.pris;
                klon.querySelector(".read_more").addEventListener("click", () => {
                    location.href = keramikpakke.link;
                })
                container.appendChild(klon);
            }
        })
    }



    getJson();

</script>
<?php
get_footer();
