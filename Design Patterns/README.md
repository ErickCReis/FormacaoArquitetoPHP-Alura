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