<?php
  include("connection/connection.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
    <link rel="stylesheet" type="text/css" href="css/registration.css">
    <script type="text/javascript" src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
	

		  $('.collapse').collapse();

		});
		</script>

    <title>Members Registration</title>

   
  </head>
  <body>
    <div class="container-fluid" >
    	<div class="container" id="header">
	    	<div class="row">
	    		<div class="col-lg-4" id="logo"><img src="img/logo.jpg"></div>
	    		<div class="col-lg-4" id="aptName">
	    	

	    		</div>
	    		<div class="col-lg-4" id="logedPrifile">
	    			<label>Admin: </label><p>Mr.Kanishka</p>

	    		</div>
	    	</div>
    	</div>
    </div>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-2" id="slideLeft">
    		<div class="btn-group-vertical">

    			<div class="dropdown">
					  <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   Registrations
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Member registrations</a>
					    <a class="dropdown-item" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Masseurs Registration </a>
					    <a class="dropdown-item" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Tennis Coaches Registration</a>
					    <a class="dropdown-item" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Gym Instructors registration</a>
					  </div>
				</div>

				<div class="dropdown">
					  <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Bookings     
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="collapse" data-target="#collapseGym" aria-expanded="true" aria-controls="collapseGym">Gym</a>
					    <a class="dropdown-item" data-toggle="collapse" data-target="#collapseSpa" aria-expanded="false" aria-controls="collapseSpa">Spa</a>
					    <a class="dropdown-item" data-toggle="collapse" data-target="#collapseTennis" aria-expanded="false" aria-controls="collapseTennis">Tennis Court</a>
					    
					  </div>
				</div>

    			
    			<div class="dropdown">
					  <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Payment details
					  </button>

					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="collapse" data-target="#paymet1" aria-expanded="true" aria-controls="collapseGym">registration</a>
					  </div>
					</div>
				</div>
			</div>
	

    		<div class="col-lg-10">
    			<div class="row">
				  
				    <div class="col-lg-12" id="accordion">
				    	<h3 class="h3">Registrations</h3>
						  <div class="card">
						    <div class="card-header" id="memberRegistration">
						      <h5 class="h5">
						        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Member Registration
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="memberRegistration" data-parent="#accordion">
						      
						      <div class="card-body">
						      	<div class="row">
						      		<div class="col-lg-12">
									        
                                      <form action="userregistrations.php" method="POST">
                                        <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <label for="firstName">First Name</label>
                                            <input type="text" class="form-control form-control-sm" id="firstName" placeholder="First Name" name="firstName">
                                        </div>
                                        </div>

                                        <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <label for="lasttName">Last Name</label>
                                            <input type="text" class="form-control form-control-sm" id="lastName" placeholder="Last Name" name="lastName">
                                        </div>
										</div>
																				
										<div class="form-row">																					
                                        <div class="form-group col-lg-6">
                                            
                                            <label for="appartmentId">Appartment Id</label>
                                            <select id="appartmentId" class="form-control form-control-sm" name="appartmentId">
                                            <option value="A1" selected>A1</option>
                                            <option value="A2">A2</option>
                                            <option value="A3">A3</option>
                                            <option value="B1">B1</option>
                                            <option value="B2">B2</option>
                                            <option value="B3">B3</option>
                                            <option value="C1">C1</option>
                                            </select>
										</div>
										</div>
																			

                                        <div class="form-row">
	                                        <div class="form-group col-lg-6">
	                                            <label for="userName">User Name</label>
	                                            <input type="text" class="form-control form-control-sm" id="userName" placeholder="User Name" name="userName">
	                                        </div>
										</div>

																																						
																				
										<div class="form-row">
	                                        <div class="form-group col-lg-6">
	                                            <label for="inputEmail4">Password</label>
	                                            <input type="password" class="form-control form-control-sm" id="password" placeholder="Password" name="password">
	                                        </div>
										</div>
																				
										
										<div class="form-row">
	                                        <div class="form-group col-lg-6">
	                                            <label for="inputEmail4">Confirm Password</label>
	                                            <input type="confirmPassword" class="form-control form-control-sm" id="confirmPassword" placeholder="Confirm Password" name="confirmPassword">
	                                        </div>
                                        </div>

                                        <div class="form-row">
	                                        <div class="form-group col-lg-6">
	                                            <label for="inputEmail4">Email</label>
	                                            <input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="Email" name="email">
	                                        </div>
										</div>
																				
																				

                                        <div class="form-row">
	                                        <div class="form-group col-lg-6">
	                                            <label for="nic">ID Number</label>
	                                            <input type="text" class="form-control form-control-sm" id="nic" placeholder="Id Number" name="nic">
	                                        </div>
                                        </div>
                                        
                                        <div class="form-row">
	                                        <div class="form-group col-lg-6">
	                                            <label for="contactNumber">Contact Number</label>
	                                            <input type="text" class="form-control form-control-sm" id="contactNumber" placeholder="Contact Number" name="contactNumber">
	                                        </div>
                                        </div>

                                       

                                        
                                        <br>
                                        <fieldset class="form-group">
                                            <div class="row">
	                                            <div class="col-sm-10">
	                                                <h3 class="h3">Gender</h3>
	                                                <div class="form-check">
		                                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
		                                                <label class="form-check-label" for="gridRadios1">
		                                                    Male
		                                                </label>
	                                                </div>
																									
													<div class="form-check">
		                                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
		                                                <label class="form-check-label" for="gridRadios2">
		                                                    Female
		                                                </label>
	                                                </div>
	                                                
	                                            </div>
                                            </div>
                                        </fieldset>

                                        <button type="submit" class="btn btn-primary orange" value="Submit" name="submit">Submit</button>
                                        <button type="reset" class="btn  btn-primary orange">Reset</button>
                                        </form>	  								
									</div>
								</div> 			
						      </div>
						    </div>
						  </div>


						  <div class="card">
						    <div class="card-header" id="messeursRegistration">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Masseurs Registration
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="messeursRegistration" data-parent="#accordion">
						      <div class="card-body">
						      	<div class="row">
						      		<div class="col-lg-12">
									       <form action="userregistrations.php" method="POST">
                                        <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <label for="firstName">First Name</label>
                                            <input type="text" class="form-control form-control-sm" id="firstName" placeholder="First Name" name="firstName">
                                        </div>
                                        </div>

                                        <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <label for="lasttName">Last Name</label>
                                            <input type="text" class="form-control form-control-sm" id="lastName" placeholder="Last Name" name="lastName">
                                        </div>
										</div>
																				
										
										<fieldset class="form-group">
                                            <div class="row">
	                                            <div class="col-sm-10">
	                                              <label for="role">role</label>
	                                                <div class="form-check">
		                                                <input class="form-check-input" type="radio" name="role" id="gymInstructor" value="gym instructor">
		                                                <label class="form-check-label" for="gymInstructor">
		                                                    Gym instructor
		                                                </label>
	                                                </div>
																									
													<div class="form-check">
		                                                <input class="form-check-input" type="radio" name="role" id="messeur" value="messeur">
		                                                <label class="form-check-label" for="messeur">
		                                                    Messeur
		                                                </label>
	                                                </div>

	                                                <div class="form-check">
		                                                <input class="form-check-input" type="radio" name="role" id="tenniscauch" value="tennis cauch">
		                                                <label class="form-check-label" for="tennisCauch">
		                                                    Tennis cauoch
		                                                </label>
	                                                </div>
	                                                
	                                            </div>
                                            </div>
                                        </fieldset>


                                        <div class="form-row">
	                                        <div class="form-group col-lg-6">
	                                            <label for="userName">User Name</label>
	                                            <input type="text" class="form-control form-control-sm" id="userName" placeholder="User Name" name="userName">
	                                        </div>
										</div>

																																						
																				
										<div class="form-row">
	                                        <div class="form-group col-lg-6">
	                                            <label for="inputEmail4">Password</label>
	                                            <input type="password" class="form-control form-control-sm" id="password" placeholder="Password" name="password">
	                                        </div>
										</div>
																				
										
										<div class="form-row">
	                                        <div class="form-group col-lg-6">
	                                            <label for="inputEmail4">Confirm Password</label>
	                                            <input type="confirmPassword" class="form-control form-control-sm" id="confirmPassword" placeholder="Confirm Password" name="confirmPassword">
	                                        </div>
                                        </div>

                                        <div class="form-row">
	                                        <div class="form-group col-lg-6">
	                                            <label for="inputEmail4">Email</label>
	                                            <input type="email" class="form-control form-control-sm" id="inputEmail4" placeholder="Email" name="email">
	                                        </div>
										</div>
																				
																				

                                        <div class="form-row">
	                                        <div class="form-group col-lg-6">
	                                            <label for="nic">ID Number</label>
	                                            <input type="text" class="form-control form-control-sm" id="nic" placeholder="Id Number" name="nic">
	                                        </div>
                                        </div>
                                        
                                        <div class="form-row">
	                                        <div class="form-group col-lg-6">
	                                            <label for="contactNumber">Contact Number</label>
	                                            <input type="text" class="form-control form-control-sm" id="contactNumber" placeholder="Contact Number" name="contactNumber">
	                                        </div>
                                        </div>

                                       

                                        
                                        <br>
                                        <fieldset class="form-group">
                                            <div class="row">
	                                            <div class="col-sm-10">
	                                                <h3 class="h3">Gender</h3>
	                                                <div class="form-check">
		                                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
		                                                <label class="form-check-label" for="gridRadios1">
		                                                    Male
		                                                </label>
	                                                </div>
																									
													<div class="form-check">
		                                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
		                                                <label class="form-check-label" for="gridRadios2">
		                                                    Female
		                                                </label>
	                                                </div>
	                                                
	                                            </div>
                                            </div>
                                        </fieldset>

                                        <button type="submit" class="btn btn-primary orange" value="Submit" name="submit">Submit</button>
                                        <button type="reset" class="btn  btn-primary orange">Reset</button>
                                        </form>									</div>
								</div> 							      
							</div>
						    </div>
						  </div>


						  <div class="card">
						    <div class="card-header" id="tennisCoachesRegistration">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Tennis Coaches Registration
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="tennisCoachesRegistration" data-parent="#accordion">
						      <div class="card-body">
						      		<div class="col-lg-12">
									        <table class='table-responsive-lg table-sm'>

														  <thead class='thead-dark'>
														    <tr>
														      <th scope='col'>Registration Id</th>	
														      <th scope='col'>Role</th>
														      <th scope='col'>First Name</th>
														      <th scope='col'>Last Name</th>
														      <th scope='col'>User name</th>
														      <th scope='col'>email</th>
														      <th scope='col'>Tp No</th>
														      <th scope='col'>NIC</th>
														      <th scope='col'>Gender</th>
														      <th scope='col'>Register</th>
														    </tr>
														  </thead>

									<?php 
						       		 $sql = "SELECT id, firstName, lastName,userName,email,tpNo,nic,gender,register,password,role FROM instructors WHERE register='0' AND role='tennis cauch'";
										$result = $conn->query($sql);
										

										if ($result->num_rows > 0) {

										    while($row = $result->fetch_assoc()) {

												 echo "
												 	

														  <tbody>
																<form action='register.php' method='POST'>
																	<tr>
																	  <th><input class='form-control' type='text' name='regButton' value=".$row["id"]."></th>
																      <td>".$row["firstName"]."</td>
																      <td>".$row["lastName"]."</td>
																      <th>".$row["role"]."</th>
																      <td>".$row["userName"]."</td>
																      <td>".$row["email"]."</td>
																      <td>".$row["tpNo"]."</td>
																      <td>".$row["nic"]."</td>
																      <td>".$row["gender"]."</td>
																      <td><input  class='form-control' type='submit' value='Register'></td>

																    </tr>

												    			</form>
												    		</tbody>";
										    }
										} else {
										    echo "<p>No member registrations</p>";
										}
										?>
											   

										</table>
											  								
									</div>
								</div> 
							  </div>
						    </div>


						  <div class="card">
						    <div class="card-header" id="tennisCoachesRegistration">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						          Gym Instructor Registration
						        </button>
						      </h5>
						    </div>
						    <div id="collapseFour" class="collapse" aria-labelledby="tennisCoachesRegistration" data-parent="#accordion">
						      <div class="card-body">
						      		<div class="col-lg-12">
									        <table class='table-responsive-lg table-sm'>

														  <thead class='thead-dark'>
														    <tr>
														      <th scope='col'>Registration Id</th>	
														      <th scope='col'>Role</th>
														      <th scope='col'>First Name</th>
														      <th scope='col'>Last Name</th>
														      <th scope='col'>User name</th>
														      <th scope='col'>email</th>
														      <th scope='col'>Tp No</th>
														      <th scope='col'>NIC</th>
														      <th scope='col'>Gender</th>
														      <th scope='col'>Register</th>
														    </tr>
														  </thead>

									<?php 
						       		 $sql = "SELECT id, firstName, lastName,userName,email,tpNo,nic,gender,register,password,role FROM instructors WHERE register='0' AND role='gym instructor'";
										$result = $conn->query($sql);
										

										if ($result->num_rows > 0) {

										    while($row = $result->fetch_assoc()) {

												 echo "
												 	

														  <tbody>
																<form action='register.php' method='POST'>
																	<tr>
																	  <th><input class='form-control' type='text' name='regButton' value=".$row["id"]."></th>
																      <td>".$row["firstName"]."</td>
																      <td>".$row["lastName"]."</td>
																      <th>".$row["role"]."</th>
																      <td>".$row["userName"]."</td>
																      <td>".$row["email"]."</td>
																      <td>".$row["tpNo"]."</td>
																      <td>".$row["nic"]."</td>
																      <td>".$row["gender"]."</td>
																      <td><input  class='form-control' type='submit' value='Register'></td>

																    </tr>

												    			</form>
												    		</tbody>";
										    }
										} else {
										    echo "<p>No member registrations</p>";
										}
										?>
										</table>		  								
									</div>
						      </div>
						    </div>
						  </div>
						  <br><br>

						  <br>
						  <h2 class="h2">Bookings</h2>

						  <div class="card">
						    <div class="card-header" id="gymBookings">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseGym" aria-expanded="false" aria-controls="collapseGym">
						          Gym Bookings
						        </button>
						      </h5>
						    </div>
						    <div id="collapseGym" class="collapse" aria-labelledby="gymBookings" data-parent="#accordion">
						      <div class="card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header" id="spaBookings">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSpa" aria-expanded="false" aria-controls="collapseSpa">
						          Spa Bookings
						        </button>
						      </h5>
						    </div>
						    <div id="collapseSpa" class="collapse" aria-labelledby="spaBookings" data-parent="#accordion">
						      <div class="card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>


						  <div class="card">
						    <div class="card-header" id="teniisBookings">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTennis" aria-expanded="false" aria-controls="collapseTennis">
						          Tennis Court Bookings
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTennis" class="collapse" aria-labelledby="teniisBookings" data-parent="#accordion">
						      <div class="card-body">
						        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      </div>
						    </div>
						  </div>




					</div>
				
				</div>

    		</div>
    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>