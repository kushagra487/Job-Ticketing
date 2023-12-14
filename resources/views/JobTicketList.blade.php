<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Job Ticketing</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Job Tickets</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
               
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.html">Setting</a></li>
                        <li><a class="dropdown-item" href="#!">Notifications</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav"> 
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="ClientManagement.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Client Management
                            </a>
                            <a class="nav-link" href="JobTicketList.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Job Ticket List
                            </a>
                            <a class="nav-link" href="closedJobTicketList.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Closed Job Ticket List
                            </a>
                          
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Job Ticket List</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Client List</li>
                        </ol>
                        <div class=" m-0">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between">
                                    <div>
                                    <i class="fas fa-table me-1"></i>
                                    Ticket List
                                </div>

                                    <div class="filter">
                                        <select><option>Filter by</option>
                                            <option value="">Ticket number</option>
                                            <option value="">Date</option>
                                            <option value="">Priority</option>
                                            <option value="">Client</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Created Date</th>
                                        <th class="text-center">Priority</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <tr>
                                        <td>Job Title 1</td>
                                        <td>Job Description 1</td>
                                        <td>2023-01-01</td>
                                        <td  class="text-center">
                                            <span class="priority-btn priority-high">High</span>
                                        </td>
                                        <td class="action-icons text-center">
                                           <a href="jobticketdetails.html" class="text-danger"><i class="fas fa-edit action-icon"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Job Title 2</td>
                                        <td>Job Description 2</td>
                                        <td>2023-02-01</td>
                                        <td  class="text-center">
                                            <span class="priority-btn priority-medium">Medium</span>
                                        </td>
                                        <td class="action-icons text-center">
                                            <a href="jobticketdetails.html" class="text-danger"><i class="fas fa-edit action-icon"></i></a>
                                         </td>
                                    </tr>
                                    <tr>
                                        <td>Job Title 3</td>
                                        <td>Job Description 3</td>
                                        <td>2023-03-01</td>
                                        <td  class="text-center">
                                            <span class="priority-btn priority-low">Low</span>
                                        </td>
                                        <td class="action-icons text-center">
                                            <a href="jobticketdetails.html" class="text-danger"><i class="fas fa-edit action-icon"></i></a>
                                         </td>
                                    </tr>
                                    <tr>
                                        <td>Job Title 1</td>
                                        <td>Job Description 1</td>
                                        <td>2023-01-01</td>
                                        <td  class="text-center">
                                            <span class="priority-btn priority-high">High</span>
                                        </td>
                                        <td class="action-icons text-center">
                                            <a href="jobticketdetails.html" class="text-danger"><i class="fas fa-edit action-icon"></i></a>
                                         </td>
                                    </tr>
                                    <tr>
                                        <td>Job Title 2</td>
                                        <td>Job Description 2</td>
                                        <td>2023-02-01</td>
                                        <td  class="text-center">
                                            <span class="priority-btn priority-medium">Medium</span>
                                        </td>
                                        <td class="action-icons text-center">
                                            <a href="jobticketdetails.html" class="text-danger"><i class="fas fa-edit action-icon"></i></a>
                                         </td>
                                    </tr>
                                    <tr>
                                        <td>Job Title 3</td>
                                        <td>Job Description 3</td>
                                        <td>2023-03-01</td>
                                        <td  class="text-center">
                                            <span class="priority-btn priority-low">Low</span>
                                        </td>
                                        <td class="action-icons text-center">
                                            <a href="jobticketdetails.html" class="text-danger"><i class="fas fa-edit action-icon"></i></a>
                                         </td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                        </div>
                        </div>
                        </div>
              
                    
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
