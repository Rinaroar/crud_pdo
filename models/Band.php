<?php

require 'connection.php';

function getBands () {
    $bdd = connectToBdd();

    $query = $bdd->prepare("SELECT * FROM band");
    $query->execute();

    $bands = $query->fetchAll(PDO::FETCH_ASSOC);

    return $bands;
}

function create ($data) {
    if (! empty($data['name']) && ! empty($data['bandID'])) {
        $bdd = connectToBdd();
        $id = $data['bandID'];
        $name = $data['name'];

        $query = $bdd->prepare("INSERT INTO band (bandID, bandName) VALUES (?,?)");
        $query->execute([$id, $name]);
    }
}

function delete ($id) {
    if (! is_null($id)) {
        $bdd = connectToBdd();

        $query = $bdd->prepare("DELETE FROM `band` WHERE bandID = ?");
        $query->execute([$id]);
    }
}

function update ($data) {
    if (! empty($data['name']) && ! empty($data['update_band'])) {
        $bdd = connectToBdd();
        $id = $data['update_band'];
        $name = $data['name'];

        $query = $bdd->prepare("UPDATE band SET bandID=?, bandName=? WHERE bandID=?");
        $query-> execute ([$id, $name, $id]);
    }
}