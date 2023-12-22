<?php
function add_group($post)
{


    $groups = json_decode(file_get_contents("../Models/groups.json"), 1);
    print_r($post);
    if (isset($post["add_group"])) {

        if (empty($groups)) {
            $new = [
                [
                    "id" => 1,
                    "course_id" => $post["course_id"],
                    "gname" => $post["gname"],
                    "month" => $post["month"],
                    "price" => $post["price"],
                    "date" => date("Y-m-d")

                ],
            ];

            file_put_contents('../Models/groups.json', json_encode($new));
            header("Location: home.php");

        } else {
            $search = array_column($groups, 'id');

            if (!in_array($post["id"], $search)) {
                $id = $groups[count($groups) - 1]["id"] + 1;
                $new = [
                    "id" => $id,
                    "course_id" => $post["course_id"],
                    "gname" => $post["gname"],
                    "month" => $post["month"],
                    "price" => $post["price"],
                    "date" => date("Y-m-d")


                ];
                array_push($groups, $new);
                file_put_contents('../Models/groups.json', json_encode($groups));
                header("Location: home.php");

            }
        }
    }

}

function editGroup($post) {
    $groups = json_decode(file_get_contents("../Models/groups.json"), 1);
    if (isset($post["edit_group"])) {
        $new = [];
        foreach($groups as $v) {
            if($v["id"]  == $post["g_id"]) {
                $d = [
                    "id" => $v["id"],
                    "course_id" => $post["course_id"],
                    "gname" => $post["gname"],
                    "month" => $post["month"],
                    "price" => $post["price"],
                    "date" => date("Y-m-d")
                ];

                array_push($new,$d);
                
            } else {
                array_push($new,$v);
                
            }
            file_put_contents('../Models/groups.json',json_encode($new));

                header("Location: home.php");
        }

    }

}

?>