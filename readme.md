# Por um mundo sem ifs

Este é um projeto base para o desafio proposto na reunião técnica da BNW.

## Regra de negócio 

Existem três categorias de pessoas, onde cada uma executa um tipo de trabalho: 

* Dançarinos: dançam;
* Desenvolvedores: programam;
* Jogadores: jogam :)

É necessário criar um módulo que permita ao cliente **obter informações sobre o trabalho** de cada tipo de pessoa, bastando para isso fornecer dois argumentos:

1. O tipo de pessoa (Dançarino, Desenvolvedor ou Jogador)
2. O período de execução do trabalho (De dia ou de Noite)

Os valores devolvidos, para cada combinação de argumentos, deverão ser os seguintes:

Tipo     | Período | Mensagem
-------- | ------- | --------------------------------
'dancer' | 'day'   | Sou um dançarino e gostaria de programar, mas tenho coisas mais importantes para fazer! É dia: Estou dançando!
'dancer' | 'night'   | Sou um dançarino e gostaria de programar, mas tenho coisas mais importantes para fazer! É noite: Não me amole... estou dormindo!
'developer' | 'day'   | Sou um candango que programa e não tenho vida... É dia: Estou programando agora!
'developer' | 'night'   | Sou um candango que programa e não tenho vida... É noite: Eu nunca paro de programar!
'player' | 'day'   | Sou um jogador de LOL. Não programo, pois meu é papel é jogar joguinho! É dia: Estou trabalhando agora!
'player' | 'night'   | Sou um jogador de LOL. Não programo, pois meu é papel é jogar joguinho! É noite: Estou jogando agora!

## O que fazer

1. Crie um branch deste repositório, nomeando-o com seu nome. 

2. Com base no código do arquivo `procedural.php`, nos conceitos estudados ao longo das últimas reuniões e nos Padrões de Projeto existentes, crie a mesma implementação **sem nenhuma estrutura de controle**. **Ou seja, IF, Switch, While, For, Foreach não podem ser utilizados.**

3. Edite este `readme.md` no seu branch e acrescente qual ou quais Padrões de Projeto você usou para solucionar o problema.

4. Na próxima reunião técnica, apresente o que você fez e explique os padrões escolhidos.

Boa sorte!

# Resolução

Após análise, decide utilizar os padrões `AbstractFactory` e `Factory`.
Assim eu consigo construir as classes "Pessoa" mantendo um padrão, determinando apenas do diferencial por pessoa.

Eu separei a aplicação em 4 camada, sendo ela:

- People;
    - Camada onde determino:
        - O que uma pessoa pode ter.
        - E quais pessoas minha aplicação dispõe.
- Factory;
    - Camada responsável por criar os objetos conforme informado.
- API
    - Camada de acesso do cliente, onde ele pode consumir minha aplicação.

## Requisitos

- PHP >= 7.4;
- Composer.

## Executando os testes.

Para executar a camada de testes, basta executar o comando abaixo.

```bash
composer tests
```

## Exemplo de uso

```php
<?php

require_once __DIR__.'/vendor/autoload.php';

use BNW\DiegoBrocanelli\WorldWithoutIfT;

$object = (new WorldWithoutIfT())->analise('developer', 'day');
```