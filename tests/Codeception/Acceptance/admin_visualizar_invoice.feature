# language: pt
Funcionalidade: Visualizar invoice emitida
  Como admin
  Quero acessar as invoices geradas
  Para consultar ou reenviar para o parceiro

  @mvp
  Cenário: Visualizar invoice de um pedido
    Dado que um pedido possui uma invoice associada
    Quando acesso a tela "Invoiced" e abro esse pedido
    Então vejo o número da invoice, a data de emissão e o total_amount
    E posso clicar em "Download PDF" para baixar o arquivo
