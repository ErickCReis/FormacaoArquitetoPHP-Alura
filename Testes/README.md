## Testes com PHPUnit

### Aula 1 - Por que testar?

- Para garantir a qualidade do código, devemos escrever testes;
- Um teste também é código;
- Um teste sempre segue um estrutura padrão, que tem três partes:
  - A inicialização do cenário (Arrange ou Given)
  - A execução da regra de negócio (Act ou When)
  - A verificação do resultado (Assert ou Then)
- A tarefa do teste é dar um feedback rápido e claro sobre a corretude do nosso código.


- _Padrão [Arrange-Act-Assert](http://wiki.c2.com/?ArrangeActAssert)_
- _Padrão [Given-When-Then](https://martinfowler.com/bliki/GivenWhenThen.html)_

### Aula 2 - Conhecendo o [PHPUnit](https://phpunit.de/)

- O **PHPUnit** é uma ferramenta para executar testes de maneira automatizada
- O executável do PHPUnit se encontra na pasta **vendor/bin**
- Para escrever um teste com PHPUnit, devemos criar uma classe de teste
- Uma classe de teste segue algumas regras:
  - Começa com o nome da classe que está sendo testada e usa o sufixo `Test`, por exemplo: `AvaliadorTest`, em geral `ClasseASerTestadaTest`
  - A classe de teste deve estender a classe `TestCase`
  - O método de teste deve começa com `test`
  - O método de teste deve ter um nome que diz o que estamos testando


- _[Assertions](https://phpunit.readthedocs.io/pt_BR/9.5/assertions.html)_

### Aula 3 - Classes de equivalência

- Sobre classes de equivalência do mundo de testes, que descrevem similaridades entre os cenários de testes
  - Isto é importante para descobrir quantos testes devemos criar
  - A ideia é criar nenhum teste a mais ou a menos
  - Um teste também é um código que precisa ser mantido
- Para ordenar uma lista, você pode usar a função `usort`
- Para fatiar uma lista, você pode usar a função `array_slice`

### Aula 4 - Organizando os testes

- Sobre _Data Providers_, os provedores de dados permitem que "alimentemos" os testes com cenários diversos, sem repetir o código e os asserts
- Que existe um método `setUp`, que é chamado antes de cada testes
  - Que os provedores de dados sempre são executados antes do método `setup`
- Que caso queiramos executar algum código antes dos provedores de dados, existe o método `setUpBeforeClass`
- Que, análogo ao `setUp` e `setUpBeforeClass`, existem os métodos `tearDown` e `tearDownAfterClass`, para executar um código após os testes


- _[Data Providers](https://phpunit.readthedocs.io/pt_BR/latest/writing-tests-for-phpunit.html#provedores-de-dados)_
- _[Ambientes](https://phpunit.readthedocs.io/pt_BR/latest/fixtures.html)_
- _[O Arquivo de Configuração XML](https://phpunit.readthedocs.io/pt_BR/latest/configuration.html)_

### Aula 5 - Test Driven Development

- Sobre TDD, o _Test Driven Development_
- Que o TDD define um ciclo de desenvolvimento guiado pelo teste:
  - Escrevemos um teste, que ainda não vai passar
  - Implementamos a funcionalidade, que faz o teste passar
  - Refatoramos (melhoramos, simplificamos) o código
- Que o TDD ajuda que tenhamos um teste para cada funcionalidade
  - Ele também documenta e simplifica classe
- Que devemos implementar a funcionalidade em pequenos passos, chamados de _baby steps_, sempre guiados pelos testes


- _[TDD](https://tdd.caelum.com.br/)_

### Aula 6 - Testando Exceções

- Como verificar que o código lança as exceções esperadas
  - Em geral, exceções também fazem parte das regras de negócio e precisam ser verificadas
  - Para tal o PHPUnit oferece os métodos `expectException` e `expectExceptionMessage` da classe TestCase:
    - `expectException(\NomeDaExcecao::class)`
    - `expectExceptionMessage(mensagemDeExcecao)`


- _[Testando Exceções](https://phpunit.readthedocs.io/pt_BR/latest/writing-tests-for-phpunit.html#testando-excecoes)_
