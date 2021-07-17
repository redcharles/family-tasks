<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="/css/styles.css" rel="stylesheet">
    @livewireStyles
    <title>CHS Dashboard</title>
  </head>
  <body style="background-color: #ecf0f1;">
    <div class="container-fluid">
      <div class="row">
          <div class="col-sm-auto bg-light sticky-top" >
              <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                  <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center mt-5">
                      <li class="nav-item">
                          <a href="/dashboard" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                              <i class="bi-house fs-1" style="color: #2c3e50;"></i>
                          </a>
                      </li>
                      <li>
                          <a href="/dashboard/rewards" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                              <i class="bi-gift fs-1" style="color: #2c3e50;"></i>
                          </a>
                      </li>
                      <li>
                        <a href="/dashboard/tasks" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                            <i class="bi-card-checklist fs-1" style="color: #2c3e50;"></i>
                        </a>
                    </li>
                      <li>
                          <a href="/logout" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Leads">
                              <i class="bi-box-arrow-left fs-1" style="color: #2c3e50;"></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="col-sm p-3 min-vh-100 main-content">
              <!-- content -->
              <div class="container-fluid inner-content">
                @yield('content')
              </div>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
  </body>
</html>