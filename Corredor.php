<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corredor</title>
</head>
<body>
    <?php
        class Corredor{
            //Atributos del corredor; las carreras se almacenan en sus tiempos(en segundos).
            private $nombre;
            private $codigo;
            private $tiempo = [];

            //Para crear un corredor, debe tener un nombre y un código(alfanumérico).
            public function __construct($nombre, $codigo){
                $this->nombre = $nombre;
                $this->codigo = $codigo;         
            }


             //Devuelve el nombre del corredor.
             public function getNombre(){
                return $this->nombre;
            }

            //Devuelve el código del corredor.
            public function getCodigo(){
                return $this->codigo;
            }

            //Devuelve las carreras del corredor.
            public function getTiempo(){
                return $this->tiempo;
            }

            /*Añade una carrera(tiempo en segundos) al campo de tiempos del corredor.
            Si la carrera dura menos de 5s o el corredor tiene más de 5 carreras saltará
            una excepción. */
            public function añadirCarrera($tCarrera){
                 $carreras = $this->tiempo;
               try {
                if ($tCarrera < 5) {
                   throw new Exception("La carrera dura menos de 5 segundos");
                   
                }elseif (count($carreras) == 5) {
                    throw new Exception("El corredor ya tiene 5 carreras");
                }else{
                    $this->tiempo[] = $tCarrera;
                }
               } catch (Exception $e) {
                    echo '<p style="color:#FF0000"'.$e->getMessage().'</p>';
               }
            }
        }
       
    ?>
</body>
</html>