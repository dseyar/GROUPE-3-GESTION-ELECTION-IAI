
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
                    <h3 class="page-header">Utilisation d'un sytéme de suivie du temp</h3>
                    
                </div>
                &nbsp;
                <!-- /.col-lg-12 -->
            
                
                <hr/>
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        systéme de connexion de l'utilisateur
                                                    </div>    
                                                </div>
                                            </h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>Nom Utilisateur</th>
                                            <th>Date d'activité</th>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                        <?php 
                                        require 'dbcon.php';
                                        $bool = false;
                                        $query = $conn->query("SELECT * FROM logins");
                                        while($row = $query->fetch_array()){
                                        $username=$row['username'];
                                        ?>
                                            
                                            <td><?php echo $row ['username'];?></td>
                                            <td><?php echo $row ['login_time'];?></td>
                                            
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

