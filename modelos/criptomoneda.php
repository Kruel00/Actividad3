<?php
class crptomoneda{
    public $dCripto;
    public $nombre;
    public $valor;

    public function __construct($nombre,$valor)
    {
        $this-> nombre = $nombre;
        $this-> valor = $valor;
    }

    function setNombre( $nombre)
    {
        $this-> nombre = $nombre;
    }

    function setValor($valor)
    {
        $this->valor = $valor;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getValor()
    {
        return $this->valor;
    }

    function getValorReal($idCrip)
    {
        
    }
}

class transaccion
{
    public $idTransacction;
    public $criptomoneda;
    public $tipoTransaccion;
    public $cantidadDeCryptos;
    public $tipoDeCambioDolares;
    public $MontoDecompraVenta;
    public $comision;
    public $valorRealcompraVenta;


    public function __construct($crto,$tipo,$qty,$tpCamb)
    {
        $this-> criptomoneda = $crto;
        $this-> tipoTransaccion = $tipo;
        $this-> cantidadDeCryptos = $qty;
        $this-> tipoDeCambioDolares = $tpCamb;
    }

    

}
