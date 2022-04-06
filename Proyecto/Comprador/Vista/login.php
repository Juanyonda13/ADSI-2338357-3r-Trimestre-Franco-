<?php
require_once("../../Templete/templeteFormulario.php");
?>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap" _mstaria-label="138918"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a class="navbar-brand" href="#"><img src="../../imagen/qhatu.png" width="60" height="60" alt="Qhatu"></a></li>
          <li><a href="#" class="nav-link px-2 text-white" _msthash="1633541" _msttexthash="136006">Qhatu</a></li>
          
        </ul>
        <div class="text-end">
          <a href="../../Index.php"> <button type="button" class="btn btn-warning" _msthash="1718041" _msttexthash="176449"><i class="bi bi-person-plus-fill"> Volver </i></button></a>  
        </div>
      </div>
    </div>
  </header>
  <br>
</br>
<div class="formulario">
    <form action="../Controlador/login.php" method="POST">
       
        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email" placeholder="@correo.com" class="form-control">
        </div>
        
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button type="submit" name="btn_enviar" class="btn btn-success">Iniciar</button>
    </form>
</div>
<br>
</br>

<header class="p-3 bg-dark text-white">
<div class="container">
  <footer class="py-1 my-1">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© 2021 Company, Inc</p>
  </footer>
</div>
</header>
