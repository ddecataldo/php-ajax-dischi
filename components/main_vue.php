<main>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-5 g-4 py-5" id="contenitoreCards">      
                
        <div class="col" v-for="album in albumList">
            <div class="card h-100">
                <img :src="album.poster" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ album.title }}</h5>
                    <div class="card-text">
                        <p class="card-descrption">{{ album.author }}</p>
                        <p class="card-data">{{ album.data }}</p>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</main>    

    

</div>    