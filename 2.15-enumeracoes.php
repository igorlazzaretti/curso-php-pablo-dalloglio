<?php
enum Houses{
    
    case Gryffindor;
    case Ravenclaw;
    case Slytherin;
    case Hufflepuff;
}
class SortingHat{
        //da o tipo do enum Houses para a variavel
    private Houses $varHouses;

    public function setHouses(Houses $varHouses){
        $this->varHouses = $varHouses;
    }

    public function cerimony(){
        if($this->varHouses == Houses::Gryffindor){
            echo "Gryffindor";  
        }
        else if ($this->varHouses == Houses::Ravenclaw){
            echo "Ravenclaw";
        }
        else if ($this->varHouses == Houses::Slytherin){
            echo "Slytherin";
        }
        else if ($this->varHouses == Houses::Hufflepuff){
            echo "Hufflepuff";
        }
    }
}
    //crio objeto da sortingHat
$sorted = new SortingHat();
    //chamo o método e passo o parametro com o enum 
$sorted->setHouses(Houses::Gryffindor);
    //
$sorted->cerimony();
?>