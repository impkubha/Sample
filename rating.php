<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <title>Rating</title>
  </head>
  <style>
div.stars{
  width: 270px;
  display: inline-block;
}
 
input.star{
  display: none;
}
 
label.star {
  float: right;
  padding: 5px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}
 
input.star:checked ~ label.star:before {
  content:'\f005';
  color: #FD4;
  transition: all .25s;
}
 
 
input.star-5:checked ~ label.star:before {
  color:#FE7;
  text-shadow: 0 0 20px #952;
}
 
input.star-1:checked ~ label.star:before {
  color: #F62;
}
 
label.star:hover{
  transform: rotate(-15deg) scale(1.3);
}
 
label.star:before{
  content:'\f006';
  font-family: FontAwesome;
}
 
.rev-box{
  overflow: hidden;
  height: 0;
  width: 100%;
  transition: all .25s;
}
 
textarea.review{
  background: #222;
  border: none;
  width: 100%;
  max-width: 100%;
  height: 100px;
  padding: 10px;
  box-sizing: border-box;
  color: #EEE;
}
 
label.review{
  display: block;
  transition:opacity .25s;
}
 
input.star:checked ~ .rev-box{
  height: 125px;
  overflow: visible;
}
  </style>
  <body>
  <form class="mx-5 " action="" method="POST" id="commentform">
<div class="stars">
<form action="">
  <input class="star star-5" id="star-5" type="radio" name="star"/>
  <label class="star star-5" for="star-5"></label>
  <input class="star star-4" id="star-4" type="radio" name="star"/>
  <label class="star star-4" for="star-4"></label>
  <input class="star star-3" id="star-3" type="radio" name="star"/>
  <label class="star star-3" for="star-3"></label>
  <input class="star star-2" id="star-2" type="radio" name="star"/>
  <label class="star star-2" for="star-2"></label>
  <input class="star star-1" id="star-1" type="radio" name="star"/>
  <label class="star star-1" for="star-1"></label>
</form>
</div>
    
<div id="comment-message" class="form-row">
<textarea class="form-control mx-5" name = "comment" placeholder = "Message" id = "comment" ></textarea>
</div>
<a href="#"><input class="mx-5" type="submit" name="dsubmit" id="commentSubmit" value="Submit Comment"></a>
<input class="" style="width: 30px" type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked">
<p1 class=""><b>Notify me when new comments are added.</b></p1>
</form>

</div>
</div>
</div>
</div>

<!-------------------Reply Section------->
<div id="second">
<div class="row">
<div class="col-md-2">

</div>
<div class="col-md-10">
<div class="blank"></div>
</div>
</div>
</div>


 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
  </body>
</html>