<?php declare(strict_types=1);

namespace BNW\DiegoBrocanelli\Factory;

use BNW\DiegoBrocanelli\Factory\AbstractFactory;

class Factory extends AbstractFactory
{
    /**
     * Responsável por montar o objeto conforme informações transmitidas.
     *
     * @param string $type
     * @param string $period
     * @return string
     */
    public function build( string $type, string $period )
    {
        return parent::build( $type, $period);
    }
}