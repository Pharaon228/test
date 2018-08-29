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
        case 'getTopics':
            header('Content-type: application/json');
            echo sendTopics();
            break;
        case 'getTasks':
            header('Content-type: application/json');
            echo sendTasks();
            break;
        case 'submitRequest':
            header('Content-type: application/json');
            echo sendRequests();
            break;
    }

