<?php
function get_message(int $days): string
{
    return match (true) {
        $days == 0      => "The movie premieres today!",
        $days == 1      => "The movie premieres tomorrow!",
        $days < 7       => "This week the movie premieres!",
        $days < 30      => "This month the movie premieres!",
        default         => "There are $days days left until the premiere of the film.",
    };
}

$until_message = get_message($data["days_until"]);
?>
