<div class="modal fade" id="add_voters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														<center>Ajouter Candidat</center>
													</div>    
												</div>
											</h4>
										</div>
										
										
                                        <div class="modal-body">
										<form method = "post" enctype = "multipart/form-data">	
											<div class="form-group">
												<label>Identifiant</label>
												<input class ="form-control" type = "text" name = "id_number" placeholder = "ID number" required="true">
													
											</div>

										
											<div class="form-group">
												<label>MOT-DE-PASSE</label>
													<input class="form-control" type ="text" name = "password" placeholder="Password" required="true">
											</div>
											<div class="form-group">
												<label>Nom</label>
													<input class="form-control" type ="text" name = "firstname" placeholder="Firstname" required="true">
											</div>
											<div class="form-group">
												<label>Prenom</label>
													<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
											</div>
											
											<div class="form-group">
												<label>Niveau</label>
													<select class = "form-control" name = "year_level">
														<option></option>
														<option>Niveau 1</option>
														<option>Niveau 2</option>
														<option>Niveau 3</option>
														<option>Niveau 4</option>
														
														
														
													
													</select>
											</div>
											
											
											<div class="form-group">
												<label>Status</label>
													<select class = "form-control" name = "gender">
														<option></option>
														<option>Garçon</option>
														<option>Fille</option>
																										
													
													</select>
											</div>
											
											
											 <div class="form-group">
                                            <label>Image</label>
                                           <input type="file" name="image"required> 
                                        </div>
												 <button name = "save" type="submit" class="btn btn-primary">Sauvegarder</button>
												 <button name = "save" type="reset" class="btn btn-success">Sortir</button>




										  
										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                           
                                        </div>
										
										</form>
										
										
										<?php include ('dbcon.php');
										if (isset ($_POST ['save'])){
										$position=$_POST['position'];
										$firstname=$_POST['firstname'];
										$lastname=$_POST['lastname'];
										$year_level=$_POST['year_level'];
										$gender=$_POST['gender'];
										$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
											$image_name= addslashes($_FILES['image']['name']);
											$image_size= getimagesize($_FILES['image']['tmp_name']);

											move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
											$location="upload/" . $_FILES["image"]["name"];
										
										
										mysql_query ("INSERT INTO candidate(position,firstname,lastname,year_level,gender,img)values('$position','$firstname','$lastname','$year_level','$gender','$location')")or die($conn->error);
										
										
										
										}
										
										?>					
                                    </div>
                                </div>
                            </div>