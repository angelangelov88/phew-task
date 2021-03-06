<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Album example · Bootstrap v5.1</title>

<!-- This is the bootstrap link -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
<!-- My local CSS -->
<link href="<?php bloginfo('template_url') ?>/css/style.css" rel="stylesheet">
  </head>
  <body>
    <header>
    </header>
    <main>
<!-- This is the bootstrap html for the page heading images -->
      <div class="album py-5 bg-light">
        <div class="container">
            <div class="page-heading">Page heading</div>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 images-container">
            <div class="col">
              <div class="card shadow-sm">
<!-- I used this PHP function to target the image source -->
                <img src="<?php bloginfo('template_url'); ?>/public/360x280.png" alt="image1">
                <div class="card-body">
                  <p class="card-text">Home</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="<?php bloginfo('template_url'); ?>/public/360x280.png" alt="image2">
                <div class="card-body">
                  <p class="card-text">About Us</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="<?php bloginfo('template_url'); ?>/public/360x280.png" alt="image3">
                <div class="card-body">
                  <p class="card-text">Contact Page</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- This is the bootstrap accordion -->
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              Accordion 1
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut natus quae nostrum alias minus molestiae facilis repellendus, non ducimus nulla obcaecati deleniti, tenetur blanditiis, culpa eveniet numquam odio modi officia!
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
              Accordion 2
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae atque, suscipit quam fuga totam, distinctio aspernatur quisquam sint amet cupiditate incidunt architecto non dolor eius omnis molestias consequatur itaque accusamus?            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
              Accordion 3
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam doloribus ad porro nisi ipsa placeat, et, magnam illo labore provident adipisci sunt dolorem voluptatibus. Neque fugiat corrupti recusandae harum excepturi.            </div>
          </div>
        </div>
      </div>
  
<!-- I added this last part myself as I could not find a bootstrap template for it -->
      <div class="banner-image">
        <img src="<?php bloginfo('template_url'); ?>/public/1296x420.png" class="img-fluid" alt="cover-image">
        <div class="card-body">
          <h5 class="card-title">Lorem ipsum dolor</h5>
          <p class="text-left">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</p>
          <a href="#" class="btn">Lorem ipsum</a>
        </div>
      </div>  
    </main>
    <footer class="text-muted py-5">
    </footer>

<!-- This is the Bootstrap core js file -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
 
  </body>
</html>
