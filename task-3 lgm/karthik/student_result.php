<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RESULT</title>
    <link rel="stylesheet" href="Styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    include("connection.php");

    if (!isset($_GET['class']))
        $class = null;
    else
        $class = $_GET['class'];
    $rn = $_GET['roll'];

    // validation
    if (empty($class) or empty($rn) or preg_match("/[a-z]/i", $rn)) {
        if (empty($class))
            echo '<p class="error">Please select class !</p>';
        if (empty($rn))
            echo '<p class="error">Please enter roll number !</p>';
        if (preg_match("/[a-z]/i", $rn))
            echo '<p class="error">Please enter valid roll number !</p>';
        echo '<p class="error-m">You will be auto redirected to previous page in 3 seconds.</p>';
    ?>
        <script>
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 3000);
        </script>
    <?php
        exit();
    }

    $sql = mysqli_query($conn,"select id from classes where name = '$class' ");
    $sql2 = mysqli_fetch_array($sql);
    $classId = $sql2['id'];


    $name_sql = mysqli_query($conn, "SELECT `name` FROM `students` WHERE `roll_no`='$rn' and `class_id`='$classId'");
    while ($row = mysqli_fetch_assoc($name_sql)) {
        $name = $row['name'];
    }

    $result_sql = mysqli_query($conn, "SELECT * FROM `results` WHERE `roll_no`='$rn' and `CLASS`='$class'");
    while ($row = mysqli_fetch_assoc($result_sql)) {
        $p1 = $row['marks1'];
        $p2 = $row['marks2'];
        $p3 = $row['marks3'];
        $p4 = $row['marks4'];
        $p5 = $row['marks5'];
        $p6 = $row['marks6'];
        $s1 = $row['sub1'];
        $s2 = $row['sub2'];
        $s3 = $row['sub3'];
        $s4 = $row['sub4'];
        $s5 = $row['sub5'];
        $s6 = $row['sub6'];
        $total = (int)$p1 + (int)$p2 + (int)$p3 + (int)$p4 + (int)$p5+(int)$p6;
        $percentage = $total / 6;
    }
    if (mysqli_num_rows($result_sql) == 0) {
        echo '<p class="error">Result not found !</p>';
        echo '<p class="error-m">You will be auto redirected to previous page in 3 seconds.</p>';
    ?>
        <script>
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 3000);
        </script>
    <?php
        exit();
    }
    ?>

    <div class="wrapper">

        <div class="main_content" style="margin-left:0px;">
           <?php include 'header.php'; ?>
           
            <div class="info">

                <div class="add-class" style="margin-top: 10px;background-color: white;color: black;">
                    <h1>Result</h1>
                    
                     <table class="table table-hover table-striped table-condensed table-bordered">
                        <p style="font-size: 16pt;">Name: <?php echo $name; ?><br>Class: <?php echo $class; ?><br>Roll no: <?php echo $rn; ?></p>
                        
                        <thead>
                             <tr>
                                <th class="text-center">Subject</th>
                                <th class="text-center">Marks</th>
                        
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2"><?php echo $s1; ?></td>
                                <td class="py-2"><?php echo $p1; ?></td>
                            </tr>
                            <tr>
                                <td class="py-2"><?php echo $s2; ?></td>
                                <td class="py-2"><?php echo $p2; ?></td>
                            </tr>
                            <tr>
                                <td class="py-2"><?php echo $s3; ?></td>
                                <td class="py-2"><?php echo $p3; ?></td>
                            </tr>
                            <tr>
                                <td class="py-2"><?php echo $s4; ?></td>
                                <td class="py-2"><?php echo $p4; ?></td>
                            </tr>
                            <tr>
                                <td class="py-2"><?php echo $s5; ?></td>
                                <td class="py-2"><?php echo $p5; ?></td>
                            </tr>
                            <tr>
                                <td class="py-2"><?php echo $s6; ?></td>
                                <td class="py-2"><?php echo $p6; ?></td>
                            </tr>
                             <tr>
                                <td class="py-2">Total</td>
                                <td class="py-2"><?php echo $total; ?></td>
                            </tr>
                             <tr>
                                <td class="py-2">Percentage</td>
                                <td class="py-2"><?php echo $percentage; ?>%</td>
                            </tr>
                    </tbody>
                </table>
                    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" onclick="window.print()">Print Result</button>
                </div>
                

            </div>
        </div>
    </div>
</body>

</html>