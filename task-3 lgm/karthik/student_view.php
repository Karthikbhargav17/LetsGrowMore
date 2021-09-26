<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>STUDENT LIST </title>
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style type="text/css">
        .wrapper .main_content .info .add-class .view-table tr:hover td{
  font-size: 23px;
  background-color: white;
    </style>
</head>

<body >

    <div class="wrapper">
        <?php
        include 'sidebar.php'
        ?>
        <div class="main_content">
            <?php include_once 'header.php'; ?>
            <div class="info">
                <div class="add-class res mtable">
                    <h1>Students List</h1>
                    <div class="view-table" style="background-color: white;">
                        <?php
                        include('connection.php');
                        

                        $sql1 = "SELECT `roll_no`, `name`, `class_id` FROM `students` order by class_id";
                        $result = mysqli_query($conn, $sql1);

                        if (mysqli_num_rows($result) > 0) {
                            echo "<table class='table table-hover table-striped table-condensed table-bordered' >
                <tr>
                <th style='color:black;'>ROLL NO</th>
                <th style='color:black;'>NAME</th>
                <th style='color:black;'>CLASS</th>
                </tr>";

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['roll_no'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                $sql2 = "Select name from classes where id =".$row['class_id'];
                                $query = mysqli_query($conn,$sql2);
                                $class = mysqli_fetch_array($query);
                                echo "<td>" . $class['name'] . "</td>";
                                echo "</tr>";
                            }

                            echo "</table>";
                        } else {
                            echo "0 Students";
                        }
                        ?>
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>