<!--  bLOCK#1 start don't change the order-->
<?php 
$title =" Department Deatils| SLGTI";
include_once("config.php");
include_once("head.php");
include_once("menu.php");
?>
<!-- end don't change the order-->



<!-- bLOCK#2 start your code here & u can change -->

<br>
<hr>
<div class="alert bg-dark text-white text-center" role="alert"><h1>SriLanka German Training Institute<br>Notice Add Result.</h1>
</div>
<br>
<hr>
<br>
<?PHP
$department_id=$course_id=$module_id=$academic_year=$tid=null;

if(isset($_GET['edit']))

{
  $id = $_GET['edit'];
  $sql = "SELECT * FROM `notice_result` WHERE `result_id` = $id";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result)==1)
   {
      $row = mysqli_fetch_assoc($result);
      $result_id = $row['result_id'];
      $department_id = $row['department_id'];
      $course_id = $row['course_id'];
      $module_id = $row['module_id'];
      $academic_year= $row['academic_year'];
      $upload= $row['upload'];
    
  }

}



  ?>


<!-- Add timetable design  -->

<form method="POST" action="" enctype="multipart/form-data">

  
<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>&nbsp;&nbsp;&nbsp;Department</h5></label>
  <div class="col-sm-10"> 
  <select id="inputState" class="form-control<?php  if(isset($_POST['Add']) && empty($_POST['department_id']))
  {echo ' is-invalid';}if(isset($_POST['Add']) && !empty($_POST['department_id'])){echo ' is-valid';} ?>" id="department_id" name="department_id">


      <option selected disabled>Department</option>
      <?php          
          
          $sql="SELECT * from department";
          $result = mysqli_query($con,$sql);
          if(mysqli_num_rows($result)>0)
          while($row = mysqli_fetch_assoc($result)) 
          {
          echo '<option value="'.$row['department_id'].'"';
          if ($row["department_id"]==$department_id )
          {
            echo 'selected'; 
          }
          echo '>'.$row['department_name'].'</option>';
          }
          ?> 
     
    </select>
  </div>
</div>

<div class="form-group row">
  <label for="inputPassword3" class="col-sm-2 col-form-label"><h5>&nbsp;&nbsp;&nbsp;Course</h5></label>
  <div class="col-sm-10">
<select id="inputState" class="form-control <?php  if(isset($_POST['Add']) && empty($_POST['course_id']))
  {echo ' is-invalid';}if(isset($_POST['Add']) && !empty($_POST['course_id'])){echo ' is-valid';} ?>"  id="course_id" name="course_id">
      <option selected disabled required>Course</option>
      <?php          
          $sql = "SELECT * FROM `course`";
          $result = mysqli_query($con, $sql);
          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
              echo '<option  value="'.$row["course_id"].'" required';
              if($row["course_id"]==$course_id) echo ' selected';
              echo '>'.$row["course_name"].'</option>';
              }
          }
          ?>

    </select>
  </div>
</div>                       


<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>&nbsp;&nbsp;&nbsp;Module</h5></label>
  <div class="col-sm-10"> 
  <select id="inputState" class="form-control<?php  if(isset($_POST['Add']) && empty($_POST['module_id']))
  {echo ' is-invalid';}if(isset($_POST['Add']) && !empty($_POST['module_id'])){echo ' is-valid';} ?>"  id="module_id" name="module_id">
      <option selected disabled required >Module</option>
      <?php          
          $sql = "SELECT * FROM `module`";
          $result = mysqli_query($con, $sql);
          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
              echo '<option  value="'.$row["module_id"].'" required';
              if($row["module_id"]==$module_id) echo ' selected';
              echo '>'.$row["module_name"].'</option>';
              }
          }
          ?>
     

    </select>
  </div>
</div>



<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label"><h5>&nbsp;&nbsp;&nbsp;AcademicYear</h5></label>
  <div class="col-sm-10"> 
  <select id="inputState" class="form-control<?php  if(isset($_POST['Add']) && empty($_POST['academic_year']))
  {echo ' is-invalid';}if(isset($_POST['Add']) && !empty($_POST['academic_year'])){echo ' is-valid';} ?>"  id="academic_year" name="academic_year">
      <option selected disabled required >AcademicYear</option>

      <?php          
          $sql = "SELECT * FROM `academic`";
          $result = mysqli_query($con, $sql);
          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
              echo '<option  value="'.$row["academic_year"].'" required';
              if($row["academic_year"]==$academic_year) echo ' selected';
              echo '>'.$row["academic_year"].'</option>';
              }
          }
          ?>

    </select>
  </div>
</div>


<div class="input-group mb-3">

<label for="inputEmail3" class="col-sm-2 col-form-label"><h5>Upload Your File</h5></label>
<input class="form-control" type="file" name='pdf' value="<?php  if(isset($_POST['Add']) && empty($_POST['upload']))
  {echo ' is-invalid';}if(isset($_POST['Add']) && !empty($_POST['upload'])){echo ' is-valid';} ?>"  id="upload" name="upload"></td>
</div>     
   

       <div class="col-12">

       <h1 class="text-right">

       <?PHP 
echo '<div class="btn-group-horizontal">';
if(isset($_GET['edit']))
    {
      echo ' <button type="submit" value="Add" name="update" class="btn btn-primary mr-2"><i class="fas fa-user-edit">
      </i>&nbsp;&nbsp;Edit</button>';
      //echo '<button type="edit"  class="btn btn-primary mr-2"><i class="fas fa-user-edit"></i>UPDATE</button>'; 
      echo'<button type="reset" value="Reset" class="btn btn-primary mr-2"><i class="fas fa-redo"></i>&nbsp;&nbsp;Refresh</button>';

    }
  if(isset($_GET['delete']))
  {
    echo '<button type="submit"  class="btn btn-danger mr-2"><i class="fas fa-user-slash"></i>DELETE</button>';

  }
  if(!isset($_GET['delete']) && !isset($_GET['edit'])){
    echo '<button type="submit" value="Add" name="Add" class="btn btn-primary mr-2"><i class="fas fa-user-plus"></i>   ADD</button>';

  }
    
    echo '</div>';
    ?>
  
    <a href="NoticeResultTable.php" class="btn btn-sm btn-warning"><i class="far fa-edit"></i> View</a></button>




  </div>
</div>

</form>
<?php
// Add coding

if(isset($_POST['Add'])){
  if(!empty($_POST['department_id'])
  &&!empty($_POST['course_id'])
  &&!empty($_POST['module_id'])
  &&!empty($_POST['academic_year']))
  { 
      $department_id   =  $_POST['department_id'];
      $course_id   =  $_POST['course_id'];
      $module_id  =   $_POST['module_id'];
      $academic_year  =   $_POST['academic_year'];

    
      $t_name = "uploads/";
      $name = $t_name . basename($_FILES["pdf"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($name,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["pdf"]["tmp_name"]);
          if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      // Check if file already exists
      if (file_exists($name)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["pdf"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "pdf" && $imageFileType != "docx"  ) {
          echo "Sorry, only  pdf & doc files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $t_name)) {
              echo "". basename( $_FILES["pdf"]["name"]). " has been uploaded.";
          } else {
              echo "Sorry, there was an error uploading your file.";
          }
      }
      




     /*$t_name = $_FILES["pdf"]["tmp_name"];
     $name = basename($_FILES["pdf"]["name"]);
     $test_dir = './docs/result';
     move_uploaded_file($t_name, $test_dir.'/'.$name);

     if ($name){
      echo "Successfully uploaded";
     }else{
      echo "Not uploaded because of error #".$_FILES["ima"]["error"];
     }*/
  
  
     $sql = "INSERT INTO `notice_result` (`department_id`,`course_id`, `module_id` , `academic_year`,`upload`)
      VALUES ('$department_id','$course_id','$module_id','$academic_year','$name')";
   
      if (mysqli_query($con, $sql)) {
        echo "record add";
    

      } else {
         echo "Error: " . $sql .
        "<br>" . 	mysqli_error($con);
      
        

      }
  }
}


 
?>
   
<?php include_once("footer.php"); ?>