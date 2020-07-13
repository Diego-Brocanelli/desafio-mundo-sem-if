<?php declare(strict_types=1);

namespace BNW\DiegoBrocanelli\Factory;

/**
 * @author Diego Brocanelli <diego.brocanelli@buenonetworks.com.br>
 */
abstract class AbstractFactory
{
    /**
     * Responsável por montar o objeto conforme informações transmitidas.
     *
     * @param string $type
     * @param string $period
     * @return void
     */
    public function build(string $type, string $period)
    {
        $type = ucfirst($type);

        $class = "BNW\\DiegoBrocanelli\\People\\{$type}";

        $people = new $class;

        return $people->getMessage($period);
    }
}