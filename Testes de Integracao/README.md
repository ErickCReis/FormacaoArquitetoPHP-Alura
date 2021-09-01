## Testes de Integração

### Aula 1 - Testando o banco de dados

- Que testes de integração testam além do nosso código
  - Podem testar a integração entre várias classes/módulos da aplicação
  - Podem testar a integração com um sistema externo
    - SGBD (banco de dados)
    - API externa
    - Requisições HTTP para o próprio sistema
- Como realizar testes que interagem com o banco de dados

### Aula 2 - Garantindo a integridade

- Que não devemos utilizar o banco de dados de produção para realizar testes
- Que nossos testes devem ser independentes
- Que transações são nossas amigas ao testar o banco de dados. Devemos realizar todas as operações SQL de um teste dentro de uma transação
- Que o SQLite fornece um banco de dados em memória que pode auxiliar (e muito) na performance da suíte de testes


- _[Transações SQL](http://luizricardo.org/2014/02/o-que-sao-e-como-funcionam-transacoes-em-sql/)_


### Aula 3 - Testes intermediários

- Como utilizar data providers
- O conceito de testes (ou asserts) intermediários

### Aula 4 - Testando a alteração

- Como realizar os famigerados asserts intermediários
- Como separar suítes de testes, utilizando o `phpunit.xml`

### Aula 5 - Testando APIs

- Como realizar testes funcionais das nossas APIs
- Como utilizar o Postman para automatizar os nossos testes

- **Testes no Postmam**
```javascript
pm.test("Código de status da resposta deve ser 200", () => {
    pm.response.to.have.status(200);
});

pm.test("Resposta deve estar em JSON", () => {
    pm.response.to.be.json;
});

const leiloes = pm.response.json();
pm.test("Resposta deve estar no formato válido de leilões", () => {
    const schema = {
        required: ['descricao', 'estaFinalizado'],
        properties: {
            descricao: {
                type: "string",
            },
            estaFinalizado: {
                type: "boolean"
            }
        }
    };

    leiloes.forEach(leilao => pm.expect(tv4.validate(leilao, schema)).to.be.true);
});

pm.test("Nenhum leilão deve estar finalizado", () => {
    leiloes.forEach(leilao => pm.expect(leilao.estaFinalizado).to.be.false);
});
```
