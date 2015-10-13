<?php
// includes
require 'player_impl.php';

// implementation
if ($_GET['action'] == 'play') {
    play();
}

if ($_GET['action'] == 'stop') {
    stop();
}

if ($_GET['action'] == 'volume100') {
    volume(100);
}

if ($_GET['action'] == 'volume0') {
    volume(0);
}