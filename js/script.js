var app = new Vue(
  {
    el: "#app",
    data: {

    },
    methods: {

    },
    mounted: function() {
      const self = this;

      axios
      .get("http://localhost/php-ajax-dischi/server.php")
      .then(function(result) {

        console.log(result.data);
        
      });
    }
  }
);
