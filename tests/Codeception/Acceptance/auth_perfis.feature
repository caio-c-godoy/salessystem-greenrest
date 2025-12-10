# language: pt
# Perfis: PartnerUser (parceiro), AdminUser (Green Rest)
Funcionalidade: Autenticação e perfis de usuário
  Como usuário autorizado
  Quero acessar apenas o portal correto de acordo com meu perfil
  Para garantir segurança e isolamento entre parceiro e área administrativa

  @mvp
  Esquema do Cenário: Login por perfil de usuário
    Dado que existe um usuário "<tipo>" com email e senha válidos
    Quando ele acessa a tela de login do "<portal>"
    E informa suas credenciais corretamente
    Então ele é autenticado com sucesso
    E é redirecionado para o dashboard do "<portal>"

    Exemplos:
      | tipo     | portal           |
      | parceiro | Partner Portal   |
      | admin    | Admin Green Rest |

  @mvp
  Cenário: Parceiro não acessa área administrativa
    Dado que estou logado como usuário parceiro
    Quando tento acessar uma URL da área administrativa
    Então o sistema deve negar o acesso
    E exibir uma mensagem de "Acesso não autorizado"

  @mvp
  Cenário: Admin não utiliza o Partner Portal
    Dado que estou logado como AdminUser
    Quando tento acessar a URL principal do Partner Portal
    Então o sistema deve redirecionar para a área administrativa
    Ou exibir mensagem informando que o recurso não está disponível para admins
