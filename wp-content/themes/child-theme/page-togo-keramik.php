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

<link rel="stylesheet" href="https://use.typekit.net/tgw1asp.css">

<style>
    #kreamikhead {
        max-width: 1500px;
        margin: 0 auto 40px;
        display: grid;
        grid-template-columns: 2fr 1fr;
        margin-left: 15px;
    }

    #kreamikhead h1 {
        color: #246548;
    }

    .infografik {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        max-width: 1500px;
        gap: 10px;
        align-items: center;
        margin: 0 auto;
        padding: 15px;
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

    .step h4 {
        font-family: neue-kabel, sans-serif;
        font-weight: 600;
    }

    .step h4:first-letter {
        color: #E07A34;
        font-size: 30px;
    }

    .keramikpakkeimg {
        width: 400px;
    }

    .strokeimg {
        margin-bottom: 40px;
    }

    #keramikcontainer {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        margin: 0 auto;
        max-width: 1500px;
        align-items: center;
        gap: 20px;
    }

    #filtrering {
        margin: 0 auto 50px;
        text-align: center;

        max-width: 1500px;
        /*
        gap: 20px;
        display: flex;
        justify-content: center;
*/

    }

    #filtrering button {
        border: solid 1px #E07A34;
        background-color: #FDF8F4;
        color: black;
        font-family: neue-kabel, sans-serif;
        font-weight: 600;
        /*        display: flex;*/
        align-items: center;
        width: 150px;
        margin: 2px;
        padding: 4px;
    }

    #filtrering button:focus {
        background: #E07A34;
        color: #FDF8F4;
    }

    #filtrering button:hover {
        background: #E07A34;
        color: #FDF8F4;
    }

    #filtrering img {
        width: 25px;
        margin: auto;
    }

    .loopart {
        width: 100%;
        text-align: center;
        padding: 15px;
    }

    .loopart h2 {
        font-family: neue-kabel, sans-serif;
        font-weight: 600;
        font-size: 25px;
        margin-top: 10px;
    }

    .pris {
        font-family: 'Quicksand', sans-serif;
        color: black;
        font-size: 20px;
        margin-top: -20px;
        margin-bottom: 11px;
    }

    .read_more {
        margin-top: -10px;
        background-color: #AF9E91;
        font-family: 'Quicksand', sans-serif;
        color: white;
    }

    .read_more:hover {
        color: white;
    }

    /*   desktop styling */
    @media only screen and (min-width: 768px) {}

</style>
<template>
    <article class="loopart">
        <img src="" alt="keramikpakke_billede" class="keramikpakkeimg">
        <h2 class="pakkenr"></h2>
        <div class="tekst">
            <h2 class="titel"></h2>
            <p class="beskrivelse"></p>
            <p class="pris"></p>
            <button class="read_more">LÆS MERE</button>
        </div>
    </article>
</template>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <div>

            <div id="kreamikhead">
                <h1>To go keramik</h1>
                <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/orange_streg.svg" alt="orange penselstrøg">
                <h6>Hos Kreamik har du også mulighed for at købe ToGo keramikpakker. Nedenfor kan du se hvordan det fungerer.</h6>

            </div>
            <section class="infografik">
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/vaelgkeramikpakker.png" alt="kasse med keramik">
                    <h4>1 Vælg keramikpakke</h4>
                    <p>Pensler lånes med. Har du andre ønsker du skriv til kontakt@kreamik.dk.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/vaelgfarver.png">
                    <h4>2 Vælg tre farver</h4>
                    <p>Ønsker du flere farver? Du kan vælge mellem 50 farver. Tilkøb koster 25 kr.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/book.png">
                    <h4>3 Book afhentningsdag</h4>
                    <p>Her har du mulighed for at booke din afhentningsdag.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/mobilepay-1.png" alt="kasse med keramik">
                    <h4>4 Betal på mobilepay</h4>
                    <p>Betal på nummeret bla bla</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/hent.png" alt="kasse med keramik">
                    <h4>5 Hent din keramikpakke</h4>
                    <p>Hent din keramikpakke om lørdagen mellem 13-15. Her vil du også få nogle tips og tricks med på vejen.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/aflever.png" alt="kasse med keramik">
                    <h4>6 Aflever keramik til brænding</h4>
                    <p>Aflever dit malede keramik til brænding samt pensler på lørdage mellem 13-15.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/braender.png" alt="kasse med keramik">
                    <h4>7 Vi brænder dit keramik</h4>
                    <p>Vi glaserer og brænder dit keramik, hvilket er inkluderet i pakkeprisen.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/afhentigen.png" alt="kasse med keramik">
                    <h4>8 Afhent efter 1-2 uger</h4>
                    <p>Afhent dit færdige keramik efter 1-2 uger på lørdage mellem 13-15.</p>
                </div>
            </section>
            <div class="strokeimg">
                <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/green_stroke.svg" alt="grønt penselstrøg">
            </div>

            <nav id="filtrering">
                <button data-keramikpakke="alle"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/alle2.svg"> Alle </button>

                <button data-keramikpakke="6"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/krus.svg"> Krus </button>

                <button data-keramikpakke="5"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/vase2.svg"> Vase </button>

                <button data-keramikpakke="13"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/skal.svg"> Skål </button>

                <button data-keramikpakke="14"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/fad.svg"> Fad </button>

                <button data-keramikpakke="15"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/figur-1.svg"> Figur </button>

                <button data-keramikpakke="16"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/andet.svg"> Andet </button>
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
