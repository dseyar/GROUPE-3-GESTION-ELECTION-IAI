<?php include ('session.php');?>
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Default Layout -->
  <link href="css/style.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/MyStyles.css">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php include ('side_bar.php');?>

  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

          
            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                  <h5 class="card-title">Statistique <span>/Aujourd'hui</span></h5>
                  






                  
                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>
                  
                                    <script>
                                      document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                          series: [{


                                            name: 'Ngoh Hitler',
                                            data: [10, 20, 30, 40, 52, 60, 40],
                                          }, {

                                            name: 'Njuntu Brad',
                                            data: [50, 50, 50, 60, 60, 92, 80],
                                          }, {

                                            name: 'JULIO GUIMATSA',
                                            data: [30, 50, 38, 51, 40, 60, 40],
                                          }, {

                                            name: 'ZAMBALA',
                                            data: [50, 60, 60, 60, 80, 70, 75],
                                          }, {

                                            name: 'NTAINTIE',
                                            data: [31, 80, 68, 100, 42, 82, 56],
                                          }, {
                                            name: 'BABIKIR ABDEL',
                                            data: [11, 32, 45, 32, 34, 52, 41]
                                          }, {
                                            name: 'ondo Du Prestige',
                                            data: [15, 11, 32, 18, 9, 24, 11]
                                          }],
                                          chart: {
                                            height: 350,
                                            type: 'area',
                                            toolbar: {
                                              show: false
                                            },
                                          },
                                          markers: {
                                            size: 5
                                          },
                                          colors: ['#4154f1', '#4ecc2a','#fecb6a', '#af771d','#ff7f2c','#4ff4f1','#4154f1'],
                                          fill: {
                                            type: "gradient",
                                            gradient: {
                                              shadeIntensity: 1,
                                              opacityFrom: 0.3,
                                              opacityTo: 0.4,
                                              stops: [0, 90, 100,]
                                            }
                                          },
                                          dataLabels: {
                                            enabled: false
                                          },
                                          stroke: {
                                            curve: 'smooth',
                                            width: 2
                                          },
                                          xaxis: {
                                            type: 'datetime',
                                            categories: ["2021-12-19T00:00:00.000Z", "2021-12-19T01:30:00.000Z", "2021-12-19T02:30:00.000Z", "2021-12-19T03:30:00.000Z", "2021-12-19T04:30:00.000Z", "2021-12-19T05:30:00.000Z", "2021-12-19T06:30:00.000Z"]
                                          },
                                          tooltip: {
                                            x: {
                                              format: 'dd/MM/yy HH:mm'
                                            },
                                          }
                                        }).render();
                                      });
                                    </script>
                                    <!-- End Line Chart -->



                </div>

              </div>
            </div><!-- End Reports -->

         



          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                <li><a class="dropdown-item" href="#">Ce mois</a></li>
                <li><a class="dropdown-item" href="#">Cet année</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Sondage <span>| Aujourd'hui</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'NGO Hitler'
                        },
                        {
                          value: 735,
                          name: 'NJONTU Brad'
                        },
                        {
                          value: 235,
                          name: 'ONDO du prestige'
                        },
                        {
                          value: 735,
                          name: 'BABIKIR'
                        },
                        {
                          value: 580,
                          name: 'NTAINTIER'
                        },
                        {
                          value: 484,
                          name: 'JULIO Nguimatsa'
                        },
                        {
                          value: 300,
                          name: 'ZAMBALA'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->



          

          <!-- Budget Report -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filtre</h6>
                </li>

                <li><a class="dropdown-item" href="#">Ce Jour</a></li>
                <li><a class="dropdown-item" href="#">Ce mois</a></li>
                <li><a class="dropdown-item" href="#">Cet année</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Rapport des différent Budget <span>| Ce mois</span></h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'Banniére',
                          max: 16000
                        },
                        {
                          name: 'Publicité',
                          max: 30000
                        },
                        {
                          name: 'Habillement',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        },
                        {
                          value: [4500, 12000, 18000, 2600, 19000, 21000],
                          name: 'Actual Spending'
                        },
                        {
                          value: [3400, 12000, 18000, 2600, 19000, 21000],
                          name: 'Actual Spending'
                        },
                        {
                          value: [2300, 12000, 18000, 2600, 19000, 21000],
                          name: 'Actual Spending'
                        },
                        {
                          value: [1200, 12000, 18000, 2600, 19000, 21000],
                          name: 'Actual Spending'
                        },
                        {
                          value: [2000, 12000, 18000, 2600, 19000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div>
          <!-- End Budget Report -->

          </div>
          


          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filtre</h6>
                </li>

                <li><a class="dropdown-item" href="#">Ce Jour</a></li>
                <li><a class="dropdown-item" href="#">Ce mois</a></li>
                <li><a class="dropdown-item" href="#">Cet année</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">NEWSLETTER</h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Divers </a></h4>
                  <p>le candidat BRAD manque la discalification pour diffamation</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Affaire de corruption</a></h4>
                  <p>tentative de corruption detectée au niveau de l'organisation des élection par l'un des candidats dont on ne connait pas encore le nom</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Affaire de gain dans les sondages</a></h4>
                  <p>pendant que la candidate MOUKOKO LAURENCE a gagné 5points, les autres candidats sont plus avancés BABIKIR parmis les premiers avec 10points et NGO HITLER avec 20points</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">les divers </a></h4>
                  <p>le candidat NGO HITLER est en tete de liste sur les sondages</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Mise à Jour</a></h4>
                  <p>L'administrateur systéme à actualiser le site</p>
                </div>

              </div>

            </div>
          </div>
  






          <div class="col-12">
            <div class="card top-selling">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filtre</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Ce Jour</a></li>
                <li><a class="dropdown-item" href="#">Ce mois</a></li>
                <li><a class="dropdown-item" href="#">Cet année</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">Visite<span>| Aujourd'hui</span></h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Images</th>
                      <th scope="col">Slogan</th>
                      <th scope="col">Partie</th>
                      <th scope="col">Photos</th>
                      <th scope="col">Projet</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">Bravon les éléments et marchons vers le renouveau </a></td>
                      <td>32</td>
                      <td class="fw-bold">40</td>
                      <td>25</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">Intelligence + Savoir faire + Adaptation= Reussite</a></td>
                      <td>46</td>
                      <td class="fw-bold">98</td>
                      <td>76</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">La force de l'espérience</a></td>
                      <td class="fw-bold">80</td>
                      <td>79</td>
                      <td class="fw-bold">80</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">L'école oui mais n'oublions pas de nous amuser</a></td>
                      <td>10</td>
                      <td>23</td>
                      <td class="fw-bold">40</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">L'IAI c'est la famillle </a></td>
                      <td class="fw-bold">79</td>
                      <td>41</td>
                      <td>5</td>
                    </tr>
                  </tbody>
                </table>

              </div>

            </div>
          </div>





        </div>
        
     
      </div>
    </section>

  </main>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

 <script src="assets/js/main.js"></script>

</body>

</html>