<?php

// --------------------------------------------------------------------------------
// Forma procedural
// --------------------------------------------------------------------------------

function work(string $performer, string $period)
{
    $message = "Não sou ninguém! O que estou fazendo aqui?";

    switch ($performer) {

        case 'dancer':
            $message = "Sou um dançarino e "
                . "gostaria de programar, mas tenho coisas mais importantes para fazer!\n";

            $message .= $period == 'day'
                ? 'É dia: Estou dançando!'
                : 'É noite: Não me amole... estou dormindo!';
            break;

        case 'developer':
            $message = "Sou um candango que programa e "
                . "não tenho vida...\n";

            $message .= $period == 'day'
                ? 'É dia: Estou programando agora!'
                : 'É noite: Eu nunca paro de programar!';
            break;

        case 'player':
            $message = "Sou um jogador de LOL e "
                . "não programo, pois meu é papel é jogar joguinho!\n";

            $message .= $period == 'day'
                ? 'É dia: Estou trabalhando agora!'
                : 'É noite: Estou jogando agora!';
            break;
    }

    return $message;
}

// Rotina
echo "<pre>";
echo work('dancer', 'day');
echo "<br>----------------<br>";
echo work('dancer', 'night');
echo "<br><br>================<br><br>";
echo work('developer', 'day');
echo "<br>----------------<br>";
echo work('developer', 'night');
echo "<br><br>================<br><br>";
echo work('player', 'day');
echo "<br>----------------<br>";
echo work('player', 'night');
echo "<br>----------------<br>";
echo "</pre>";
