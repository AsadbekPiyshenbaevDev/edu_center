<?php

include "header.php";
$teachers = json_decode(file_get_contents("../Models/teachers.json"), 1);

foreach ($teachers as $v) {
    if ($v['id'] == $_GET["id"]) {

        ?>

<div class="col-12 col-md-12 col-lg-4">
    <div class="card author-box">
        <div class="card-body">
            <div class="author-box-center">
                <img alt="image" src="../assets/img/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png" class="rounded-circle author-box-picture">
                <div class="clearfix"></div>
                <div class="author-box-name">
                    <p><?=$v["sname"]?> <?=$v["fname"]?></p>
                </div>
            </div>
           
        </div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <h4>Groups</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Students count</th>
                        </tr>
                        <?php
$groups = json_decode(file_get_contents("../Models/groups.json"), 1);
$students = json_decode(file_get_contents("../Models/students.json"), 1);

        $i = 1;
        $num = 0;
        foreach ($teachers as $v) {
            foreach ($v["group_id"] as $id) {
                foreach ($groups as $gr) {
                    $nn = [];
                    foreach ($students as $st) {
                        foreach($st["group_id"] as $sti) {
                            
                            if($sti["id"] == $gr["id"]) {
                                array_push($nn,$st);
                            }
                        }
                    }
                    if ($id['id'] == $gr["id"]) {
                        
                        ?>
                        <tr>
                            <td><?=$i++?></td>
                            <td><a href="group_in_students.php?id=<?=$gr['id']?>"
                                    style="color: black; text-decoration: none;"><?=$gr['gname']?></a></td>
                            <td><?=count($nn)?></td>

                        </tr>
                        <?php
}
                }
            }
        }
        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-md-12 col-lg-8">
    <div class="card">
        <div class="padding-20">
            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                        aria-selected="true">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                        aria-selected="false">Edit</a>
                </li>
            </ul>
            <div class="tab-content tab-bordered" id="myTab3Content">
            <?php
                            foreach($teachers as $v) {
                                if ($v['id'] == $_GET["id"]) {
                        ?>
                <div class="tab-pane fade active show" id="about" role="tabpanel" aria-labelledby="home-tab2">
                    <div class="row">
                      
                        <div class="col-md-4 col-6 b-r">
                            <strong>Full Name</strong>
                            <br>
                            <p class="text-muted"><?=$v["sname"]?> <?=$v["fname"]?></p>
                        </div>
                        <div class="col-md-4 col-6 b-r">
                            <strong>Mobile</strong>
                            <br>
                            <p class="text-muted"><?=$v["phone"]?></p>
                        </div>
                        <div class="col-md-4 col-6 b-r">
                            <strong>Email</strong>
                            <br>
                            <p class="text-muted"><?=$v["email"]?></p>
                        </div>
                       
                     
                    </div>
                 
                </div>
                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                    <form method="post" class="needs-validation">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>First Name</label>
                                    <input type="text"  name="fname" class="form-control" value="<?=$v['fname']?>">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Last Name</label>
                                    <input type="text"  name="sname" class="form-control" value="<?=$v['sname']?>">
                                    <div class="invalid-feedback">
                                        Please fill in the last name
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Email</label>
                                    <input type="email"  name="email" class="form-control" value="<?=$v['email']?>">
                                    <div class="invalid-feedback">
                                        Please fill in the email
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Phone</label>
                                    <input type="tel"  name="phone" class="form-control" value="<?=$v['phone']?>">
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Login</label>
                                    <input  name="login" type="text" class="form-control" value="<?=$v['login']?>">

                                </div>

                                <div class="form-group col-6">
                                    <label>Password</label>
                                    <input  name="password" type="text" class="form-control" value="<?=$v['password']?>">
                                </div>
                            </div>

                            <div class="row">
                                
                                <div class="form-group  col-12 text-right " style="padding-top: 30px;">
                                        <input type="hidden" name="id" value="<?=$v['id']?>">
                                        <button class="btn btn-primary" style="padding: 8px 10px;" name="edit">Save
                                            Changes</button>
                                        <a href="teachers_list.php?id=<?=$v['id']?>" style="padding: 8px 10px;" class="btn btn-primary my-2">Back</a>

                                    
                                </div>
                                
                            </div>

                        </div>
                       
                    </form>
                </div>
                <?php
                require "../Controllers/TeacherControllers.php";
                editTeacher($_POST);
                              }
                            }
                                
                        ?>
            </div>
        </div>
    </div>
</div>
<?php
}
}

include "main.php";
?>