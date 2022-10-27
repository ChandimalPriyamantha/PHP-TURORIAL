<!DOCTYPE html>
<html>

<head>

</head>

<body>


    <table border="2">
        <tr>
            <td>Subject Code</td>
            <td>Subject_Name</td>
            <td>Credits</td>
            <td>Delete Record</td>
        </tr>

        <?php

        include 'Function/conn.php'; // Using database connection file here

        $sql1 = "SELECT *FROM subject_table";
        $login_details_result = mysqli_query($conn, $sql1);

        // Display subject table with details on the page.
        if (mysqli_num_rows($login_details_result) > 0) {

            while ($row = mysqli_fetch_assoc($login_details_result)) {
        ?>
                <tr>
                    <td><?php echo $row['subject_code']; ?></td>
                    <td><?php echo $row['subject_name']; ?></td>
                    <td><?php echo $row['credits']; ?></td>
                    <td><a href="delete_subject.php?id=<?php echo $row['subject_code']; ?>"><button>Remove</button></a></td>
                </tr>
        <?php
            }
        }
        mysqli_close($conn); //connection close.
        ?>
    </table>
    <!-- adding new record into subject table in BICT databse-->
    <form action="add_subject.php" method="post">

        <table>
            <tr>
                <td><label for="user_name" name="User_name">Subject Code</label></td>
                <td> <input type="text" id="user_name" name="sub_code"><br></td>
            </tr>
            <tr>
                <td>
                    <lebel for="password" name="password">Subject Name</lebel>
                </td>
                <td><input type="text" name="sub_name" id="sub_name"></td>
            </tr>

            <tr>
                <td><label for="email" name="User_email">Credits</label></td>
                <td><input type="text" id="user_email" name="credits"><br></td>
            </tr>

            <tr>
                <td><input type="submit" valuse="submit" name="submit"></td>
                <td><input type="reset" value="reset" name="Reset"></td>
            </tr>
        </table>

    </form>
</body>

</html>