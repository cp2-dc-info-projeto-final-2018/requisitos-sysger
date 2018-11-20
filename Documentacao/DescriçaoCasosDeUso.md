# Especificação de Casos de Uso

# Sumário

- [CDU 01 - Cadastrar Cliente](#cdu-01---cadastrar-cliente)
- [CDU 02 - Cadastrar Subgerente](#cdu-02---cadastrar-subgerente)
- [CDU 03- Autenticar](#cdu-03---autenticar)
- [CDU 04 - Pesquisar Clientes](#cdu-04---pesquisar-clientes)
- [CDU 05 - Verificar status](#cdu-05---verificar-status)
- [CDU 06 - Emitir Boleto](#cdu-06---emitir-boleto)

## CDU 01 - Cadastrar Cliente

**Atores:** Cliente, Gerente, Subgerente

**Pré-Condições:** -------

**Fluxo principal:**
1. Cliente informa ao Gerente ou Subgerente os seus dados pessoais e os dados dos serviços presencialmente, ou por e-mail.

    - Nome;
    - CPF/CNPJ;
    - Data de Nascimento;
    - Email;
    - Telefone;
    - Endereço;
    - Quantidade de veículos que o cliente tem segurado pela empresa;
    - Quantidade de celulares que o cliente tem segurado pela empresa;

2. Gerente e subgerente recebe os dados do Cliente e os insere no sistema juntamente com o valor total dos serviços prestados.
3. Sistema armazena os dados do cliente em seu Banco de Dados.

## CDU 02- Cadastrar Subgerente

**Atores:** Gerente, Subgerente

**Pré-Condições:** -------

**Fluxo principal:**
1. Os Subgerentes que serão escolhidos para ter acesso ao cadastro do cliente.
2. Os Subgerentes escolhidos disponibilizam os seguintes dados para serem cadastrados:
    - Nome;
    - CPF/CNPJ;
    - Data de Nascimento;
    - Email;
    - Telefone;
    - Endereço;

3. Os Gerentes cadastram os novos Subgerentes que terão o acesso para poderem cadastrar e/ou modificar os dados do Cliente.
4. O Sistema armazena os dados do novo Subgerente cadastrado em seu Banco de Dados.

## CDU 03- Autenticar

**Atores:** Gerente, Subgerente, Cliente

**Pré-Condições:** O usuário precisa necessariamente estar cadastrado.

**Fluxo principal:**
1. O acesso será feito pelo CPF ou CNPJ que foi cadastrado e com uma senha gerada pelo usuário que o cadastrou.
2. Sistema valida o acesso.

## CDU 04 - Pesquisar Clientes

**Atores:** Gerente e Subgerente

**Pré-Condições:** O usuário deverá estar logado em sua conta de administrador.

**Fluxo Principal:**

  1. Gerente e Subgerente acessa a listagem de clientes vinculados à empresa.
  2. Gerente e Subgerente pesquisa o cliente desejado pelo seu nome.
  3. Sistema lista os dados do determinado cliente.

## CDU 05 - Verificar status

**Atores:** Gerente, Subgerente e Cliente

**Pré-Condições:** Os usuários deverão estar logados em suas respectivas contas.

**Fluxo Principal:**

  1. Cliente acessa a sessão da verificação de seu status de pagamento.
  2. O Sistema mostrará o histórico de pagamento de mensalidade podendo solicitar a segunda via do boleto das mensalidades pendentes e/ou do mês atual que será baixado em seu computador.
  3. Gerente e Subgerente verificará o status de pagamento dos clientes.

## CDU 06 - Emitir Boleto

**Atores:** Gerente e Subgerente

**Pré-Condições:** O usuário deve estar logado em sua conta de administrador.

**Fluxo Principal:**

  1. Gerente e Subgerente seleciona o mês que deseja visualizar o status de pagamento.
  2. O Sistema mostra a lista da situação da mensalidade de todos os clientes e se a emissão de boleto já foi feita.
  3. O Sistema irá emitir os boletos selecionados e enviará para o email do cliente selecionado.
