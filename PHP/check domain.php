<?php
    if($_SERVER['REQUEST_METHOD'] = $_POST){


        if(empty($_POST['domein'])){
           header('location: ../pages/info.php');
        }

        if(strpos($_POST['domein'], '.com' )) {
            header('location: ../pages/info.php?domein=1');
            exit();
        }
        if(strpos($_POST['domein'], '.nl' )) {
            header('location: ../pages/info.php?domein=1');
            exit();
        }
        if(strpos($_POST['domein'], '.en' )) {
            header('location: ../pages/info.php?domein=1');
            exit();
        }
        if(strpos($_POST['domein'], '.fr' )) {
            header('location: ../pages/info.php?domein=1');
            exit();
        }
        if(strpos($_POST['domein'], '.de' )) {
            header('location: ../pages/info.php?domein=1');
            exit();
        }
        if(strpos($_POST['domein'], '.eu' )) {
            header('location: ../pages/info.php?domein=1');
            exit();
        }
        if(strpos($_POST['domein'], '.uk' )) {
            header('location: ../pages/info.php?domein=1');
            exit();
        }


        else{
            header('location: ../pages/info.php?domein=2');
        }










}else { header('location: ../pages/info.php');}