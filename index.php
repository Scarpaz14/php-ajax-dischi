<?php 

require_once __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div id="app">
    <header>
        <div class="container-fluid d-flex py-2">
            <div class="row  d-flex align-items-center">
                <div class="col d-flex">  
                    <img class="img-fluid" src="image/spotify-logo.png" alt="">
                </div>
                <div class="col">
                    <label for="genre">Scegli un genere musicale tra:</label>
                    <select id="genre">
                            <option value="all">All</option>
                            <option value="Rock">Rock</option>
                            <option value="Pop">Pop</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Metal">Metal</option>
                    </select>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="row">
                <?php foreach($database as  $song){ ?>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="card-song my-5 mx-3 py-4 ">
                        <img class="img-fluid" src="<?= $song['poster'] ?>" alt="">
                        <h3> <?= $song['title']; ?></h3>
                        <p> <?= $song['author']; ?></p>
                        <p> <?= $song['genre']; ?></p>
                        <small><?= $song['year']; ?></small> 
                    </div>
                    </div> 
                <?php } ?>
            </div>
        </section>
    </main>
</div>

<script src="js/script.js"></script>
    
</body>
</html>