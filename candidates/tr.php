
<?php include ('head.php');?>

<body>

    <div id="wrapper">

              <?php include ('view_banner.php');?>
        <div id="page-wrapper">

    <heading class="voters_heading">
        <center><h1 class="yebga">Liste des Candidats au postes de trésorier</h1>
           <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Selectionner le groupe du candidat</option>
                <option value = "pres.php">President</option>
                <option value = "vp.php">Vice President</option>
                <option value = "ua.php">Conseiller</option>
                <option value = "ss.php">Secretaire des Sports</option>
                <option value = "ea.php">Charger des divertissement</option>
                <option value = "vtr.php">Vice Trésorier</option>
                <option disabled selected>Trésorier</option>
                <option value = "sg.php">Secretaire Generale</option>
                <option value = "ta.php">Transport & Accommodation</option>
                <option value = "pb.php">Publicité</option>
                <option value = "ac.php">Academie</option>
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
                       
                        <!-- /.panel-heading -->
                       
                        <div class="panel-body">
                            
                            <div class="table-responsive">
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
                                            $query = $conn->query("SELECT * FROM candidate WHERE `position` = 'Treasurer'");
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

                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>


              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <?php include ('../script.php');?>



</body>

</html>

