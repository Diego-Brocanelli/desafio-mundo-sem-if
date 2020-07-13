<?php declare(strict_types=1);

namespace BNW\DiegoBrocanelli\People;

use BNW\DiegoBrocanelli\People\AbstractPeople;

/**
 * @author Diego Brocanelli <diego.brocanelli@buenonetworks.com.br>
 */
class Developer extends AbstractPeople
{
    protected array $message = [ 
        'day'   => 'Sou um candango que programa e não tenho vida... É dia: Estou programando agora!',
        'night' => 'Sou um candango que programa e não tenho vida... É noite: Eu nunca paro de programar!'
    ];
}