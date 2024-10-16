<?php
    // Include DbConfig File

    include_once "DbConfig.php";

    class Student extends DbConfig
    {
        function getAllStudents(){
            $sql = "SELECT * FROM students;";

            $res=mysqli_query($this->con,$sql);

            $resArray = array();
            
            while($row = mysqli_fetch_assoc($res))
            {
                $resArray[] = $row;
            }
            return $resArray;
        }


        function insertStudents($input){
            extract($input);
            $sql = "INSERT INTO students(id, name, enrollment, password, branch, sem) VALUES (NULL, '$name', '$enrollment', '$password', '$branch', $sem);";

            $res = mysqli_query($this->con,$sql);

            $resMessage = "Inserted Successfully";
            
            return $resMessage;
        }

        function getStudentById($id){
            $sql = "SELECT * FROM students where id=$id;";

            $res=mysqli_query($this->con,$sql);

            $resRow = mysqli_fetch_assoc($res);
            return $resRow;
        }

        function deleteStudentById($id){
            $sql = "DELETE FROM students where id=$id;";

            $res=mysqli_query($this->con,$sql);

            $resMsg = "Deleted Successfully";
            return $resMsg;
        }
        function updateStudents($input){
            extract($input);
            $sql = "UPDATE students SET name='$name',enrollment='$enrollment',branch='$branch',sem=$sem WHERE id=$id;";
            $res = mysqli_query($this->con,$sql);

            $resMessage = "Updated Successfully";
            
            return $resMessage;
        }
    }
?>