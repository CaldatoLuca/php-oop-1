<body class="bg-dark text-light ">
    <div class="container mt-5">
        <h1 class="mb-5 text-center">Movie Class in PHP</h1>

        <!-- Movie List -->
        <div class="row justify-content-center">
            <?php foreach ($movies as $movie) : ?>
                <?php $movie = new Movie($movie['title'], $movie['director'], $movie['year'], $movie['genres'], $movie['description']); ?>
                <div class="col-md-4 mb-3">
                    <div class="card p-5 bg-success text-warning ">
                        <div class="card-body text-center">
                            <!-- titolo -->
                            <h5 class="-lc-movie-title"><?php echo $movie->title ?></h5>

                            <!-- anno -->
                            <div class="-lc-movie-year"><?php echo $movie->year ?></div>

                            <!-- regista -->
                            <div class="-lc-director-year"><?php echo $movie->director ?></div>

                            <?php foreach ($movie->getGenre() as $genre) : ?>
                                <!-- genere -->
                                <span class="-lc-genre-year "><?php echo $genre . ' ' ?></span>
                            <?php endforeach ?>

                            <div class="-lc-canva-description mt-3">
                                <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                                    View Description
                                </button>

                                <div class="offcanvas offcanvas-start bg-warning text-dark" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="-lc-movie-title"><?php echo $movie->title ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <!-- descrizione -->
                                        <div class="-lc-description-year"><?php echo $movie->description ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>