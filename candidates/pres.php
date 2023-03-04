
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
              <?php include ('view_banner.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">

    <heading class="voters_heading">
        <center><h1 class="yebga">Liste des Candidats à la Presidentiel </h1>
             <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option disabled selected>President</option>
                <option value = "vp.php">Vice President</option>
                <option value = "ua.php">Union Advisor</option>
                <option value = "ss.php">Sports Secretary</option>
                <option value = "ea.php">Entertainment Advisor</option>
                <option value = "tr.php">Treasurer</option>
                <option value = "vtr.php">Vice Treasurer</option>
                <option value = "sg.php">Secretary General</option>
                <option value = "ta.php">Transport & Accommodation</option>
                <option value = "pb.php">Publicity</option>
                <option value = "ac.php">Academics</option>
                </select>
            </center>

    <script>
        function page (src){
            window.location=src;
    }
    </script>
<p/>

    </heading>
            <div class="row">
				
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" border="0">

                                    <thead class="thead">                                    	
                                   
                                         <tr>
                                         <th>Image</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Parti</th>
                                            <th>Niveau</th>
                                            <th>Genre</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <tr>
										<?php 
											require '../admin/dbcon.php';
											$bool = false;
											$query = $conn->query("SELECT * FROM candidate WHERE `position` = 'President'");
												while($row = $query->fetch_array()){
													$candidate_id=$row['candidate_id'];
										?>
											
											<td width="50"><img src="../admin/<?php echo $row['img']; ?>" width="50" height="50" class="img-rounded"></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['party'];?></td>
                                            <td><?php echo $row ['year_level'];?></td>
                                            <td><?php echo $row ['gender'];?></td>
                                        </tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->



              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <?php include ('script.php');?>



</body>

</html>
