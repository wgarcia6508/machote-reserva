	include('db.php');
                        	$con=mysqli_connect("localhost","root","","hotel");
                                
									/*$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('El usuario ya existe')</script>";
										
									}

								//	else
									//{
										/*$new ="Not Conform";
										$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','Non Sri Lankan','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('su id es -Su solicitud de reserva ha sido enviadat')</script>";
										   
											*/
											// header("Location:verificar.php?rid=".$trow['id']."");
                                          /*  $check2="select max(id) from roombook";
                                            $rs2 = mysqli_query($con,$check2);
                                            echo "<script type='text/javascript'> alert('su id es -Su solicitud de reserva ha sido enviadat')</script>";
                                            $dataw = mysqli_fetch_array($rs2, MYSQLI_NUM);
                                            echo $dataw[0];
                                         
                                        }
										else
										{
											echo "<script type='text/javascript'> alert('Error al agregar usuario en la base de datos')</script>";
											
										}*/
									//}
