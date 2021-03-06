## Padrões Comportamentais

### [Aula 1 - Strategy](https://refactoring.guru/design-patterns/strategy)
Resolve o problema da existência de diversos algoritmos para uma ação, resultando na possibilidade de vários ifs

#### Resumo
- Padrões de projeto são soluções genéricas para problemas recorrentes do desenvolvimento de software
- Existem três principais categorias de padrões de projeto
  - Comportamentais (que serão vistos neste treinamento)
  - Estruturais
  - Criacionais
- Como diminuir a complexidade do nosso código, trocando múltiplas condicionais por classes
  - Esta técnica é chamada de **Strategy**, que é um dos padrões de projeto

### [Aula 2 - Chain of Responsibility](https://refactoring.guru/design-patterns/chain-of-responsibility)
Cadeia de responsabilidade para resolver um problema

#### Resumo
- A diferenciar casos onde padrões semelhantes podem ser aplicados
- Como criar uma cadeia de possíveis algoritmos como **Chain of Responsibility**
- A utilizar o padrão para aplicar um desconto dentro de uma cadeia de possíveis descontos

### [Aula 3 - Template Method](https://refactoring.guru/design-patterns/template-method)
Ter uma base e implementar regras específicas em classes filhas

#### Resumo
- Reforçamos a ideia de que repetição de código é problemática
- Criamos um template de algoritmo que estava sendo replicado em mais de uma classe e utilizamos herança para reaproveitar esse código
- Aprendemos que a esta técnica foi dado o nome de **Template Method**
- Vimos que é possível aplicar mais de um padrão no mesmo código

### [Aula 4 - State](https://refactoring.guru/design-patterns/state)
Diferentes comportamentos conforme o estado

#### Resumo
- Que é possível que um objeto se comporte de formas diferentes, dependendo do seu estado
- Que, se o resultado de uma chamada de método depende do estado, podemos delegar esta ação para uma classe específica do estado atual
  - Esta técnica se chama padrão **State**
- Entendemos como o Princípio de Substituição de Liskov pode acabar sendo quebrado em alguns casos na aplicação do State
 
### [Aula 5 - Command](https://refactoring.guru/design-patterns/command)
Object que contém toda informação necessária para a execução de uma tarefa

#### Resumo
- Que um caso de uso em nossa aplicação pode ter várias ações (salvar no banco, enviar e-mail, etc)
- Que um caso de uso deve ser extraído para uma classe específica, ao invés de estar no arquivo da CLI, controller ou algo do tipo
- Que a técnica de extração do caso de uso para uma classe específica pode ser chamada de padrão **Command**
- A diferença do padrão Command da **GoF** para o padrão que utiliza Command Handler (muito utilizado com DDD)

### [Aula 6 - Observer](https://refactoring.guru/design-patterns/observer)
Estrutura comumente utilizada para trabalhar com eventos

#### Resumo
- Que deixar a implementação de todas as tarefas de um caso de uso da aplicação na mesma classe pode trazer problemas
  - Dificuldade de manutenção
  - Classes muito grandes e difíceis de ler
  - Problemas quando precisar alterar a implementação de uma das tarefas 
- Que é mais interessante separar cada ação em uma classe separada
- Como ligar um evento ocorrido com suas ações, através do padrão **Observer**

### [Aula 7 - Iterator](https://refactoring.guru/design-patterns/iterator)
Estrutura que permite permite ser percorrida

#### Resumo
- Que os arrays do PHP, embora muito versáteis, podem trazer alguns problemas
- Que uma das regras de **Object Calisthenics** é sobre encapsular coleções em classes específicas
- Como acessar um objeto, como se fosse uma lista percorrível
  - Que, a esta técnica, se dá o nome de **Iterator**
- Funcionalidades que o PHP nos fornece para implementar de forma muito simples o padrão Iterator

---

## Padrões Estruturais

### [Aula 1 - Adapter](https://refactoring.guru/design-patterns/adapter)
Interface que permite a alterar com facilidade a implementação de uma funcionalidade

#### Resumo
- Que padrões estruturais nos ajudam a relacionar diversas classes de forma organizada
- Que detalhes de infraestrutura devem ser abstraídos através de interfaces
- Como o padrão **Adapter** pode nos ajudar a trocar detalhes de infraestrutura, sem muitas dores de cabeça

### [Aula 2 - Bridge](https://refactoring.guru/design-patterns/bridge)
Ponte entre uma abstração e uma implementação

#### Resumo
- Como manipular XML com PHP, através da classe SimpleXMLElement
- Como criar arquivos ZIP com a classe ZipArchive
- A abstrair mais o nosso modelo de classes
- Como o padrão **Bridge** pode nos ajudar a organizar estruturas complexas de classes relacionadas

### [Aula 3 - Decorator](https://refactoring.guru/design-patterns/decorator)
Adicionar funcionalidade em tempo de execução

#### Resumo
- Que é possível adicionar comportamento a classes em tempo de execução
- A aplicar esse conhecimento para combinar impostos
- Que comportamentos adicionados em tempo de execução são possíveis, através do padrão **Decorator**

### [Aula 4 - Composite](https://refactoring.guru/design-patterns/composite)
Representa uma árvore de objetos

#### Resumo
- Por alto o que é uma representação de árvore
- Como representar itens e orçamentos de forma semelhante
- A percorrer a estrutura de árvores utilizando o padrão **Composite**

### [Aula 5 - Facade](https://refactoring.guru/design-patterns/facade)
Simplificação de um conjunto de funcionalidades mais complexas

#### Resumo
- Que podemos pegar um sub-sistema e expor parte de suas funcionalidades através de uma classe
- Que a classe responsável por ser essa fachada implementa o padrão Facade
- Que o Laravel trabalha com uma espécie de Facade em sua arquitetura

### [Aula 6 - Proxy](https://refactoring.guru/design-patterns/proxy)
Substitui um objeto e controla o acesso interceptando sua funções

#### Resumo
- A interceptar o acesso a uma propriedade, através de uma classe derivada
- Quando isso pode ser útil, em nosso caso, para fazer cache
- Que, a esse conceito, se dá o nome de **Proxy**

### [Aula 7 - Flyweight](https://refactoring.guru/design-patterns/flyweight)
Permite separar objetos em partes que podem ser utilizadas por outras classes, como o objetivo de reduzir o uso de memória

#### Resumo
- A otimizar o consumo de memória, ao reaproveitar objetos que possuem propriedades iguais
- Que podemos extrair parte de uma classe, para que os seus dados possam ser compartilhados
- Que isso pode trazer uma maior complexidade para o código
- Que, a esse conceito de separar as partes repetidas de uma classe, dá-se o nome de **Flyweight**

---

## Padrões Criacionais

### Aula 1 - Criando Flyweights

- Que padrões criacionais são responsáveis por prover formas de criarmos objetos que precisam de alguma lógica
- Sobre o padrão estrutural Flyweight e sua principal desvantagem
- A otimizar ainda mais a implementação do Flyweight, através de um método que cria pedidos, utilizando cache

### [Aula 2 - Factory Method](https://refactoring.guru/design-patterns/factory-method)

- Que podemos ter estratégias diferentes de log em uma aplicação
- Que uma classe que depende de um objeto pode delegar a responsabilidade de criação dele
- Que essa forma de organizar a criação de um objeto, utilizando um método das classes filhas, é chamada de **Factory Method**
- As diferenças entre o que é comumente chamado de Factory

_* [Factory Comparison](https://refactoring.guru/design-patterns/factory-comparison)_

### [Aula 3 - Abstract Factory](https://refactoring.guru/design-patterns/abstract-factory)

- Que muitas vezes temos objetos diretamente relacionados, como vendas e impostos
- Que às vezes podem existir especializações desses objetos, e precisamos criá-los corretamente em conjunto
- Que para criar famílias de objetos semelhantes, podemos utilizar o padrão **Abstract Factory**

### [Aula 4 - Builder](https://refactoring.guru/design-patterns/builder)

- Que, embora não seja uma boa prática, às vezes temos objetos com muitas propriedades e possíveis variações
- Que a criação de objetos assim tende a ser de difícil leitura devida a grande quantidade de propriedades
- Que o padrão **Builder** pode ser utilizado para criar esses objetos de forma mais simples
- Que uma [Fluent Interface](https://martinfowler.com/bliki/FluentInterface.html) nos permite encadear chamadas de métodos

### [Aula 5 - Prototype](https://refactoring.guru/design-patterns/prototype)

- Que uma estratégia inteligente para criar objetos parecidos é clonar um objeto já existente
- Como implementar esse clone e vimos que esse é o padrão **Prototype**
- Como o PHP nos fornece uma maneira nativa de implementar esse padrão: _[Object Cloning](https://www.php.net/manual/en/language.oop5.cloning.php)_

### [Aula 6 - Singleton](https://refactoring.guru/design-patterns/singleton)

- Que é possível gerenciar a criação de objetos para controlar o número de instâncias de determinada classe
- Que, se quisermos que apenas uma instância de determinada classe exista, podemos implementar o padrão **Singleton**
- Que nem sempre esse padrão é necessário, visto que o PHP "dura" apenas um request