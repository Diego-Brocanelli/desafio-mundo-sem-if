<?php declare(strict_types=1);

namespace BNW\DiegoBrocanelli\People;

use BNW\DiegoBrocanelli\People\IPeople;

/**
 * @author Diego Brocanelli <diego.brocanelli@buenonetworks.com.br>
 */
abstract class AbstractPeople implements IPeople
{
    protected array $message = [ 'day', 'night'];

    /**
     * Responsável por retornar a mensagem de acordo com o período.
     *
     * @param string $period
     * @return string
     */
    public function getMessage(string $period): string
    {
        return $this->message[$period];
    }
}