# language: pt
Funcionalidade: Criação de pedido pelo parceiro
  Como parceiro
  Quero montar um carrinho e enviar um pedido para a Green Rest
  Para solicitar a produção e faturamento dos colchões escolhidos

  @mvp
  Cenário: Adicionar itens ao carrinho
    Dado que estou logado como parceiro
    E estou visualizando o catálogo
    Quando informo quantidade para um ou mais produtos
    E clico em "Add to Cart"
    Então os itens são adicionados ao meu carrinho atual
    E o sistema calcula o subtotal como a soma de quantidade x preço de parceiro

  @mvp
  Cenário: Enviar pedido com endereço de entrega
    Dado que tenho itens no carrinho com subtotal calculado
    Quando vou para a tela de checkout
    E preencho endereço de entrega e zip_code
    E confirmo a ação "Submit Order"
    Então um novo Order é criado com status NEW e source PARTNER
    E o Order está vinculado ao meu partner_id
    E os OrderItems são criados com product_variant_id, descrição, qty, unit_price e amount
    E subtotal do Order é igual à soma dos amounts dos itens
    E shipping_amount, tax_amount e total_amount são inicializados em zero ou nulo
