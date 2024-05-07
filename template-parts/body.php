<main>
    <div class="container_page_title">
    <img class="container_page_title__marvel_logo" src="./assets/Marvel_Logo.svg" alt="Marvel Logo">
    </div>
    <article class="container_movie">
        <img class="container_movie__img" src="<?= $data["poster_url"]; ?>" alt="<?= $data["title"]; ?>">
        <div class="container_movie__data">
            <p class="container_movie__desc"><?= $until_message ?></p>
            <h2 class="container_movie__title"><?= $data["title"]; ?></h2>
            <p class="container_movie__over"><?= $data["overview"]; ?></p>
            <span class="container_movie__rel_date">Release Date: <strong><?= $data["release_date"]; ?></strong></span>
        </div>
    </article>

    <article class="container_fol_movie">
        <img class="container_fol_movie__img" src="<?= $data["following_production"]["poster_url"]; ?>" alt="<?= $data["following_production"]["title"]; ?>">
        <div class="container_fol_movie__data">
            <h3 class="container_fol_movie__title"><span>The next one will be: </span><strong><?= $data["following_production"]["title"]; ?></strong></h3>
            <p class="container_fol_movie__over"><?= $data["following_production"]["overview"]; ?></p>
            <span class="container_fol_movie__rel_date">Release Date: <strong><?= $data["following_production"]["release_date"]; ?></strong></span>
        </div>
    </article>
</main>