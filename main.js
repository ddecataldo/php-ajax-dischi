const contenitoreCards = document.getElementById("contenitoreCards");

axios.get("http://localhost/php-ajax-dischi/api/album.php").then((resp) => {
  const dati = resp.data;

  dati.forEach((singleAlbum) => {
    const card =    `<div class="col">
                        <div class="card h-100">
                            <img src="${singleAlbum.poster0}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title">${singleAlbum.title}</h5>
                                <div class="card-text">
                                    <p class="card-descrption">${singleAlbum.author}</p>
                                    <p class="card-data">${singleAlbum.year}</p>
                                </div>
                            </div>
                        </div>
                    </div>`;

    contenitoreCards.innerHTML += card;
  });
});