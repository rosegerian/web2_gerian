<?php 
$title='INDEX';
require_once 'includes/header.php';
?>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>


  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputFirstName">First Name</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter Your First Name">
  </div>
  <div class="form-group col-md-4">
    <label for="inputLastName">Last Name</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter Your Last Name">
  </div>
 
  
<form action="/action_page.php">
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
 
</form>
</div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Contact Number</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState" >Speciality</label>
      <select id="inputState" class="form-control">
        <option selected>Database Admin </option>
        <option selected>Software Developer </option>
        <option selected>Web Administator</option>
        
      </select>
    </div>
    <div class="form-row">
  <div class="form-group col-md-8" >
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        You agree to our rules and regulations.
      </label>
    </div>
  </div>
  </div>

  <button type="submit" class="btn btn-primary btn-block" >Sign in</button>
</form>



<?php 
require_once 'includes/footer.php';
?>