<?php include ('head.php');?>
<body>
    <?php include ('index_banner.php');?>

    <div class="container" style="margin-top:40px;
    margin-bottom:40px;">
        <div class="row">
           
                <div class="menue">
                    
            </div>
            &nbsp;&nbsp;&nbsp;
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel"><!-- has form in it-->
				
                    
                    <div class="form-panel" style="

                     background: transparent;
"><center>
                        <h1 class="yebga">Connexion</h1>
                        <select onchange = "page(this.value)" class="compte">
                            <option value = "admin/index.php">Administrateur</option>
                            <option value = "admin2/index.php">Utilisateur systéme</option>
                            <option selected disables>ELEVE</option> 
                        </select>
                        <p/>
                    </center>
                        <form role="form" method = "post" enctype = "multipart/form-data" class="index-form" style="margin-bottom: 129px;">
                            <div class="form-heading">
                            <h1 class="yebga">Connection élève</h1>
                            </div>
                            
                                
                                <div class="form-field">
									<br/><br/>
										<input class="form-control" placeholder="Entrer votre identifiant" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-field">
									<br/><br/>
										<input class="form-control" placeholder="Entrer votre mot de passe" name="password" type="password" required = "required">
                                </div>
                             <br/>
                                <center><button class="btn btn-lg btn-success btn-block " name = "login" style= " margin-bottom:0px;" width="50">Login</button>
                                &nbsp; 
                            <a  href="register/index.php"><button type="button" class="btn btn-lg btn-success btn-block" data-dismiss="modal" style= " margin-bottom:0px;">Incriptions</button></a>
            
                                &nbsp;

                                <?php include ('login_query.php');
                                
                                ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

  <?php include ('script.php');?>

  <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>
    <?php    
        include ('footer.php');
    ?>

</body>

</html>
