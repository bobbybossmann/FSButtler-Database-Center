<?php
    require_once ('scripts/session.php'); 	
?>


  <?php
      include("templates/header.php");
  ?>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">FSButtler</a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="scripts/logout.php">Sign out</a>
        </li>
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sie sind eingeloggt als: <span class="login-session"><?php echo $login_session; ?> </span></a>
        </li>
      </ul>
    </nav>
	<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home" class="fas fa-tachometer-alt" ></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" >
                  <span data-feather="file" class="fas fa-fighter-jet"></span>
                  Flights
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Add Flight</a>
                    <a class="dropdown-item" href="#">Delete Flight</a>
                    <a class="dropdown-item" href="#">Edit Flight</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aircraft.php">
                  <span data-feather="plane" class="fas fa-plane"></span>
                  Aircrafts
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users" class="fas fa-plug"></span>
                  Connection
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2" class="fas fa-clipboard"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="settings" class="fas fa-cogs"></span>
                  Settings
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
			  
			  <li class="alert alert-success" role="alert">
				<a>
					<span data-feather="file-text"></span>
					<?php 
						// Check connection
						if ($db->connect_error) {
							die("Connection failed: " . $db->connect_error);
						}
						echo "Connected successfully";
					?>
				</a>
			  </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          <h2>Meine Flüge</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Datum</th>
                  <th>Callsign</th>
                  <th>Departure</th>
                  <th>Arrival</th>
				  <th>Time</th>
                  <th>Distance</th>
                  <th>Landerate</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                    $sql = "SELECT * FROM flights";
                   
                    $db_erg = mysqli_query( $db, $sql );
                    if ( ! $db_erg )
                    {
                      die('Ungültige Abfrage: ' . mysqli_error());
                    }
                    while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
                    {
                      echo "<tr>";
                      echo "<td>". $zeile['id'] . "</td>";
                      echo "<td>". $zeile['datum'] . "</td>";
                      echo "<td>". $zeile['callsign'] . "</td>";
                      echo "<td>". $zeile['departure'] . "</td>";
                      echo "<td>". $zeile['arrival'] . "</td>";
                      echo "<td>". $zeile['time'] . "</td>";
                      echo "<td>". $zeile['distance'] . "</td>";
                      echo "<td>". $zeile['landingrate'] . "</td>";
                      echo "</tr>";
                    }
                    mysqli_free_result( $db_erg );

                ?>  
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <?php include("templates/footer.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/core.js"></script>
    
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [312, 563, 0, 0, 0, 0, 0],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
    
  </body>
</html>