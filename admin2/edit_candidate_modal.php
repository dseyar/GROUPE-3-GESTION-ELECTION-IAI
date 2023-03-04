
<?php
	if(!$bool){
?>

<div class="modal fade" id="edit_candidate<?php  echo $candidate_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Editer candidats</center>
						</div>    
					</div>
				</h4>
			</div>
			
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
				     <img src= <?php echo $row ['img']?> width="50" height="50" class="img-rounded">
					<input type="hidden" name="candidate_id" value="<?php echo $row['candidate_id'] ?>">
					<div class="form-group">
						<label>Position</label>
						<select class = "form-control" name = "position" value = "<?php echo $row ['position']?>">
						<option>President</option>
                <option>Vice President</option>
                <option >Conseiller</option>
                <option>Secretaire des Sports</option>
                <option>Charger des divertissement</option>
                <option>Trésorier</option>
                <option">Vice Trésorier</option>
                <option">Secretaire Generale</option>
                <option">Transport & Accommodation</option>
                <option">Publicité</option>
                <option">Academie</option>
							</select>
					</div>
					<div class="form-group">
						<label>Nom Parti</label>
							<input class="form-control" type ="text" name = "party" value = "<?php echo $row ['party']?>">
					</div>
	
				
					<div class="form-group">
						<label>Nom</label>
							<input class="form-control" type ="text" name = "firstname" required="true" value = "<?php echo $row ['firstname']?>">
					</div>
					<div class="form-group">
						<label>renom</label>
							<input class="form-control"  type = "text" name = "lastname" value = "<?php echo $row ['lastname']?>">
					</div>
					
					<div class="form-group">
						<label>Niveau</label>
							<select class = "form-control" name = "year_level">
								<option><?php echo $row ['year_level']?></option>
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
								<option><?php echo $row ['gender']?></option>
								<option></option>
								<option>homme</option>
								<option>femme</option>
							</select>
					</div>
					<div class="form-group">
									<label>Image</label>
									<input type="file" name="image"> 
					</div>
					<button name = "update" type="submit" class="btn btn-primary">Sauvegarder</button>
				</form>
			</div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                
            </div>
		</div>
	</div>
</div>
<!-- /.modal-content -->
                               
	<?php 
		require 'dbcon.php';
		
		if(ISSET($_POST['update'])){
			$bool = true;
			$position=$_POST['position'];
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$year_level=$_POST['year_level'];
			$gender=$_POST['gender'];
			$candidate_id=$_POST['candidate_id'];
			$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);
			$image_size= getimagesize($_FILES['image']['tmp_name']);
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
		
	
			$conn->query("UPDATE candidate SET position = '$position', firstname = '$firstname', lastname = '$lastname', year_level = '$year_level', gender = '$gender',img='$location' WHERE candidate_id = '$candidate_id'")or die($conn->error);
			echo "<script> window.location='candidate.php' </script>";
		}	
	?>
								
<?php
	}
?>