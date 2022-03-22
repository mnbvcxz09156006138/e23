<?php
    include "database.php";
    $sections_table = $db-> query("SELECT * FROM story title WHERE");
    $total = $sections_table->num_rows;
?>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="mashadmeat story">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css\bootstrap.rtl.css">
<link rel="stylesheet" href="css\style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">mashadmeat story</a>
    <nav class="navbar navbar-light bg-light">
  <div class="containerr">
    <a class="navbar-brand" href="#">
      <img src="im\mashadmeat.png" alt=""  height="40">
    </a>
  </div>
</nav>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
      <form class="d-flex">
      </form>
    </div>
  </div>
</nav>
<div class="carousel-caption d-none d-md-block text-body" >
      
      </div>
      <div class="container">
      <div class="carousel-caption d-none d-md-block text-body">
        <h4>یک روز به همراه پدرم رفتیم به موسسه صنعتی گوشت مشهد ک یهوی انتظامات موسسه دید و به بابام گفت</h2> 
        <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
  بابا سریع گاز بده و وارد موسسه بشویم
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
بابا کارت شناسایی را نشان بده که سریع وارد موسسه شویم
</label> 
        <button type="submit" class="btn btn-success mt-3 w-100">
       ادامه داستان
        </button>
    </div>
    
      </div>
      </div>          
</body>
</html>
