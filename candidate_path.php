
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
       
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Selectionner le groupe du candidat</option>
                <option value = "candidates/pres.php">President</option>
                <option value = "candidates/vp.php">Vice President</option>
                <option value = "candidates/ua.php">Conseiller</option>
                <option value = "candidates/ss.php">Secretaire des Sports</option>
                <option value = "candidates/ea.php">Charger des divertissement</option>
                <option value = "candidates/tr.php">Trésorier</option>
                <option value = "candidates/sg.php">Secretaire Generale</option>
                <option value = "candidates/ta.php">Transport & Accommodation</option>
                <option value = "candidates/pb.php">Publicité</option>
                <option value = "candidates/ac.php">Academie</option>
                </select>
            </center>

    </heading> 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
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

