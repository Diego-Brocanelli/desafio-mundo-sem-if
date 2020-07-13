<?php declare(strict_types=1);

namespace BNW\DiegoBrocanelli\People;

/**
 * @author Diego Brocanelli <diego.brocanelli@buenonetworks.com.br>
 */
interface IPeople
{
    public function getMessage(string $period): string;
}