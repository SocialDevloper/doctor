<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FormWizard_v8</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
        
		<!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
        <style>
       
        @media (max-width: 62em) {
            .navbar-nav {
                padding-top: .425rem;
                padding-left: 0.75rem;
            }
            .navbar-nav .nav-item {
                float: none;
            }
            .navbar-brand {
                float: right;
            }
            .navbar-brand,
            .navbar-nav .nav-item {
                display: block;
            }
            .navbar-nav .nav-item + .nav-item {
                margin-left: 0;
            }
            .dropdown-menu {
                position: relative;
                float: none;
            }

        }
        @media only screen and (max-width: 425px) {
        #mynav {
            top:-5px !important;
        }
        }
        
        #mynav{
                position: relative;
                top:-50px;
                background-color:#8eb852 !important; 
            }

        .btn-group button {
            background-color: #4CAF50; /* Green background */
            border: 1px solid green; /* Green border */
            color: white; /* White text */
            padding: 10px 24px; /* Some padding */
            cursor: pointer; /* Pointer/hand icon */
            float: left; /* Float the buttons side by side */
        }

        /* Clear floats (clearfix hack) */
        .btn-group:after {
            content: "";
            clear: both;
            display: table;
        }

        .btn-group button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        /* Add a background color on hover */
        .btn-group button:hover {
            background-color: #3e8e41;
        }
    
        </style>
	</head>
	<body>
		<div class="wrapper">
            <!-- .navbar -->
<nav class="navbar navbar-full navbar-dark bg-primary" id="mynav">
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">
        &#9776;
        </button>
        <a class="navbar-brand" href="#">
        <img class="img-rounded" src="https://placehold.it/32/ffffff?text=B">
        </a>
        <div class="collapse navbar-toggleable-md" id="mainNavbarCollapse">
            <ul class="nav navbar-nav pull-lg-right">
                <li class="nav-item">
                    <a class="nav-link" href="#wizard" id="bookapp">Book Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#history" id="pateintdetails">History <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="../index.php">Sign out</a>
                    </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" id="navbarDropdown1" data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="../index.php">Sign out</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </nav>
    <!-- /.navbar -->
    <div id="history">
            <h3 style="margin-bottom: 16px;">Pending Appointment</h3>
            <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patient name</th>
                        <th scope="col">Appointment Date</th>
                        <th scope="col">Appointment Time</th>
                        <th scope="col">Delete Appointment</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>5-06-2019</td>
                        <td>08:00-08:10 AM</td>
                        <td><a href="#">
                                <i class="zmdi zmdi-close-circle-o"></i>
                            </a></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>10-06-2019</td>
                        <td>09:10-09:20 PM</td>
                        <td><a href="#">
                                <i class="zmdi zmdi-close-circle-o"></i>
                            </a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry John</td>
                        <td>25-05-2019</td>
                        <td>09:00-09:10 PM</td>
                        <td><a href="#">
                                <i class="zmdi zmdi-close-circle-o"></i>
                            </a></td>
                      </tr>
                    </tbody>
                  </table>
        </div>

            <form action="" id="wizard">
        		<!-- SECTION 1 -->
                <h4></h4>
                <section>
                        <div class="row">
                                <div class="col-md-4 col-sm-4"></div>
                                <div class="col-md-4 col-sm-4"> 
                                  <h5 class="text-right">Book Appointment</h5>
                                </div>
                                <div class="col-md-4 col-sm-4"> 
                                  <b><p class="text-right" id="weektime"></p></b>
                                </div>
                        </div>
                        <br> 
                       
                                    
 
                </section>

				<!-- SECTION 2 -->
                <h4></h4>
                <section>
                        <h3>Patient details</h3>
                        <div class="form-row">
                            <div class="form-holder">
                                <i class="zmdi zmdi-account"></i>
                                <input type="text" class="form-control" placeholder="Patient First Name">
                            </div>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account"></i>
                                <input type="text" class="form-control" placeholder="Patient Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control" placeholder="Email ID">
                            </div>
                            <div class="form-holder">
                                <i class="zmdi zmdi-calendar"></i>
                                <input type="text" class="form-control" placeholder="Patient Birthdate">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <i class="zmdi zmdi-smartphone-android"></i>
                                <input type="text" class="form-control" placeholder="Category">
                            </div>
                            <div class="form-holder password">
                                <i class="zmdi zmdi-disc-full"></i>
                                <input type="password" class="form-control" placeholder="Description">
                            </div>
                        </div>
                    </section>

                <!-- SECTION 3 -->
                <h4></h4>
                <section>
                    <h3 style="margin-bottom: 16px;">My Cart</h3>
                    <table cellspacing="0" class="table-cart shop_table shop_table_responsive cart woocommerce-cart-form__contents table" id="shop_table">
                        <thead>
                            <th >&nbsp;</th>
                            <th style="text-align: left;">Product Detail</th>
                            <th >Quantity</th>
                            <th >Total Price</th>
                            <th >&nbsp;</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/item-1.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Cherry</a>
                                        <span>$</span>
                                        <span>35</span>
                                    </div>
                                </td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity">
                                        <span class="plus">+</span>
                                        <input type="number" id="quantity_5b4f198d958e1" class="input-text qty text" step="1" min="0" max="" name="cart[5934c1ec0cd31e12bd9084d106bc2e32][qty]" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" />
                                        <span class="minus">-</span>
                                    </div>
                                </td>
                                <td class="total-price" data-title="Total Price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                        70
                                    </span>
                                </td>
                                <td class="product-remove">
                                    <a href="#">
                                        <i class="zmdi zmdi-close-circle-o"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/item-2.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                         <a href="#">Mango</a>
                                        <span>$</span>
                                        <span>2035</span>
                                    </div>
                                </td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity">
                                        <span class="plus">+</span>
                                        <input type="number" id="quantity_5b4f198d958e1" class="input-text qty text" step="1" min="0" max="" name="cart[5934c1ec0cd31e12bd9084d106bc2e32][qty]" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" />
                                        <span class="minus">-</span>
                                    </div>
                                </td>
                                <td class="total-price" data-title="Total Price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                        20
                                    </span>
                                </td>
                                <td class="product-remove">
                                    <a href="#">
                                        <i class="zmdi zmdi-close-circle-o"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <!-- SECTION 4 -->
                <h4></h4>
                <section>
                    <h3>Cart Totals</h3>
                    <div class="cart_totals">
                        <table cellspacing="0" class="shop_table shop_table_responsive">
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td data-title="Subtotal">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>110.00
                                    </span>
                                </td>
                            </tr>
                            <tr class="cart-subtotal shipping">
                                <th>Shipping:</th>
                                <td data-title="Subtotal">
                                    <div class="checkbox">
                                        <label>
                                            <input type="radio" name="shipping" checked> Free Shipping
                                            <span class="checkmark"></span>
                                        </label>
                                        <label>
                                            <input type="radio" name="shipping"> Local pickup: <span>$</span><span>0.00</span>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <span>Calculate shipping</span>
                                </td>
                            </tr>
                            <tr class="cart-subtotal">
                                <th>Service <span>(estimated for Vietnam)</span></th>
                                <td data-title="Subtotal">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>5.60
                                    </span>
                                </td>
                            </tr>
                            <tr class="order-total border-0">
                                <th>Total</th>
                                <td data-title="Total">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>64.69
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                </section>
            </form>
		</div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"> </script>
		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>

        <script src="js/main.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('#wizard').hide();
                $('#bookapp').click(function(){
                    $('#wizard').show();
                    $('#history').hide();
                    $("#bookapp").addClass("active");
                    $('#pateintdetails').removeClass("active");
                });
                $('#pateintdetails').click(function(){
                    $('#history').show();
                    $('#wizard').hide();
                    $("#bookapp").removeClass("active");
                    $('#pateintdetails').addClass("active");
                });
                
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy = today.getFullYear();

                todayd = yyyy + '-' + mm + '-' + dd;
                var newdate = new Date();
                newdate.setDate(newdate.getDate()+7);  
                var nedate = newdate.getFullYear() + "-" + (newdate.getMonth() + 1) + "-" + newdate.getDate(); 
                var f = new Date(nedate);
                var dd1 = String(f.getDate()).padStart(2, '0');
                var mm1 = String(f.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy1 = f.getFullYear();
                todayd1 = yyyy1 + '-' + mm1 + '-' + dd1;
                $('#weektime').text(todayd +" to "+ todayd1); 

                var weekday = new Array();
               
                weekday[1] = "Monday";
                weekday[2] = "Tuesday";
                weekday[3] = "Wednesday";
                weekday[4] = "Thursday";
                weekday[5] = "Friday";
                weekday[6] = "Saturday";
                var d = newdate.getUTCDay();
                var text;
                for(var i=1;i<=6;i++)
                {
                    text=text+'<a class="nav-item nav-link active" id="nav-'+weekday[d]+'-tab" data-toggle="tab" href="#nav-'+weekday[d]+'" role="tab" aria-controls="nav-'+weekday[d]+'" aria-selected="true">'+weekday[d]+'</a>';
                   $("#nav-tab").html(text);
                    d=d+1;
                   // alert(newdate.getUTCDay()+1);
                }

            });   
        </script>

<!-- Template created and distributed by Colorlib -->
</body>
</html>