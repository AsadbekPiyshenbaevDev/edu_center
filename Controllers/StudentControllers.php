<?php
function add_student($post)
{


    $students = json_decode(file_get_contents("../Models/students.json"), 1);
    if (isset($post["add_student"])) {

        if (empty($students)) {
            $new = [
                [
                    "id" => 1,
                   "group_id" => [
                       [
                        "id" => $post["group_id"],
                       ]
                    ],
                    "fname" => $post["fname"],
                    "sname" => $post["sname"],
                    "email" => $post["email"],
                    "phone" => $post["phone"],
                    "date" => date("Y-m-d")

                ],
            ];

            file_put_contents('../Models/students.json', json_encode($new));
            header("Location: home.php");

        } else {
            $search = array_column($students, 'phone');

            if (!in_array($post["phone"], $search)) {
                $id = $students[count($students) - 1]["id"] + 1;
                $new = [
                    "id" => $id,
                   "group_id" => [
                        "id" => $post["group_id"],
                    ],
                    "fname" => $post["fname"],
                    "sname" => $post["sname"],
                    "email" => $post["email"],
                    "phone" => $post["phone"],
                    "date" => date("Y-m-d")


                ];
                array_push($students, $new);
                file_put_contents('../Models/students.json', json_encode($students));
                header("Location: home.php");


            } else {
                foreach ($students as $v) {

                    if ($post["phone"] == $v["phone"]) {
                        $ser = array_column($v["group_id"],"id");
                            if (!in_array($post["group_id"], $ser)) {
                            $new = [
                                "id" => $post["group_id"],
                            ];

                            array_push($students[$v["id"]-1]["group_id"], $new);
                            file_put_contents('../Models/students.json', json_encode($students));
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
