import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue(
  {
    el: "#app",
    data: {

    },
    methods: {

    },
    mounted: function() {
      axios
      .get("http://localhost/php-ajax-dischi/server.php")
      .then(function(response) {
        console.log(response.data);
      });
    }
  }
);
