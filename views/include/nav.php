<nav>
    <div>
      <h2>LOGO</h2>
    </div>
    <ul>
      <li><a href='inicio'>Ir a el Inicio</a></li>
        <?php 
            if(isset($_SESSION['user'])){
              
              echo "<li><a href='panel'>ir a el Panel</a></li>";
            }else{
              echo "<li><a href='iniciar-sesion'>Iniciar Sesion</a></li>";
              echo "<li><a href='registrarse'>Registrarse</a></li>";
            }   
        ?>
    </ul>
</nav>