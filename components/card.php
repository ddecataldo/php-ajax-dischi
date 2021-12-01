<?php
    require_once __DIR__ . "/../data/album.php";
?>

<?php 
    foreach($listAlbum as $album){ 
        /* var_dump($album); */    
?>
    <div class="col">
        <div class="card h-100">
            <img src="<?= $album["poster"] ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title"><?= $album["title"] ?></h5>
                <div class="card-text">
                    <p class="card-descrption"><?= $album["author"] ?></p>
                    <p class="card-data"><?= $album["year"] ?></p>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>