<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>API</title>

 <!-- Bootstrap core CSS -->
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/blog-post.css" rel="stylesheet">

</head>

<body>
<form class="form-inline" action="/search">
 @csrf
 <label for="keyword">Kata kunci : </label>
 <input type="text" class="form-control" name="keyword">
 <button type="submit" class="btn btn-primary">Search</button>
</form>

<div class="container">
<br>
 <h2>Daftar Artikel</h2>
 <br>
@foreach($artikel as $a)
<div class="card mb-4">
<h3>{{ $a->title}}<h3>
        <img class="card-img-top" src="{{ $a->urlToImage}}" alt="Card image cap">
          <div class="card-body">
         
          
            <p class="card-text">{{ $a->description}}</p>
            <a href=""><h5>{{ $a->url}}<h5></a>
            
 
          </div>

        </div>
@endforeach
</div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
