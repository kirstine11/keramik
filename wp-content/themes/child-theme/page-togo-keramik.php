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

    #kreamikhead h2 {
        color: black;
        font-size: 15px;
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

    .step {
        width: 100%;
        text-align: center;
    }

    .step p {
        color: black;
        font-family: 'Quicksand', sans-serif;
        word-break: break-word;
    }

    .step h3 {
        font-family: neue-kabel, sans-serif;
        font-weight: 600;
    }

    .step h3:first-letter {
        color: #E07A34;
        font-size: 30px;
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
    }

    #filtrering button {
        border: solid 1px #E07A34;
        background-color: #FDF8F4;
        color: black;
        font-family: neue-kabel, sans-serif;
        font-weight: 600;
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
        color: black;
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
        background-color: #246548;
        font-family: 'Quicksand', sans-serif;
        color: white;
    }

    .read_more:hover {
        color: black;
    }

    .gavekort {
        background-color: #B3C8AF;
        padding: 15px;
        text-align: center;
        margin-top: 30px;
    }

    .indhold h2 {
        color: #246548;
        padding: 8px;
    }

    .indhold h3 {
        padding: 8px;
        color: white;
    }

    .indhold p {
        color: black;
    }

    .indhold button {
        align-content: center;
    }

    .indhold button a {
        color: white;
    }



    /*   desktop styling */
    @media only screen and (min-width: 900px) {
        #kreamikhead {
            display: grid;
            grid-template-columns: 3fr 1fr;
            margin: 0 auto;

        }

        keramikpakkeimg {
            width: 330px;
        }

        #kreamikhead h2 {
            margin-top: -11px;
            margin-left: 41px;
        }

        #kreamikhead h1 {
            margin-top: 36px;
            margin-left: 41px;
        }

        /*
        .strokeimg {
        width: 50%;
        }
*/

        .gavekort {
            display: grid;
            grid-template-columns: 2fr 1fr;
            text-align: left;
            margin-top: 186px;
        }

        .indhold {
            padding: 30px;
            word-break: break-word;
        }

        .indhold h3 {
            padding: 0;
        }

        .indhold h2 {
            padding: 0;
        }

        .indhold button:hover {
            background-color: #B3C8AF;
            border: 1px solid #E07A34;
        }

        #kreamikhead img {
            width: 100%;
        }

</style>
<template>
    <article class="loopart">
        <img src="" alt="keramikpakke_billede" class="keramikpakkeimg" height="800" width="450">
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
                <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/orange_streg.svg" width="247" height="439" alt="to go orange penselstrøg">
                <h2>Hos Kreamik har du også mulighed for at købe to go keramikpakker. Du kan vælge blandt 300 stykker keramik og over 50 forskellige farver. Nedenfor kan du se hvordan du kan bestille din to go keramikpakke.</h2>
            </div>
            <section class="infografik">
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/06/ikon1.svg" width="150" height="266" alt="to go kasse med keramik ikon">
                    <h3>1 Vælg keramikpakke</h3>
                    <p>Pensler lånes med din to go pakke. Har du andre ønsker du skriv til <a href=" http://kirstinekrogs.dk/kea/eksamen_kreamik/cafe-kontakt/">kontakt@kreamik.dk.</a></p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/06/ikon2.svg" width="150" height="266" alt="to go farver ikon">
                    <h3>2 Vælg tre farver</h3>
                    <p>Ønsker du flere farver? Du kan vælge mellem 50 farver. Tilkøb koster 25 kr.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/06/ikon3.svg" width="150" height="266" alt="to go kalender ikon">
                    <h3>3 Book afhentningsdag</h3>
                    <p>Her har du mulighed for at booke din afhentningsdag.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/06/ikon4.svg" alt="to go mobilepay ikon" width="150" height="266">
                    <h3>4 Betal på mobilepay</h3>
                    <p>Betal for din to go keramikpakke på nummeret 120210 på mobilepay.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/06/ikon5.svg" alt="to go kasse ikon" width="150" height="266">
                    <h3>5 Afhent din to go keramikpakke</h3>
                    <p>Hent din keramikpakke om lørdagen mellem 13-15. Her vil du også få nogle tips og tricks med på vejen.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/06/ikon6.svg" alt="to go boks afleveres ikon" width="150" height="266">
                    <h3>6 Aflever keramik til brænding</h3>
                    <p>Aflever dit malede keramik til brænding samt pensler på lørdage mellem 13-15.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/06/ikon7.svg" alt="to go glasering ikon" width="150" height="266">
                    <h3>7 Vi brænder dit keramik</h3>
                    <p>Vi glaserer og brænder dit keramik, hvilket er inkluderet i pakkeprisen.</p>
                </div>
                <div class="step">
                    <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/06/ikon8.svg" alt="to go afhentning ikon" width="150" height="266">
                    <h3>8 Afhent efter 1-2 uger</h3>
                    <p>Afhent dit færdige keramik efter 1-2 uger på lørdage mellem 13-15.</p>
                </div>
            </section>
            <div class="strokeimg">
                <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/green_stroke.svg" width="700" height="1244" alt="to go grønt penselstrøg">
            </div>

            <nav id="filtrering">
                <button data-keramikpakke="alle"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/alle2.svg" width="25" height="44" alt="to go alle ikon"> Alle </button>

                <button data-keramikpakke="6"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/krus.svg" width="25" height="44" alt="to go krus ikon"> Krus </button>

                <button data-keramikpakke="5"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/vase2.svg" width="25" height="44" alt="to go vase ikon"> Vase </button>

                <button data-keramikpakke="13"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/skal.svg" width="25" height="44" alt="to go skål ikon"> Skål </button>

                <button data-keramikpakke="14"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/fad.svg" width="25" height="44" alt="to go fad ikon"> Fad </button>

                <button data-keramikpakke="15"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/figur-1.svg" width="25" height="44" alt="to go figur ikon"> Figur </button>

                <button data-keramikpakke="16"> <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/andet.svg" width="25" height="44" alt="to go andet ikon"> Andet </button>
            </nav>

        </div>

        <section id="keramikcontainer">
        </section>

        <section class="gavekort">
            <div class="indhold">
                <h2>Gavekort</h2>
                <h3>Ønsker du at der skal ske noget sjovt derhjemme? Vil du give en særlig gave?</h3>
                <p>Overrask med en dejlig kreativ mal selv keramik oplevelse til børnene og familien/vennerne, hvor alle kan være med. Kom enten i vores cafe eller bestil en af vores To go pakker. </p>
                <button><a href="http://kirstinekrogs.dk/kea/eksamen_kreamik/cafe-kontakt/">BESTIL GAVEKORT</a></button>
            </div>
            <div class="gavekort_img">
                <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/06/gavekort-ikon.svg" width="400" height="711" alt="to go gavekort ikon">
            </div>
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
