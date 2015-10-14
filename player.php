<?php
// includes
include 'player_impl.php';

// implementation
if ($_GET['action'] == 'play') {
    play();
}

if ($_GET['action'] == 'stop') {
    stop();
}

if ($_GET['action'] == 'volume100') {
    setVolume(100);
}

if ($_GET['action'] == 'volume0') {
    setVolume(0);
}

if ($_GET['action'] == 'getVolume') {
    getVolume();
}