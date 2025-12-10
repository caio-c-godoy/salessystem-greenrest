# language: pt
Funcionalidade: Gerar invoice com imposto e frete
  Como admin
  Quero gerar a invoice de um pedido aplicando tax e frete
  Para emitir cobrança correta para o parceiro ou cliente

  @mvp
  Cenário: Gerar invoice com frete manual e taxa padrão
    Dado que existe um pedido com status IN_PRODUCTION e subtotal calculado
    E o pedido ainda não possui invoice
    Quando clico em "Generate Invoice"
    E informo um shipping_amount manualmente
    E mantenho o tax_rate padrão de 6,5%
    E confirmo a emissão da invoice
    Então o sistema calcula tax_amount como subtotal * 0,065
    E calcula total_amount como subtotal + shipping_amount + tax_amount
    E grava esses valores na Order
    E cria uma Invoice com número sequencial e issued_at preenchido
    E altera o status do pedido para INVOICED

  @fase2
  Cenário: Sugestão automática de frete com base em regra de zip
    Dado que existe um pedido com shipping_zip 32801 e subtotal calculado
    E existe uma ShippingRule ativa para o zip_prefix 328* com preço 100,00
    Quando clico em "Generate Invoice" para esse pedido
    Então o campo shipping_amount é sugerido automaticamente com o valor 100,00
    E posso alterar manualmente o valor antes de confirmar a invoice
