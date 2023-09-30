
<?php
class Estante {
    private $Fila1 = [];
    private $Fila2 = [];
    private $Fila3 = [];
    private $Tope1 = 0; 
    private $Tope2 = 0;
    private $Tope3 = 0;
    
   public function insertarLibro($fila, $libro){
         if($fila == 1){
              $this->Fila1[$this->Tope1] = $libro;
              $this->Tope1++;
         }else if($fila == 2){
              $this->Fila2[$this->Tope2] = $libro;
              $this->Tope2++;
         }else if($fila == 3){
              $this->Fila3[$this->Tope3] = $libro;
              $this->Tope3++;
         }
         else{
              echo "Fila no existe";
         }
   }

   public function mostrar($fila){
            if($fila == 1){
                return $this->Fila1;
            }else if($fila == 2){
                return $this->Fila2;
            }else if($fila == 3){
                return $this->Fila3;
            }
   }

   public function mostrarArmario(){
    return[
        "Fila1"=> $this->Fila1,
        "Fila2"=> $this->Fila2,
        "Fila3"=> $this->Fila3
    ];
   }
}
?>

