<?php include ('sess.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
        <!-- Page Content -->
          <!-- Navigation -->
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Selectionner le groupe du candidat</option>
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
            </center>

    </heading> 
        </div>

    </div>
    <?php    
        include ('footer.php');
        ?>

    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

