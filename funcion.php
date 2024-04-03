function contarParesImpares($numeros) {
    $pares = 0;
    $impares = 0;
    
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }
    
    return array('pares' => $pares, 'impares' => $impares);
}

// Ejemplo de uso
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$resultado = contarParesImpares($numeros);
echo "Cantidad de números pares: " . $resultado['pares'] . "<br>";
echo "Cantidad de números impares: " . $resultado['impares'];
