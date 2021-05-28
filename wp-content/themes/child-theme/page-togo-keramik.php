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
            <!--
            <div id="podHead">
                <h2>PODCAST</h2>
                <h6>Find vores mange programmer, udsendelser, serier, afsnit og episoder her.
                </h6>
                <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/people_train.jpg" alt="train_boy">
            </div>
-->
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
