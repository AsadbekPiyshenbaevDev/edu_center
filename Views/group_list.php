    <?php

    include "header.php";


    ?>


    <div class="col-12">

        <div class="card">
            <?php


$courses = json_decode(file_get_contents("../Models/courses.json"), 1);
$groups = json_decode(file_get_contents("../Models/groups.json"), 1);
foreach($courses as $v) {
    if($v['id'] == $_GET["id"]) {

?>

            <div class="card-header">
                <h4><?=$v['name']?></h4>
            </div>
            <div class="text-right">
                <a href="add_group.php?id=<?=$v['id']?>">+ Add</a>
            </div>
            <?php
    }
}
            ?>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $i=1;
                            foreach($groups as $v) {
                                if($v["course_id"] == $_GET["id"]) {

                                    ?>  
                                <tr>
                                    <td><?=$i++?></td>
                                    <td><a href="group_in_students.php?id=<?=$v['id']?>" style="color: black; text-decoration: none;"><?=$v['gname']?></a></td>
                                    <td><?=$v['date']?></td>
                                    <td>
                                        <div class="badge <?=(date("Y-m-d")-$v["date"]< 6) ? "badge-success" : "badge-danger"?> "><?=(date("Y-m-d")-$v["date"]< 6) ? "Active" : "Not Active"?></div>
                                    </td>
                                    <td><a href="add_group.php?edit_id=<?=$v['id']?>&edit=<?=true?>&id=<?=$v['course_id']?>" class="btn btn-primary">Edit</a></td>
                                </tr>
                                <?php
                            }
                                }
                                ?>
                            
                           
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <?php
    include "main.php";
    ?>