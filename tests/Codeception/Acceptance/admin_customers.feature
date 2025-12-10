# language: pt
# Área Admin – cadastro de Customer e vendas internas (source = INTERNAL)
Funcionalidade: Cadastro de cliente final
  Como admin da Green Rest
  Quero cadastrar clientes finais
  Para registrar vendas internas feitas direto pela Green Rest

  @fase3
  Cenário: Criar cadastro de cliente final
    Dado que estou na tela "Customers"
    Quando preencho nome, email, telefone, endereço de cobrança e de entrega com zip_code
    E salvo o formulário
    Então um novo Customer é criado com esses dados
    E ele passa a aparecer na lista de clientes
