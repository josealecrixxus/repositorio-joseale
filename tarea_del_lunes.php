<html>
 <title>Polimorfismo</title>
  <body>
	<?php 
      require 'codigo.php';
      $resolver = new Operaciones ();
        echo $resolver->convertirdolar(75);
        echo '<h1>Espacio </h1>';
        echo $resolver->sumar(75);
	 ?>
  </body>
</html>