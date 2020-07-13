<?php declare(strict_types=1);

namespace BNW\DiegoBrocanelli\People;

use BNW\DiegoBrocanelli\People\AbstractPeople;

/**
 * @author Diego Brocanelli <diego.brocanelli@buenonetworks.com.br>
 */
class Dancer extends AbstractPeople
{
    protected array $message = [ 
        'day'   => 'Sou um dançarino e gostaria de programar, mas tenho coisas mais importantes para fazer! É dia: Estou dançando!',
        'night' => 'Sou um dançarino e gostaria de programar, mas tenho coisas mais importantes para fazer! É noite: Não me amole... estou dormindo!'
    ];
}