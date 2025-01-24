
namespace App\Services;

<?php



class DniCalculator

{

    public function calcularLetter($dni)

    {

        $letters = "TRWAGMYFPDXBNJZSQVHLCKE";

        $index = intval($dni) % 23;

        return $letters[$index];

    }

}
