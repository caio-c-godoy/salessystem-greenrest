# language: pt
Funcionalidade: Relatório de faturamento total por período
  Como admin
  Quero ver o total faturado no geral (parceiros + interno)
  Para ter visão consolidada da operação

  @fase3
  Cenário: Ver faturamento consolidado por período
    Dado que existem invoices com source PARTNER e INTERNAL
    Quando acesso o relatório "Faturamento por período"
    E informo uma data inicial e final
    Então vejo o total faturado por tipo de source (PARTNER e INTERNAL)
    E o total geral somando ambos
