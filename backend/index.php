<?php
    require_once 'functions.php';

    switch($_POST['action']){
        case 'getDepartments':
            header('Content-type: application/json');
            echo sendDepartments();
            break;
            case 'getNews':
            header('Content-type: application/json');
            echo sendNews();
            break;
    }

