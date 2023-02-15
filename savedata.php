<?php

include 'login.php';

if(isset($_GET['nama_player']) && isset($_GET['jenis_waktu']) && isset($_GET['waktu']) ){

    //Lightly sanitize the GET's to prevent SQL injections and possible XSS attacks
    $nama_player = strip_tags(mysqli_real_escape_string($con, $_GET['nama_player']));
    $jenis_waktu = strip_tags(mysqli_real_escape_string($con, $_GET['jenis_waktu']));
    $waktu = strip_tags(mysqli_real_escape_string($con, $_GET['waktu']));
    
    $sql = mysqli_query($con, "INSERT INTO log_player (nama_player, jenis_waktu, waktu) VALUES ('$nama_player', '$jenis_waktu', '$waktu');" );
    if($sql){

        //The query returned true - now do whatever you like here.
        echo 'Your log was saved. Congrats!';
        
    }else{
     
        //The query returned false - you might want to put some sort of error reporting here. Even logging the error to a text file is fine.
        echo 'There was a problem saving your log. Please try again later.';
    }

    mysqli_close($con);//Close off the MySQL connection to save resources.

}else{
    echo 'Your name or visual_time wasnt passed in the request. Make sure you add ?nama_player=NAME_HERE&jenis_waktu=JENIS_WAKTU_HERE&waktu=WAKTU_HERE to the tags.';
}

?>