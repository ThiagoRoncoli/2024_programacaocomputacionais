<?php

require_once ("clsBicicleta.php");

class MoutainBike extends Bicicleta
{

    public $marcha;

    public function __construct($id, $marca, $cor, $marcha)
    {
        parent::__construct($id, $marca, $cor);
        $this->marcha = $marcha;
    }

    public function mudarMarcha($marcha)
    {
        echo "Bicicleta na marcha $marcha.";
    }
    public function getMarcha()
    {
        return $this->marcha;
    }
    public function setMarcha($marcha)
    {
        $this->marcha = $marcha;
    }



}

?>