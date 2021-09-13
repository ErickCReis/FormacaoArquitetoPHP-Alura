# Domain Driven Design

Os conceitos já aprendidos no curso de arquitetura são diretamente relacionados com o estudo de Domain Driven Design.

Muito do que aprendemos no curso anterior é o que chamamos de _Building blocks_ ou _Blocos de construção_.

- Entity
- Value object
- Repository
- Factory
- Service

Todos esses padrões são descritos no estudo sobre DDD e com isso já temos um belo ponto de partida.

Vale ressaltar que o termo _Domain Driven Design_ significa literalmente modelar nosso software nos orientando pelo domínio do negócio.


### Aula 1: Linguagem ubíqua

- Aprendemos que os estudos de arquitetura e DDD geralmente se complementam;
- Entendemos o que é DDD;
- Vimos que diversos conceitos de DDD já foram aprendidos no curso de Arquitetura;
- Conhecemos o termo Linguagem Ubíqua que consiste em ter uma linguagem onipresente entre a equipe de desenvolvimento e a equipe de negócios.


### Aula 2: Aggregates

- Conhecemos o conceito de **Aggregates**;
- Entendemos o que é uma invariante;
- Vimos que persistência de Aggregates é um assunto complexo;
  - Há detalhes de consistência;
  - Optimist e Pessimist locking são conceitos mais avançados sobre o assunto;


- _[Aggregate](https://martinfowler.com/bliki/DDD_Aggregate.html)_


### Aula 3: Evento de domínio

- Definimos o que é um evento;
- Entendemos o que é um evento de domínio;
- Aprendemos a implementar, emitir e reagir a um evento de domínio;


### Aula 4: Contextos delimitados

- Conhecemos o conceito de _Bounded Contexts_ ou Contextos Delimitados;
- Vimos que a separação em contextos nos dá mais flexibilidade porém aumenta (e muito) a complexidade;
- Conhecemos o desenho conhecido como Mapa de Contexto;


- _[Bounded Contexts](https://martinfowler.com/bliki/BoundedContext.html)_