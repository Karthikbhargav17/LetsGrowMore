
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Result</title>
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <div class="wrapper">
        <?php
        include 'sidebar.php'
        ?>
        <div class="main_content">
            <?php include 'header.php'; ?>
            <div class="info">

                <div class="add-class">
                    <h1>View Result</h1>
                    <form action="result_view_page.php" method="GET">
                        <?php
                        include('connection.php');

                        $class_result = mysqli_query($conn, "SELECT `name` FROM `classes`");
                        echo '<select name="class">';
                        echo '<option selected disabled>Select Stream</option>';
                        while ($row = mysqli_fetch_array($class_result)) {
                            $display = $row['name'];
                            echo '<option value="' . $display . '">' . $display . '</option>';
                        }
                        echo '</select>'
                        ?>
                        <input class="text-input" type="text" name="roll" placeholder="Enter Roll Number" value="<?php if (isset($_GET['roll'])) {
                                                                                                                        echo $_GET['roll'];
                                                                                                                    } ?>">
                        <br><input class="button" type="submit" value="Fetch Result">

                    </form>

                </div>

            </div>
        </div>
    </div>

</body>

</html>