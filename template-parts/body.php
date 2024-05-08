<header class="container_page_title">
    <img class="container_page_title__marvel_logo" src="./assets/Marvel_Logo.svg" alt="Marvel Logo">
    <h1 class="container_page_title__title">What's the next MCU movie?</h1>
</header>
<main>
    <article class="container_movie">
        <img class="container_movie__img swing-in-top-fwd" src="<?= $poster_url; ?>" alt="<?= $title; ?>">
        <div class="container_movie__data">
            <p class="container_movie__desc"><?= $until_message; ?></p>
            <h2 class="container_movie__title"><?= $title; ?></h2>
            <p class="container_movie__over"><?= $overview; ?></p>
            <span class="container_movie__rel_date">Release Date: <strong><?= $release_date; ?></strong></span>
        </div>
    </article>

    <article class="container_fol_movie">
        <img class="container_fol_movie__img" src="<?= $following_production["poster_url"]; ?>" alt="<?= $following_production["title"] ?? "Unknown"; ?>">
        <div class="container_fol_movie__data">
            <h3 class="container_fol_movie__title"><span>The next one will be: </span><strong><?= $following_production["title"] ?? "Unknown"; ?></strong></h3>
            <p class="container_fol_movie__over"><?= $following_production["overview"] ?? "Unknown";  ?></p>
            <span class="container_fol_movie__rel_date">Release Date: <strong><?= $following_production["release_date"] ?? "Unknown"; ?></strong></span>
        </div>
    </article>
</main>
<footer class="container_page_footer">
    <div>
        <a class="container_sing" href="https://helloeveryone.me/" rel="noopener">
            By: <strong>HelloEveryone</strong>
        </a>
        <a class="container_github" href="https://github.com/nach94/the-next-mcu-movie" rel="noopener">
            View<strong>Github repository</strong>.
        </a>
    </div>
</footer>