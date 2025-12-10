# language: pt
Funcionalidade: Acompanhar pedidos e invoices
  Como parceiro
  Quero ver a lista dos meus pedidos e baixar as invoices quando disponíveis
  Para acompanhar o que já foi produzido e faturado

  @mvp
  Cenário: Listar apenas pedidos do parceiro logado
    Dado que existem pedidos de diferentes parceiros
    Quando acesso a tela "My Orders"
    Então o sistema exibe apenas pedidos cujo partner_id é o meu
    E para cada pedido vejo o número, data, status e subtotal

  @mvp
  Cenário: Ver invoice de um pedido faturado
    Dado que um dos meus pedidos possui uma invoice gerada
    Quando acesso a tela "My Orders"
    E clico em "View Invoice" para esse pedido
    Então o sistema abre o PDF ou link da invoice
    E o cabeçalho da invoice mostra o número da invoice, data de emissão e total do pedido
