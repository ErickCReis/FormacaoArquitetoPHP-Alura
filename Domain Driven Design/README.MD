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


### Aula 5: Contexto compartilhado

- Entendemos que os contextos devem ser independentes, mas precisam se comunicar de alguma forma;
- Conhecemos o conceito de Shared Kernel, e vimos que há vantagens e desvantagens;
- Utilizamos eventos de domínio para realizar parte da comunicação entre contextos;
- Vimos que cada contexto pode fornecer seus Use Cases de forma independente.


- _[Shared Kernel](http://www.fabriciorissetto.com/blog/ddd-bounded-context/)_


### Aula 6: Camada anticorrupção

- Conversamos sobre o que é um sistema distribuído;
- Vimos que através de contextos delimitados podemos distribuir sistemas realmente complexos;
- No caso de sistemas distribuídos, falamos que há a necessidade de uma camada anti-corrupção;
- Vimos algumas referências para nos aprofundar no assunto de DDD.

### Referências

- O livro que originou o termo DDD: Domain-Driven Design: [Tackling Complexity in the Heart of Software](https://www.amazon.com.br/dp/B00794TAUG/ref=dp-kindle-redirect?_encoding=UTF8&btkr=1)
- Uma releitura com uma linguagem um pouco mais palatável:  [Implementing Domain-Driven Design](https://www.amazon.com.br/Implementing-Domain-Driven-Design-English-Vaughn-ebook/dp/B00BCLEBN8/ref=reads_cwrtbar_2/136-2192446-3149439?_encoding=UTF8&pd_rd_i=B00BCLEBN8&pd_rd_r=1b2f1be2-3f0c-40e3-929b-21cd85850dfc&pd_rd_w=mbTue&pd_rd_wg=N9ZBi&pf_rd_p=fcd5cfce-70d2-4fb2-84e0-1100e88dded2&pf_rd_r=A5H4RARTFWM0QB02JWYS&psc=1&refRID=A5H4RARTFWM0QB02JWYS)
- Um livro prático sobre implementação em PHP de conceitos do DDD: [Domain-Driven Design in PHP](https://leanpub.com/ddd-in-php) 