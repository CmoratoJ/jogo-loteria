Teste técnico monetizze

Passos para rodar o sistema

1 instale o wamp(de preferência o wamp64 e no C:); 

2 crie uma pasta com o nome monetizze dentro da pasta www do wamp e clone o projeto dentro dela;

3 na pasta vendor/monetizze/php-classes/src existe uma classe Page.php e nela existe um mapeamento de pasta para que o sistema rode redondinho(eu iria montar um servidor local para que esse mapeamento fosse genérico, porém não sei como a pessoa que irá testar fará - então achei mais viável dessa maneira)
 Atualmente está com o seguinte mapeamento para minha máquina: 
 
 C:/wamp64/www/monetizze/teste-monetizze/views/
 
 C:/wamp64/www/monetizze/teste-monetizze/views-cache/
 
 altere para o caminho da sua máquina;
 
4 executar o wamp;

5 digitar a seguinte url no navegador: localhost/monetizze/monetizze-teste;

6 para mudar os jogos é só atrualizar a página, caso queira alterar a quantidade de dezenas e jogos é só alterar o valor dos parâmetros no arquivo index.php que está na raiz do projeto na seguinte linha: $sorteio = new Sorteio(10, 5). O primeiro parâmetro é o número de dezenas e o segundo o número de jogos;

Observações

Utilizei o link CDN do bootstrap, portanto para que o layout funcione corretamente precisa estar conectado a internet.

Não foi pedido na instrução mas deixei o sistema preparado para receber requisições via post de formulários já que utilizei a arquitetura MVC(eu iria implementar o formulário pra ficar mais dinâmico, porém não tinha mais tempo para continuar o teste), este sistema não possui model pois não tem acesso a banco, mas está estruturado para implementar com facilidade.