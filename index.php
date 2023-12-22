
<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

    <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">


</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>


            <!-- Main Content -->
            <div class="main-content pl-0 ">
                <section class="section">
                    <div class="section-body">
                        <section class="section">
                            <div class="container mt-5">
                                <div class="row">
                                    <div
                                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h4>Login</h4>
                                            </div>
                                            <div class="card-body">
                                                <form  action="" class="needs-validation" novalidate="">
                                                    <div class="form-group">
                                                        <label for="number">Phone</label>
                                                        <input id="number" type="number" class="form-control" name="phone"
                                                            tabindex="1" required="" autofocus="">
                                                        <div class="invalid-feedback">
                                                            Please fill in your number
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="d-block">
                                                            <label for="password" class="control-label">Password</label>

                                                        </div>
                                                        <input id="password" type="password" class="form-control"
                                                            name="password" tabindex="2" required="">
                                                        <div class="invalid-feedback">
                                                            please fill in your password
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="remember"
                                                                class="custom-control-input" tabindex="3"
                                                                id="remember-me">
                                                            <label class="custom-control-label"
                                                                for="remember-me">Remember Me</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" name="s1"
                                                            class="btn btn-primary btn-lg btn-block" tabindex="4"
                                                            value="Login">
                                                    </div>
                                                </form>
                                                <?php
$admins = json_decode(file_get_contents('Models/admins.json'), 1);
$imgs = json_decode(file_get_contents("Models/imgs.json"), 1);
if (isset($_GET["s1"])) {
    foreach ($admins as $v) {
        if ($v['phone'] == $_GET["phone"] and $v["password"] == $_GET["password"]) {
            session_start();
            $_SESSION["login"] = true;
            $_SESSION["id"] = $v["id"];
            if (empty($imgs)) {
                print_r($imgs);
                echo $v["id"];
                
                $new = [
                    "user_id" => $v["id"],
                    "img" => "assets/img/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png",
                ];
                array_push($imgs, $new);
                file_put_contents("Models/imgs.json", json_encode($imgs));
            } else {
                $search = array_column($imgs, 'user_id');
                if (!in_array($_SESSION["id"], $search)) {
                    $new = [
                        "user_id" => $v["id"],
                        "img" => "png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png",
                    ];
                    array_push($imgs, $new);
                    file_put_contents("Models/imgs.json", json_encode($imgs));
                }
            }
            
            header("Location: Views/home.php");
        }
    }

}
?>
                                                <div class="text-center mt-4 mb-3">
                                                    <div class="text-job text-muted">Login With Social</div>
                                                </div>
                                                <div class="row sm-gutters">
                                                    <div class="col-6">
                                                        <a class="btn btn-block btn-social btn-facebook">
                                                            <span class="fab fa-facebook"
                                                                style="border-right: none; width: 55px; line-height: 50px;"></span>
                                                            Facebook
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a class="btn btn-block btn-social btn-twitter">
                                                            <span class="fab fa-twitter"
                                                                style="border-right: none; width: 55px; line-height: 50px;"></span>
                                                            Twitter
                                                        </a>
                                                    </div>
                                                    <a href="Views/add_admin.php">Rigister Now</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                            id="sticky_header_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Sticky Header</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>



</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->

</html>