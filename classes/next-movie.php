<?php

declare(strict_types=1);

class NextMovie
{
    public function __construct(
        private string $title,
        private int $days_until,
        private array $following_production,
        private string $release_date,
        private string $poster_url,
        private string $overview,
    ) {
    }

    public function get_message(): string
    {
        $days = $this -> days_until;
        return match (true) {
            $days == 0      => "The movie premieres today!",
            $days == 1      => "The movie premieres tomorrow!",
            $days < 7       => "This week the movie premieres!",
            $days < 30      => "This month the movie premieres!",
            default         => "There are $days days left until the premiere of the film.",
        };
    }

    public static function fetch_and_create_movie(string $api_url): NextMovie
    {
        $result = file_get_contents($api_url);
        $data = json_decode($result, true);
        return new self(
            $data["title"],
            $data["days_until"],
            $data["following_production"],              
            $data["release_date"],
            $data["poster_url"],
            $data["overview"],
        );
    }
    
    public function get_data(){
        return get_object_vars($this);
    }
}

?>