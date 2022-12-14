<?php
    session_start();

    if (isset($_POST["submit"]) && isset($_SESSION["id"])){

        require_once "database-par.php";
        require_once "functions-list-par.php";

        $userid = $_SESSION["id"];
        $fname = $_POST["fname"];
        $fcat = $_POST["fcat"];
        $fmain = $_POST["fmain"];
        $fsecond = $_POST["fsecond"];
        $fant = $_POST["fant"];
        $fscript = $_POST["fscript"];
        $fextra = $_POST["fextra"];
        $fscore = $_POST["fscore"];

        if (emptyInputs($fname, $fcat, $fmain, $fsecond, $fant, $fscript, $fextra) !== false){

            header("location: /index.php?error=emptyinput");
            exit();
        }

        if (fictionExist($connection, $fname) !== false){
            header("location: ../partials/edit-list-par.php");
        }

        saveFiction($connection, $fname, $fcat, $fmain, $fsecond, $fant, $fscript, $fextra, $fscore, $userid);

    }
    else{
        header("location: /index.php?error=nologin");
    }
?>