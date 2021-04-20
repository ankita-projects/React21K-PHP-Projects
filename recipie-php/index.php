<?php

$data = file_get_contents('data.json');
$request_method= $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$parts = parse_url($uri);

parse_str($parts['query'],$params);
print_r($params);

$exploded_parts = explode('/', $parts['path']);
print_r($exploded_parts);

switch($request_method){
    case 'GET':
        get_recipes();
        break;
    case 'POST':
        add_new_recipes();
        break;
    case 'PUT':
        update_recipes();
        break;
    case 'DELETE':
        remove_recipes();
        break;

}

function get_recipes(){
    echo $GLOBALS['exploded_parts'][2];

    if(!isset($exploded_parts[2])){
        echo $GLOBALS['data'];
    }
    else{
        echo json_encode(array('recipe' => 'here is your recipe'));
    }
}



//if($request_method === 'GET'){
 //   echo $data;
//}
?>
