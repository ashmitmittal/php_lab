<!DOCTYPE html>
<html lang="en">
<head>
    <title>marks of student</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
</head>
<body>
    <div class="container">
        <h1>Marks of student 1</h1>
        <form action="" method="GET">
            <div class="form-group">
                student_name_1: <input class="form-control" type="text" name="s_n_1"><br>
                marks 1: <input class="form-control" type="number" name="mk1"><br>
                marks 2: <input class="form-control" type="number" name="mk2"><br>
                marks 3: <input class="form-control" type="number" name="mk3"><br>
            </div>
            <div class="form-group">
                <h1>marks of student 2</h1>
                student_name_2: <input class="form-control" type="text" name="s_n_2"><br>
                marks 1: <input class="form-control" type="number" name="mk4"><br>
                marks 2: <input class="form-control" type="number" name="mk5"><br>
                marks 3: <input class="form-control" type="number" name="mk6"><br>
                <button class="btn btn-outline-success" type="submit" name="submit">Submit</button>
            </div>

        </form>
    </div>
</body>
<?php
    if(isset($_GET['submit'])) {
        $s_n_1 = $_GET['s_n_1'];
        $mk1 = $_GET['mk1'];
        $mk2 = $_GET['mk2'];
        $mk3 = $_GET['mk3'];
        $student_1 = array(
            "name" => $s_n_1,
            "marks1" => $mk1,
            "marks2" => $mk2,
            "marks3" => $mk3
        );
        $s_n_2 = $_GET['s_n_2'];
        $mk4 = $_GET['mk4'];
        $mk5 = $_GET['mk5'];
        $mk6 = $_GET['mk6'];
        $student_2 = array(
            "name_2" => $s_n_2,
            "marks1" =>$mk4,
            "marks2" =>$mk5,
            "marks3" =>$mk6
        );
        $student[] = $student_1;
        $student[] = $student_2;
        // $str = $student_1." ".$student_2;
        print_r($student);
        // $str = $s_n_1." ".$mk2." ".$mk2." ".$mk3." ".$s_n_2." ".$mk4." ".$mk5." ".$mk6;
        // $arr = explode(" ",$str);
        // print_r($arr);
        // echo '<p class="alert alert-success">'.print_r($arr).'</p>';
    }
?>
</html>