<h1>Condicionales en php</h1>
<h2>Condicional if</h2>
<?php
//hora en php
$verHora = date("H");
if($verHora<"20"){
    echo "Buen dia";
}
?>
<h2>Condicional if else</h2>
<?php
if($verHora<"10"){
    echo "Que tengas un buen dia";
}else{
    echo "Buenas noches";
}

?>
<h2>Condicional elseif</h2>
<?php
if ($verHora < "10"){
    echo "Buen dia";
}elseif($verHora>"9"){
    echo "Buenas buenas";
}
?>
<h1>Estructura Switch</h1>
<?php
$color = "marron";
switch($color){
    case "rojo";
        echo "El color es rojo";
        break;
    case "azul";
        echo "El color es azul";
        break;
    case "verde";
    echo "El color es verde";
        break;
    default:
    echo "El color no se encuentra disponible";
}
?>