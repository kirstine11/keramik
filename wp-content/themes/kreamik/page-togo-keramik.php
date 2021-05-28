<?php
/**
 * The template for displaying poscast
 *
* Template Name: Podcast

 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>


<template>
    <article id="holdind">
        <div id="diver"> <img class="podcastimg" src="" alt="podcastimg">
            <div>
                <h2></h2>
                <p class="beskrivelse"></p>
            </div>
        </div>
    </article>
</template>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <div>
            <div id="podHead">
                <h2>PODCAST</h2>
                <h6>Find vores mange programmer, udsendelser, serier, afsnit og episoder her.
                </h6>
                <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/people_train.jpg" alt="train_boy">
            </div>
            <nav id="filtrering"><button data-podcast="alle">ALLE</button> <button data-podcast="67"> AKTUELT </button>
                <button data-podcast="71"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/CRIME-1.svg" alt="crime_icon"> CRIME </button> <button data-podcast="67"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/historie-1.svg" alt="historie_icon"> HISTORIE </button> <button data-podcast="73"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/KULTUR.svg" alt="kultur_icon"> KULTUR </button>
                <button data-podcast="72"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/globus.svg" alt="nyheder_icon"> NYHEDER </button> <button data-podcast="70"><img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/handtegn.svg" alt="ungdom_icon">UNGDOM</button> <button data-podcast="68"><img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/samfund-1.svg" alt="samfund_icon">SAMFUND
                </button>
            </nav>

        </div>
        <section id="podcastcontainer">
        </section>
    </main> <!-- #main -->
</section> <!-- #primary -->





<script>
    let podcasts;
    let genre;
    let filterPodcast = "alle";
    const dbUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/podcast?per_page=100";
    const catUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/genre";

    async function getJson() {
        const data = await fetch("http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/podcast?per_page=100");
        const catdata = await fetch("http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/genre");
        podcasts = await data.json();
        genre = await catdata.json();
        console.log(genre);
        visPodcasts();
        opretknapper();
    };


    function opretknapper() {
        genre.forEach(cat => {
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
        filterPodcast = this.dataset.podcast;
        console.log(filterPodcast);
        visPodcasts();

    }




    function visPodcasts() {
        let temp = document.querySelector("template");
        let container = document.querySelector("#podcastcontainer")
        container.innerHTML = "";
        podcasts.forEach(podcast => {
            if (filterPodcast == "alle" || podcast.genre.includes(parseInt(filterPodcast))) {

                let klon = temp.cloneNode(true).content;
                klon.querySelector("h2").textContent = podcast.title.rendered;
                klon.querySelector(".podcastimg").src = podcast.billede.guid;
                klon.querySelector(".beskrivelse").innerHTML = podcast.beskrivelse;
                klon.querySelector("article").addEventListener("click", () => {
                    location.href = podcast.link;
                })
                container.appendChild(klon);
            }
        })
    }



    getJson();

</script>
<?php
get_footer();
