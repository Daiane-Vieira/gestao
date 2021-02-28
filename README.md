## DESENVOLVIMENTO DO SISTEMA:

Baseado em PHP, este sistema foi desenvolvido utilizando o Lavarvel 8 (framework); os dados são armazenados no MySQL; foram necessárias três models para a gestão dos dados. Na parte de personalização foi usado o 'Bootstrap'.


## FACILITAR O UPLOOAD:

Com o intuito de faciliar o teste e deixá -lo mais rápido, o sistema foi upado para o servidor a seguir, dispensando transferências de dados e compilações.

Link do servidor:
https://daianedev.000webhostapp.com/public/

* outra forma de instalar o sistema sem acessar o servidor em que foi upado é utilizando o XAMPP. A seguir estão passos para baixar o XAMPP:

https://www.apachefriends.org/pt_br/index.html
instalador do xamp

http://localhost/phpmyadmin
para acessar o phpmyadmin dps de instalado o xmapp

C:\xampp\htdocs
caminho padrão para os arquivos do xampp

--> A senha precisa ser padrão: nula;

--> O arquivo do banco de dados deve ser baixado no git, importando pelo MySQL através do phpmyadmin;

--> A pasta do projeto do sistema em si, deve ser colocada no htdocs da pasta do XAMPP.

## FUNCIONALIDADE E OBJETIVO DO SISTEMA:

O principal objetivo do sistema é cadastrar pessoas para entrevista e o intervalos, de acordo com o que é requerido no desafio de programação.

No sistema são casastrados candidatos com nome e sobrenome; 

Em 'locais de entrevista', assim como em 'cadastro de descanso', são nomeados os nomes dos locais e a quantidade de vagas.

Ao cadastar um candidato automaticamente ele é inserido em duas salas de entrevista, e dois locais de descanso.