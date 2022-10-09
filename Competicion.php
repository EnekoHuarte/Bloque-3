<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competicion</title>
</head>
<body>
    <?php
        require 'Corredor.php';
         class Competicion{
            //Atributo de la competición; guarda los corredores participantes.
            private $corredores = [];

            //La competición se crea sin corredores, luego se añaden individualmente.
            public function __construct(){}

            //Devuelve los corredores de la competición.
            public function getCorredores(){
                return $this->corredores;
            }

            //Añade un nuevo corredor a la competición.
            public function añadirCorredor($Corredor){
                $this->corredores[] = $Corredor;
            }
            
            //Selecciona a un corredor dado su código y le añade una carrera(tiempo en segundos).
            public function añadirCarreraACorredor($cod, $time){
                $corrs = $this->corredores;
                foreach ($corrs as $value) {
                    if ($value->getCodigo() == $cod) {
                        $value->añadirCarrera($time);
                    }
                }
            }
        }
    ?>
</body>
</html>