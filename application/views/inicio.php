<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ingresos</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

	<style>
		body {
			font-family: 'Poppins', sans-serif;
			background: #fafafa;
		}
		body {
			margin: 0;
			font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			font-size: 1.2rem;
			font-weight: 400;
			line-height: 0.9rem;
			color: #858796;
			text-align: left;
			background-color: #fff;
		}
		#sidebar {
			min-width: 209px !important;
			max-width: 250px;
		}
		.card-header {
			background-color: #174895;
			color: #ffffff;
		}
		.h3, h3 {
			text-align: center;
		}
		p {
			font-family: 'Poppins', sans-serif;
			font-size: 1.1em;
			font-weight: 300;
			line-height: 1.7em;
			color: #999;
		}

		a,
		a:hover,
		a:focus {
			color: inherit;
			text-decoration: none;
			transition: all 0.3s;
		}

		.navbar {
			padding: 15px 10px;
			background: #fff;
			border: none;
			border-radius: 0;
			margin-bottom: 40px;
			box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
		}

		.navbar-btn {
			box-shadow: none;
			outline: none !important;
			border: none;
		}

		.line {
			width: 100%;
			height: 1px;
			border-bottom: 1px dashed #ddd;
			margin: 40px 0;
		}

		i,
		span {
			display: inline-block;
		}

		/* ---------------------------------------------------
			SIDEBAR STYLE
		----------------------------------------------------- */

		.wrapper {
			display: flex;
			align-items: stretch;
		}

		#sidebar {
			min-width: 250px;
			max-width: 250px;
			background: #174895;
			color: #fff;
			transition: all 0.3s;
		}

		#sidebar.active {
			min-width: 80px;
			max-width: 80px;
			text-align: center;
		}

		#sidebar.active .sidebar-header h3,
		#sidebar.active .CTAs {
			display: none;
		}

		#sidebar.active .sidebar-header strong {
			display: block;
		}

		#sidebar ul li a {
			text-align: left;
		}

		#sidebar.active ul li a {
			padding: 20px 10px;
			text-align: center;
			font-size: 0.85em;
		}

		#sidebar.active ul li a i {
			margin-right: 0;
			display: block;
			font-size: 1.8em;
			margin-bottom: 5px;
		}

		#sidebar.active ul ul a {
			padding: 10px !important;
		}

		#sidebar.active .dropdown-toggle::after {
			top: auto;
			bottom: 10px;
			right: 50%;
			-webkit-transform: translateX(50%);
			-ms-transform: translateX(50%);
			transform: translateX(50%);
		}

		#sidebar .sidebar-header {
			padding: 20px;
			background: #174895;
		}

		#sidebar .sidebar-header strong {
			display: none;
			font-size: 1.8em;
		}

		#sidebar ul.components {
			padding: 20px 0;
			border-bottom: 1px solid #174895;
		}

		#sidebar ul li a {
			padding: 10px;
			font-size: 1.1em;
			display: block;
		}

		#sidebar ul li a:hover {
			color: #174895;
			background: #fff;
		}

		#sidebar ul li a i {
			margin-right: 10px;
		}

		#sidebar ul li.active>a,
		a[aria-expanded="true"] {
			color: #fff;
			background: #174895;
		}

		a[data-toggle="collapse"] {
			position: relative;
		}

		.dropdown-toggle::after {
			display: block;
			position: absolute;
			top: 50%;
			right: 20px;
			transform: translateY(-50%);
		}

		ul ul a {
			font-size: 0.9em !important;
			padding-left: 30px !important;
			background: #174895;
		}

		ul.CTAs {
			padding: 20px;
		}

		ul.CTAs a {
			text-align: center;
			font-size: 0.9em !important;
			display: block;
			border-radius: 5px;
			margin-bottom: 5px;
		}

		a.download {
			background: #fff;
			color: #7386D5;
		}

		a.article,
		a.article:hover {
			background: #174895 !important;
			color: #fff !important;
		}

		/* ---------------------------------------------------
			CONTENT STYLE
		----------------------------------------------------- */

		#content {
			width: 100%;
			padding: 20px;
			min-height: 100vh;
			transition: all 0.3s;
		}

		/* ---------------------------------------------------
			MEDIAQUERIES
		----------------------------------------------------- */

		@media (max-width: 768px) {
			#sidebar {
				min-width: 80px;
				max-width: 80px;
				text-align: center;
				margin-left: -80px !important;
			}
			.dropdown-toggle::after {
				top: auto;
				bottom: 10px;
				right: 50%;
				-webkit-transform: translateX(50%);
				-ms-transform: translateX(50%);
				transform: translateX(50%);
			}
			#sidebar.active {
				margin-left: 0 !important;
			}
			#sidebar .sidebar-header h3,
			#sidebar .CTAs {
				display: none;
			}
			#sidebar .sidebar-header strong {
				display: block;
			}
			#sidebar ul li a {
				padding: 20px 10px;
			}
			#sidebar ul li a span {
				font-size: 0.85em;
			}
			#sidebar ul li a i {
				margin-right: 0;
				display: block;
			}
			#sidebar ul ul a {
				padding: 10px !important;
			}
			#sidebar ul li a i {
				font-size: 1.3em;
			}
			#sidebar {
				margin-left: 0;
			}
			#sidebarCollapse span {
				display: none;
			}
		}
	</style>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>SIPAE</h3>
                <strong>BS</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Ingresos
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Modulo a</a>
                        </li>
                        <li>
                            <a href="#">Modulo b</a>
                        </li>
                        <li>
                            <a href="#">Modulo c</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-briefcase"></i>
                        -
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        -
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">-</a>
                        </li>
                        <li>
                            <a href="#">-</a>
                        </li>
                        <li>
                            <a href="#">-</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        -
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        -
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        -
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <main class="mt-5 pt-3">
			<div class="container-fluid">
				<div class="row">
				<div class="col-md-12">
					<h4>Modulo ingresos</h4>
				</div>
				</div>
				<div class="row">
				<div class="col-md-12 mb-3">
					<div class="card">
					<div class="card-header">
						<span><i class="bi bi-table me-2"></i></span> 2022
					</div>
					<div class="card-body">
						<div class="table-responsive">
						<table id="example"	class="table table-striped data-table display" style="width: 100%">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
								</tr>
								<tr>
									<td>Garrett Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
								</tr>
								<tr>
									<td>Ashton Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
									<td>$86,000</td>
								</tr>
								<tr>
									<td>Cedric Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
									<td>$433,060</td>
								</tr>
								<tr>
									<td>Airi Satou</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>33</td>
									<td>2008/11/28</td>
									<td>$162,700</td>
								</tr>
								<tr>
									<td>Brielle Williamson</td>
									<td>Integration Specialist</td>
									<td>New York</td>
									<td>61</td>
									<td>2012/12/02</td>
									<td>$372,000</td>
								</tr>
								<tr>
									<td>Herrod Chandler</td>
									<td>Sales Assistant</td>
									<td>San Francisco</td>
									<td>59</td>
									<td>2012/08/06</td>
									<td>$137,500</td>
								</tr>
								<tr>
									<td>Rhona Davidson</td>
									<td>Integration Specialist</td>
									<td>Tokyo</td>
									<td>55</td>
									<td>2010/10/14</td>
									<td>$327,900</td>
								</tr>
								<tr>
									<td>Colleen Hurst</td>
									<td>Javascript Developer</td>
									<td>San Francisco</td>
									<td>39</td>
									<td>2008/09/15</td>
									<td>$205,500</td>
								</tr>
								<tr>
									<td>Sonya Frost</td>
									<td>Software Engineer</td>
									<td>Edinburgh</td>
									<td>23</td>
									<td>2008/12/13</td>
									<td>$103,610</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</tfoot>
						</table>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</main>
        </div>
    </div>
		
    
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>
</body>

</html>