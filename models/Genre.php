<?php

require 'connection.php';

function getGenres () {
    $bdd = connectToBdd();

    $query = $bdd->prepare("SELECT * FROM genre");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function create ($data) {
    if (! empty($data['type']) && ! empty($data['genreID'])) {
        $bdd = connectToBdd();
        $id = $data['genreID'];
        $type = $data['type'];
        $description = $data['description'];

        $query = $bdd->prepare("INSERT INTO genre (genreID, genreType, genreDesc) VALUES (?,?,?)");
        $query->execute([$id, $type, $description]);
    }
}

function delete ($id) {
    if (! is_null($id)) {
        $bdd = connectToBdd();

        $query = $bdd->prepare("DELETE FROM `genre` WHERE genreID = ?");
        $query->execute([$id]);
    }
}

function update ($data) {
    if (! empty($data['type']) && ! empty($data['update_genre'])) {
        $bdd = connectToBdd();
        $id = $data['update_genre'];
        $type = $data['type'];
        $description = $data['description'];

        $query = $bdd->prepare("UPDATE genre SET genreID=?, genreType=?, genreDesc=? WHERE genreID=?");
        $query->execute([$id, $type, $description, $id]);
    }
}
