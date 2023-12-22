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
                                <h4>Add Courses</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                   
                                    <div class="form-group col-12">
                                        <label>First Name</label>
                                        <input type="text" name="name" class="form-control" required="" value="">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                   
                                </div>
                              
                                <div class="row">
                                    
                                    <div class="form-group  col-12 text-right " style="padding-top: 30px;">
                                    
                                        <button class="btn btn-primary"   style="padding: 8px 10px;" name="add_course">Add
                                            Course</button>
                                        
                                    </div>
                                

                                </div>

                            </div>

                        </form>
                        <?php
require "../Controllers/CourseControllers.php";
add_course($_POST);
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