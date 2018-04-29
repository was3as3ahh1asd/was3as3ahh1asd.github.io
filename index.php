<?php require_once 'inc/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Main page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- шапка сайта -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="css/kip.png" height="80px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Войти<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Регистрация</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<section class="products" style="margin: 40px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="card">
				  	<img class="card-img-top" src="https://c.dns-shop.ru/thumb/st1/fit//wm/800/650/c2c354a3fabdfae26f1560c1224332d5/f7ffabb276757d056956334af4cdcfcab95119b8bf1b2a386f04d1dcf94e2ac5.jpg" alt="Card image cap" width="230px" height="250px">
				  	<div class="card-body">
						  <h5 class="card-title">Defender Warhead G-260</h5>
						    <p class="card-text">[2.0, охватывающие, 20 Гц - 20000 Гц, 32 Ом, кабель - 1.8 м, черный/красный]</p>
						    <p class="price text-danger">567 rub</p>
						    <a href="#" class="btn btn-primary buy" data-price="567" data-product="Defender Warhead G-26">Купить</a>
				  	</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="card">
				  	<img class="card-img-top" src="https://c.dns-shop.ru/thumb/st1/fit//wm/800/650/c5e72e9e026b0adc8093d5c538d57176/9f4f6a85aff981e59aa7bf255ca6dbad6dfa33b64f41846f68087b9405b3798f.jpg" alt="Card image cap" width="230px" height="250px">
				  	<div class="card-body">
						  <h5 class="card-title">A4Tech HS-100</h5>
						    <p class="card-text">2.0, охватывающие, 20 Гц - 20000 Гц, 32 Ом, кабель - 2 м, черный]</p>
						    <p class="price text-danger">600 rub</p>
						    <a href="#" class="btn btn-primary buy" data-price="600" data-product="A4Tech HS-100">Купить</a>
				  	</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="card">
				  	<img class="card-img-top" src="https://c.dns-shop.ru/thumb/st1/fit//wm/800/650/91b86bde88ce80976eb498acb243d9a0/441d3695ba1d196086d16dabb21138b14997ccafe6c0421be7a6db934de73676.jpg" alt="Card image cap" width="230px" height="250px">
				  	<div class="card-body">
						  <h5 class="card-title">Asus CERBERUS</h5>
						    <p class="card-text">2.0, охватывающие, 20 Гц - 20000 Гц, 32 Ом, кабель - 1.2 м, черный/красный]</p>
						    <p class="price text-danger">999 rub</p>
						    <a href="#" class="btn btn-primary buy" data-price="999" data-product="Asus CERBERUS">Купить</a>
				  	</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- модальное окно с формой покупки -->
<div class="modal fade" id="cart">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Покупка</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      		<!-- Форма покупки-->
      		<form method="POST" id="buy">
			  <div class="form-group">
			    <label for="name">Имя:</label>
			    <input type="name" class="form-control" name="name" id="name"  placeholder="Имя" required="">
			  </div>
			  <div class="form-group">
			    <label for="email">Почта:</label>
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Почта" required="">
			  </div>
			  <div class="form-group">
			    <label for="product">Товар:</label>
			    <input type="text" class="form-control" name="product" id="product"  readonly="">
			  </div>
			  <div class="form-group">
			    <label for="price">Цена:</label>
			    <input type="text" class="form-control"  name="price" id="price"  readonly="">
			  </div>
			  <button type="submit" class="btn btn-primary">Купить</button>
			</form>
      </div>
      
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/main.js"></script>


</body>
</html>