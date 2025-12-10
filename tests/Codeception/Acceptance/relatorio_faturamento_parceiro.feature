# language: pt
# Relatórios simples previstos para fase 3
Funcionalidade: Relatório de faturamento por parceiro
  Como admin ou gestor
  Quero ver o total faturado por parceiro em um período
  Para acompanhar volume de vendas B2B

  @fase3
  Cenário: Ver total faturado por parceiro em um intervalo de datas
    Dado que existem invoices pagas para diferentes parceiros
    Quando acesso o relatório "Faturamento por parceiro"
    E informo uma data inicial e final
    Então o sistema exibe para cada parceiro o valor total_amount somado das invoices no período
    E permite exportar o resultado em formato CSV
