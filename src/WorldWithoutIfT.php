<?php declare(strict_types=1);

namespace BNW\DiegoBrocanelli;

use BNW\DiegoBrocanelli\Factory\Factory;

/**
 * @author Diego Brocanelli <diego.brocanelli@buenonetworks.com.br>
 */
class WorldWithoutIfT
{
    /**
     * Responspável por retornar a mensagem conforme type e period informado
     *
     * @param string $type
     * @param string $period
     * @return string
     */
    public function analise(string $type, string $period) : string
    {
        return (new Factory() )->build($type, $period);
    }
}
