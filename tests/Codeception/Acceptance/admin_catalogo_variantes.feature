# language: pt
# Área Admin – gestão de catálogo e tabela de preços por parceiro
Funcionalidade: Gerenciar catálogo de produtos e variants
  Como admin da Green Rest
  Quero criar e editar produtos e tamanhos
  Para manter o catálogo atualizado para todos os parceiros

  @mvp
  Cenário: Cadastrar novo produto com variants
    Dado que estou logado como admin
    Quando acesso o menu "Produtos" e clico em "Novo produto"
    E preencho nome e descrição
    E adiciono um variant com size_label, retail_price e default_partner_price
    Então o produto e seu variant são salvos como ativos
    E o variant passa a poder ser exibido nos catálogos dos parceiros

  @mvp
  Cenário: Desativar variant para que não apareça mais no catálogo
    Dado que existe um ProductVariant ativo
    Quando marco esse variant como inativo na área administrativa
    Então ele não deve mais aparecer no catálogo de nenhum parceiro
