<html>
<head>
    <title>Practica 11 PHP</title>    
</head>
<body>
    <?php
    //Maria del Socorro Gómez Pérez
    //Usando variables en PHP
    echo "<h1>Variables</h1>";
    $nombre= 'Maria';  //Tipo cadenas
    $apellidos= 'Gómez Pérez'; // si quiuero separar hay que darle espacio
    $edad=21;
    $salario=10000000.90;
    $fechaNacimiento='30/12/1995';
    $estatus=true;
    echo $nombre.'<br/>';
    echo $apellidos.'<br/>'; // para separar hay que concatenar con .
    //para darle salto de linea es con <br/>
    echo 'Nombre completo:'.$nombre.' '.$apellidos.'<br/>';
    echo 'TU EDAD ES: '.$edad.'<br/>';
    echo 'TU SALARIO ES:'.$salario;

    ?>
    <h1>OPERADORES ARTIMÉTICOS</h1>
    <?php
        $a=5;
        $b=3;
        $suma=$a+$b; // se declara las variables
        $resta=$a-$b;
        $multiplica=$a*$b;
        $divide=$a/$b;
    echo 'La suma de '.$a.' + '.$b.' es: '.$suma.'<br/>'; /* se manda a imprimir*/ echo 'La resta de '.$a.' - '.$b.' es: '.$resta.'<br/>';  
    echo 'La multiplica de '.$a.' * '.$b.' es: '.$multiplica.'<br/>';
    echo 'La divide de '.$a.' / '.$b.' es: '.$divide.'<br/>';

    ?>
</body>
</html>