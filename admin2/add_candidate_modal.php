<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Ajouter un Candidats </center>
						</div>    
					</div>
				</h4>
			</div>
										
										
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
					<div class="form-group">
						<label>Position</label>
						<select class = "form-control" name = "position">
								<option selected disabled>Select Candidate Group</option>
                <option value = "pres.php">President</option>
                <option value = "vp.php">Vice President</option>
                <option value = "ua.php">Conseiller</option>
                <option value = "ss.php">Secretaire des Sports</option>
                <option value = "ea.php">Charger des divertissement</option>
                <option value = "tr.php">Trésorier</option>
                <option value = "vtr.php">Vice Trésorier</option>
                <option value = "sg.php">Secretaire Generale</option>
                <option value = "ta.php">Transport & Accommodation</option>
                <option value = "pb.php">Publicité</option>
                <option value = "ac.php">Academie</option>
							</select>
					</div>
					<div class="form-group">
						<label>Parti</label>
							<input class="form-control" type ="text" name = "party" placeholder="Please enter party name" required="true">
					</div>

										
					<div class="form-group">
						<label>Nom</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter firstname" required="true">
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
						<label>Genre</label>
							<select class = "form-control" name = "gender">
								<option></option>
								<option>homme</option>
								<option>Femme</option>
							</select>
					</div>
											
											
					<div class="form-group">
                        <label>Image</label>
						<input type="file" name="image"required> 
                    </div>
						<button name = "save" type="submit" class="btn btn-primary">Save Data</button>
				</form>  
			</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
										
										
										
										
			<?php 
				require_once 'dbcon.php';
				
				if (isset ($_POST ['save'])){
					$position=$_POST['position'];					
					$party=$_POST['party'];
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$year_level=$_POST['year_level'];
					$gender=$_POST['gender'];
					$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name= addslashes($_FILES['image']['name']);
					$image_size= getimagesize($_FILES['image']['tmp_name']);
		
					move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
					$location="upload/" . $_FILES["image"]["name"];
					
					
					$conn->query("INSERT INTO candidate(position,party,firstname,lastname,year_level,gender,img)values('$position','$party','$firstname','$lastname','$year_level','$gender','$location')")or die($conn->error);
				}						
			?>					
        </div>
                                   
                                
	</div>
                            								
</div>