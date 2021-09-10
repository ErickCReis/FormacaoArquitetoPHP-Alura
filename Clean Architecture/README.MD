## Clean Architecure

### Aula 1: Conhecendo o sistema

- O que é arquitetura de software
- O que são entidades e que elas possuem uma identidade única
- Sobre Value Objects e que a sua igualdade se dá pela comparação dos seus valores


- _[O que é arquitetura](https://dev.to/phprio/o-que-e-arquitetura-17ob)_
- _[Value Object](https://martinfowler.com/bliki/ValueObject.html)_


### Aula 2: Enriquecendo o domínio

- Sobre o relacionamento entre entidades e Value Objects
- O conceito de fábrica no mundo do estudo de design de código
- Sobre named constructors e suas vantagens na legibilidade


### Aula 3: Camadas

- Que podemos utilizar namespaces do PHP para separar a nossa aplicação em módulos que façam sentido
- Alguns padrões arquiteturais
- A aplicar conceitos de padrões arquiteturais ao separar nossa aplicação em camadas. Começamos pelo domínio

- _[Screaming Architecture](https://blog.cleancoder.com/uncle-bob/2011/09/30/Screaming-Architecture.html)_


### Aula 4: Repositórios

- O conceito de repositórios, já visto no treinamento de **PDO**
- A motivação para separar os repositórios em mais de uma camada
- Que é possível criar implementações que sejam mais fáceis de utilizar em nossos testes


### Aula 5: Services

- O conceito de Services
- Que há _Domain_, _Application_ e _Infrastructure Services_
  - _Domain Services_ são classes que representam uma ação entre mais de uma entidade
  - _Application Services_ controlam o fluxo de alguma regra em nossa aplicação
  - _Infrastructure Services_ são implementações de interfaces presentes nas camadas de domínio ou de aplicação
  

### Aula 6: Interface com usuário

- Como fornecer acesso à nossa aplicação, através de Use Cases
- Na prática, que web, persistência e frameworks podem ser meras ferramentas
- Na prática, as vantagens de modelar uma aplicação, partindo do seu domínio