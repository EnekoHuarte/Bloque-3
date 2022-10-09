<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloque 3</title>
</head>
<style>
    pre{
        margin-top: -12%;
    }
</style>
<body>
    <h1>Bloque 3</h1>
    <pre>
    <?php 
        require 'Competicion.php';

        //Creación los competidores.
        $dani = new Corredor("Dani", "123abc");
        $eneko = new Corredor("Eneko", "456sdf");
        $odei = new Corredor("Odei", "789jkl");
        $alex = new Corredor("Alex", "147jla");
        $leire = new Corredor("Leire", "258jla");
        $elise = new Corredor("Elise", "147hjk");
        $jorje = new Corredor("Jorje", "369eqy");

        //Se añaden el tiempo de las carreras.
        $dani->añadirCarrera(35);
        $dani->añadirCarrera(8);
        $eneko->añadirCarrera(23);
        $odei->añadirCarrera(45);
        $odei->añadirCarrera(16);
        $alex->añadirCarrera(20);
        $alex->añadirCarrera(111);
        $alex->añadirCarrera(32);
        $alex->añadirCarrera(23);
        $leire->añadirCarrera(7);
        $elise->añadirCarrera(12);
        $jorje->añadirCarrera(18);
      

        //Creación de competición y se añaden los participantes.
        $competi = new Competicion();

        $competi->añadirCorredor($dani);
        $competi->añadirCorredor($eneko);
        $competi->añadirCorredor($odei);
        $competi->añadirCorredor($alex);
        $competi->añadirCorredor($leire);
        $competi->añadirCorredor($elise);
        $competi->añadirCorredor($jorje);

        //Se añade una carrera usando un objeto Competición.
        $competi->añadirCarreraACorredor("789jkl", 24);
        $competi->añadirCarreraACorredor("258jla", 62);

        //Calcula el tiempo medio de la primera carrera de los corredores.
        $todos = $competi->getCorredores();
        $medTiempos = 0;
        foreach ($todos as $corredores) {  
            $tiempos = $corredores->getTiempo();
            $medTiempos += $tiempos[0];
        }
        echo "El tiempo medio de la primera carrera de los corredores es: ".$medTiempos/count($todos)."<br><br>";

        //Calcula la carrera más rápida de todas.
        $masRapido = 0;    
        foreach ($tiempos as $carrera) {
              if ($carrera > $masRapido) {
               $masRapido = $carrera;
              }
         }
        echo "La carrera más rápda es: ".$masRapido."<br><br>";

        //Muestra un array de los corredores que hicieron más de dos carreras con más de 15 segundos.;
        $nombres15s = [];
        foreach ($todos as $corredores) {
            $tiempos = $corredores->getTiempo();
            $count = 0;
            foreach ($tiempos as $carrera) {
                if ($carrera > 15) {
                    $count++;
                }
            }
            if ($count > 2) {
               $nombres15s[] =  $corredores->getNombre();
            }
        }
        echo "Los corredores que tienen más de 2 carreras con mas de 15 segundos son: <br>";
        echo print_r($nombres15s);
        echo "<br><br>";

        //Muestra un array con los participantes cuyo nombre acabe por 'e'.
        $nombresE = [];
        foreach ($todos as $corredores) {
            $nombre = $corredores->getNombre(); 
            if (substr($nombre, -1) == "e") {
                $nombresE[] = $nombre;
            }
        }
        echo "Los corredores cuyos nombres acaban por 'e' son: <br>";
        echo print_r($nombresE);


        


    ?>
    </pre>
</body>
</html>