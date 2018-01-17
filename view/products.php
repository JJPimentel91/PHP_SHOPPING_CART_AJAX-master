<?php
require_once('header.php');
require_once('model/productController.php');
?>

<body>
  <div class="container-fluid" id="nopad">
    <div class="col-sm-2" id="nopad">
      <div class="sidebar-nav" id="navpane">
        <div class="navbar navbar-default" role="navigation">
   		  <div class="navbar-header">
      	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
      		  <span class="sr-only">Toggle navigation</span>
      		  <span class="icon-bar"></span>
      		  <span class="icon-bar"></span>
      		  <span class="icon-bar"></span>
      		</button>
      		<span class="visible-xs navbar-brand">Sidebar menu</span>
    	  </div>
    	  <div class="navbar-collapse collapse sidebar-navbar-collapse">
      		<ul class="nav navbar-nav" id="sidenav01">
       		  <li class="active">
          		<a href="#" data-toggle="collapse" data-target="#toggleDemo123" data-parent="#sidenav01" class="collapsed">
          		  <h4>Sam´s Store<br><!--<small>IOSDSV <span class="caret"></span></small>--></h4>
          		</a>
          		<div class="collapse" id="toggleDemo0" style="height: 0px;">
            	  <ul class="nav nav-list">
              		<li><a href="#">ProfileSubMenu1</a></li>
              		<li><a href="#">ProfileSubMenu2</a></li>
              		<li><a href="#">ProfileSubMenu3</a></li>
            	  </ul>
         		</div>
       		  </li>
       		  <li><a href="#"> ¿Quienes Somos?</a></li>
        	  <li class="active">
          		<a href="#bolsasdiv" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
         		Bolsas <span class="caret pull-right"></span>
         		</a>
          		<div class="collapse" id="toggleDemo" style="height: 0px;">
            	  <ul class="nav nav-list">
              		<li id="list1"><a href="#">Negras</a></li>
              		<li id="list1"><a href="#">Azules</a></li>
              		<li id="list1"><a href="#">Rosas</a></li>
           		  </ul>
          		</div>
        	  </li>
        	  <li class="active">
          		<a href="#shoesdiv" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
          		Zapatos <span class="caret pull-right"></span>
          		</a>
          		<div class="collapse" id="toggleDemo2" style="height: 0px;">
            	  <ul class="nav nav-list">
              		<li id="list1"><a href="#">Negros</a></li>
              		<li id="list1"><a href="#">Cafes</a></li>
              		<li id="list1"><a href="#">Azules</a></li>
            	  </ul>
          		</div>
        	  </li>
        	  <li><a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/cart.php'; ?>" /><span class="glyphicon glyphicon-shopping-cart"></span> Carrito <span class="badge pull-right" id="numbersforall"></span></a></li>
     		</ul>
      	  </div><!--/.nav-collapse -->
    	</div>
      </div>
    </div><!--end of NAVPANE-->

    <div class="col-sm-10" style="padding: 0px 0px 0px 15px;">
      <div class ="col-sm-12" id="nopad">
    	<div class="jumbotron" id="mainpicdiv1">
		  <h2 id="title3">Sam´s Store</h2>
		  <h3 id="title4">Los mejores productos</h3>
		  <a href="#bolsasmenu"><button id="conoce1">Conoce mas</button></a>
		</div>
		<div class="container-fluid" id="nosotros1" class="slideanim">
		    <h1 id="title6">Acerca de Nosotros</h1>
		    <p id="text3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br><br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		    <h1 id="title6">¿Porque Elegirnos?</h1>
		    <p id="text3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br><br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>
		     </p>
		  </div>
		  <!--<div class="container-fluid">
		    <h1 id="title6" style="text-align: left;">¿Porque Elegirnos?</h1>
		    <div class="row" id="row2">
		      <div class="col-sm-4">
		        <p id="icon"><span class="glyphicon glyphicon-lock"></span></p>
		        <h3 id="title7">Seguridad</h3>
		        <p id="icontext">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		      </div>
		      <div class="col-sm-4">
		        <p id="icon"><i class="glyphicon glyphicon-home"></i></p>
		        <h3 id="title7">Casa</h3>
		        <p id="icontext">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		      </div>
		      <div class="col-sm-4">
		        <p id="icon"><i class="glyphicon glyphicon-map-marker"></i></p>
		        <h3 id="title7">Lugar</h3>
		        <p id="icontext">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		      </div>
		    </div>
		    <div class="row" id="row2">
		      <div class="col-sm-4">
		        <p id="icon"><i class="glyphicon glyphicon-tags"></i></p>
		        <h3 id="title7">Etiquetas</h3>
		        <p id="icontext">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		      </div>
		      <div class="col-sm-4">
		        <p id="icon"><i class="glyphicon glyphicon-leaf"></i></i></p>
		        <h3 id="title7">Hojita</h3>
		        <p id="icontext">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		      </div>
		      <div class="col-sm-4">
		        <p id="icon"><i class="glyphicon glyphicon-heart-empty"></i></p>
		        <h3 id="title7">Corazon</h3>
		        <p id="icontext">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		      </div>
		    </div>
		  </div>-->
		  <div class="container-fluid">
		    <h1 id="title6" style="text-align: center;">¿Que dicen de nosotros?</h1>
		    <div class="row" id="row2">
			  <div class="col-md-8 col-md-offset-2">
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="5500">
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="item">
                      <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                      <div class="text-center" id="stars">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star-empty"></i>
                      </div>
				      <blockquote>
				    	<p><span id="text1">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</span><br><br>
				    	<span id="text2"> - Usuario 1, Ama de Casa, 45 años</span></p>
				      </blockquote>	
				    </div>
				    <div class="item">
                      <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                      <div class="text-center" id="stars">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                      </div>
				      <blockquote>
				    	<p><span id="text1">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</span><br><br>
				    	<span id="text2"> - Usuario 1, Ama de Casa, 45 años</span></p>
				      </blockquote>
				    </div>
				    <div class="active item">
                      <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
                      <div class="text-center" id="stars">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                      </div>
				      <blockquote>
				    	<p><span id="text1">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</span><br><br>
				    	<span id="text2"> - Usuario 1, Ama de Casa, 45 años</span></p>
				      </blockquote>
				    </div>
                    <div class="item">
                      <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                      <div class="text-center" id="stars">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                      </div>
    			      <blockquote>
				    	<p><span id="text1">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</span><br><br>
				    	<span id="text2"> - Usuario 1, Ama de Casa, 45 años</span></p>
				      </blockquote>
				    </div>
                    <div class="item">
                      <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                      <div class="text-center" id="stars">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star-empty"></i>
                      </div>
    			      <blockquote>
				    	<p><span id="text1">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</span><br><br>
				    	<span id="text2"> - Usuario 1, Ama de Casa, 45 años</span></p>
				      </blockquote>
				    </div>
                    <div class="item">
                      <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                      <div class="text-center" id="stars">
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                        <i class="glyphicon glyphicon-star"></i>
                      </div>
    			      <blockquote>
				    	<p><span id="text1">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</span><br><br>
				    	<span id="text2"> - Usuario 1, Ama de Casa, 45 años</span></p>
				      </blockquote>
				    </div>
				  </div>
				</div>
			  </div>	
			</div>
		  </div>

		  <div class="container-fluid" id="email1">
			<h1 id="title6">¿Quieres recibir nuestras ofertas?</h1>
			<p id="text3">¡Déjanos tu correo!</p>
			  <div class="form-area">
			    <form role="form">
          		  <br style="clear:both">
		  		  <div class="form-group">
		    	    <input type="text" class="form-control" id="email" name="correo" placeholder="Correo Electronico" required>
		  	  	  </div>
            	  <input type="submit" id="submit" value="Suscribe" class="btn btn-primary pull-left">
        		</form>
      		  </div>
		  </div>

        <div>
	    <?php if(isset($_SESSION['message'])) { ?><div class="Message"><?php echo $_SESSION['message']; ?>
	    </div>

	    <?php } ?>
	      <a name="bolsasdiv"></a>
		  <div class="jumbotron" id="mainpicdiv">
			<h2 id="title2">Nuevos diseños</h2>
			<h3 id="title4">Coleccion 2018</h3>
			<a href="#bolsasmenu"><button id="comprar1">Comprar</button></a>
		  </div>

	    <?php
	    $productModel = new productController();
	
		// $conn = $db_handle->connectDB();

		$product_array = $productModel->getProducts();
		if (!empty($product_array)) { 
			foreach($product_array as $key=>$value){
		?>

		<div class="product-item">
		  <form id="frmCart">
			<a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir; ?>/?productID=<?php echo $product_array[$key]["code"]; ?>">
			  <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>" id="pics1"></div>
			  <div class="product-price"><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
			</a>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div><input type="text" id="qty_<?php echo $product_array[$key]["code"]; ?>" name="quantity" value="1" size="2" />
			<?php
				$in_session = "0";
				if(!empty($_SESSION["cart_item"])) {
					$session_code_array = array_keys($_SESSION["cart_item"]);
				    if(in_array($product_array[$key]["code"],$session_code_array)) {
						$in_session = "1";
				    }
				}
			?>

			<input type="button" id="add_<?php echo $product_array[$key]["code"]; ?>" value="Agregar" class="btnAddAction cart-action" onClick = "cartAction('add','<?php echo $product_array[$key]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?> />
			<input type="button" id="added_<?php echo $product_array[$key]["code"]; ?>" value="Agregado" class="btnAdded" <?php if($in_session != "1") { ?>style="display:none" <?php } ?> />
			</div>
		    
		  </form>
		</div>
	<?php
			}
	}
	?>
	</div>

	<div class="clear-float"></div>
	  <div>
	    <?php if(isset($_SESSION['message'])) { ?><div class="Message"><?php echo $_SESSION['message']; ?>
	    </div>

	    <?php } ?>

	    <a name="shoesdiv"></a>
		<div class="jumbotron" id="mainpicdiv3">
		  <h2 id="title2">Nuevos diseños</h2>
		  <h3 id="title4">Coleccion 2018</h3>
		  <a href="#shoesdiv"><button id="comprar1">Comprar</button></a>
		</div>

	    <?php
	    $productModel = new productController();
	
		// $conn = $db_handle->connectDB();

		$product_array = $productModel->getBags();
		if (!empty($product_array)) { 
			foreach($product_array as $key=>$value){
		?>

		<div class="product-item">
		  <form id="frmCart">
			<a href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir; ?>/?productID=<?php echo $product_array[$key]["code"]; ?>">
			  <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>" id="pics1"></div>
			  <div class="product-price"><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
			</a>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div><input type="text" id="qty_<?php echo $product_array[$key]["code"]; ?>" name="quantity" value="1" size="2" />
			<?php
				$in_session = "0";
				if(!empty($_SESSION["cart_item"])) {
					$session_code_array = array_keys($_SESSION["cart_item"]);
				    if(in_array($product_array[$key]["code"],$session_code_array)) {
						$in_session = "1";
				    }
				}
			?>

			<input type="button" id="add_<?php echo $product_array[$key]["code"]; ?>" value="Agregar" class="btnAddAction cart-action" onClick = "cartAction('add','<?php echo $product_array[$key]["code"]; ?>')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?> />
			<input type="button" id="added_<?php echo $product_array[$key]["code"]; ?>" value="Agregado" class="btnAdded" <?php if($in_session != "1") { ?>style="display:none" <?php } ?> />
			</div>
		    
		  </form>
		</div>
	<?php
			}
	}
	?>
	</div>


	  <div class="clear-float"></div>
	  <div id="shopping-cart">
	    <div class="jumbotron" id="mainpicdiv4">
		  <h2 id="title9">Carrito</h2>
		  <a href="#"><button id="comprar1">Pagar</button></a>
		</div>
		<div id="cart-item"></div>
		<div id="btn3"><a id="btnEmpty" class="cart-action" onClick="cartAction('empty','');">Vaciar Carrito</a>
		<a id="cartpage1" href="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$current_dir.'/cart.php'; ?>" />Pasar a pagar</a></div>
	  </div>

	</div><!--end of COL SM 10-->
  </div>><!--end of Container Fluid-->

  <div class="container-fluid" id="footer">
    <div class="col-sm-4" id="nopad">
      <h1 id="title10">Sam´s Store</h1>
      <p id="icon-footer">Nosotros <br>
  	  Bolsas<br>
  	  Zapatos<br></p>
    </div>
    <div class="col-sm-4" id="nopad">
      <h1 id="title11">Contactanos</h1>
      <p id="icon-footer"><i class="glyphicon glyphicon-map-marker"></i> Queretaro<br>
  	  <i class="fas fa-phone"></i> 442 000 0000<br>
  	  <i class="fas fa-envelope"></i> contacto@samsstore.com<br></p>
  	</div>
    <div class="col-sm-4">
      <h1 id="title11" id="nopad">Aceptamos</h1>
      <p><i class="fab fa-cc-visa" id="icon-footer"></i> VISA<br>
  	  <i class="fab fa-cc-mastercard" id="icon-footer"></i> Mastercard<br>
  	  <i class="fab fa-cc-amex" id="icon-footer"></i> American Express<br>
  	  <i class="fab fa-cc-paypal" id="icon-footer"></i> Paypal<br></p>
    </div>
  </div>

  <div class="container-fluid" id="footer2">
  	<p>CP Web Solutions</p>
  </div>


<script>
$(document).ready(function () {
	cartAction('','');
})
</script>
<?php
require_once('footer.php');
?>