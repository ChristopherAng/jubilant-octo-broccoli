<?php
if(isset($_POST['submit'])) 
{
    $qn = $_POST['question'];

    $mailTo = "ang.haoyi.christopher@dhs.sg";
    $headers = "A Question";

    mail($mailTo, $qn, $headers);
    header("Location: index.php?mailsend");
}
?>
