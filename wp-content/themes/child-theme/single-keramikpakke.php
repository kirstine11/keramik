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


<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <article class="loopart">
            <img src="" alt="keramikpakke_billede" class="keramikpakkeimg">
            <h2 class="pakkenr"></h2>
            <div class="tekst">
                <h2 class="titel"></h2>
                <p class="beskrivelse"></p>
                <p class="pris"></p>
                <!--                <button class="read_more">LÆS MERE</button>-->
            </div>
        </article>

        <section id="keramikcontainer">
        </section>
    </main> <!-- #main -->
</section> <!-- #primary -->


<script>
    let keramikpakke;
    let indhold;

    const dbUrl = "http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-json/wp/v2/keramikpakke/" + <?php echo get_the_ID() ?>;

    async function getJson() {
        const data = await fetch("dbUrl");
        keramikpakke = await data.json();
        visKeramikpakker();
    }

    function visKeramikpakker() {
        klon.querySelector(".keramikpakkeimg").src = keramikpakke.billede.guid;
        klon.querySelector("h2").textContent = keramikpakke.title.rendered;
        klon.querySelector(".beskrivelse").textContent = keramikpakke.beskrivelse;
        klon.querySelector(".pris").textContent = keramikpakke.pris;
    }
    getJson();

</script>
<?php
get_footer();
