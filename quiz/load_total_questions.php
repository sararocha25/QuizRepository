<?php
    include "connection.php";
    $total_questions=0;

    $resl=msqli_query($link,"select * from questions where category='$_SESSION[category]'");
    $total_questions=msqli_num_rows($res1);
    echo $total_questions;
?>