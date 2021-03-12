<?php
 if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
             $sql = "INSERT INTO `student` (Stu_id,lab_crn1,orig_password,Stu_passwd,first_name,last_name)
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."' )";
                   $result = mysqli_query($con, $sql);
        if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"index.php\"
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"index.php\"
          </script>";
        }
           }
      
           fclose($file);  
        }
    }   

    function get_all_records(){
        $con = getdb();
        $Sql = "SELECT * FROM student";
        $result = mysqli_query($con, $Sql);  
        if (mysqli_num_rows($result) > 0) {
         echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
                 <thead><tr><th>EMP ID</th>
                              <th>StudentID</th>
                              <th>LabCRN</th>
                              <th>Original Password</th>
                              <th>Student Password</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                            </tr></thead><tbody>";
         while($row = mysqli_fetch_assoc($result)) {
             echo "<tr><td>" . $row['Stu_id']."</td>
                       <td>" . $row['lab_crn1']."</td>
                       <td>" . $row['orig_password']."</td>
                       <td>" . $row['Stu_passwd']."</td>
                       <td>" . $row['first_name']."</td>
                       <td>" . $row['last_name']."</td></tr>";        
         }
        
         echo "</tbody></table></div>";
         
    } else {
         echo "you have no records";
    }
    }


?>