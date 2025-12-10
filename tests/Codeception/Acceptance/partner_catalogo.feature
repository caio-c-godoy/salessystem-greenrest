# language: pt
# Fluxos do Partner Portal: catálogo, carrinho, criação de pedido, listagem de pedidos
Funcionalidade: Catálogo de produtos do parceiro
  Como parceiro
  Quero ver apenas os produtos liberados para mim com meu preço de parceiro
  Para montar pedidos de forma rápida e consistente

  @mvp
  Cenário: Parceiro vê catálogo com preços de parceiro
    Dado que existem Products e ProductVariants ativos
    E que alguns ProductVariants foram liberados para o meu parceiro
    E que alguns variants possuem preço customizado em PartnerProductPrice
    Quando acesso o catálogo no Partner Portal
    Então devo ver somente os ProductVariants liberados para o meu parceiro
    E para cada variant devo ver o nome do produto, o tamanho e o preço de parceiro
    E se existir preço customizado para um variant o valor exibido deve ser o customizado
    E se não existir preço customizado deve ser exibido o default_partner_price
