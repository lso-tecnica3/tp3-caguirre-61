<?php
$respuestas_correctas = [
    "pregunta1" => "b",
    "pregunta2" => "a",
    "pregunta3" => "c",
    "pregunta4" => "a",
    "pregunta5" => "b",
    "pregunta6" => "c",
    "pregunta7" => "a",
    "pregunta8" => "b",
    "pregunta9" => "c",
    "pregunta10" => "a"
];
?>
<?php
include 'respuestas.php';

$puntaje = 0;
$total_preguntas = count($respuestas_correctas);
$resultados = [];

foreach ($respuestas_correctas as $clave => $respuesta_correcta) {
    $respuesta_usuario = $_POST[$clave] ?? null;

    if ($respuesta_usuario === $respuesta_correcta) {
        $puntaje += 10;
        $resultados[$clave] = " Correcta";
    } else {
        $resultados[$clave] = " Incorrecta. La respuesta correcta es: " . strtoupper($respuesta_correcta);
    }
}

$porcentaje_correctas = ($puntaje / ($total_preguntas * 10)) * 100;
$porcentaje_incorrectas = 100 - $porcentaje_correctas;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados de la Trivia</title>
</head>
<body>
    <h1>Resultados</h1>
    <p><strong>Puntaje total:</strong> <?= $puntaje ?> / <?= $total_preguntas * 10 ?></p>

    <h2>Respuestas:</h2>
    <ul>
        <?php foreach ($resultados as $pregunta => $resultado): ?>
            <li><?= ucfirst($pregunta) . ": " . $resultado ?></li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Porcentaje correctas:</strong> <?= round($porcentaje_correctas, 2) ?>%</p>
    <p><strong>Porcentaje incorrectas:</strong> <?= round($porcentaje_incorrectas, 2) ?>%</p>

    <br>

    <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Trivia de Cultura General</title>
</head>
<body>
  <h1>Trivia de Cultura General</h1>
  <form action="procesar.php" method="post">
    <p>1. ¿Cuál es la capital de Francia?</p>
    <input type="radio" name="pregunta1" value="a"> Berlín<br>
    <input type="radio" name="pregunta1" value="b"> París<br>
    <input type="radio" name="pregunta1" value="c"> Roma<br>

    <p>2. ¿Quién escribió "Cien años de soledad"?</p>
    <input type="radio" name="pregunta2" value="a"> Gabriel García Márquez<br>
    <input type="radio" name="pregunta2" value="b"> Pablo Neruda<br>
    <input type="radio" name="pregunta2" value="c"> Jorge Luis Borges<br>

    <p>3. ¿Cuál es el planeta más grande del sistema solar?</p>
    <input type="radio" name="pregunta3" value="a"> Tierra<br>
    <input type="radio" name="pregunta3" value="b"> Marte<br>
    <input type="radio" name="pregunta3" value="c"> Júpiter<br>

    <p>4. ¿En qué continente está Egipto?</p>
    <input type="radio" name="pregunta4" value="a"> África<br>
    <input type="radio" name="pregunta4" value="b"> Asia<br>
    <input type="radio" name="pregunta4" value="c"> Europa<br>

    <p>5. ¿Cuál es el océano más grande?</p>
    <input type="radio" name="pregunta5" value="a"> Atlántico<br>
    <input type="radio" name="pregunta5" value="b"> Pacífico<br>
    <input type="radio" name="pregunta5" value="c"> Índico<br>

    <p>6. ¿Cuál es el idioma más hablado en el mundo?</p>
    <input type="radio" name="pregunta6" value="a"> Inglés<br>
    <input type="radio" name="pregunta6" value="b"> Español<br>
    <input type="radio" name="pregunta6" value="c"> Chino mandarín<br>

    <p>7. ¿Quién pintó la Mona Lisa?</p>
    <input type="radio" name="pregunta7" value="a"> Leonardo da Vinci<br>
    <input type="radio" name="pregunta7" value="b"> Miguel Ángel<br>
    <input type="radio" name="pregunta7" value="c"> Van Gogh<br>

    <p>8. ¿Cuál es el metal más ligero?</p>
    <input type="radio" name="pregunta8" value="a"> Aluminio<br>
    <input type="radio" name="pregunta8" value="b"> Litio<br>
    <input type="radio" name="pregunta8" value="c"> Zinc<br>

    <p>9. ¿En qué año comenzó la Segunda Guerra Mundial?</p>
    <input type="radio" name="pregunta9" value="a"> 1945<br>
    <input type="radio" name="pregunta9" value="b"> 1930<br>
    <input type="radio" name="pregunta9" value="c"> 1939<br>

    <p>10. ¿Qué animal es el símbolo de la paz?</p>
    <input type="radio" name="pregunta10" value="a"> Paloma<br>
    <input type="radio" name="pregunta10" value="b"> Águila<br>
    <input type="radio" name="pregunta10" value="c"> León<br>

    <br><br>
    <input type="submit" value="Calcular puntaje">
  </form>
</body>
</html>
    <a href="index.html"><button>Volver a intentar</button></a>
</body>
</html>
