<!-- //Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
// => all'interno della classe sono dichiarate delle variabili d'istanza
// => all'interno della classe è definito un costruttore
// => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?

include 'script.php';

$moviesArray = [$prisoner, $thePrestige];
if (isset($_POST['newReview']) && isset($_POST['movie_title'])) {
    $newReview = $_POST['newReview'];
    $reviewedMovie = $_POST['movie_title'];

    foreach ($moviesArray as $movie) {
        if ($reviewedMovie == $movie->title) {
            $movie->addReview($newReview);
            break;
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="movies-container d-flex gap-4">
        <? foreach ($moviesArray as $movie) : ?>
            <div class="card" style="width: 35rem;">
                <img src="<?php echo $movie->img_url; ?>" class="card-img-top " alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie->title; ?></h5>
                    <p class="card-text h-25 overflow-hidden fs-6"><?php echo $movie->summary; ?></p>
                    <p>
                        <strong> Director: </strong><?php echo $movie->director; ?>
                    </p>
                    <p>
                        <strong> Cast: </strong> <?php echo implode(', ', $movie->cast); ?>
                    </p>
                    <p>
                        <strong> Released in: </strong> <?php echo $movie->release_year; ?>
                    </p>
                    <p>
                    <p>
                        <strong> Reviews: </strong> <?php echo implode(', ', $movie->reviews); ?>
                    </p>
                    <div>
                        <strong>Vote:</strong>
                        <span class="stars-container">
                            <?php for ($x = 0; $x < $movie->vote; $x++) {
                                echo "<i class=\"fa-solid fa-star text-warning \"></i>";
                            } ?>
                        </span>
                    </div>



                    </p>
                    <form action="index.php" method="post">
                        <button class="btn btn-primary" type="submit">Add a review</button>
                        <input type="hidden" name="movie_title" value="<?php echo $movie->title; ?>">
                        <input type="text" name="newReview" id="newReview" style="width: 60%;">
                    </form>

                </div>

            </div>
        <? endforeach ?>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>