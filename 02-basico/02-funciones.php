<?php 
    // Funciòn bàsica 
    function saludar_ahora(): string
    {
        return 'Esto es una funciòn';
    }

    echo saludar_ahora();
    echo '<br>';


    // Funciòn con paràmetros
    function resumen(string $text): string
    {
        return substr($text, 0, 20) . '...';
    }

    echo resumen('Cuanto te vi me enamoré y tu sonreíste porque lo sabías');
    echo '<br>';

    // Funciòn con varios parametros
    function saludar(string $nombre = 'Anónimo', string $profesion = 'ninguna'): string
    {
        return 'Hola, ' . $nombre .'. La longitus de tu nombre es ' . strlen($nombre) . ' carácteres y tu profesión es ' . $profesion . '.';
    }

    echo saludar();
    echo '<br>';
    
    echo saludar('Espartaco');
    echo '<br>';

    echo saludar('Picasso', 'pintor');
    echo '<br>';

    // 

    /**
     * Método que indica el tipo de metal que debe tener una medalla a partir del resultado
     * @param {int} $posicion - Posición
     * @return {string|null} - Tipo de metal
    */
    function tipoDeMedalla(int $posicion): ?string
    {
        switch ($posicion) {
            case 1:
                return 'Oro';
            case 2:
                return 'Plata';
            case 3:
                return 'Bronce';
            default:
                return null;
        }
    }

    echo tipoDeMedalla(2);
    echo '<br>';

    echo tipoDeMedalla(34);
    echo '<br>';

    function duplicarPositivo(float $numero): float|string
    {
        if ($numero > 0) {
            return $numero * 2;
        } else {
            return 'No puedes usar número en negativo o cero';
        }
    }

    echo duplicarPositivo(12.1);
    echo '<br>';
    echo duplicarPositivo(-45);
    echo '<br>';

    // Funciones Anónimas
    $funcionAnonima = function (): string {
        return "Esta es una funcion anonima";
    };

    echo $funcionAnonima();
    echo '<br>';


    // Operador de propagacion para pasar varios parametros
    function integerDivision(...$ints): int {
        return intdiv($ints[0], $ints[1]);
    };

    echo integerDivision(10, 4);

    function recorrerUsuarios(...$users): string {
        $resultado = '';
        foreach($users as $user){
            $resultado .= "<br> {$user}";
        }

        return $resultado;
    };

    echo recorrerUsuarios("Juan", "Pedro", "Manuel");
    echo "<br>";

    $apartments = [
        [
            'precio' => 40,
            'ciudad' => 'Valencia',
            'wifi' => True,
            'pagina web' => 'https://hotel.com'
        ],
        [
            'precio' => 87,
            'ciudad' => 'Calpe',
            'wifi' => True,
            'pagina web' => 'https://calpe.com'
        ],
        [
            'precio' => 67,
            'ciudad' => 'Valencia',
            'wifi' => False,
            'pagina web' => 'https://denia.com'
        ],
        [
            'precio' => 105,
            'ciudad' => 'Benidorm',
            'wifi' => False,
            'pagina web' => 'https://benidorm.com'
        ]
    ];
    
    function loadApartaments($apartments = array()): string {
        $result = '';

        foreach($apartments as $apartment){
            $result .= "<br> {$apartment['ciudad']}";
        }

        return $result;
    };

    echo loadApartaments($apartments);