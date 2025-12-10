# language: pt
# Área Admin – fluxo de pedidos, produção e faturamento
Funcionalidade: Listar e filtrar pedidos
  Como admin da Green Rest
  Quero ver pedidos por status e parceiro
  Para organizar produção e faturamento

  @mvp
  Cenário: Filtrar pedidos por status e parceiro
    Dado que existem pedidos com diferentes status e parceiros
    Quando acesso a tela "Orders" e filtro por status NEW e parceiro X
    Então vejo apenas os pedidos do parceiro X com status NEW
