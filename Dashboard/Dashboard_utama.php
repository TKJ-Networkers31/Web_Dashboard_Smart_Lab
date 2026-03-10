<?php 
  session_start();
  require('../../beta_smartlab/function/function.php');
  if(!isset($_SESSION['login'])){
    header("Location: ../forms/Login_page/Login_page.php");
    exit();
  }
  $user = $_SESSION['username'];
  $data = select1("SELECT * FROM user WHERE username = '$user'")
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Smart Lab</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="../assets/img/logo/smkn 2 baleendah.png"
      type="image/x-icon"
    />

    <style>
      #identitas{
        color: white;
      }
    </style>

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["../assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="Dashboard_utama.html" class="logo">
              <img
                src="../assets/img/logo/smkn 2 baleendah.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="60"
              />
              <span style="color: white" >SMKN 2 BE</span>
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a
                  data-bs-toggle="collapse"
                  href="#dashboard"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="dashboard">
                  <ul class="nav nav-collapse">
                    <?php for($i = 0; $i<=3;$i++): ?>
                      <li>
                      <a href="Dashboard_Lab.php?lab=<?= $i+1 ?>">
                        <span class="sub-item">Dashboard Lab <?= $i+1 ?></span>
                      </a>
                    </li>
                    <?php endfor; ?>
                  </ul>
                </div>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Components</h4>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                  <i class="fas fa-pen-square"></i>
                  <p>Forms</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../forms/add_user.php">
                        <span class="sub-item">Tambah User</span>
                      </a>
                    </li>
                    <li>
                      <a href="../forms/Login_page.php">
                        <span class="sub-item">Login</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#tables">
                  <i class="fas fa-table"></i>
                  <p>Database</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../Database/Database_user.html">
                        <span class="sub-item">Database User</span>
                      </a>
                    </li>
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav1">
                        <span class="sub-item">Log Penggunaan Lab</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse" id="subnav1">
                        <ul class="nav nav-collapse subnav">
                          <?php for($i = 0; $i<=3;$i++): ?>
                            <li>
                              <a href="../Database/Log_Login/Log_login.php?lab=<?= $i+1 ?>">
                                <span class="sub-item">Lab <?= $i+1 ?></span>
                              </a>
                            </li>
                          <?php endfor; ?>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav2">
                        <span class="sub-item">Log Sensor</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse" id="subnav2">
                        <ul class="nav nav-collapse subnav">
                          <?php for($i = 0; $i<=3;$i++): ?>
                            <li>
                              <a href="../Database/Log_sensor_lab/Log_sensor_Lab.php?lab=Lab<?= $i+1 ?>">
                                <span class="sub-item">Lab <?= $i+1 ?></span>
                              </a>
                            </li>
                          <?php endfor; ?>
                        </ul>
                      </div>
                    </li>
                </div>
              </li>                
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="Dashboard_utama.html" class="logo">
                <img
                  src="../assets/img/smkn 2 baleendah.png"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom" data-background-color="dark"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="fa fa-search search-icon"></i>
                    </button>
                  </div>
                  <input
                    type="text"
                    placeholder="Search ..."
                    class="form-control"
                  />
                </div>
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                      <div class="input-group">
                        <input
                          type="text"
                          placeholder="Search ..."
                          class="form-control"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="notifDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hdd-stack" viewBox="0 0 16 16">
                      <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2z"/>
                      <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"/>
                      <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                    </svg>
                    <span class="notification"></span>
                  </a>
                  <ul
                    class="dropdown-menu notif-box animated fadeIn"
                    aria-labelledby="notifDropdown"
                  >
                    <li>
                      <div class="dropdown-title">
                        Status Broker Server EMQX
                      </div>
                    </li>
                    <li>
                      <div class="notif-scroll scrollbar-outer">
                        <div class="notif-center">
                          <a href="#">
                            <div class="notif-icon notif-success">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                                <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049"/>
                                <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                              </svg>
                            </div>
                            <div class="notif-content">
                              <span class="block">
                                Connected to Broker
                              </span>
                              <span class="time">Running 12 minutes ago</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="notifDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fa fa-bell"></i>
                    <span class="notification">4</span>
                  </a>
                  <ul
                    class="dropdown-menu notif-box animated fadeIn"
                    aria-labelledby="notifDropdown"
                  >
                    <li>
                      <div class="dropdown-title">
                        You have 4 new notification
                      </div>
                    </li>
                    <li>
                      <div class="notif-scroll scrollbar-outer">
                        <div class="notif-center">
                          <a href="#">
                            <div class="notif-icon notif-primary">
                              <i class="fa fa-user-plus"></i>
                            </div>
                            <div class="notif-content">
                              <span class="block"> New user registered </span>
                              <span class="time">5 minutes ago</span>
                            </div>
                          </a>
                          <a href="#">
                            <div class="notif-icon notif-success">
                              <i class="fa fa-comment"></i>
                            </div>
                            <div class="notif-content">
                              <span class="block">
                                Rahmad commented on Admin
                              </span>
                              <span class="time">12 minutes ago</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class="see-all" href="javascript:void(0);"
                        >See all notifications<i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <i class="fas fa-layer-group"></i>
                  </a>
                  <div class="dropdown-menu quick-actions animated fadeIn">
                    <div class="quick-actions-header">
                      <span class="title mb-1">Quick Actions</span>
                      <span class="subtitle op-7">Shortcuts</span>
                    </div>
                    <div class="quick-actions-scroll scrollbar-outer">
                      <div class="quick-actions-items">
                        <div class="row m-0">
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div class="avatar-item bg-danger rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                  <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
                                  <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                                  <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                                </svg>
                              </div>
                              <span class="text">Log System</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div
                                class="avatar-item bg-warning rounded-circle"
                              >
                                <i class="fab fa-whatsapp"></i>
                              </div>
                              <span class="text">Contact Developer</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div class="avatar-item bg-info rounded-circle">
                                <i class="fas fa-file-excel"></i>
                              </div>
                              <span class="text">Reports</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div
                                class="avatar-item bg-success rounded-circle"
                              >
                                <i class="fas fa-envelope"></i>
                              </div>
                              <span class="text">Emails</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div
                                class="avatar-item bg-primary rounded-circle"
                              >
                                <i class="fas fa-file-invoice-dollar"></i>
                              </div>
                              <span class="text">Invoice</span>
                            </div>
                          </a>
                          <a class="col-6 col-md-4 p-0" href="#">
                            <div class="quick-actions-item">
                              <div
                                class="avatar-item bg-secondary rounded-circle"
                              >
                                <i class="fas fa-credit-card"></i>
                              </div>
                              <span class="text">Payments</span>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="../assets/img/user/<?= $data['gambar'] ?>"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold"><?= $data['username'] ?></span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="../assets/img/user/<?= $data['gambar']?>"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4 id="identitas"><?= $data['username'] ?></h4>
                            <p id="identitas"><?= $data['email'] ?></p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../profiles/profile.php?id=<?= $data['id'] ?>">My Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../function/logout.php" name="logout">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
                <h6 class="op-7 mb-2">Smart Lab Smkn 2 Baleendah 
                  <ul class="breadcrumbs">
                  <li class="nav-home">
                    <a href="../Dashboard/Dashboard_utama.html">
                      <i class="icon-home"></i>
                    </a>
                  </li>
                </ul>
              </h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href=""> <li class="fas fa-cloud"></li> <span>hujan</span> <span>60*</span></a>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
                            <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                          </svg>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">S Listrik AC</p>
                          <h4 class="card-title">150GB</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card card-stats card-primary card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="fas fa-lightbulb"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Itensitas Cahaya</p>
                          <h4 class="card-title">1,294</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="yellow" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                          <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641z"/>
                        </svg>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Status PLN</p>
                          <h4 class="card-title">150GB</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-door-closed"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Lab In Use</p>
                          <h4 class="card-title">1,294</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-info bubble-shadow-small"
                        >
                          <i class="fas fa-home"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Total Lab</p>
                          <h4 class="card-title">1303</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="fas fa-microchip"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">IOT Running</p>
                          <h4 class="card-title">$ 1,345</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-secondary bubble-shadow-small"
                        >
                          <i class="fas fa-user"></i>

                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">User Card</p>
                          <h4 class="card-title">576</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Status System Lab</h4>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-Lab1-tab" data-bs-toggle="pill" href="#pills-Lab1" role="tab" aria-controls="pills-Lab1" aria-selected="true">Lab 1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-Lab2-tab" data-bs-toggle="pill" href="#pills-Lab2" role="tab" aria-controls="pills-Lab2" aria-selected="false">Lab 2</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-Lab3-tab" data-bs-toggle="pill" href="#pills-Lab3" role="tab" aria-controls="pills-Lab3" aria-selected="false">Lab 3</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-Lab4-tab" data-bs-toggle="pill" href="#pills-Lab4" role="tab" aria-controls="pills-Lab4" aria-selected="false">Lab 4</a>
                      </li>
                    </ul>
                    <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-Lab1" role="tabpanel" aria-labelledby="pills-Lab1-tab">
                        <h5>Detail status System IOT Lab 3</h5>
                        <h6>penanggung Jawab Lab : <span>-</span></h6>
                        <h6>Status Koneksi</h6>
                        <div class="row">
                          <div class="col">
                            <div class="card card-stats card-round">
                              <div class="card-body">
                                <div class="row" style="text-align: center;">
                                  <p class="card-category">Sinyal WIFI</p>
                                  <h4 class="card-title">150GB</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="card card-stats card-round">
                              <div class="card-body">
                                <div class="row" style="text-align: center;">
                                  <p class="card-category">IP Mikrokontroler</p>
                                  <h4 class="card-title">$ 1,345</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card card-stats card-round">
                              <div class="card-body">
                                <div class="row" style="text-align: center;">
                                      <p class="card-category">Status Koneksi</p>
                                      <h4 class="card-title">23</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h6>Status Sensor</h6>
                          <div class="row">
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-primary bubble-shadow-small"
                                      >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
                                          <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"/>
                                        </svg>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">Sensor LDR</p>
                                        <h4 class="card-title">1,294</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-info bubble-shadow-small"
                                      >
                                        <i class="far fa-credit-card"></i>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">RFID</p>
                                        <h4 class="card-title">1303</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-success bubble-shadow-small"
                                      >
                                        <i class="fas fa-thermometer-half"></i>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">DHT 11</p>
                                        <h4 class="card-title">$ 1,345</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-secondary bubble-shadow-small"
                                      >
                                        <i class="fas fa-user"></i>
  
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">IR Blaster</p>
                                        <h4 class="card-title">576</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex justify-content-between">
                                  <div>
                                    <h5><b>Kondisi Ram ESP-32</b></h5>
                                    <ul>
                                      <li>Jumlah Ram ESP :</li>
                                      <li>Penggunaan Proses Ram :</li>
                                    </ul>
                                  </div>
                                  
                                </div>
                                <div class="progress progress-sm">
                                  <div
                                    class="progress-bar bg-success w-25"
                                    role="progressbar"
                                    aria-valuenow="25"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                  <p class="text-muted mb-0">Rasio</p>
                                  <p class="text-muted mb-0">25%</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h6>Status Kelistrikan</h6>
                          <div class="row">
                            <div class="col-6">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-primary bubble-shadow-small"
                                      >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                                          <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641z"/>
                                        </svg>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">Sumber Listrik</p>
                                        <h4 class="card-title">1,294</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-info bubble-shadow-small"
                                      >
                                        <i class="fas fa-battery-full"></i>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">Status Baterai</p>
                                        <h4 class="card-title">1303</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h6>Status Relay</h6>
                          <div class="row">
                            <div class="row row-card-no-pd">
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 1</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 2</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 3</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 4</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-Lab2" role="tabpanel" aria-labelledby="pills-Lab2-tab">
                        <h5>Detail status System IOT Lab 2</h5>
                        <h6>penanggung Jawab Lab : <span>-</span></h6>
                        <h6>Status Koneksi</h6>
                        <div class="row">
                          <div class="col">
                            <div class="card card-stats card-round">
                              <div class="card-body">
                                <div class="row" style="text-align: center;">
                                  <p class="card-category">Sinyal WIFI</p>
                                  <h4 class="card-title">150GB</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="card card-stats card-round">
                              <div class="card-body">
                                <div class="row" style="text-align: center;">
                                  <p class="card-category">IP Mikrokontroler</p>
                                  <h4 class="card-title">$ 1,345</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card card-stats card-round">
                              <div class="card-body">
                                <div class="row" style="text-align: center;">
                                      <p class="card-category">Status Koneksi</p>
                                      <h4 class="card-title">23</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h6>Status Sensor</h6>
                          <div class="row">
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-primary bubble-shadow-small"
                                      >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
                                          <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"/>
                                        </svg>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">Sensor LDR</p>
                                        <h4 class="card-title">1,294</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-info bubble-shadow-small"
                                      >
                                        <i class="far fa-credit-card"></i>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">RFID</p>
                                        <h4 class="card-title">1303</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-success bubble-shadow-small"
                                      >
                                        <i class="fas fa-thermometer-half"></i>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">DHT 11</p>
                                        <h4 class="card-title">$ 1,345</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-secondary bubble-shadow-small"
                                      >
                                        <i class="fas fa-user"></i>
  
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">IR Blaster</p>
                                        <h4 class="card-title">576</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex justify-content-between">
                                  <div>
                                    <h5><b>Kondisi Ram ESP-32</b></h5>
                                    <ul>
                                      <li>Jumlah Ram ESP :</li>
                                      <li>Penggunaan Proses Ram :</li>
                                    </ul>
                                  </div>
                                  
                                </div>
                                <div class="progress progress-sm">
                                  <div
                                    class="progress-bar bg-success w-25"
                                    role="progressbar"
                                    aria-valuenow="25"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                  <p class="text-muted mb-0">Rasio</p>
                                  <p class="text-muted mb-0">25%</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h6>Status Kelistrikan</h6>
                          <div class="row">
                            <div class="col-6">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-primary bubble-shadow-small"
                                      >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                                          <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641z"/>
                                        </svg>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">Sumber Listrik</p>
                                        <h4 class="card-title">1,294</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-info bubble-shadow-small"
                                      >
                                        <i class="fas fa-battery-full"></i>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">Status Baterai</p>
                                        <h4 class="card-title">1303</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h6>Status Relay</h6>
                          <div class="row">
                            <div class="row row-card-no-pd">
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 1</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 2</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 3</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 4</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-Lab3" role="tabpanel" aria-labelledby="pills-Lab-3tab">
                        <h5>Detail status System IOT Lab 3</h5>
                        <h6>penanggung Jawab Lab : <span>-</span></h6>
                        <h6>Status Koneksi</h6>
                        <div class="row">
                          <div class="col">
                            <div class="card card-stats card-round">
                              <div class="card-body">
                                <div class="row" style="text-align: center;">
                                  <p class="card-category">Sinyal WIFI</p>
                                  <h4 class="card-title">150GB</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="card card-stats card-round">
                              <div class="card-body">
                                <div class="row" style="text-align: center;">
                                  <p class="card-category">IP Mikrokontroler</p>
                                  <h4 class="card-title">$ 1,345</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card card-stats card-round">
                              <div class="card-body">
                                <div class="row" style="text-align: center;">
                                      <p class="card-category">Status Koneksi</p>
                                      <h4 class="card-title">23</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h6>Status Sensor</h6>
                          <div class="row">
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-primary bubble-shadow-small"
                                      >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
                                          <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"/>
                                        </svg>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">Sensor LDR</p>
                                        <h4 class="card-title">1,294</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-info bubble-shadow-small"
                                      >
                                        <i class="far fa-credit-card"></i>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">RFID</p>
                                        <h4 class="card-title">1303</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-success bubble-shadow-small"
                                      >
                                        <i class="fas fa-thermometer-half"></i>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">DHT 11</p>
                                        <h4 class="card-title">$ 1,345</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-secondary bubble-shadow-small"
                                      >
                                        <i class="fas fa-user"></i>
  
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">IR Blaster</p>
                                        <h4 class="card-title">576</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex justify-content-between">
                                  <div>
                                    <h5><b>Kondisi Ram ESP-32</b></h5>
                                    <ul>
                                      <li>Jumlah Ram ESP :</li>
                                      <li>Penggunaan Proses Ram :</li>
                                    </ul>
                                  </div>
                                  
                                </div>
                                <div class="progress progress-sm">
                                  <div
                                    class="progress-bar bg-success w-25"
                                    role="progressbar"
                                    aria-valuenow="25"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                  <p class="text-muted mb-0">Rasio</p>
                                  <p class="text-muted mb-0">25%</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h6>Status Kelistrikan</h6>
                          <div class="row">
                            <div class="col-6">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-primary bubble-shadow-small"
                                      >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                                          <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641z"/>
                                        </svg>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">Sumber Listrik</p>
                                        <h4 class="card-title">1,294</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-info bubble-shadow-small"
                                      >
                                        <i class="fas fa-battery-full"></i>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">Status Baterai</p>
                                        <h4 class="card-title">1303</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h6>Status Relay</h6>
                          <div class="row">
                            <div class="row row-card-no-pd">
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 1</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 2</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 3</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 4</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-Lab4" role="tabpanel" aria-labelledby="pills-Lab-3tab">
                        <h5>Detail status System IOT Lab 4</h5>
                        <h6>penanggung Jawab Lab : <span>-</span></h6>
                        <h6>Status Koneksi</h6>
                        <div class="row">
                          <div class="col">
                            <div class="card card-stats card-round">
                              <div class="card-body">
                                <div class="row" style="text-align: center;">
                                  <p class="card-category">Sinyal WIFI</p>
                                  <h4 class="card-title">150GB</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="card card-stats card-round">
                              <div class="card-body">
                                <div class="row" style="text-align: center;">
                                  <p class="card-category">IP Mikrokontroler</p>
                                  <h4 class="card-title">$ 1,345</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card card-stats card-round">
                              <div class="card-body">
                                <div class="row" style="text-align: center;">
                                      <p class="card-category">Status Koneksi</p>
                                      <h4 class="card-title">23</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h6>Status Sensor</h6>
                          <div class="row">
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-primary bubble-shadow-small"
                                      >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
                                          <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"/>
                                        </svg>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">Sensor LDR</p>
                                        <h4 class="card-title">1,294</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-info bubble-shadow-small"
                                      >
                                        <i class="far fa-credit-card"></i>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">RFID</p>
                                        <h4 class="card-title">1303</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-success bubble-shadow-small"
                                      >
                                        <i class="fas fa-thermometer-half"></i>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">DHT 11</p>
                                        <h4 class="card-title">$ 1,345</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-secondary bubble-shadow-small"
                                      >
                                        <i class="fas fa-user"></i>
  
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">IR Blaster</p>
                                        <h4 class="card-title">576</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="card">
                              <div class="card-body">
                                <div class="d-flex justify-content-between">
                                  <div>
                                    <h5><b>Kondisi Ram ESP-32</b></h5>
                                    <ul>
                                      <li>Jumlah Ram ESP :</li>
                                      <li>Penggunaan Proses Ram :</li>
                                    </ul>
                                  </div>
                                  
                                </div>
                                <div class="progress progress-sm">
                                  <div
                                    class="progress-bar bg-success w-25"
                                    role="progressbar"
                                    aria-valuenow="25"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                  ></div>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                  <p class="text-muted mb-0">Rasio</p>
                                  <p class="text-muted mb-0">25%</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h6>Status Kelistrikan</h6>
                          <div class="row">
                            <div class="col-6">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-primary bubble-shadow-small"
                                      >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-lightning-fill" viewBox="0 0 16 16">
                                          <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641z"/>
                                        </svg>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">Sumber Listrik</p>
                                        <h4 class="card-title">1,294</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="card card-stats card-round">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col-icon">
                                      <div
                                        class="icon-big text-center icon-info bubble-shadow-small"
                                      >
                                        <i class="fas fa-battery-full"></i>
                                      </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                      <div class="numbers">
                                        <p class="card-category">Status Baterai</p>
                                        <h4 class="card-title">1303</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h6>Status Relay</h6>
                          <div class="row">
                            <div class="row row-card-no-pd">
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 1</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 2</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 3</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-5">
                                        <div class="icon-big text-center">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-nintendo-switch" viewBox="0 0 16 16">
                                            <path d="M9.34 8.005c0-4.38.01-7.972.023-7.982C9.373.01 10.036 0 10.831 0c1.153 0 1.51.01 1.743.05 1.73.298 3.045 1.6 3.373 3.326.046.242.053.809.053 4.61 0 4.06.005 4.537-.123 4.976-.022.076-.048.15-.08.242a4.14 4.14 0 0 1-3.426 2.767c-.317.033-2.889.046-2.978.013-.05-.02-.053-.752-.053-7.979m4.675.269a1.62 1.62 0 0 0-1.113-1.034 1.61 1.61 0 0 0-1.938 1.073 1.9 1.9 0 0 0-.014.935 1.63 1.63 0 0 0 1.952 1.107c.51-.136.908-.504 1.11-1.028.11-.285.113-.742.003-1.053M3.71 3.317c-.208.04-.526.199-.695.348-.348.301-.52.729-.494 1.232.013.262.03.332.136.544.155.321.39.556.712.715.222.11.278.123.567.133.261.01.354 0 .53-.06.719-.242 1.153-.94 1.03-1.656-.142-.852-.95-1.422-1.786-1.256"/>
                                            <path d="M3.425.053a4.14 4.14 0 0 0-3.28 3.015C0 3.628-.01 3.956.005 8.3c.01 3.99.014 4.082.08 4.39.368 1.66 1.548 2.844 3.224 3.235.22.05.497.06 2.29.07 1.856.012 2.048.009 2.097-.04.05-.05.053-.69.053-7.94 0-5.374-.01-7.906-.033-7.952-.033-.06-.09-.063-2.03-.06-1.578.004-2.052.014-2.26.05Zm3 14.665-1.35-.016c-1.242-.013-1.375-.02-1.623-.083a2.81 2.81 0 0 1-2.08-2.167c-.074-.335-.074-8.579-.004-8.907a2.85 2.85 0 0 1 1.716-2.05c.438-.176.64-.196 2.058-.2l1.282-.003v13.426Z"/>
                                          </svg>
                                        </div>
                                      </div>
                                      <div class="col-7 col-stats">
                                        <div class="numbers">
                                          <p class="card-category">Relay 4</p>
                                          <h4 class="card-title">150GB</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-thermometer-half" viewBox="0 0 16 16">
                        <path d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V6.5a.5.5 0 0 1 1 0v4.585a1.5 1.5 0 0 1 1 1.415"/>
                        <path d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1"/>
                      </svg>  
                      Data Rata-Rata Suhu
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container">
                      <canvas id="lineChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moisture" viewBox="0 0 16 16">
                        <path d="M13.5 0a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V7.5h-1.5a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V15h-1.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5V.5a.5.5 0 0 0-.5-.5zM7 1.5l.364-.343a.5.5 0 0 0-.728 0l-.002.002-.006.007-.022.023-.08.088a29 29 0 0 0-1.274 1.517c-.769.983-1.714 2.325-2.385 3.727C2.368 7.564 2 8.682 2 9.733 2 12.614 4.212 15 7 15s5-2.386 5-5.267c0-1.05-.368-2.169-.867-3.212-.671-1.402-1.616-2.744-2.385-3.727a29 29 0 0 0-1.354-1.605l-.022-.023-.006-.007-.002-.001zm0 0-.364-.343zm-.016.766L7 2.247l.016.019c.24.274.572.667.944 1.144.611.781 1.32 1.776 1.901 2.827H4.14c.58-1.051 1.29-2.046 1.9-2.827.373-.477.706-.87.945-1.144zM3 9.733c0-.755.244-1.612.638-2.496h6.724c.395.884.638 1.741.638 2.496C11 12.117 9.182 14 7 14s-4-1.883-4-4.267"/>
                      </svg>
                      Data Rata-Rata Kelembapan
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container">
                      <canvas id="lineChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-14">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Statistik Rata Rata Sensor DHT 11</div>
                      <!-- <div class="card-tools">
                        <a
                          href="#"
                          class="btn btn-label-success btn-round btn-sm me-2"
                        >
                          <span class="btn-label">
                            <i class="fa fa-pencil"></i>
                          </span>
                          Export
                        </a>
                        <a href="#" class="btn btn-label-info btn-round btn-sm">
                          <span class="btn-label">
                            <i class="fa fa-print"></i>
                          </span>
                          Print
                        </a>
                      </div> -->
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                      <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                  </div>
                </div>
              </div>

            </div>
          </div> 
          <!-- bWAH -->
        </div>
        
        <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <nav class="pull-left">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#"> Help </a>
                </li>
              </ul>
            </nav>
            <div class="copyright">
              2025, made with by
              <a href="https://www.smkn2baleendah.sch.id/">SMKN 2 Baleendah</a>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="../assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="../assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>

  </body>
</html>
