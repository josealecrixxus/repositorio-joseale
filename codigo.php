 <?php 
  class convertir {
   public $taza = 35.15;
   function convertirdolar($montobs){
      return $montobs/ $this->taza;

   }
  }
    class Operaciones extends convertir{
     public function sumar ($monto){
     	return $monto + 100;

     }
     
     function convertirdolar($montobs){

     	return "hola soy un polimorfismo";
     }

     
    }

  ?>