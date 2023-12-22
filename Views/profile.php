<?php

session_start();
include "header.php";
$admins = json_decode(file_get_contents("../Models/admins.json"), 1);

?>
<style>
.dropzone {
    min-height: 45px !important;
}
.img {
    background-image: url('https://img.freepik.com/premium-vector/avatar-flat-icon-human-white-glyph-blue-background_822686-239.jpg');
    background-size: 100% 100%;
}
</style>
<div class="col-12 col-md-12 col-lg-4" style="padding-left: 56px;">
    <div class="card author-box p-3">
        <div class="card-body">
            <div class="author-box-center">
                <div class="d-flex">

                    <div class=" "
                        style="width: 100px; height: 80px;margin: 0 auto; position: relative;    ">

                        <?php
$imgs = json_decode(file_get_contents('../Models/imgs.json'), 1);
foreach($imgs as $v) {
    if ($_SESSION["id"] == $v["user_id"]) {
        ?>
                        <form action="" method="post" enctype="multipart/form-data" style="position: absolute;">
                            <div class="custom-file "  style="position: absolute;">
                                <input type="file" name="file" class="custom-file-input " id="customFile"
                                    style="position: absolute;  width: 70px; height: 70px; left: 0px;">

                                <figure class="avatar img  avatar-xl"
                                    style="display: flex; align-items: center; justify-content: center;  position: absolute; top: 0; left: 0;border: none ;outline: none; ">
                                    <img src="../assets/img/<?=$v['img']?>" style="border: none; outline: none;">
                                </figure>
                            </div>
                            <div style="position: absolute; display: flex; align-items: center;justify-content: center; top:52px ; left: 80px;">
                            <label for="ok" style="margin-top: 7px; "> <i class="fas fa-edit"></i> </label>
                            <input id="ok" type="submit" name="photo_btn" style="background-color: transparent; border: none;color: #6c757d;" value="Edit photo">
                            </div>

                        </form>

                        <!-- <img src="" class="rounded-circle author-box-picture w-100 h-100" style="background-color: transparent;"> -->
                        <?php
}   
}

?>
                    </div>
                    <!-- <div style="position: absolute; top: 90px;right: 190px; display: flex;">
                        <form action="" method="post">
                        </form>
                    </div> -->
                </div>

                <div class="card-body p-0">

                    <?php
foreach($admins as $v) {
    if($_SESSION["id"] == $v["id"]) {

?>
                </div>
                <div class="clearfix"></div>
                <div class="author-box-name mt-2">
                    <sapn><?=$v["surname"]." ".$v["name"]?></sapn>

                </div>
                <div class="author-box-job mb-2"><?=$v["job"]?></div>
            </div>

        </div>
    </div>
    <div class="card ">
        <div class="card-header">
            <h4>Personal Details</h4>
        </div>
        <div class="card-body">
            <div class="py-4">
                <p class="clearfix">
                    <span class="float-left">
                        Birthday
                    </span>
                    <span class="float-right text-muted">
                        <?=$v["date"]?>
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left">
                        Phone
                    </span>
                    <span class="float-right text-muted">
                        <?=$v["phone"]?>
                    </span>
                </p>
                <p class="clearfix">
                    <span class="float-left">
                        Mail
                    </span>
                    <span class="float-right text-muted">
                        <?=$v["email"]?>
                    </span>
                </p>
                <form action="" class="text-right" method="post">
                    <input type="submit" name="edit-btn" value="Edit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

</div>
<div class="col-12 col-md-12 col-lg-8">
    <div class="card">
        <div>

            <div class="tab-content tab-bordered" id="myTab3Content">

                <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                    <form method="POST" class="needs-validation">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <?php
    }
}
                             $admins = json_decode(file_get_contents("../Models/admins.json"), 1);
                            
                            foreach($admins as $v) {
                                if($_SESSION["id"] == $v["id"]) {

                             
                        ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>First Name</label>
                                    <input type="text" <?=(isset($_POST["edit-btn"])) ? "" : "readonly"?> name="fname"
                                        class="form-control" value="<?=$v['name']?>">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Last Name</label>
                                    <input type="text" <?=(isset($_POST["edit-btn"])) ? "" : "readonly"?> name="sname"
                                        class="form-control" value="<?=$v['surname']?>">
                                    <div class="invalid-feedback">
                                        Please fill in the last name
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Email</label>
                                    <input type="email" <?=(isset($_POST["edit-btn"])) ? "" : "readonly"?> name="email"
                                        class="form-control" value="<?=$v['email']?>">
                                    <div class="invalid-feedback">
                                        Please fill in the email
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Phone</label>
                                    <input type="tel" <?=(isset($_POST["edit-btn"])) ? "" : "readonly"?> name="phone"
                                        class="form-control" value="<?=$v['phone']?>">
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Job</label>
                                    <input <?=(isset($_POST["edit-btn"])) ? "" : "readonly"?> name="job" type="text"
                                        class="form-control" value="<?=$v['phone']?>">

                                </div>

                                <div class="form-group col-6">
                                    <label>Date</label>
                                    <input <?=(isset($_POST["edit-btn"])) ? "" : "readonly"?> name="date" type="date"
                                        class="form-control" value="<?=$v['date']?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Password</label>
                                    <input <?=(isset($_POST["edit-btn"])) ? "" : "readonly"?> name="password"
                                        type="text" class="form-control" value="<?=$v['password']?>">
                                </div>
                                <div class="form-group col-md-6 col-6 text-right " style="padding-top: 30px;">
                                    <form action="" method="post">
                                        <button class="btn btn-primary" style="padding: 8px 10px;" name="save">Save
                                            Changes</button>
                                        <a href="home.php?back=<?=true?>" style="padding: 8px 10px;"
                                            class="btn btn-primary my-2">Back</a>

                                    </form>
                                </div>
                                <?php
                               
require "../Controllers/ProfilController.php";
profil($_POST);
editProfil($_POST);
imgs($_POST);

?>

                            </div>

                        </div>
                        <?php
   }
}
                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "main.php";
?>