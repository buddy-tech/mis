<!------START DON'T CHANGE ORDER HEAD,MANU,FOOTER----->
<!---BLOCK 01--->
<?php 
   
include_once("CONFIG.PHP");

$title ="STUDENT PROFILE | SLGTI"; //YOUR HEAD TITLE CREATE VARIABLE BEFORE FILE NAME
include_once("HEAD.PHP");
include_once("MENU.PHP");

?>
<!----END DON'T CHANGE THE ORDER---->


<!---BLOCK 02--->
<!---START YOUR CODER HERE----->


<!-----END YOUR CODE----->
<!-- form start---->

    <div class="ROW">
        <div class="col text-center">
            <h2>STUDENT AND COURSE DETAILS</h2>   
        </div>
    </div>

    <form class="needs-validation" novalidate action="">
    <div class="form-row">
          <div class class="col-md-1">
          </div>
          <div class="col">
          <p style="font-size: 20px; font-weight: 700; border-bottom: 2px solid #aaa;">ENTROLLMENT</p>
          </div>  
    </div> 
                      
    <div class="form-row">
          <div class="col-md-12 mb-3">
          Student_Id :
          <input type="text"  id="id" placeholder="" aria-describedby="idPrepend" required>
         </div>
    </div>

    <div class="form-row">
          <div class="col-md-12 mb-3">
          Course_Id :
          <input type="text"  id="no" placeholder="" aria-describedby="noPrepend" required>
         </div>
    </div>

    <div class="form-row">
          <div class="col-md-12 mb-3">
          Entroll Year :
          <input type="text"  id="year" placeholder="" aria-describedby="fullnamePrepend" required>
         </div>
    </div>

    
    <div class="form-row">
        <button type="button" class="btn btn-primary">ADD</button><br>
        <button type="button" class="btn btn-success">UPDATE</button><br>
        <button type="button" class="btn btn-danger">DELETE</button><br>
    </div>
</form>



<!---BLOCK 03--->
<!----DON'T CHANGE THE ORDER--->
<?php include_once("FOOTER.PHP"); ?>