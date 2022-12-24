<div class="col-sm-4">
							<div class="impact-left-content">
								<div class="top-border">
									<span class="border-1"></span>
									<span class="border-2"></span>
									<span class="border-3"></span>
								</div>
								<div class="become-member">
									<div class="become-member-head pb30">
										<h3 class="black">Become a Part Of Us.</h3>
										<p>Kindly fill the form below</p>
									</div>
									<div class="become-member-form">
										
                                    
                                    
                                    
                                    <form  method="post" enctype="multipart/form-data">
                                                <?php
                               include('db_conn.php');                                
                                error_reporting(E_ALL);
                                 if (isset($_REQUEST["submit"])){
                                    $name=$_REQUEST["name"];
                                    $email=$_REQUEST["email"];
                                    $message=$_REQUEST["message"];

                                    // to insert into database
                                    $sql="INSERT INTO ngo_volunteer(name, email, message) VALUES ('$name','$email','$message')";

                                    mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                        $num=mysqli_insert_id($conn);
                                        if(mysqli_affected_rows($conn)!=1){
                                            $message="Error inserting data to Database";
                                        }
                                    echo "<script>alert('Dear $name,Thank you for volunteering!.')
                                    location.href='index.php'</script>";
                                 
                            }
                         
                   
                                ?>
											<div class="contact-info mb20">
												<input class="name" name="name" type="text" placeholder="Name" required>
											</div>
											<div class="contact-info mb20">
												<input class="email" name="email" type="email" placeholder="Email" required>
											</div>
											<div class="contact-select pb40">
                                            <div class="form-group"><textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea></div>
											</div>
											<div class="become-member-button text-center">
												<button type="submit" name="submit" value="Submit">BECOME  A VOLuNTeER</button>
											</div>
										</form>	
									</div>
								</div>
							</div>
						</div>