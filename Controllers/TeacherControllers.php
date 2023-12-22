<?php
function add_teachers($post)
{

    $teachers = json_decode(file_get_contents("../Models/teachers.json"), 1);
    if (isset($post["add_teacher"])) {

        if (empty($teachers)) {
            $new = [
                [
                    "id" => 1,
                    "group_id" => [
                        [

                            "id" => $post["group_id"],
                        ],
                    ],
                    "fname" => $post["fname"],
                    "sname" => $post["sname"],
                    "email" => $post["email"],
                    "phone" => $post["phone"],
                    "login" => $post["login"],
                    "password" => $post["password"],
                    "date" => date("Y-m-d"),

                ],
            ];

            file_put_contents('../Models/teachers.json', json_encode($new));
            header("Location: home.php");

        } else {
            $search = array_column($teachers, 'phone');

            if (!in_array($post["phone"], $search)) {
                $id = $teachers[count($teachers) - 1]["id"] + 1;
                $new = [
                    "id" => $id,
                    "group_id" => [
                        "id" => $post["group_id"],
                    ],
                    "fname" => $post["fname"],
                    "sname" => $post["sname"],
                    "email" => $post["email"],
                    "phone" => $post["phone"],
                    "login" => $post["login"],
                    "password" => $post["password"],

                ];
                array_push($teachers, $new);
                file_put_contents('../Models/teachers.json', json_encode($teachers));
                header("Location: home.php");

            } else {
                foreach ($teachers as $v) {

                    if ($post["phone"] == $v["phone"]) {
                        $ser = array_column($v["group_id"],"id");
                        print_r($v['group_id']);
                        if (!in_array($post["group_id"], $ser)) {
                            $new = [
                                "id" => $post["group_id"],
                            ];

                            array_push($teachers[$v["id"]-1]["group_id"], $new);
                            file_put_contents('../Models/teachers.json', json_encode($teachers));
                            header("Location: home.php");
                        } else {
                            echo "Bunday mugallim bar";
                        }
                    }
                }
            }
        }
    }

}

function editTeacher($post) {
    $teachers = json_decode(file_get_contents("../Models/teachers.json"), 1);
    if (isset($post["edit"])) {
        $new = [];
        foreach($teachers as $v) {
            if($v["id"]  == $post["id"]) {
                $d = [
                    "id" => $v["id"],
                    "group_id" => $v["group_id"],
                    "fname" => $post["fname"],
                    "sname" => $post["sname"],
                    "email" => $post["email"],
                    "phone" => $post["phone"],
                    "login" => $post["login"],
                    "password" => $post["password"]
                ];

                array_push($new,$d);
                
            } else {
                array_push($new,$v);
                
            }
            file_put_contents('../Models/teachers.json',json_encode($new));

                header("Location: teachers_info.php");
        }

    }

}

function imgs($post) {
    move_uploaded_file($_FILES["file"]["tmp_name"],"../assets/img/".$_FILES['file']['name']);
    $imgs = json_decode(file_get_contents("../Models/imgs.json"), 1);

    if (isset($post["photo_btn"])) {
        if (empty($imgs)) {
            if($_FILES["file"]["name"] != "") {
    
            $new = [
                [
                    "user_id" => $_SESSION["id"],
                    "img" => $_FILES["file"]["name"],
                ],
            ];
            file_put_contents("../Models/imgs.json", json_encode($new));
        }
        } else {
            $search = array_column($imgs, 'user_id');
            if (!in_array($_SESSION["id"], $search) && $_FILES["file"]["name"] != "") {
                $new = [
                    "user_id" => $_SESSION["id"],
                    "img" => $_FILES["file"]["name"],
                ];
                array_push($imgs, $new);
                file_put_contents("../Models/imgs.json", json_encode($imgs));
            } else {
                $new_img = [];
               if($_FILES["file"]["name"] != "") {
                foreach($imgs as $v) {
                    if($_SESSION["id"] == $v["user_id"]) {
                        $d = [
                            "user_id" => $_SESSION["id"],
                            "img" => $_FILES["file"]["name"],
                        ];
                        array_push($new_img, $d);
                    } else {
                        array_push($new_img, $v);
                    }
                    file_put_contents('../Models/imgs.json', json_encode($new_img));
            }
               }
            }
        }
        header("location: profile.php");
    }
}

?>
