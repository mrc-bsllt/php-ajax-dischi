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
      .get("http://localhost/php-ajax-dischi/server.php")
      .then(function(response) {
        self.discs = response.data;

        self.discs.forEach(
          (element) => {
            if(!self.genres.includes(element.genre)) {
              self.genres.push(element.genre);
            }
          }
        );
        console.log(self.genres);
      });
    } // fine mounted
  } // fine vue
);
