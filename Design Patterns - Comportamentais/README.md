## Padrões de projeto

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