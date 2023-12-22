<!DOCTYPE html>
<html lang="en">


<!-- advance-table.html  21 Nov 2019 03:55:20 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="../assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='../assets/img/favicon.ico' />

    <link rel="stylesheet" href="../assets/bundles/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="../assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="../assets/bundles/dropzonejs/dropzone.css">
    <style>
    .dropzone {
        min-height: 45px !important;
    }

    .img {
        background-image: url('https://img.freepik.com/premium-vector/avatar-flat-icon-human-white-glyph-blue-background_822686-239.jpg');
        background-size: 100% 100%;
    }
    </style>
    <!-- Template CSS -->
    <!-- Custom style CSS -->
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                            <span class="badge headerBadge1">
                                6 </span> </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Messages
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="../assets/img/users/user-1.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">John
                                            Deo</span>
                                        <span class="time messege-text">Please check your mail !!</span>
                                        <span class="time">2 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="../assets/img/users/user-2.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                            Smith</span> <span class="time messege-text">Request for leave
                                            application</span>
                                        <span class="time">5 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="../assets/img/users/user-5.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                                            Ryan</span> <span class="time messege-text">Your payment invoice is
                                            generated.</span> <span class="time">12 Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="../assets/img/users/user-4.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                                            Smith</span> <span class="time messege-text">hii John, I have upload
                                            doc
                                            related to task.</span> <span class="time">30
                                            Min Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="../assets/img/users/user-3.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                                            Joshi</span> <span class="time messege-text">Please do as specify.
                                            Let me
                                            know if you have any query.</span> <span class="time">1
                                            Days Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                                        <img alt="image" src="../assets/img/users/user-2.png" class="rounded-circle">
                                    </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                                            Smith</span> <span class="time messege-text">Client Requirements</span>
                                        <span class="time">2 Days Ago</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                            class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                            <div class="dropdown-header">
                                Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                                        class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                                    </span> <span class="dropdown-item-desc"> Template update is
                                        available now! <span class="time">2 Min
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                                    </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                                            Sugiharto</b> are now friends <span class="time">10 Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-success text-white"> <i class="fas
												fa-check"></i>
                                    </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                                        moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                                            Hours
                                            Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-danger text-white"> <i
                                            class="fas fa-exclamation-triangle"></i>
                                    </span> <span class="dropdown-item-desc"> Low disk space. Let's
                                        clean it! <span class="time">17 Hours Ago</span>
                                    </span>
                                </a> <a href="#" class="dropdown-item"> <span
                                        class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                                    </span> <span class="dropdown-item-desc"> Welcome to Otika
                                        template! <span class="time">Yesterday</span>
                                    </span>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" style="height: 50px;"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div style="width: 40px; height: 40px;  border-radius: 50%;" class="img">

                                <?php
                            session_start();
                            $imgs = json_decode(file_get_contents('../Models/imgs.json'), 1);
                            foreach ($imgs as $v) {
                                if ($_SESSION["id"] == $v["user_id"]) {
                                    ?>
                                <img src="../assets/img/<?=$v['img']?> " class="rounded-circle author-box-picture"
                                    style="width: 40px; height: 40px;">
                                <?php
}
}

?>
                            </div>
                            <span class="d-sm-none d-lg-inline-block"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <?php
$admin = json_decode(file_get_contents('../Models/admin.json'), 1);
foreach ($admin as $v) {
    ?>


                            <div class="dropdown-title"><?=$v["sname"] . " " . $v["fname"]?></div>
                            <?php
}
?>
                            <a href="profile.php" class="dropdown-item has-icon"> <i class="fas fa-user-alt"></i>
                                Profile
                            </a>
                            <a href="add_admin.php" class="dropdown-item has-icon"> <i class="fas fa-user-plus"></i> Add
                                admin
                            </a>
                            <a href="exit.php" class="dropdown-item has-icon text-danger"> <i
                                    class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2" >
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="home.php"> <img alt="image" src="../assets/img/logo.png" class="header-logo"> <span
                                class="logo-name">Otika</span>
                        </a>


                    </div>
                    <ul class="sidebar-menu">
                        <li class="dropdown active">
                        <a href="home.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown">
                                <div class="preview" style="display: flex; align-items: center;">
                                    <i class="material-icons" style="font-size: 20px;">people</i> <span
                                        class="icon-name">Teachers</span>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="teachers_list.php">All teachers</a></li>
                                <li><a class="nav-link" href="add_teacher.php">Add teachers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown">
                                <div class="preview" style="display: flex; align-items: center;">
                                    <i class="material-icons" style="font-size: 20px;">school</i> <span
                                        class="icon-name">Students</span>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="students_list.php">All Students</a></li>
                                <li><a class="nav-link" href="add_students.php">Add Student</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"> <i style="font-size: 20px;"
                                    class="material-icons">layers</i> <span class="icon-name">Courses</span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#" class=" nav-link has-dropdown ">
                                        <div class="preview" style="display: flex; align-items: center;">
                                            <span
                                                class="icon-name">All Courses</span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php
                                         $courses = json_decode(file_get_contents("../Models/courses.json"), 1);
                                         foreach($courses as $v) {
                                        ?>
                                        <li><a class="nav-link" href="group_list.php?id=<?=$v['id']?>"><?=$v["name"]?></a></li>
                                        <?php
                                    }

                                        ?>
                                    </ul>
                                </li>
                                
                                <li><a class="nav-link" href="add_course.php">Add Course</a></li>

                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"> <i style="font-size: 20px;"
                                    class="material-icons">local_atm</i> <span class="icon-name">Payments</span></a>
                           
                        </li>
                        
                   
                    </ul>
                </aside>
            </div>
            <div class="main-content" style="padding-left: 335px;">
                <section class="section">
                    <div class="section-body">

                        <div class="row">