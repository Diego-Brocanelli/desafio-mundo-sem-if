<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use BNW\DiegoBrocanelli\WorldWithoutIfT;

final class WorldWithoutIfTest extends TestCase
{
    private WorldWithoutIfT $worldWithoutIfT;

    public function testDancerDay() : void
    {
        $message= 'Sou um dançarino e gostaria de programar, mas tenho coisas mais importantes para fazer! É dia: Estou dançando!';

        $this->assertEquals( (new WorldWithoutIfT )->analise('dancer', 'day'), $message);
    }

    public function testDancerNight() : void
    {
        $message= 'Sou um dançarino e gostaria de programar, mas tenho coisas mais importantes para fazer! É noite: Não me amole... estou dormindo!';

        $this->assertEquals(  (new WorldWithoutIfT )->analise('dancer', 'night'), $message);
    }

    public function testDeveloperDay() : void
    {
        $message= 'Sou um candango que programa e não tenho vida... É dia: Estou programando agora!';

        $this->assertEquals(  (new WorldWithoutIfT )->analise('developer', 'day'), $message);
    }

    public function testDeveloperNight() : void
    {
        $message= 'Sou um candango que programa e não tenho vida... É noite: Eu nunca paro de programar!';

        $this->assertEquals(  (new WorldWithoutIfT )->analise('developer', 'night'), $message);
    }

    public function testPlayerDay() : void
    {
        $message= 'Sou um jogador de LOL. Não programo, pois meu é papel é jogar joguinho! É dia: Estou trabalhando agora!';

        $this->assertEquals(  (new WorldWithoutIfT )->analise('player', 'day'), $message);
    }

    public function testPlayerNight() : void
    {
        $message= 'Sou um jogador de LOL. Não programo, pois meu é papel é jogar joguinho! É noite: Estou jogando agora!';

        $this->assertEquals(  (new WorldWithoutIfT )->analise('player', 'night'), $message);
    }

    public function testErrorType() : void
    {
        $this->expectException( Error::class );
        $message= 'Sou um jogador de LOL. Não programo, pois meu é papel é jogar joguinho! É noite: Estou jogando agora!';

        $this->assertEquals(  (new WorldWithoutIfT )->analise('foo', 'night'), $message);
    }
}
