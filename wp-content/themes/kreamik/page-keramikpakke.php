<?php
/**
 * The template is for displaying keramikpakker
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

get_header();
?>

<style></style>

<template>
    <article class="article">
        <h2 class="pakkenr"></h2>
        <img src="" alt="keramikpakke_billede" class="keramikpakke_img">
        <div class="tekst">
            <h2 class="titel"></h2>
            <p class="beskrivelse"></p>
            <h3 class="pris"></h3>
        </div>
        <a href="" class="read_more">Læs mere</a>
    </article>
</template>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <h1>Keramikpakker</h1>
        <nav id="filtrering">
            <button class="filter" data-keramikpakke="6">Vase</button>
        </nav>
        <section id="liste"></section>
    </main><!-- #main -->
    <script>
        const header = document.querySelector("header h1");

        document.addEventListener("DOMContentLoaded", loadJSON)
        let keramikpakke;
        let indhold;
        let filterKeramikpakke = 6;

        const dbUrl = "http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-json/wp/v2/keramikpakke?per_page=100";
        const catUrl = "http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-json/wp/v2/indhold";

        async function loadJSON() {
            const data = await fetch(dbUrl);
            const catdata = await fetch(catUrl)
            keramikpakke = await data.json();
            indhold = await catdata.json();
            console.log(indhold);
            visKeramikpakke();
            opretknapper();
        }

        function opretknapper() {

            ugedage.forEach(cat => {
                document.querySelector("#filtrering").innerHTML += `<button class="filter" data-keramikpakke="${cat.id}">${cat.name}</button>`
            })

            addEventListenersToButtons();
        }

        function addEventListenersToButtons() {
            document.querySelectorAll("#filtrering button").forEach(elm => {
                elm.addEventListener("click", filtrering);
            })
        };

        function filtrering() {
            filterKeramikpakke = this.dataset.keramikpakke;
            console.log(filterKeramikpakke);

            visKeramikpakke();
        }

        //funktion der viser retter i liste view
        function visKeramikpakke() {
            const dest = document.querySelector("#liste"); // container til articles med en ret
            const skabelon = document.querySelector("template").content; // select indhold af html skabelon (article)
            dest.textContent = ""; // ryd container inden ny loop
            keramikpakke.forEach(keramikpakke => {
                if (sendeplan.indhold.includes(parseInt(filterKeramikpakke))) {
                    const klon = skabelon.cloneNode(true);
                    klon.querySelector(".titel").textContent = keramikpakke.title.rendered;
                    klon.querySelector(".keramikpakke_img").src = keramikpakke.billede.guid;

                    klon.querySelector(".beskrivelse").textContent = keramikpakke.beskrivelse;
                    klon.querySelector(".pris").textContent = keramikpakke.pris;
                    //                    klon.querySelector(".sepodcast").textContent = sendeplan.sepodcast;
                    klon.querySelector(".article a").href = keramikpakke.read_more;

                    // nyt
                    dest.appendChild(klon);
                }
            })
        }

    </script>

    <?php
get_footer();
