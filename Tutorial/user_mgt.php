<!DOCTYPE html>
<html>

<head>

</head>

<body>


    <table border="2">
        <tr>
            <td>Nmae</td>
            <td>Email</td>
            <td>Role</td>
            <td>Delete Record</td>
        </tr>

        <?php

        include 'Function/conn.php'; // Using database connection file here

        $sql1 = "SELECT *FROM user_table";
        $login_details_result = mysqli_query($conn, $sql1);

        //Display user table with details on the page.
        if (mysqli_num_rows($login_details_result) > 0) {

            while ($row = mysqli_fetch_assoc($login_details_result)) {
        ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                    <td><a href="delete_user.php?id=<?php echo $row['user_id']; ?>"><button>Remove</button></a></td>
                </tr>
        <?php
            }
        }
        mysqli_close($conn);
        ?>
    </table>
    <!-- adding new record into user table in BICT databse-->
    <form action="add_user.php" method="post">

        <table>
            <tr>
                <td><label for="user_name" name="User_name">User Name</label></td>
                <td> <input type="text" id="user_name" name="user_name"><br></td>
            </tr>
            <tr>
                <td>
                    <lebel for="password" name="password">Password</lebel>
                </td>
                <td><input type="password" name="password" id="user_password"></td>
            </tr>

            <tr>
                <td><label for="email" name="User_email">Email</label></td>
                <td><input type="text" id="user_email" name="email"><br></td>
            </tr>

            <tr>
                <td><label for="cars">Role:</label></td>
                <td>

                    <select name="role" id="role">
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>

                    </select>

                </td>
            </tr>

            <tr>
                <td><input type="submit" valuse="submit" name="Submit"></td>
                <td><input type="reset" value="reset" name="Reset"></td>
            </tr>
        </table>

    </form>
</body>

</html>