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
		<!-- <link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css"> -->

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

		<!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
        

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
               
            </ul>
        </div>
    </nav>
    <!-- /.navbar -->
        <div id="history">
        <div class="card text-center">
            <div class="card-header">
                <h3>Appointment Details</h3>
            </div>
            <div class="card-body">
            <div style="margin:15px;">
            <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Patient name</th>
                        <th scope="col">Appointment Date</th>
                        <th scope="col">Appointment Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                       <tr>
                        <th scope="row">1</th>
                        <td>Jacob</td>
                        <td>10-06-2019</td>
                        <td>09:10-09:20 PM</td>
                        <td><span class="label label-warning">Panding</span></td>
                        <td><a href="#" data-toggle="tooltip" class="tip-bottom" title="Delete Appointment"> 
                                <i class="zmdi zmdi-close-circle-o"></i>
                            </a>
                        </td>
                      </tr>  
                      <tr>
                        <th scope="row">2</th>
                        <td>Larry John</td>
                        <td>25-05-2019</td>
                        <td>09:00-09:10 PM</td>
                        <td><span class="label label-success">Discussed</span></td>
                        <td><a href="#" data-toggle="tooltip" class="tip-bottom" title="Delete Appointment">
                                <i class="zmdi zmdi-close-circle-o"></i>
                            </a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>06-5-2019</td>
                        <td>08:00-08:10 AM</td>
                        <td><span class="label label-danger">Canceled</span></td>
                        <td><a href="#" data-toggle="tooltip" class="tip-bottom" title="Delete Appointment">
                                <i class="zmdi zmdi-close-circle-o"></i>
                            </a>
                        </td>
                      </tr>
                    </tbody>
                </table>
            
            
            
            </div>
            </div>
        </div>
            

        </div>

            <form action="" id="wizard">
        		<!-- SECTION 1 -->
                <h4></h4>
                <section>
                <div class="card text-center">
                    <div class="card-header">
                        <div class="row">
                                <div class="col-md-12 col-sm-12"> 
                                  <h3 class="text-center">Book Appointment</h3>
                                  <b><p class="text-center" id="weektime"></p></b>
                                </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="container-fluid">
		
                        <ul id="clothing-nav" class="nav nav-tabs" role="tablist">


                        </ul>

                    <!-- Content Panel -->
                    <div id="clothing-nav-content" class="tab-content">

                    <div role="tabpanel" class="tab-pane fade" id="Monday" aria-labelledby="Monday-tab">
                        <br>
                        <div class="row">
                        
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:00 to 8:10 AM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:20 to 8:30 AM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:40 to 8:50 AM</button> </div>
                        
                        </div>
                        <br/>
                        <div class="row">
                        
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:00 to 9:10 PM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:20 to 9:30 PM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:40 to 9:50 PM</button> </div>
                        
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="Tuesday" aria-labelledby="Tuesday-tab">
                        <br>
                        <div class="row">
                            
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:00 to 8:10 AM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:20 to 8:30 AM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:40 to 8:50 AM</button> </div>
                        
                        </div>
                        <br/>
                        <div class="row">
                        
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:00 to 9:10 PM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:20 to 9:30 PM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:40 to 9:50 PM</button> </div>
                        
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="Wednesday" aria-labelledby="Wednesday-tab">
                        <br>
                        <div class="row">
                            
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success"style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:00 to 8:10 AM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success"style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:20 to 8:30 AM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success"style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:40 to 8:50 AM</button> </div>
                        
                        </div>
                        <br/>
                        <div class="row">
                        
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:00 to 9:10 PM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:20 to 9:30 PM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:40 to 9:50 PM</button> </div>
                        
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="Thursday" aria-labelledby="Thursday-tab">
                        <br>
                        <div class="row">
                            
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:00 to 8:10 AM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:20 to 8:30 AM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:40 to 8:50 AM</button> </div>
                        
                        </div>
                        <br/>
                        <div class="row">
                        
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:00 to 9:10 PM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:20 to 9:30 PM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:40 to 9:50 PM</button> </div>
                        
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="Friday" aria-labelledby="Friday-tab">
                        <br>
                        <div class="row">
                            
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:00 to 8:10 AM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)" disabled> 8:20 to 8:30 AM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:40 to 8:50 AM</button> </div>
                        
                        </div>
                        <br/>
                        <div class="row">
                        
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:00 to 9:10 PM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:20 to 9:30 PM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:40 to 9:50 PM</button> </div>
                        
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="Saturday" aria-labelledby="Saturday-tab">
                        <br>
                        <div class="row">
                            
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:00 to 8:10 AM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:20 to 8:30 AM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 8:40 to 8:50 AM</button> </div>
                        
                        </div>
                        <br/>
                        <div class="row">
                        
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:00 to 9:10 PM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)"> 9:20 to 9:30 PM</button> </div>
                            <div class="col-md-4 col-sm-4"><button type="button" class="btn btn-success" style="background-image: linear-gradient(to right, #84fab0 0%, #8fd3f4 51%, #84fab0 100%)" disabled> 9:40 to 9:50 PM</button> </div>
                        
                        </div>
                    </div>
                    <br>
                    </div>
                    </div>
                </div>
                </div>
                <button type="button" id="firstnext" class="btn btn-primary float-right">Primary</button> 
                </section>

				<!-- SECTION 2 -->
                <h4></h4>
                <section>
                <div class="card text-center">
                    <div class="card-header">
                        <h3>Patient details</h3>
                    </div>
                    <div class="card-body">
                    <div style="margin: 15px;">
                        <div class="form-row">
                            <div class="form-holder">
                                <i class="zmdi zmdi-account"></i>
                                <input type="text" id="inputdate" class="form-control" placeholder="Date">
                            </div>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account"></i>
                                <input type="text" id="imputtime" class="form-control" placeholder="Time">
                            </div>
                        </div>
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
                                <input type="text" class="form-control" id="appdate" placeholder="Patient Birthdate">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <i class="zmdi zmdi-caret-down-circle"></i>
                                <select class="form-control">
                                    <option>Category1</option>
                                    <option>Category2</option>
                                    <option>Category3</option>
                                    <option>Category4</option>
                                </select>
                            </div>
                            <div class="form-holder password">
                                <i class="zmdi zmdi-smartphone-android"></i>
                                <input type="password" class="form-control" placeholder="Patient Mobile No">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder" style="width:100%; height: 71px; "> 
                            <i class="zmdi zmdi-edit"></i>
                            <textarea class="form-control" rows="5" id="comment" placeholder="Enter Discription" style="height: 75px;"></textarea>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                    
                        
                </section>

                <!-- SECTION 3 -->
                <h4></h4>
                <section>
                    <h3>Thank You For Book Appointment</h3>
                    
                </section>
            </form>
		</div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"> </script>
        <!--  -->
        <!-- <script src="vendor/date-picker/js/datepicker.js"></script> -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>

        <script src="js/main.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){

                $('#appdate').datepicker({ 
                    //format: 'yyyy-mm-dd',
                    format: 'dd-mm-yyyy',
                    endDate: "today",
                    autoclose:true,
                });

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

                //todayd = yyyy + '-' + mm + '-' + dd;
                todayd = dd + '-' + mm + '-' + yyyy;
                var newdate = new Date();
                newdate.setDate(newdate.getDate()+6);  
                var nedate = newdate.getFullYear() + "-" + (newdate.getMonth() + 1) + "-" + newdate.getDate(); 
                var f = new Date(nedate);
                var dd1 = String(f.getDate()).padStart(2, '0');
                var mm1 = String(f.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy1 = f.getFullYear();
                //todayd1 = yyyy1 + '-' + mm1 + '-' + dd1;
                todayd1 = dd1 + '-' + mm1 + '-' + yyyy1;
                $('#weektime').text("( "+todayd +" to "+todayd1+" )"); 

                var weekday = new Array();
               
                weekday[1] = "Monday";
                weekday[2] = "Tuesday";
                weekday[3] = "Wednesday";
                weekday[4] = "Thursday";
                weekday[5] = "Friday";
                weekday[6] = "Saturday";
                var d = today.getUTCDay();
                var todaydigit = d;
                var text="";
                var tomorrow = new Date();
                
                for(var i=0;i<=6;i++)
                {
                    if(todaydigit==d)
                    {
                        text=text+'<li class="nav-item"><a class="nav-link active" href="#'+weekday[d]+'" id="'+weekday[d]+'-tab" role="tab" data-toggle="tab" aria-controls="'+weekday[d]+'" aria-expanded="true">'+weekday[d]+'<br/>'+todayd+'</a></li>';
                        $("#" + weekday[d]).addClass("show active in");

                    }
                    else
                    {
                        tomorrow.setDate(tomorrow.getDate() + 1);
                        var newdate = tomorrow.getFullYear() + "-" + (tomorrow.getMonth() + 1) + "-" + tomorrow.getDate(); 
                        var f1 = new Date(newdate);
                        if(f1.getDay() == 0)
                        { 
                            continue;
                        } 
                        else
                        {
                        var dd2 = String(f1.getDate()).padStart(2, '0');
                        var mm2 = String(f1.getMonth() + 1).padStart(2, '0'); //January is 0!
                        var yyyy2 = f1.getFullYear();
                        //currentday = yyyy2 + '-' + mm2 + '-' + dd2;
                        currentday = dd2 + '-' + mm2 + '-' + yyyy2;
                        text=text+'<li class="nav-item"><a class="nav-link" href="#'+weekday[d]+'" id="'+weekday[d]+'-tab" role="tab" data-toggle="tab" aria-controls="'+weekday[d]+'" aria-expanded="true">'+weekday[d]+'<br/>'+currentday+'</a></li>';
                        }
                    }
                    
                    $("#clothing-nav").html(text);
                    d=d+1;
                    if(d==7)
                    {
                        d=1;
                    }
                    
                }


                $('#firstnext').click(function() {
                    alert("dsfads");
                });

            });   
        </script>

<!-- Template created and distributed by Colorlib -->
</body>
</html>