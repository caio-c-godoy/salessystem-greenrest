# language: pt
Funcionalidade: Criar pedido interno
  Como admin
  Quero montar um pedido para um cliente final interno
  Para emitir invoice direta, sem vínculo a parceiro

  @fase3
  Cenário: Criar pedido interno e gerar invoice
    Dado que existe um Customer cadastrado
    E existem produtos e variants ativos
    Quando crio um novo pedido selecionando esse Customer
    E adiciono um ou mais ProductVariants com quantidades
    E informo endereço de entrega
    E confirmo o pedido
    Então é criado um Order com source INTERNAL e partner_id nulo
    E os OrderItems são criados com os variantes selecionados
    Quando acesso a ação "Generate Invoice" para esse pedido
    E confirmo frete e taxa
    Então a invoice é gerada normalmente
    E posso enviar o PDF por e-mail para o Customer
