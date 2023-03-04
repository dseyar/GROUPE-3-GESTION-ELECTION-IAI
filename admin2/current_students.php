<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"Courant des étudiants</h3>
				<a href="download.php" class="btn btn-success btn-outline"><i class="glyphicon glyphicon-save"></i> Importer les données des étudiants</a>
                <a href="add_student_id.php" class="btn btn-success btn-outline"><i class="glyphicon glyphicon-save"></i> Ajouter Identifiant des etudiants</a>	
               
				<hr/>
                
                
                
				
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>Identifiant Eleve</th>
                                            <th>Nom</th>
                                            <th>Année d'enregistrement</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											require 'dbcon.php';
											
											$query = $conn->query("SELECT * FROM ids ORDER BY id_number DESC");
											while($row1 = $query->fetch_array()){
											$voters_id=$row1['id_number'];
										?>
                                      
											<tr>
												<td><?php echo $row1 ['id_number'];?></td>
												<td><?php echo $row1 ['names'];?></td>
												<td><?php echo $row1 ['started'];?></td>		
											</tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    
              
            </div>
            
        </div>
        



    </div>


    <?php include ('script.php');?>

</body>

</html>

