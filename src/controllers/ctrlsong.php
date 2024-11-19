<?php

function ctrlsong($request, $response, $container){
    $id = $request->get(INPUT_GET,'id');

    $modelSong = $container->Songs();
    $song = $modelSong->getSongById($id);

    $response->set('song', $song);
    $response->setTemplate("song.php");
    return $response;
}