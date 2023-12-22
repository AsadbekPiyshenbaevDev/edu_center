<?php
session_start();
function profil($post)
    
{
    $admins = json_decode(file_get_contents("../Models/admins.json"), 1);
    
    if (isset($post["add_admin"])) {
        
        
               
        if (empty($admins)) {
            $new = [
                [
                    "id" => 1,
                    "name" => $post["fname"],
                    "surname" => $post["sname"],
                    "email" => $post["email"],
                    "phone" => $post["phone"],
                    "date" => $post["date"],
                    "job" => $post["job"],
                    "password" => $post["password"]

                ],
            ];  

            file_put_contents('../Models/admins.json', json_encode($new));
            if($_SESSION["login"]) {

                header("Location: home.php");
            } else {
                header("Location: ../index.php");

            }

        } else {
            $search = array_column($admins, 'phone');
            if (!in_array($post["phone"], $search)) {
                $id = $admins[count($admins)-1]["id"] +1;
                $new = [
                    "id" => $id,
                    "name" => $post["fname"],
                    "surname" => $post["sname"],
                    "email" => $post["email"],
                    "phone" => $post["phone"],
                    "date" => $post["date"],
                    "job" => $post["job"],
                    "password" => $post["password"]

                ];
                array_push($admins, $new);
                file_put_contents('../Models/admins.json', json_encode($admins));
                if($_SESSION["login"]) {

                    header("Location: home.php");
                } else {
                    header("Location: ../index.php");

                }
                
                
            } 
        }
    }
    
}

function editProfil($post) {
    $admins = json_decode(file_get_contents("../Models/admins.json"), 1);
    if (isset($post["save"])) {
        $new = [];
        foreach($admins as $v) {
            if($v["id"]  == $_SESSION["id"]) {
                $d = [
                    "id" => $v["id"],
                    "name" => $post["fname"],
                    "surname" => $post["sname"],
                    "email" => $post["email"],
                    "phone" => $post["phone"],
                    "date" => $post["date"],
                    "job" => $post["job"],
                    "password" => $post["password"]
                ];

                array_push($new,$d);
                
            } else {
                array_push($new,$v);
                
            }
            file_put_contents('../Models/admins.json',json_encode($new));

                header("Location: home.php");
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