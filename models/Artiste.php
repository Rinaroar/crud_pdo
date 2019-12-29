<?php

require 'connection.php';

function get () {
    $bdd = connectToBdd();

    $query = $bdd->prepare("SELECT * FROM artiste");
    $query->execute();

    $artistes = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($artistes as &$artiste) {
        $bandName = getArtisteBand($artiste['artisteID']);
        if(is_array($bandName)) {
            $bandName = $bandName[0]['bandName'];
        }
        $artiste['band'] = $bandName;
    }

    return $artistes;
}

function getArtisteBand ($artisteId) {
    $bdd = connectToBdd();

    $query = $bdd->prepare("SELECT * FROM artiste_band WHERE a_artisteID = ?");
    $query->execute([$artisteId]);
    $artisteBand = $query->fetchAll(PDO::FETCH_ASSOC);

    if(! empty($artisteBand)) {
    $queryB = $bdd->prepare("SELECT bandName FROM band WHERE bandID = ?");
    $queryB->execute([$artisteBand[0]['b_bandID']]);

    return $queryB->fetchAll(PDO::FETCH_ASSOC);
    }

    return 'Aucun groupe';
}

function create ($data) {
    if (! empty($data['name']) && ! empty($data['artisteID'])) {
        $bdd = connectToBdd();
        $id = $data['artisteID'];
        $name = $data['name'];
        $nationality = $data['nationality'];

        $query = $bdd->prepare("INSERT INTO artiste (artisteID, artisteName, artisteNationality) VALUES (?,?,?)");
        $query->execute([$id, $name, $nationality]);
    }
}

function delete ($id) {
    if (! is_null($id)) {
        $bdd = connectToBdd();

        $query = $bdd->prepare("DELETE FROM `artiste` WHERE artisteID = ?");
        $query->execute([$id]);
    }
}

function update ($data) {
    if (! empty($data['name']) && ! empty($data['update_artiste'])) {
        $bdd = connectToBdd();
        $id = $data['update_artiste'];
        $name = $data['name'];
        $nationality = $data['nationality'];

        $query = $bdd->prepare("UPDATE artiste SET artisteID=?, artisteName=?, artisteNationality=? WHERE artisteID=?");
        $query->execute([$id, $name, $nationality, $id]);
    }
}
