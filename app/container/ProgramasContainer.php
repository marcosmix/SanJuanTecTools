<?php
namespace App\container;

class ProgramasContainer{
    
    static $programas
        = [
            ['id' => 1, 'nombre' => 'Programacion'],
            ['id' => 2, 'nombre' => 'Videojuegos'],
            ['id' => 3, 'nombre' => 'Marketing']
        ];

    static function listar(){
        return self::$programas;
    }

    static function ver($i){
        return self::$programas[$i-1];
    }
}

?>