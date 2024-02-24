<?php
    $Zona=$_POST['Zona'];
    $webservice="https://www.dafi.com.mx/ConsultaRemota/Service.asmx?wsdl";
    $parametros=array();
    $parametros['claveFideicomiso']=$Zona;
    $WS=new SoapClient($webservice,$parametros); 
    $res=$WS->ObtenerRegion($parametros);
    $resultado=$res->ObtenerRegionResult;
    //var_dump($resultado);
    foreach ($resultado->{'Region'} as $item) {
        echo $item->{'Zona'}.'-';
        echo $item->{'Nombre'}.'<br>';
    }
?>