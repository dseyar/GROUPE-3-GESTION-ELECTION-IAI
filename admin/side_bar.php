<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:#0022ff;">
            <div class="navbar-header">
                <a class="navbar-brand" href="../index.php" style = "color:white;"><i class = "fa fa-home fa-large" > </i>Accueil | Admin Portal</a>
				
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
               <?php require 'dbcon.php';
				$query = $conn->query("SELECT * from user where user_id ='$session_id'")or die (mysql_error ());
				
				while ($row = $query->fetch_array()){
				
				
			 ?>
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: white">
					<i>Bienvenu :  <?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?></i>
                    </a>
                </li>
           
            </ul>
			<?php }?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-menu fa-fw"></i>Menu </a>
                        </li>
                        <li>
                            <a href="candidate.php"><i class = "fa fa-user fa-fw"></i> Vue Candidats</a>
                         
                        </li>
						<li>
                          <a href="voters.php"><i class = "fa fa-user fa-fw"></i> Vue Electeur</a>
                        </li>
                        <li>
                          <a href="current_students.php"><i class = "fa fa-user fa-fw"></i>Eleve</a>
                        </li>
						
                        <li>
                            <a href="canvassing.php"><i class="fa fa-download fa-fw"></i>Rapport des élections</a>
                        </li>
                        <li>
                            <a href="user.php"> <i class = "fa fa-users" ></i> Vue Utilsateur</a>
                        </li>
                        <li>
                            <a href="login_times.php"> <i class = "fa fa-users" ></i>Derniere connexion</a>
                        </li>
                                                <li>
                           <a href="Statistique.php"> <i class = "fa fa-users" ></i>Statistique</a>
                        <li>
                           <a href="logout.php"> <i class = "fa fa-sign-out" ></i>Déconnexion</a>
                        </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>