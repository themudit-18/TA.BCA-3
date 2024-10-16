<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit</title>
</head>
<body>
<?php
        include_once "./classes/Student.php";

        $s = new Student();
        $stuDetail = $s->getStudentById($_GET['id']);
    ?>
    <form action="con_studentEdit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $stuDetail['id'];?>">
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name" value="<?php echo $stuDetail['name'];?>"></td>
            </tr>
            <tr>
                <td>Enrollment</td>
                <td>:</td>
                <td><input type="text" name="enrollment" value="<?php echo $stuDetail['enrollment'];?>"></td>
            </tr>
            <tr>
                <td>Branch</td>
                <td>:</td>
                <td><input type="text" name="branch" value="<?php echo $stuDetail['branch'];?>"></td>
            </tr>
            <tr>
                <td>Sem</td>
                <td>:</td>
                <td>
                    <select name="sem">
                        <option 
                        <?php
                            if($stuDetail['sem']==1)
                            {
                                echo "selected";
                            }
                        ?>
                        >1</option>
                        <option
                        <?php
                            if($stuDetail['sem']==2)
                            {
                                echo "selected";
                            }
                        ?>
                        >2</option>
                        <option
                        <?php
                            if($stuDetail['sem']==3)
                            {
                                echo "selected";
                            }
                        ?>
                        >3</option>
                        <option
                        <?php
                            if($stuDetail['sem']==4)
                            {
                                echo "selected";
                            }
                        ?>
                        >4</option>
                        <option
                        <?php
                            if($stuDetail['sem']==5)
                            {
                                echo "selected";
                            }
                        ?>
                        >5</option>
                        <option
                        <?php
                            if($stuDetail['sem']==6)
                            {
                                echo "selected";
                            }
                        ?>
                        >6</option>
                        <option
                        <?php
                            if($stuDetail['sem']==7)
                            {
                                echo "selected";
                            }
                        ?>
                        >7</option>
                        <option
                        <?php
                            if($stuDetail['sem']==8)
                            {
                                echo "selected";
                            }
                        ?>
                        >8</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan='3'>
                    <input type="submit" value="Save">
                    <a href="./listStudents.php" class="btn btn-outline-dark">Cancel</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>