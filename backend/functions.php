<?php
require_once 'Database.php';


function sendDepartments(){
    $database = new Database();
    $responseFromDatabase = $database->getAllDepartments();
    if($responseFromDatabase['executionResult']){
        return json_encode($responseFromDatabase['data']);
    }else{
        header('400 Bad Request');
    }
}

function sendNews(){
    return json_encode([
        ['id' => 1, 'caption' => 'history of the flower', 'text' => 'asdguhingsasnigndsgjasnglsjgn', 'image' => 'images/flower.jpg']

    ]);

}

function sendTopics(){
    return json_encode([
        ['id'=>1 , 'Name'=>'тема1', 'departmentId'=>1],
        ['id'=>2 , 'Name'=>'тема2', 'departmentId'=>1],
        ['id'=>3 , 'Name'=>'тема3', 'departmentId'=>1],
        ['id'=>4 , 'Name'=>'тема4', 'departmentId'=>1],
        ['id'=>5 , 'Name'=>'тема5', 'departmentId'=>2],
        ['id'=>6 , 'Name'=>'тема6', 'departmentId'=>2],
        ['id'=>7 , 'Name'=>'тема7', 'departmentId'=>2],
        ['id'=>8 , 'Name'=>'тема8', 'departmentId'=>2],
        ['id'=>9 , 'Name'=>'тема9', 'departmentId'=>3],
        ['id'=>10 , 'Name'=>'тема10', 'departmentId'=>3],
        ['id'=>11 , 'Name'=>'тема11', 'departmentId'=>3],
        ['id'=>12 , 'Name'=>'тема12', 'departmentId'=>1],
        ['id'=>13 , 'Name'=>'тема13', 'departmentId'=>2],
        ['id'=>14 , 'Name'=>'тема14', 'departmentId'=>3],
        ['id'=>15 , 'Name'=>'тема15', 'departmentId'=>1]

        ]);
}

function sendTasks(){
    return json_encode([
        ['id'=>1 , 'Name'=>'задача1', 'topicId'=>1],
        ['id'=>2 , 'Name'=>'задача2', 'topicId'=>2],
        ['id'=>3 , 'Name'=>'задача3', 'topicId'=>3],
        ['id'=>4 , 'Name'=>'задача4', 'topicId'=>4],
        ['id'=>5 , 'Name'=>'задача5', 'topicId'=>5],
        ['id'=>6 , 'Name'=>'задача6', 'topicId'=>6],
        ['id'=>7 , 'Name'=>'задача7', 'topicId'=>7],
        ['id'=>8 , 'Name'=>'задача8', 'topicId'=>8],
        ['id'=>9 , 'Name'=>'задача9', 'topicId'=>9],
        ['id'=>10 , 'Name'=>'задача10', 'topicId'=>10],
        ['id'=>11 , 'Name'=>'задача11', 'topicId'=>11],
        ['id'=>12 , 'Name'=>'задача12', 'topicId'=>12],
        ['id'=>13 , 'Name'=>'задача13', 'topicId'=>13],
        ['id'=>14 , 'Name'=>'задача14', 'topicId'=>14],
        ['id'=>15 , 'Name'=>'задача15', 'topicId'=>15],
        ['id'=>16 , 'Name'=>'задача16', 'topicId'=>1],
        ['id'=>17 , 'Name'=>'задача17', 'topicId'=>2],
        ['id'=>18 , 'Name'=>'задача18', 'topicId'=>3],
        ['id'=>19 , 'Name'=>'задача19', 'topicId'=>4],
        ['id'=>20 , 'Name'=>'задача20', 'topicId'=>5],
        ['id'=>21 , 'Name'=>'задача21', 'topicId'=>6],
        ['id'=>22 , 'Name'=>'задача22', 'topicId'=>7],
        ['id'=>23 , 'Name'=>'задача23', 'topicId'=>8],
        ['id'=>24 , 'Name'=>'задача24', 'topicId'=>9],
        ['id'=>25 , 'Name'=>'задача25', 'topicId'=>10],
        ['id'=>26 , 'Name'=>'задача26', 'topicId'=>11],
        ['id'=>27 , 'Name'=>'задача27', 'topicId'=>12],
        ['id'=>28 , 'Name'=>'задача28', 'topicId'=>13],
        ['id'=>29 , 'Name'=>'задача29', 'topicId'=>14],
        ['id'=>30 , 'Name'=>'задача30', 'topicId'=>15]

    ]);
}
function sendRequests(){
    return json_encode(
        $_POST['data']

    );

}
