<?php
    require_once __DIR__ . "/../data/album.php";
?>

<?php 
    foreach($listAlbum as $album){ 
?>
    <div class="col">
        <div class="card h-100">
            <img :src="src" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php $album["title"] ?></h5>
                <div class="card-text">
                    <p class="card-descrption">Descrizione</p>
                    <p class="card-data">Data</p>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>