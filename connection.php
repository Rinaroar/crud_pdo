<?php

function connectToBdd() {
    $hostbdd = 'localhost';
    $bddname = 'sequelmovie';
    $unamebdd = 'sequelmovie';
    $pwdbdd = '12345';

    $bdd = new PDO("mysql:host=$hostbdd;dbname=$bddname;charset=utf8",
    "$unamebdd", "$pwdbdd", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    return $bdd;
}