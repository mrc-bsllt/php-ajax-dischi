<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- foglio di stile personale -->
    <link rel="stylesheet" href="css/style.css">
    <title>Vue-ajax-dischi</title>
  </head>
  <body>
    <div id="app" v-if="discs.length != 0">

      <!-- header -->
      <header>
        <div class="wrapper">
          <a href="#">
            <img :src="'img/' + logo" alt="logo-icon">
          </a>
        </div>
      </header>
      <!-- header -->

      <!-- main -->
      <main>
        <div class="wrapper">

            <div class="disc-container" v-for="disc in discs">
              <img :src="'img/' + disc.cover" :alt="disc.title">
              <div class="text">
                <a href="#">
                  <h3>{{ disc.title }}</h3>
                </a>
                <a href="#">
                  <h4>{{ disc.author }}</h4>
                </a>
                <span>{{ disc.year }}</span>
              </div>
            </div>

        </div>
      </main>
      <!-- /main -->

      <!-- footer -->
      <footer></footer>
      <!-- /footer -->

    </div>

    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
