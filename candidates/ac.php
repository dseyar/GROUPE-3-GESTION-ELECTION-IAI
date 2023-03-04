
<?php include ('head.php');?>

<body>

    <div id="wrapper">

              <?php include ('view_banner.php');?>
        <div id="page-wrapper">

    <heading class="voters_heading">
        <center><h1 class="yebga">Liste des candidats</h1>
           <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Selectionner le groupe du candidat</option>
                <option value = "pres.php">President</option>
                <option value = "vp.php">Vice President</option>
                <option value = "ua.php">Conseiller</option>
                <option value = "ss.php">Secretaire des Sports</option>
                <option value = "ea.php">Charger des divertissement</option>
                <option value = "tr.php">Trésorier</option>
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
                       
                       
                        <div class="panel-body">
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" border="0">

                                    <thead class="thead">                                     
                                   
                                         <tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Partie</th>
                                            <th>Niveau</th>
                                            <th>Genre</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                        <?php 
                                            require '../admin/dbcon.php';
                                            $bool = false;
                                            $query = $conn->query("SELECT * FROM candidate WHERE `position` = 'Academics Secretary'");
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

                            
                            
                        </div>
                   
                    </div>

              
            </div>
           
        </div>

    </div>
    <?php    
        include ('footer.php');
        ?>

    <?php include ('../script.php');?>



</body>

</html>

