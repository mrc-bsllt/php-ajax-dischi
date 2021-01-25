import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue(
  {
    el: "#app",

    data: {

      // database
      discs: [],
      genres: [],

      // header
      logo: "spotify-icon.png",
    }, // fine data

    methods: {

    }, // fine methods

    mounted: function() {
      const self = this;

      axios
      .get("http://localhost/php-ajax-dischi/server.php", {
        params: {
          genre: "fdfsdf"
        }
      })
      .then(function(response) {
        self.discs = response.data;

        // prendo il genere di tutti i dischi, e se non già presente, lo includo nell'array dei generi del data
        self.discs.forEach(
          (element) => {

            if(!self.genres.includes(element.genre)) {
              self.genres.push(element.genre);
            }

          }
        );
      });
    } // fine mounted
  } // fine vue
);
