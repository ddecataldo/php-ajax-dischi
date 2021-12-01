new Vue({
    el: "#contenitoreCards",
    data: {
      albumList: [],
    },
    mounted() {
      axios.get("http://localhost/php-ajax-dischi/api/album.php").then((resp) => {
        this.albumList = resp.data;
      });
    },
  });