<?php
/**
 * The template for displaying front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */


//for at tjekke if kunden submittede en kontaktform (iseet)
if (iseet($_POST['submit'])){
  //starter med at tage fat i den information som brugeren skrev i formularen
    $name =$_POST['fname'];
     $mailFrom =$_POST['email'];
     $telefon =$_POST['tel'];
     $date =$_POST['date'];
    $pakkenr =$_POST['liste'];
    $farver =$_POST['liste'];
    $message =$_POST['besked'];

    //den mail som skal modtage henvendelser
    $mailTo = "juli741j@stud.kea.dk";
    //brugerens mail tilføjes i mailen som sendes til os
    $headers="From: ".$mailFrom;
    //tilføjer en customzied tekst (\n\n betyder to linjeskift), og selve beskeden efter linjeafstanden.
    $txt="Du har modtaget en email fra ".$name.".\n\n".$message;
 //de forskellige ting mailen indeholder
    mail($mailTo, $telefon, $date, $pakkenr, $farver, $txt, $headers);
 //en funktion der
    header("Location: single-keramikpakke.php?mailsend");
}
?>
