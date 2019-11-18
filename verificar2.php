<?php

							
								$code1=$_POST['code1'];
								$code=$_POST['code']; 
							
								
								if($code1!="$code")
								{
									echo $code1;
									echo $code;
									
									echo "<script type='text/javascript'> alert('este codigo es invlido ')</script>";
									echo ("<a href='javascript:history.back(1)'>Regresar</a>");
								}
								else
								{	$msg="Tu código es correcto";
									echo $msg;
									$a1=$_POST['title'];
									$a2=	$_POST['fname'];
									$a3=	$_POST['lname'];
									$a4=	$_POST['email'];
									$a5=	"Non Sri Lankan";
									$a6=	$_POST['country'];
									$a7=	$_POST['phone'];
									$a8=	$_POST['troom'];
									$a9=	$_POST['bed'];
									$a10=	$_POST['nroom'];
									$a11=	$_POST['meal'];
									$a12=	$_POST['cin'];
									$a13=	$_POST['cout'];
									
									
									
									$a14= $_POST['cin'];
									echo $a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14;
									include('db.php');
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										
										echo "<script type='text/javascript'> alert('El usuario ya existe')</script>";
										
									}
									else {
										echo "<script type='text/javascript'> alert('el no usuario existe ')</script>";
										/**************************************************************** */
										$new ="Not Conform";
										$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','Non Sri Lankan','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('su id es -Su solicitud de reserva ha sido enviadat')</script>";
										   
											
											// header("Location:verificar.php?rid=".$trow['id']."");
                                           
                                         
                                        }
										else
										{
											echo "<script type='text/javascript'> alert('Error al agregar usuario en la base de datos')</script>";
											
										}
										/**************************************************************** */
										}
								}
						
						
							
							?>
							
<?php
 // header("Location:verificar.php?rid=".$trow['id']."");
                                           
	
	
				$curdate=date("Y/m/d");
				include ('db.php');


				
				$check2="select max(id) from roombook";
                                            $rs2 = mysqli_query($con,$check2);
                                            
                                            $dataw = mysqli_fetch_array($rs2, MYSQLI_NUM);
                                            echo $dataw[0];
				$id = $dataw[0];
				
				
				$sql ="Select * from roombook where id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$title = $row['Title'];
					$fname = $row['FName'];
					$lname = $row['LName'];
					$email = $row['Email'];
					$nat = $row['National'];
					$country = $row['Country'];
					$Phone = $row['Phone'];
					$troom = $row['TRoom'];
					$nroom = $row['NRoom'];
					$bed = $row['Bed'];
					$non = $row['NRoom'];
					$meal = $row['Meal'];
					$cin = $row['cin'];
					$cout = $row['cout'];
					$sta = $row['stat'];
					$days = $row['nodays'];
					
				
				
				}
					
					
				
		
	
		
		
		
			?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrador	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
<div class="container">
    <div id="wrapper2">
        
        <!--/. NAV TOP  -->

        <!-- /. NAV SIDE      <div id="page-wrapper">  -->
		
		
		

   
            <div id="page-inner2">


                <div class="row">
			
                    
                    <div class="col-md-9 col-md-offset-3">
                        <h1 class="">
                            Reserva de habitacion<small>	<?php echo  $curdate; ?> </small>
                        </h1>
					</div>
					<div class="col-md-12">
                        <h1 class="page-header">
                        
                        </h1>
					</div>
					
				
					
					
					<div class="col-md-6 col-sm-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
Confirmación de reserva
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPCION</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>nombre</th>
                                            <th><?php echo $title.$fname.$lname; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Nacionalidad </th>
                                            <th><?php echo $nat; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Pais </th>
                                            <th><?php echo $country;  ?></th>
                                            
                                        </tr>
										<tr>
                                            <th> No Telefono</th>
                                            <th><?php echo $Phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Tipo de la habitación</th>
                                            <th><?php echo $troom; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No 	De la habitación </th>
                                            <th><?php echo $nroom; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Régimen de comidas </th>
                                            <th><?php echo $meal; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Lecho </th>
                                            <th><?php echo $bed; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Fecha de entrada</th>
                                            <th><?php echo $cin; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Fecha de salida</th>
                                            <th><?php echo $cout; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No de dias</th>
                                            <th><?php echo $days; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Nivel de estado</th>
                                            <th><?php echo $sta; ?></th>
                                            
                                        </tr>
                                   
                                  
                                        
                                        
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<div class="form-group">
														<label>Seleccione la Conformación</label>
														<select name="conf"class="form-control">
															<option value selected>	</option>
															<option value="Conform">CONFIRMAR</option>
															
															
														</select>
										 </div>
							<input type="submit" name="co" value="Conform" class="btn btn-success">
							
							</form>
                        </div>
                    </div>
					</div>
					
					<?php
						$rsql ="select * from room";
						$rre= mysqli_query($con,$rsql);
						$r =0 ;
						$sc =0;
						$gh = 0;
						$sr = 0;
						$dr = 0;
						$wx = 0;
						while($rrow=mysqli_fetch_array($rre))
						{
							$r = $r + 1;
							$s = $rrow['type'];
							$p = $rrow['place'];
							if($s=="Superior Room" )
							{
								$sc = $sc+ 1;
							}
							
							if($s=="Guest House")
							{
								$gh = $gh + 1;
							}
							if($s=="Single Room" )
							{
								$sr = $sr + 1;
							}
							if($s=="Deluxe Room" )
							{
								$dr = $dr + 1;
							}
							if($s=="cuarto1" )
							{
								$wx = $wx + 1;
							}
							
						
						}
						?>
						
						<?php
						$csql ="select * from payment";
						$cre= mysqli_query($con,$csql);
						$cr =0 ;
						$csc =0;
						$cgh = 0;
						$csr = 0;
						$cdr = 0;
						$cwx = 0;
						while($crow=mysqli_fetch_array($cre))
						{
							$cr = $cr + 1;
							$cs = $crow['troom'];
							
							if($cs=="Superior Room"  )
							{
								$csc = $csc + 1;
							}
							
							if($cs=="Guest House" )
							{
								$cgh = $cgh + 1;
							}
							if($cs=="Single Room" )
							{
								$csr = $csr + 1;
							}
							if($cs=="Deluxe Room" )
							{
								$cdr = $cdr + 1;
							}
							if($cs=="cuarto1" )
							{
								$cwx = $cwx + 1;
							}
							
						
						}
				
					?>
					
						<?php
						/*** empieza a calcular los precios o totales para la factura */


				
//echo "<script type='text/javascript'> alert('Guest Room booking is conform')</script>";
//echo "<script type='text/javascript'> window.location='home.php'</script>";
 $type_of_room = 0;       
		if($troom=="Superior Room")
		{
			$type_of_room = 320;
		
		}
		else if($troom=="Deluxe Room")
		{
			$type_of_room = 220;
		}
		else if($troom=="Guest House")
		{
			$type_of_room = 180;
		}
		else if($troom=="Single Room")
		{
			$type_of_room = 150;
		}
		else if($troom=="cuarto1")
		{
			$type_of_room = 10;
		}
		
		
		/** aqui pondre los prcios por camas extras */
		
		if($bed=="Single")
		{
			$type_of_bed = $type_of_room * 0/100;
		}
		else if($bed=="Double")
		{
			$type_of_bed = $type_of_room * 0/100;
		}
		else if($bed=="Triple")
		{
			$type_of_bed = $type_of_room * 0/100;
		}
		else if($bed=="Quad")
		{
			$type_of_bed = $type_of_room * 0/100;
		}
		else if($bed=="None")
		{
			$type_of_bed = $type_of_room * 0/100;
		}
		
		
		if($meal=="Room only")
		{
			$type_of_meal=$type_of_bed * 0;
		}
		else if($meal=="Breakfast")
		{
			$type_of_meal=$type_of_bed * 2;
		}else if($meal=="Half Board")
		{
			$type_of_meal=$type_of_bed * 3;
		
		}else if($meal=="Full Board")
		{
			$type_of_meal=$type_of_bed * 4;
		}
		
		
		$ttot = $type_of_room * $days * $nroom;
		$mepr = $type_of_meal * $days;
		$btot = $type_of_bed *$days;
		
/**aqui se define el Total de l afactura */
		$fintot = $ttot + $mepr + $btot ;
		
		echo $ttot."+".$mepr."+".$btot."=". $fintot;

?>
					<div class="col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                   Detalles de habitaciones disponibles

                        </div>
                        <div class="panel-body">
							<!-- width="200px "-->
						<table >
							
							<tr>
								<td><b>Tipo de habitacion</b></td>
								<td><button type="button" class="btn btn-primary "><?php  
									
									
											echo"$type_of_room";
									
								
								
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Numero de dias</b>	 </td>
								<td><button type="button" class="btn btn-primary "><?php 
								echo $days;

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Cantidad de Habitaciones </b></td>
								<td><button type="button" class="btn btn-primary "><?php
							echo $nroom;

								?> </button></td> 
							</tr>
							<tr>
								<td><b>Valor Habitacion * Numero de dias * Cantidad habitacion</b>	 </td>
								<td><button type="button" class="btn btn-primary "><?php 
								
								echo $ttot;
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Paltillo</b>	 </td>
								<td><button type="button" class="btn btn-primary "><?php 
								
								echo $type_of_meals;
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Platillo* Numero de dias </b>	 </td>
								<td><button type="button" class="btn btn-primary "><?php 
								
								echo $mepr;
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Extra de camas</b>	 </td>
								<td><button type="button" class="btn btn-primary "><?php 
								
								echo"campo vacio";
								?> </button></td> 
							</tr>

							<tr>

								<td><b>Total A facturar </b> </td>
								<td> <button type="button" class="btn btn-danger "><?php 
								
								echo"campo vacio";
								 ?> </button></td> 
							</tr>
						</table>
						
					
				
                        
						</div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
         </div>
            <!-- /. PAGE INNER  -->
        
        <!-- /.</div> PAGE WRAPPER  -->
    </div>
	<!-- /. WRAPPER  -->
	
	</div>
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>

<?php
						if(isset($_POST['co']))
						{	
							$st = $_POST['conf'];
							
							 
							
							if($st=="Conform")
							{
									$urb = "UPDATE `roombook` SET `stat`='$st' WHERE id = '$id'";
									
								if($f1=="NO" )
								{
									echo "<script type='text/javascript'> alert('Sorry! Not Available Superior Room ')</script>";
								}
								else if($f2 =="NO")
									{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Guest House')</script>";
										
									}
									else if ($f3 == "NO")
									{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Single Room')</script>";
									}
										else if($f4=="NO")
										{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Deluxe Room')</script>";
										}
										
										else if( mysqli_query($con,$urb))
											{	
												//echo "<script type='text/javascript'> alert('Guest Room booking is conform')</script>";
												//echo "<script type='text/javascript'> window.location='home.php'</script>";
												 $type_of_room = 0;       
														if($troom=="Superior Room")
														{
															$type_of_room = 320;
														
														}
														else if($troom=="Deluxe Room")
														{
															$type_of_room = 220;
														}
														else if($troom=="Guest House")
														{
															$type_of_room = 180;
														}
														else if($troom=="Single Room")
														{
															$type_of_room = 150;
														}
														else if($troom=="cuarto1")
														{
															$type_of_room = 10;
														}
														
														
														/** aqui pondre los prcios por camas extras */
														
														if($bed=="Single")
														{
															$type_of_bed = $type_of_room * 0/100;
														}
														else if($bed=="Double")
														{
															$type_of_bed = $type_of_room * 0/100;
														}
														else if($bed=="Triple")
														{
															$type_of_bed = $type_of_room * 0/100;
														}
														else if($bed=="Quad")
														{
															$type_of_bed = $type_of_room * 0/100;
														}
														else if($bed=="None")
														{
															$type_of_bed = $type_of_room * 0/100;
														}
														
														
														if($meal=="Room only")
														{
															$type_of_meal=$type_of_bed * 0;
														}
														else if($meal=="Breakfast")
														{
															$type_of_meal=$type_of_bed * 2;
														}else if($meal=="Half Board")
														{
															$type_of_meal=$type_of_bed * 3;
														
														}else if($meal=="Full Board")
														{
															$type_of_meal=$type_of_bed * 4;
														}
														
														
														$ttot = $type_of_room * $days * $nroom;
														$mepr = $type_of_meal * $days;
														$btot = $type_of_bed *$days;
														
								/**aqui se define el Total de l afactura */
														$fintot = $ttot + $mepr + $btot ;
															
															//echo "<script type='text/javascript'> alert('$count_date')</script>";
														$psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`,`meal`, `mepr`, `btot`,`fintot`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$troom','$bed','$nroom','$cin','$cout','$ttot','$meal','$mepr','$btot','$fintot','$days')";
														
														if(mysqli_query($con,$psql))
														{	$notfree="NotFree";
															$rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where bedding ='$bed' and type='$troom' ";
															if(mysqli_query($con,$rpsql))
															{
															echo "<script type='text/javascript'> alert('Booking Conform')</script>";
															echo "<script type='text/javascript'> window.location='roombook.php'</script>";
															}
															
															
														}
												
											}
									
                                        
							}	
					
						}
					
									
									
							
						?>