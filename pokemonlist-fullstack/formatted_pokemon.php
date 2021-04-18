<?php
    $data = file_get_contents('data.json');
    if (isset($_GET['page'])) {
       $page = $_GET['page'];
    } else {
       $page = 1;
    }
    $formatted_data = json_decode($data, true);
    $results = $formatted_data['results'];
    $formatted_results = array();

    for ($i = 0; $i < count($results); $i++){

        $formatted_results[$i]['name'] = strtoupper($results[$i]['name']);
        $formatted_results[$i]['url'] = $results[$i]['url'];
    }
    $json_chunked_result = array_chunk($formatted_results,50);
    $number_of_pages = count($json_chunked_result);

    //setting the result to a part of total response as asked by the client 
    $formatted_data['results'] = $json_chunked_result[$page-1];
    //$next_url = 'http://localhost/React21K-PHP-Projects/pokemonlist-fullstack/formatted_pokemon.php?page='+ $page;
 
    $formatted_data['next'] =  'http://localhost/React21K-PHP-Projects/pokemonlist-fullstack/formatted_pokemon.php?page=1';
    if($page>1){
        $formatted_data['previous'] =  'http://localhost/React21K-PHP-Projects/pokemonlist-fullstack/formatted_pokemon.php?page=1';
    }
    
    $json_formatted_results = json_encode($json_chunked_result[$page-1]);//as the chunks are in an array(0,1,2...)
    echo json_encode($formatted_data);
    //echo $json_formatted_results;

    /**
     * Create new JSON file
     */
    $write_file_result = file_put_contents('formatted_data.json', $json_formatted_results);
?>