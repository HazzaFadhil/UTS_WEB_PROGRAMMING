buat sesi untuk login dan register


<!-- Pastikan file ini bernama login.php -->
<form action="login_proses.php" method="post"> 
  
  <label class="visually-hidden" for="registerEmail">Email</label> 
  <div class="input-group mb-3"> 
    <!-- PENTING: Tambahkan name="email" -->
    <input id="registerEmail" name="email" type="email" class="form-control" placeholder="Email" required /> 
    <div class="input-group-text"> <span class="bi bi-envelope"></span> </div> 
  </div> 

  <label class="visually-hidden" for="registerPassword">Password</label> 
  <div class="input-group mb-3"> 
    <!-- PENTING: Tambahkan name="password" -->
    <input id="registerPassword" name="password" type="password" class="form-control" placeholder="Password" required /> 
    <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div> 
  </div> 

  <div class="row"> 
    <div class="col-8"></div> 
    <div class="col-4"> 
      <div class="d-grid gap-2"> 
        <button type="submit" class="btn btn-primary">Sign In</button> 
      </div> 
    </div> 
  </div> 
</form>


<!-- Pastikan file ini bernama login.php -->
<form action="login_proses.php" method="post"> 
  
  <label class="visually-hidden" for="registerEmail">Email</label> 
  <div class="input-group mb-3"> 
    <!-- PENTING: Tambahkan name="email" -->
    <input id="registerEmail" name="email" type="email" class="form-control" placeholder="Email" required /> 
    <div class="input-group-text"> <span class="bi bi-envelope"></span> </div> 
  </div> 

  <label class="visually-hidden" for="registerPassword">Password</label> 
  <div class="input-group mb-3"> 
    <!-- PENTING: Tambahkan name="password" -->
    <input id="registerPassword" name="password" type="password" class="form-control" placeholder="Password" required /> 
    <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div> 
  </div> 

  <div class="row"> 
    <div class="col-8"></div> 
    <div class="col-4"> 
      <div class="d-grid gap-2"> 
        <button type="submit" class="btn btn-primary">Sign In</button> 
      </div> 
    </div> 
  </div> 
</form>