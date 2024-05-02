<?php
declare(strict_types=1);

const API_URL = "https://whenisthenextmcufilm.com/api";

function get_data(string $url):array
{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;

}

function get_message(int $days) :string
{
    return match (true){
        $days == 0      => "¡Hoy se estrena la película!",
        $days == 1      => "¡Mañana se estrena la película!",
        $days < 7       => "¡Ésta semana se estrena la película!",
        $days < 30      => "¡Éste mes se estrena la película",
        default         => "Faltan $days para el estreno de la película",
    };
}

$data = get_data(API_URL);
$until_message = get_message($data["days_until"]);

?>
<img src="<?= $data["poster_url"];?>" alt="<?= $data["title"]; ?>">
<h1><?= $data["title"]; ?> - <?= $until_message ?></h1>