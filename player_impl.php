<?php
// includes
include 'config.php';

// implementation
function play()
{
    $url = server . ":" . port . "/radio/play/0";
    sendRequest($url);
    getNowPlaying();
}

function stop()
{
    $url = server . ":" . port . "/radio/stop";
    sendRequest($url);
    echo "stop";
}

function setVolume($value)
{
    $url = "";
    if ($value == 100) {
        $url = server . ":" . port . "/setvolume/400";
    }
    if ($value == 0) {
        $url = server . ":" . port . "/setvolume/-10328";
    }
    sendRequest($url);
    echo "volume set to " . $value;
}

function getVolume()
{
    $url = server . ":" . port . "/getvolume";
    $result = sendRequest($url);
    $json_object = json_decode($result);
    $volume = $json_object->ResponseData;
    echo $volume;

}

function getNowPlaying()
{
    $url = server . ":" . port . "/radio/nowplaying";
    $result = sendRequest($url);
    $json_object = json_decode($result);
    $now_playing = $json_object->ResponseData->Description;
    if ($now_playing == null || $now_playing == "---") {
        $now_playing = "no radio is playing at the moment";
    }
    echo $now_playing;
}

function getRadios()
{
    $url = server . ":" . port . "/radios";
    $result = sendRequest($url);
    $json_object = json_decode($result);
    $radios = $json_object->ResponseData->Radios;
    return $radios;
}

function sendRequest($url)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    return $result;
}
