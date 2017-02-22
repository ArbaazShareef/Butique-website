<?php
include 'include/headerunlogged.php';
?>
<div class="page-header" style = "margin:10px">
  <h1>Login <small>to your account</small></h1>
</div>
<div class="well"  style = "margin:10px;">
<form  style = "margin:10px; margin-right:100px;">
    <div class="form-group">
    <label for="Inputusername">Your UserName</label>
    <input type="text" class="form-control" id="Inputusername" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="InputEmail1">Email address</label>
    <input type="email" class="form-control" id="InputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="InputPassword1">Password</label>
    <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
  </div>
  
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
    </body>
</html>