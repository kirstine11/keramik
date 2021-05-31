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
    .article {
        display: grid;
    }

    .article h2 {
        color: #246548;
        font-size: 30px;
        margin: 0 auto;
        margin-bottom: 20px;
    }

    .tekst {
        background-color: #E07A34;
        margin-bottom: 15px;
        margin-top: 15px;
        color: white;
        text-align: center;
        font-size: 15px;
        padding: 10px;
    }

    .pris {
        font-weight: 600;
    }

    form.content {
        display: grid;
        gap: 5px;
    }

    .form-felt input {
        width: 100%;
    }

    select {
        width: 100%;
    }

    .bestil h2 {
        color: #246548;
        font-size: 28px;
        font-weight: 600;
    }

    .strokeimg {
        margin-top: 20px;
        margin-bottom: 20px;
        position: relative;
        right: 62px;
    }

    @media only screen and (min-width: 800px) {
        .content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .tekst {
            margin-top: 0;
            margin-bottom: 0;
            text-align: left;
        }

        .beskrivelse {
            padding: 42px;
            font-size: 25px;
        }

        .pris {
            padding: 42px;
            font-size: 25px;
        }

        .strokeimg {
            margin-top: 32px;
        }

        .article h2 {
            font-size: 45px;
        }

        form.content {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        input.content {
            width: 100%;
        }

        .indsend:hover {
            background-color: #AF9E91;
            color: #FDF8F4;
        }

        .bestil h2 {
            font-size: 39px;
        }
    }

</style>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <article class="article">
            <h2 class="pakkenr"></h2>
            <div class="content">
                <img src="" alt="keramikpakke_billede" class="keramikpakkeimg">
                <div class="tekst">
                    <h2 class="titel"></h2>
                    <p class="beskrivelse"></p>
                    <p class="pris"></p>
                </div>
                <!--                <button class="read_more">LÆS MERE</button>-->
            </div>
        </article>
        <div class="strokeimg">
            <img src="http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-content/uploads/2021/05/green_stroke.svg" alt="grønt penselstrøg">
        </div>

        <section class="form-section">
            <div class="bestil">
                <h2>Bestil keramikpakke</h2>
            </div>

            <form action="contactform.php" class="bestilling" name="kontakt" netlify>
                <div class="content">
                    <div class="form-felt">
                        <label for="full-name">Fulde navn</label>
                        <input id="full-name" name="fname" type="text">
                    </div>

                    <div class="form-felt">
                        <label for="email">E-mail</label>
                        <input id="email" name="email" type="email">
                    </div>

                    <div class="form-felt">
                        <label for="tel">Telefon</label>
                        <input id="tel" name="tel" type="tel">
                    </div>

                    <div class="form-felt">
                        <label for="afhentning">Afhentningsdato</label>
                        <input id="date" name="date" type="date">
                    </div>

                    <div class="form-felt">
                        <label>Pakkenummer
                            <select name="liste">
                                <option value="">Vælg pakke</option>
                                <option value="et">Keramikpakke 1</option>
                                <option value="to">Keramikpakke 2</option>
                            </select>
                        </label>
                    </div>

                    <div class="form-felt">
                        <label>Farver
                            <select name="liste">
                                <option value="">Vælg 3 farver</option>
                                <option value="rød">Rød</option>
                                <option value="blå">Blå</option>
                            </select>
                        </label>
                    </div>

                    <div class="form-felt">
                        <label>Har du nogle tilføjelser til bestillingen?
                            <textarea name="besked" rows="5"></textarea>
                        </label>
                    </div>
                </div>

                <button type="submit" name="submit" class="indsend">Indsend</button>
            </form>
        </section>

    </main> <!-- #main -->
</section> <!-- #primary -->


<script>
    let keramikpakke;

    const dbUrl = "http://kirstinekrogs.dk/kea/eksamen_kreamik/wp-json/wp/v2/keramikpakke/" + <?php echo get_the_ID() ?>;

    async function getJson() {
        const data = await fetch(dbUrl);
        keramikpakke = await data.json();
        visKeramikpakker();
    }

    function visKeramikpakker() {
        document.querySelector("h2").textContent = keramikpakke.title.rendered;
        document.querySelector(".keramikpakkeimg").src = keramikpakke.billede.guid;
        document.querySelector(".beskrivelse").textContent = keramikpakke.beskrivelse;
        document.querySelector(".pris").textContent = keramikpakke.pris;
    }
    getJson();

</script>
<?php
get_footer();
