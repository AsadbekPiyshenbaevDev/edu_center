<?php

include "header.php";


?>


<div class="col-12">

    <div class="card">
        <?php


$teachers = json_decode(file_get_contents("../Models/teachers.json"), 1);
?>

        <div class="card-header">
            <h4>Teachers</h4>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                          
                        </tr>
                        <?php
                        $i=1;
                        foreach($teachers as $v) {
                            ?>
                            <tr>
                            <td><?=$i++?></td>
                            <td><a href="teachers_info.php?id=<?=$v['id']?>" style="color: black; text-decoration: none;"><?=$v['sname']?>  <?=$v['fname']?> </a></td>
                            <td><?=$v['phone']?></td>
                            <td><?=$v['email']?></td>
                            </tr>
                            <?php
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