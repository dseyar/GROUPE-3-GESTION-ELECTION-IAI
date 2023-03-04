
<?php include ('head.php');?>
<body>

    <div id="wrapper">
    	<?php    
        include ('index_banner.php');
        ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
			
					<div class="form-panel">
                      
                        <div class="form-body"> 

                         <form method = "post" enctype = "multipart/form-data">
                         	
                                <div class="form-heading">
                         		<center>Incrition au vote</center>
                         		</div>
											<div class="form-field">
												<label>Student ID</label><br/>
												<input class ="form-control" type = "text" name = "id_number" placeholder = "Student ID" required="true">
													
											</div>
											
											<div class="form-field">											
												<label>Password</label><br/>
													<input class="form-control"  type = "password" name = "password" id = "pass" placeholder="Password" required="true"/>
											</div>
											<div class="form-field">											
												<label>A nouveau Password</label><br/>
													<input class="form-control"  type = "password" name = "password1" id = "pass" placeholder="Retyp Password" required="true"/>
											</div>

											<div class="form-field">
												<label>Nom</label><br/>
													<input class="form-control" type ="text" name = "firstname" placeholder="First Name" required="true">
											</div>
											
											<div class="form-field">
												<label>Prenom</label><br/>
													<input class="form-control"  type = "text" name = "lastname" placeholder="Last Name" required="true">
											</div>

											<div class="form-field">
												<label>Genre</label> <br/>
													<select class = "form-control" name = "gender">
														<option >Male</option>
														<option >Female</option>														
													</select>
											</div>
											
											<div class="form-field">
												<label>Filiere <i>(En respectant les abréviations :GL,SR,SI,LLB,BFIN, BIT..)</i></label><br/>
													<input class="form-control"  type = "text" name = "prog_study" placeholder="Ex: GL,SR,SI,BIT, LLB,BFIN, BITED" required="true">
											</div>

											<div class="form-field">
												<label>Selectionner votre niveau</label> <br/>
													<select class = "form-control" name = "year_level">
														<option>Niveau 1</option>
														<option>Niveau 2</option>
														<option>Niveau 3</option>
														<option>Niveau 4</option>
														
													</select>
											</div>
												<br/>					
											 	 <center><button name = "save" type="submit">Créé un compte</button></center>
                                            <div class="link">
											 	 <h2><center><a href="../login.php" style = "font-size:16px;">Connexion</a></center></h2>
											</div>

						  				 </div>
                                       
										
										</form>
								
							<?php 
								require 'signUpData.php';
								
							?>

						</div>
						    
					</form>
					
                    </div>
                </div>
            
        </div>
        <?php 
        include ('footer.php');
        ?>

    </div>
    <!-- /#wrapper -->
</body>

</html>

