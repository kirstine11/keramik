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
        </nav>
        <section id="liste"></section>
    </main><!-- #main -->
    <script>
        const header = document.querySelector("header h1");

        document.addEventListener("DOMContentLoaded", loadJSON)
        let keramikpakke;
        let indhold;
        let filterKeramikpakke = 75;

        const dbUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/sendeplan?per_page=100";
        const catUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/ugedage";

        async function loadJSON() {
            const data = await fetch(dbUrl);
            const catdata = await fetch(catUrl)
            sendeplan = await data.json();
            ugedage = await catdata.json();
            console.log(ugedage);
            visSendeplan();
            opretknapper();
        }

        function opretknapper() {

            ugedage.forEach(cat => {
                document.querySelector("#filtrering").innerHTML += `<button class="filter" data-sendeplan="${cat.id}">${cat.name}</button>`
            })

            addEventListenersToButtons();
        }

        function addEventListenersToButtons() {
            document.querySelectorAll("#filtrering button").forEach(elm => {
                elm.addEventListener("click", filtrering);
            })
        };

        function filtrering() {
            filterSendeplan = this.dataset.sendeplan;
            console.log(filterSendeplan);

            visSendeplan();
        }

        //funktion der viser retter i liste view
        function visSendeplan() {
            const dest = document.querySelector("#liste"); // container til articles med en ret
            const skabelon = document.querySelector("template").content; // select indhold af html skabelon (article)
            dest.textContent = ""; // ryd container inden ny loop
            sendeplan.forEach(sendeplan => {
                if (sendeplan.ugedage.includes(parseInt(filterSendeplan))) {
                    const klon = skabelon.cloneNode(true);
                    klon.querySelector(".tid").textContent = sendeplan.tid;
                    klon.querySelector(".podcastbillede").src = sendeplan.podcastbillede.guid;
                    klon.querySelector(".titel").textContent = sendeplan.title.rendered;
                    klon.querySelector(".beskrivelse").textContent = sendeplan.beskrivelse;
                    //                    klon.querySelector(".sepodcast").textContent = sendeplan.sepodcast;
                    klon.querySelector(".loopart a").href = sendeplan.sepodcast;

                    // nyt
                    dest.appendChild(klon);
                }
            })
        }

    </script>

    <?php
get_footer();
