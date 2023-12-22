<?php

include "header.php";
?>
<style>
.form-control:disabled,
.form-control[readonly] {
    background-color: #fff;
    opacity: 1;
}
</style>
<div class="col-12 col-md-12 col-lg-12 ">
    <div class="row align-items-center justify-content-center">

        <div class="card col-8">
            <div class="padding-20">

                <div class="tab-content tab-bordered" id="myTab3Content">

                    <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <form method="POST" class="needs-validation">
                            <div class="card-header">
                                <h4><?=($_GET["edit"]) ? "Edit Group" : "Add Group"?></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-md-6 col-12">
                                        <label>Course Name</label>
                                        <?php
$courses = json_decode(file_get_contents("../Models/courses.json"), 1);
$groups = json_decode(file_get_contents("../Models/groups.json"), 1);
foreach ($courses as $v) {
    if ($v['id'] == $_GET["id"]) {
        foreach ($groups as $g) {
            if ($_GET["edit_id"] == $g["id"]) {

                ?>


                                        <input type="text" name="fname" class="form-control" readonly
                                            value="<?=$v['name']?>">
                                        <div class="invalid-feedback">
                                            Please fill in the course name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Group Name</label>
                                        <input type="text" name="gname" class="form-control" required value="<?=$g['gname']?>">
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Course duration</label>
                                        <input type="number" name="month" class="form-control" required="" value="<?=$g['month']?>">
                                        <div class="invalid-feedback">
                                            Please fill in the email
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Course Price</label>
                                        <input type="number" name="price" class="form-control" required="" value="<?=$g['price']?>">
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group  col-12 text-right " style="padding-top: 30px;">
                                        <input type="hidden" name="course_id" value="<?=$v['id']?>">
                                        <input type="hidden" name="g_id" value="<?=$v['id']?>">
                                        <button class="btn btn-primary" style="padding: 8px 10px;"
                                            name="<?=($_GET["edit"]) ? "edit_group" : "add_group"?>"><?=($_GET["edit"]) ? "Edit Group" : "Add Group"?></button>
                                        <a href="group_list.php?id=<?=$v['id']?>" style="padding: 8px 10px;"
                                            class="btn btn-primary my-2">Back</a>
                                    </div>
                                    <?php
}
        }
    }
}

require "../Controllers/GroupControllers.php";
add_group($_POST);
editGroup($_POST);
?>

                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php

include "main.php";
?>