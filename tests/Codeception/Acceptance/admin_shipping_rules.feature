# language: pt
# Área Admin – tabela de frete por zip/zip_prefix
Funcionalidade: Manter regras de shipping por localidade
  Como admin da Green Rest
  Quero cadastrar preços de frete por região
  Para agilizar o cálculo de shipping nas invoices

  @fase2
  Cenário: Cadastrar nova regra de frete por prefixo de zip
    Dado que estou na tela "Shipping Rules"
    Quando crio uma nova regra informando zip_prefix "328*" e preço 100,00
    E marco a regra como ativa
    Então a regra passa a ser utilizada como sugestão de frete para pedidos cujo zip começa com 328

  @fase2
  Cenário: Desativar regra de frete
    Dado que existe uma ShippingRule ativa para zip_prefix "347*"
    Quando desativo essa regra
    Então ela deixa de ser sugerida em novas invoices
