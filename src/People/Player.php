<?php declare(strict_types=1);

namespace BNW\DiegoBrocanelli\People;

use BNW\DiegoBrocanelli\People\AbstractPeople;

/**
 * @author Diego Brocanelli <diego.brocanelli@buenonetworks.com.br>
 */
class Player extends AbstractPeople
{
    protected array $message = [ 
        'day'   => 'Sou um jogador de LOL. Não programo, pois meu é papel é jogar joguinho! É dia: Estou trabalhando agora!',
        'night' => 'Sou um jogador de LOL. Não programo, pois meu é papel é jogar joguinho! É noite: Estou jogando agora!'
    ];
}