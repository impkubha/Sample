<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  
  <body>
    <script>
      function abc(){
        $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<4;i++) {
    next=next.next();
    if (!next.length) {
      next=$(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
  }
});
      }
    </script>
  
  <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner v-2" role="listbox">

    <div class="carousel-item active">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (36).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (34).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (29).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (30).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (27).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<!--Google Maps-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <script>
  $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<4;i++) {
    next=next.next();
    if (!next.length) {
      next=$(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
  }
});
</script>
</html>