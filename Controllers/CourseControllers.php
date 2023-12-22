<?php
function add_course($post)
{


    $courses = json_decode(file_get_contents("../Models/courses.json"), 1);

    if (isset($post["add_course"])) {

        if (empty($courses)) {
            $new = [
                [
                    "id" => 1,
                    "name" => $post["name"],

                ],
            ];

            file_put_contents('../Models/courses.json', json_encode($new));
            header("Location: home.php");

        } else {
            $search = array_column($courses, 'name');

            if (!in_array($post["name"], $search)) {
                $id = $courses[count($courses) - 1]["id"] + 1;
                $new = [
                    "id" => $id,
                    "name" => $post["name"],


                ];
                array_push($courses, $new);
                file_put_contents('../Models/courses.json', json_encode($courses));
                header("Location: home.php");

            }
        }
    }

}
