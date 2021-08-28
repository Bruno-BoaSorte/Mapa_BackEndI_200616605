<?php
(isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina ='home';


if (file_exists('pages/'.$pagina . '.php')):
  include ('pages/' . $pagina . '.php');
  else :
    include ('pages/home.php');
  endif;  
