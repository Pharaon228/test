<?php


function sendDepartments(){
    return json_encode([
        ['id' => 1, 'name' => 'IT'],
        ['id' => 2, 'name' => '1C'],
        ['id'=> 3, 'name' => 'Admin']
    ]);
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