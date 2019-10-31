# Core
> Template para inicialização de um projeto front-end.

Este projeto tem o objetivo de padronizar a estrutura de todos os projetos criados pela WebUVV e agilizar o processo inicial do front-end entregando uma estrutura completa e pronta para usar.

## Configurações

### wp-config
1. duplique o arquivo `wp-config-sample.php` e renomeie para `wp-config.php`
2. Defina o Server_name em WP_HOME e WP_SITEURL ('http://seuip/site-selecionado')
3. Defina o nome do banco de dados em DB_NAME ('nome-da-base-de-dados')
4. Defina o usuário do banco de dados em DB_USER ('web')
5. Defina a senha de acesso a o banco de dados ('Padrao@10')
6. Defina o servidor que o banco se encontra em DB_HOST ('10.0.0.19')

### Pré-requisitos

- [Node.js](https://nodejs.org/en/download/)
  - Instale a versão (LTS)
- [Gulp](http://gulpjs.com/)
  - Instale globalmente utilizando o comando `npm install --global gulp-cli` no terminal

### Configuração inicial do projeto

1. Navegue até o diretório-raiz do seu projeto no Terminal (para usuários windows recomendo que [leiam este artigo](https://www.felipefialho.com/blog/2017/usando-o-terminal-do-linux-no-windows))
2. Execute o comando `npm install`
	- Este comando irá instalar todas as dependências do projeto
	- Pode levar alguns minutos
	- Irá produzir muitas informações de depuração (incluindo avisos ocasionais de depreciação) que podem ser ignoradas
3. Execute o comando `gulp`
	- Este comando irá executar todas as tarefas estabelecidas no gulp para visualização do projeto.

### Comandos comuns
- `gulp` - executa e monitora a compilação dos arquivos em src (scss, js, fonts, img)
- `gulp clean` - exclui todos os arquivos compilados

## Arquivos fonte
### Sass (scss)

`style.scss` é o arquivo Sass de nível superior, que normalmente apenas importa os arquivos scss para serem compilados.

#### _variables.scss

Contém todas as variáveis, desde tamanhos de fonte até cores, para facilitar o tempo das funções.

## Plugins e frameworks
Nós incluímos o usual aqui, que comumente utilizamos para agilizar os processos.
- [bootstrap 4.3.1](https://getbootstrap.com/)
- [Swiper 5.2.0](https://idangero.us/swiper/)
- [Lightbox 1.6.12](http://sachinchoolur.github.io/lightGallery/)
- [Font Awesome 5.8.1](https://fontawesome.com/)

Todos estes itens estão sendo inseridos via gulp, gerando os arquivos `alldep.css` e `alldep.js` para serem indexados ao html.


## Tipografia

Por padrão a fonte inicial utilizada é a **OpenSans** ([link aqui](https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans)) e se encontra em `src/webfonts`. Para utilizar outra fonte, basta substituir os arquivos na pasta
