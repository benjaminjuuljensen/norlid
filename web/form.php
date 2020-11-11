<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];


    $mailTo = "multimediedesign@benjaminjuuljensen.dk";
    $headers = "From: " .$mailFrom;
    $txt = "Du har modtaget en mail fra ". $name." .\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: form.php?mailsend");
}
?>