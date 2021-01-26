import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue(
  {
    el: "#app",

    data: {

      // database
      discs: [],
      genres: [],
      genre: "",

      // header
      logo: "spotify-icon.png",
    }, // fine data

    methods: {

      filter: function() {
        const self = this;
        const genre = self.genre;

        axios
        .get("server.php", {
          params: {
            genre
          }
        })
        .then( (response) => {
          self.discs = response.data;
          console.log(self.discs);
        })
      } // fine funzione

    }, // fine methods

    mounted: function() {
      const self = this;

      axios
      .get("server.php")
      .then(function(response) {
        self.discs = response.data;

        // prendo il genere di tutti i dischi, e se non già presente, lo includo nell'array dei generi del data
        self.discs.forEach(
          (element) => {

            if(!self.genres.includes(element.genre)) {
              self.genres.push(element.genre);
            }

          }
        ); // fine forEach
      }); //fine then
    } // fine mounted
  } // fine vue
);
