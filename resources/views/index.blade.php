<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>BingHr</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom css-->
    <link rel="stylesheet" href="/css/style.css" rel="stylesheet">
    <!-- Font Awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Remix icon cdn-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Jquery Datatables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    <script src="/js/jquery-3.6.0.min.js"></script>

  </head>
  <body>


<div class="d-flex">

    <aside>
        <div class="d-flex flex-column flex-shrink-0 bg-primary" style="width: 4.5rem;">

            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center mt-5">

            <li>
                <a href="#" class="nav-link py-3 text-white" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i data-feather="search"></i>
                </a>
            </li>

              <li>
                <a href="#" class="nav-link py-3 text-white" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i data-feather="user"></i>
                </a>
              </li>

              <li>
                <a href="#" class="nav-link py-3 text-white" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i data-feather="users"></i>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link py-3 text-white" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i data-feather="message-circle"></i>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link py-3 text-white" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i data-feather="file"></i>
                </a>
              </li>



            </ul>
            <div class="dropdown mb-5">

                <a href="#" class="nav-link py-3 text-white" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i data-feather="settings"></i>
                </a>
              <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle border">
              </a>
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
              <a role="button" class="nav-link py-3 text-white" title="Dashboard" data-bs-toggle="collapse" data-bs-target="#sidebarmenu">
                  <i data-feather="align-left"></i>
              </a>

            </div>
        </div>



            <div class="collapse show" id="sidebarmenu">

                <div class="d-flex flex-column flex-shrink-0 bg-light pt-5" style="width: 280px;">

                    <ul class="nav nav-pills flex-column mb-auto">

                        <a href="#" class="nav-link active link-dark">
                            <i data-feather="layout"></i>
                        Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i data-feather="users"></i>
                        Users
                        </a>
                    </li>
                    <li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i data-feather="folder"></i>
                        Departments
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i data-feather="users"></i>
                        Employee
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i data-feather="zap"></i>
                        Activities
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i data-feather="check-circle"></i>
                        Holidays
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i data-feather="play-circle"></i>
                        Events
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i data-feather="credit-card"></i>
                        Payroll
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i data-feather="user"></i>
                        Accounts
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <i data-feather="alert-circle"></i>
                        Report
                        </a>
                    </li>

                    </ul>
                </div>

        </div>



    </aside>


    <div class="container content w-100">


        <nav class="d-flex pt-3 w-100 top-nav mt-3">
            <div class="d-flex w-100 align-items-center">

                <h4 class="mr-5 title">Users</h4>

                <div class="form-group">
                  <input type="number" name="" id="" class="form-control" placeholder="Year" style="width: 80px">
                </div>

                <div class="form-group ml-3">
                  <input type="search" name="" id="" class="form-control" placeholder="Search...">
                  <i data-feather="search"></i>
                </div>

            </div>
            <div class="d-flex justify-content-end w-100">
                <ul class="nav">

                    <li class="dropdown">
                      <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdownMenuButton2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Language
                        </a>

                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdownMenuButton2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Reports
                        </a>

                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdownMenuButton2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Project
                        </a>

                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                      </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-dark position-relative" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                            <i class="fa-solid fa-envelope"></i>
                            <span class="notification-bubble"></span>

                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-dark position-relative" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                            <i class="fa-solid fa-bell"></i>
                            <span class="notification-bubble"></span>

                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-dark" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                            <i class="fa-solid fa-user"></i>
                        </a>
                    </li>
                </ul>



            </div>

        </nav>
        <hr>

        <div class="container-fluid">
            <div class="d-flex justify-content-end mb-4">

            <button class="btn btn-success rad-7">Add User</button>
            </div>

            <div class="bg-light border border-primary">

                <table id="data-table" class="bg-light w-100">
                    <thead class="table-header">
                        <tr class="p-3" >
                            <th class="table-row">Name</th>
                            <th></th>
                            <th>Created Date</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="table-row">
                                <div class="d-flex align-items-center">
                                    <img src="https://github.com/mdo.png" alt="mdo" width="35" height="35" class="rounded-circle mr-2">

                                    <div class="d-flex flex-column">
                                        <span>Golden Moses</span>
                                        <small class="text-grey">david_wagner@example.com</small>

                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary text-white p-2 rad-7">Super Admin</span></td>
                            <td>22 oct 2022</td>
                            <td>Ceo and founder</td>
                            <td class="action-icons">
                                <i class="ri-edit-2-line mr-3"></i>
                                <i class="ri-delete-bin-5-line"></i>

                            </td>
                        </tr>
                        <tr>
                            <td class="table-row">
                                <div class="d-flex align-items-center">
                                    <img src="https://github.com/mdo.png" alt="mdo" width="35" height="35" class="rounded-circle mr-2">

                                    <div class="d-flex flex-column">
                                        <span>Golden Moses</span>
                                        <small class="text-grey">david_wagner@example.com</small>

                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary text-white p-2 rad-7">Super Admin</span></td>
                            <td>22 oct 2022</td>
                            <td>Ceo and founder</td>
                            <td class="action-icons">
                                <i class="ri-edit-2-line mr-3"></i>
                                <i class="ri-delete-bin-5-line"></i>

                            </td>
                        </tr>
                        <tr>
                            <td class="table-row">
                                <div class="d-flex align-items-center">
                                    <img src="https://github.com/mdo.png" alt="mdo" width="35" height="35" class="rounded-circle mr-2">

                                    <div class="d-flex flex-column">
                                        <span>Golden Moses</span>
                                        <small class="text-grey">david_wagner@example.com</small>

                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary text-white p-2 rad-7">Super Admin</span></td>
                            <td>22 oct 2022</td>
                            <td>Ceo and founder</td>
                            <td class="action-icons">
                                <i class="ri-edit-2-line mr-3"></i>
                                <i class="ri-delete-bin-5-line"></i>

                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>

        </div>
    </div>




</div>






    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/feather.min.js"></script>
    <script src="/js/index.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>



    <script>
        feather.replace()

        $(document).ready( () => {
            $('#data-table').DataTable({
                "paging":   false,
                "ordering": false,
                "info":     false
            });
        } );

    </script>

  </body>
</html>