<?php
if(isset($_POST['command'])){
    $arreglo=array_reverse($_POST);

    if($_POST['command'] == 'sumar'){
        $valor = $arreglo[0] + $arreglo[1];
        unset($arreglo[0],$arreglo[1],$arreglo['command']);
        array_push($arreglo, $valor);
        $resultado = implode (" "."\n",$arreglo);
    }
    elseif($_POST['command'] == 'restar'){
        $valor = $arreglo[0] - $arreglo[1];
        unset($arreglo[0],$arreglo[1],$arreglo['command']);
        array_push($arreglo, $valor);
        $resultado = implode (" "."\n",$arreglo);
    }
    elseif($_POST['command'] == 'multiplicar'){
        $valor = $arreglo[0] * $arreglo[1];
        unset($arreglo[0],$arreglo[1],$arreglo['command']);
        array_push($arreglo, $valor);
        $resultado = implode (" "."\n",$arreglo);
    }
    elseif($_POST['command'] == 'dividir'){
        $valor = $arreglo[0] / $arreglo[1];
        unset($arreglo[0],$arreglo[1],$arreglo['command']);
        array_push($arreglo, $valor);
        $resultado = implode (" "."\n",$arreglo);
    }
    elseif($_POST['command'] == 'sumarall'){
        $valor2 = $arreglo[0];
        unset($arreglo[0]);
        for($i=1; $i<=count($arreglo)+2; $i++){
            $valor2=$valor2 + $arreglo[$i];
            unset($arreglo[$i],$arreglo['command']);
        }
        array_push($arreglo, $valor2);
        $resultado = implode (" "."\n",$arreglo);
    }
    elseif($_POST['command'] == 'restarall'){
        $valor2 = $arreglo[0];
        unset($arreglo[0]);
        for($i=1; $i<=count($arreglo)+2; $i++){
            $valor2=$valor2 - $arreglo[$i];
            unset($arreglo[$i],$arreglo['command']);
        }
        array_push($arreglo, $valor2);
        $resultado = implode (" "."\n",$arreglo);
    }
    elseif($_POST['command'] == 'multiplicarall'){
        $valor2 = $arreglo[0];
        unset($arreglo[0]);
        for($i=1; $i<=count($arreglo)+2; $i++){
            $valor2=$valor2 * $arreglo[$i];
            unset($arreglo[$i],$arreglo['command']);
        }
        array_push($arreglo, $valor2);
        $resultado = implode (" "."\n",$arreglo);
    }
    elseif($_POST['command'] == 'dividirall'){
        $valor2 = $arreglo[0];
        unset($arreglo[0]);
        for($i=1; $i<=count($arreglo)+2; $i++){
            $valor2=$valor2 / $arreglo[$i];
            unset($arreglo[$i],$arreglo['command']);
        }
        array_push($arreglo, $valor2);
        $resultado = implode (" "."\n",$arreglo);
    }
    elseif($_POST['command'] == 'ordenar'){
        unset($arreglo['command']);
        sort($arreglo);
        foreach($arreglo as $resultado){
            echo str_pad($resultado,9).""."\n";
        }
    }
    echo $resultado;
}