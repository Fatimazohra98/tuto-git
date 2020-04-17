 <?php
abstract class compte{
    private $code;
    private $solde;

    public function __construct($c, $s){
        $this->code = $c;
        $this->solde = $s;
    }
    public function verser($mt){
        $this->solde += $mt;
    }
    public function getCod(){
        return $this->code;
    }
    public function retirer($mt){
        $this->solde -= $mt;
    }
    public function getCompteStates(){
        echo $this->code;
        echo $this->solde;
    }

}
?>