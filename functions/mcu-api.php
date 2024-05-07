<?php
declare(strict_types=1);
const API_URL = "https://whenisthenextmcufilm.com/api";
function get_data(string $url): array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

$data = get_data(API_URL);
?>
