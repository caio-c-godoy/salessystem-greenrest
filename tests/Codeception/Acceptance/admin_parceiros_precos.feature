# language: pt
Funcionalidade: Gerenciar parceiros e preços customizados
  Como admin da Green Rest
  Quero controlar quais preços se aplicam a cada parceiro
  Para permitir negociações específicas

  @mvp
  Cenário: Criar parceiro e usuário de parceiro
    Dado que estou na área "Parceiros"
    Quando crio um novo Partner com company_name, contato, email e telefone
    E crio um PartnerUser associado a esse Partner
    Então o parceiro fica disponível na lista de parceiros
    E o usuário de parceiro pode acessar o Partner Portal após ativar a conta

  @fase2
  Cenário: Definir preço customizado para um variant de parceiro
    Dado que existe um Partner e um ProductVariant ativo
    E estou na tela de preços do parceiro
    Quando informo um custom_partner_price para esse ProductVariant
    Então um registro é salvo em PartnerProductPrice
    E nas próximas consultas o parceiro verá o preço customizado em vez do default_partner_price

  @fase2
  Cenário: Remover preço customizado e voltar ao preço padrão
    Dado que existe uma entrada em PartnerProductPrice para um variant e parceiro
    Quando removo ou deixo em branco o custom_partner_price
    Então o registro passa a ser considerado como "sem customização"
    E o parceiro volta a ver o default_partner_price para esse variant
