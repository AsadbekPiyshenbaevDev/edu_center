<?php

include "header.php";
?>
<div class="col-12 col-md-12 col-lg-12 ">
    <div class="row align-items-center justify-content-center">

        <div class="card col-8">
            <div class="padding-20">

                <div class="tab-content " id="myTab3Content">

                    <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <form method="POST" class="needs-validation">
                            <div class="card-header">
                                <h4>Add Student</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-md-6 col-12">
                                        <label>First Name</label>
                                        <input type="text" name="fname" class="form-control" required="" value="">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Last Name</label>
                                        <input type="text" name="sname" class="form-control" required="" value="">
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" required="" value="">
                                        <div class="invalid-feedback">
                                            Please fill in the email
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Phone</label>
                                        <input type="tel" name="phone" class="form-control" required="" value="">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label>Group</label>
                                        <select class="form-control" name="group_id">
                                            <option selected>Choose</option>
                                            <?php
                                                $groups = json_decode(file_get_contents("../Models/groups.json"), 1);
                                                foreach($groups as $v) {
                                                   

                                            ?>
                                            <option value="<?=$v['id']?>"><?=$v['gname']?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group  col-6 text-right " style="padding-top: 30px;">

                                        <button class="btn btn-primary" style="padding: 8px 10px;"
                                            name="add_student">Add
                                            Student</button>

                                    </div>
                                </div>


                            </div>

                        </form>
                        <?php

require "../Controllers/StudentControllers.php";
add_student($_POST);
?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php

include "main.php";
?>