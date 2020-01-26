<?php
    require_once 'Sumar.php';
    require_once 'Resta.php';
    require_once 'Multiplicacion.php';
    require_once 'Division.php';

    sleep(2);

    $objSuma = new Sumar();
    $objResta = new Resta();
    $objMultiplicacion = new Multiplicacion();
    $objDivision = new Division();

    $numero1 = $_POST["txtnumero1"];
    $numero2 = $_POST["txtnumero2"];

    if(isset($_POST["btnsumar"])){
        $objSuma -> setNumero1($numero1);
        $objSuma -> setNumero2($numero2);

        echo $objSuma->sumar();

    }
    if(isset($_POST["btnrestar"])){
        $objResta -> setNumero1($numero1);
        $objResta -> setNumero2($numero2);

        echo $objResta->restar();

    }

    if(isset($_POST["btnmultiplicar"])){
        $objMultiplicacion -> setNumero1($numero1);
        $objMultiplicacion -> setNumero2($numero2);

        echo $objMultiplicacion->multiplicar();

    }

    if(isset($_POST["btndividir"])){
        $objDivision -> setNumero1($numero1);
        $objDivision -> setNumero2($numero2);

        echo $objDivision->dividir();

    }





?>