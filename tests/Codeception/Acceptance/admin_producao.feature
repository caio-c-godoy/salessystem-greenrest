# language: pt
Funcionalidade: Atualizar status para IN_PRODUCTION
  Como admin
  Quero marcar pedidos que já entraram em produção
  Para ter visão clara do que está sendo fabricado

  @mvp
  Cenário: Enviar pedido para produção
    Dado que existe um pedido com status NEW
    Quando abro a tela de detalhes e clico em "Produzir"
    Então o status do pedido é alterado para IN_PRODUCTION
    E o pedido passa a aparecer na tela "In Production"
