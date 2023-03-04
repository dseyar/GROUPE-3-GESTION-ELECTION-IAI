<?php
	if(!$bool){
?>
<div class="modal fade" id="edit_user<?php  echo $user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Editer le systéme utilisateur</center>
						</div>    
					</div>
				</h4>
			</div>
										
										
            <div class="modal-body">										
				<form action="update_user.php?user_id=<?php echo $user_id; ?>" method = "post" >	
					<input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">
																				
					<div class="form-group">
						<label>Nom</label>
							<input class="form-control" type ="text" name = "username" value = "<?php echo $row ['username']?>">
					</div>
					<div class="form-group">
						<label>MOT-DE-PASSE</label>
							<input class="form-control" type ="text" name = "password" value = "<?php echo $row ['password']?>">
					</div>
					<div class="form-group">
						<label>Nom</label>
							<input class="form-control" type ="text" name = "firstname" value = "<?php echo $row ['firstname']?>">
					</div>
					<div class="form-group">
						<label>Prenom</label>
							<input class="form-control"  type = "text" name = "lastname" value = "<?php echo $row ['lastname']?>">
					</div>
					<div class="form-group">
						<label>Numéro de télèphone</label>
							<input class="form-control"  type = "text" name = "Phone" value = "<?php echo $row ['Phone']?>">
					</div>
					<div class="form-group">
						<label>Adresse Email</label>
							<input class="form-control"  type = "text" name = "email" value = "<?php echo $row ['email']?>">
					</div>
											
					<button name = "change" type="submit" class="btn btn-primary">Sauvegarder</button>
				</form>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
				
		</div>					
	</div>
</div>
<?php
	}
?>
                                
