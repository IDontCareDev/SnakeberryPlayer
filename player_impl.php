<?php
// includes
require 'config.php';

// implementation
function play()
{
    $url = server . ":" . port . "/radio/play/0";
    sendRequest($url);
    echo "play";
}

function stop()
{
    $url = server . ":" . port . "/radio/stop";
    sendRequest($url);
    echo "stop";
}

function volume($value)
{
    $url = "";
    if ($value == 100) {
        $url = server . ":" . port . "/setvolume/400";
    }
    if ($value == 0) {
        $url = server . ":" . port . "/setvolume/-10328";
    }
    sendRequest($url);
    echo "volume " . $value;
}


function sendRequest($url)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($curl);
    curl_close($curl);
}
