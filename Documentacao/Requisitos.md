
## Sumário

- [Proposta](https://github.com/cp2-dc-info-projeto-final-2018/requisitos-sysger/blob/master/Documentacao/Proposta.md)
- [Casos de Uso](https://github.com/cp2-dc-info-projeto-final-2018/requisitos-sysger/blob/master/Documentacao/CasosDeUso.md)
- [Modelagem](https://github.com/cp2-dc-info-projeto-final-2018/requisitos-sysger/blob/master/Documentacao/Modelagem.md)
- [Manual](https://github.com/cp2-dc-info-projeto-final-2018/requisitos-sysger/blob/master/Documentacao/Manual.md)


# Especificação de Requisitos

## Requisitos Funcionais

### RF 01

Entrada com login para o administrador cadastrar os dados dos clientes com os quais a empresa presta serviço.

### RF 02

Entrada com CPF(pessoa física) ou CNPJ(pessoa jurídica) para o cliente ter acesso à sua situação do pagamento de mensalidade.

### RF 03

Após a entrada do administrador terá uma tela para o cadastro dos dados dos clientes com os seguintes campos:

- Nome;
- CPF/CNPJ;
- Data de Nascimento;
- Email;
- Telefone;
- Endereço;
- Quantidade de veículos que o cliente tem segurado pela empresa;
- Quantidade de celulares que o cliente tem segurado pela empresa.
- Valor de cada serviço prestado.

### RF 04

Após o cadastro terá uma tela com os dados dos clientes já cadastrados para o administrador com o status de pagamento(em dia, pendente) e informações do contrato.

### RF 05

Com o acesso do administrador, terá uma tela para o mesmo enviar os boletos através do email aos clientes.

### RF 06

Com acesso do cliente, terá uma tela com a possibilidade da solicitação de 2a via do boleto, caso seja necessário.

### RF 07

Cadastro de administrador(Gerente - Subgerente) com os seguintes dados:

- Nome
- CPF
- Email
- Senha
- Data de Nascimento
- Telefone
- Endereço

## Requisitos Não Funcionais

### RNF 01
 O sistema deve ter um banco de dados desenvolvido em MySql.
### RNF 02
O sistema deve ser desenvolvido em linguagem de script PHP.
### RNF 03
O sistema deve ter uma interface de interação com usuário.
### RNF 04
O software deve ser operado no sistema operacional Windows.
### RNF 05
O sistema deve ter um sistema para gerar boletos bancários.
### RNF 06
O sistema deve ser preparado para fazer sincronização dos dados incluídos/alterados/excluídos quando no uso do banco de dados local.
