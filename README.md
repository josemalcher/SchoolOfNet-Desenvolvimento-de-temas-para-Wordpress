# Curso School Of Net - Desenvolvimento de temas para Wordpress

Resumo do curso:

https://www.schoolofnet.com/curso-desenvolvimento-de-temas-para-wordpress/

---

## <a name="indice">Índice</a>

- [Introdução](#parte1)
- [Instalação do wordpress](#parte2)
- [wp-config e modo debug](#parte3)
- [Estrutura de pastas](#parte4)
- [Criando primeiro tema](#parte5)
- [Sobre temas, index.php e style.css](#parte6)
- [Anatomia de um tema](#parte7)
- [Header, footer e sidebar](#parte8)
- [Template tags](#parte9)
- [The loop](#parte10)
- [Template tags para post](#parte11)
- [Mostrando thumbnail](#parte12)
- [Post sem thumbnail](#parte13)
- [Leia mais](#parte14)
- [Mostrando informações do blog](#parte15)
- [Mostrando páginas no menu](#parte16)
- [Submenu e páginas filhas](#parte17)
- [Hierarquia de template](#parte18)
- [Template para páginas estáticas](#parte19)
- [Template para posts](#parte20)
- [Listando categorias e tags](#parte21)
- [Template para categorias e tags](#parte22)
- [Criando busca de posts](#parte23)
- [Página 404](#parte24)
- [Trabalhando com assets](#parte25)

---

## <a name="parte1">Introdução</a>

O Wordpress é um CMS (Content Management System) construído em PHP. Com ele podemos, de forma dinâmica, criar sites, aplicações e lojas virtuais, onde toda a administração é feita em um painel.

É possível aproveitarmos toda sua estrutura de conteúdos para criarmos temas personalizados e mudarmos toda a aparência do site. Neste conteúdo aprenderemos a base para criarmos temas. Além disso, aprenderemos a hierarquia de templates, arquivos de modelos, gerência de assets, etc.

Este é o primeiro conteúdo de Wordpress da School Of Net.

### Um pouco sobre Wordpress

O Wordpress é o gerenciador de conteúdo mais utilizado no Mundo, não existe nenhum outro gerenciador que se compare a utilização do Wordpress. A popularização do PHP pode estar ligada a este fato. Se pesquisarem a diferença entre o Wordpress e outros gerenciadores de conteúdo, vocês encontrarão muito material na internet. O fato de ser o mais utilizado não significa que outros gerenciadores não sejam bons.

Existe o Joomla, Drupal entre outros, mas o Wordpress se popularizou por sua facilidade, pela gama de recursos que podemos ter e, também, pela facilidade de criação e customização de temas. Temos liberdade e flexibilidade para modelarmos o site da maneira que quisermos.

Na página inicial do Wordpress Brasil, podemos observar, 70% do mercado utiliza Wordpress, não sabemos como é feito este cálculo, mas é um número, realmente, muito alto.

Com Wordpress, vocês podem desenvolver, desde um simples blog, até um E-Commerce, sem a utilização de nenhum framework, caso queiram. Ele nos fornece todo suporte para esta criação. Com ele não conseguimos apenas criar posts, tags e categorias, nós podemos subir arquivos, criar páginas e menus. É indiscutível a qualidade do Wordpress.

### Objetivos

Queremos mostrar o que é uma tema e como vocês podem construir o próprio tema, para que possam evoluir com o Wordpress.

Criaremos um tema do zero, veremos como instalar o Wordpress. Mostraremos que não é necessário criar todo um ambiente de desenvolvimento, como muitos estão acostumados. Precisamos apenas do MySQL e o PHP, sem precisar configurar MAMP, XAMPP ou Apache.

Nós não precisamos nem fazer o download do Wordpress, para instalação. Atualmente, temos ferramentas que fazem a instalação para nós.

Falaremos sobre a hierarquia de um tema, para que não se percam durante o desenvolvimento, nos padrões do Wordpress. Esta hierarquia é muito importante para saberem como o Wordpress procura os arquivos e qual ordem ele segue. Vocês precisam entender este conceito de hierarquia, para não encontrarem dificuldade ao criarem um tema. Utilizar uma ferramenta sem saber como ela trabalha é possível que não sejam beneficados, pois não irão usufruir de todas suas funcionalidades.

Se for para utilizar a ferramenta, sem aprender sobre ela, é melhor não utilizá-la e desenvolver do zero. Esta é a ideia que devemos ter em mente, já que estamos utilizando a ferramenta, vamos aprender sobre ela e utilizar o máximo de recursos que ela pode nos oferecer.

A Documentação do Wordpress é muito boa e, grande parte dela, já está traduzida para o português, caso tenham dificuldade em outro idioma. Além da documentação, vocês podem contar com uma comunidade muito grande e ativa, podendo tirar dúvidas em fóruns e blogs. Vocês não terão dificuldades para se tornarem "fera" em Wordpress.

Lembrem-se que, não existe lugar melhor para tirar dúvidas do que na documentação. Consultem a documentação, antes de qualquer outra fonte.

[Voltar ao Índice](#indice)

---

## <a name="parte2">Instalação do wordpress</a>

Geraremos a instalação do Wordpress, em nosso sistema operacional. Vamos aos requisitos, mínimos, recomendados para a instalação.

- O WORDPRESS JÁ RODA COM O PHP 7
- MYSQL 5.6 OU SUPERIOR / MARIADB 10.0 OU SUPERIOR

É possível que, quando estiverem lendo este conteúdo, as versões já estejam superiores. Este dados foram consultados no momento da criação deste conteúdo.

Se quisermos rodar com requisitos mínimos, podemos utilizar o PHP 5.2 e o MySQL 5. O Wordpress recomenda a utilização das versões acima. Com estas versões ele rodará, tranquilamente.

O Wordpress, por ser uma ferramenta muito utilizada, dificilmente exigirá as últimas versões das tecnologias envolvidas. Ele sempre estará atualizado, mas manterá algumas estruturas, para que sejam rodadas nas versões mais antigas.

Para este conteúdo, será utilizado o PHP 5.6, mas se tiverem a versão 5.5, fiquem tranquilos, que conseguirão acompanhar. É exigido, pelo menos, a versão 5.4, porque rodaremos o wordpress em cima do servidor embutido do PHP. Vocês precisarão do MySQL 5.6, também.

Estamos partindo do princípio que, quem está fazendo este curso, já tenha conhecimentos, básicos, de PHP e MySQL. Por isso, não entraremos em detalhes destas ferramentas.

No caso do Windows, precisaremos que instalem o Git Bash. Esta ferramenta é um terminal que simula um ambiente UNIX. Instalaremos o Wordpress, via curl, e precisaremos do Git Bash. Não aconselhamos trabalharem sem git bash no Windows, porque o cmd, nativo do Sistema Operacional, é muito ruim.

Instalando Wordpress
Primeiro passo será abrir o terminal, da máquina. Lembrem-se que, se estiverem utilizando Windows, deverão utilizar o git bash.

Nós utilizaremos o curl, para fazer o download do Wordpress. Se não tiverem esta ferramenta instalada, deverão instalá-la. Se estiverem utilizando Linux, podem rodar o comando abaixo:

```
$ sudo apt-get install curl
```

Desta forma, já terão a ferramenta configurada. Podem trabalhar com wget no MAC, caso prefiram.

O curl é um comando de terminal que possibilita fazer uma requisição http para uma url. Se tiver um arquivo disponível para download, ele executa. Lembrando que, se estiverem utilizando o Windows e não instalarem o git bash, não conseguirão utilizar o curl.

Vejam o comando que deverão rodar, dentro da pasta que estará a instalação do seu Wordpress.

```
curl -O https://wordpress.org/latest.zip
```

Assim, terão o download do arquivo zip. Em seguida, basta rodarem os seguintes comandos:

```
unzip latest.zip
rm latest.zip
```

O unzip para extrair os arquivos e o rm para remover o arquivo zip, que não precisarão mais. Com isso, terão uma pasta chamada wordpress, com todos os arquivos do CMS.

Após estes procedimentos, rodaremos o servidor embutido do PHP, dentro da pasta wordpress. Lembrando que, vocês podem renomear esta pasta, caso queiram.

```
php -S localhost:8000
```

Acessem o endereço http://localhost:8000 e deverá selecionar a linguagem que queremos instalar o Wordpress e continuar.

Em seguida, ele informará que precisam fazer a configuração de banco de dados, para criação do arquivo wp-config.php, basta avançar.

Na próxima tela, terão que informar os dados de banco de dados, para que o Wordpress possa conectar e instalar as tabelas de banco de dados da sua estrutura padrão.

### Criando um banco por terminal

Rodem os comandos abaixo:

```
# Acessa o mysql com usuário(-u) e senha(-p)
mysql -uroot -proot

# Comando para criar um banco de dados
create database son_wordpress;

# Comando para finalizar a execução do MySQL
exit
```

Após criarem o banco, deverão informar os dados referentes a ele, na tela de instalação do wordpress.

O host, na maioria dos casos, é localhost, caso seja diferente, vocês deverão saber.

Na maioria dos casos, o usuário do banco é root e a senha também. Durante a instalação do MySQL, vocês podem ter definido outra senha. Basta colocar o usuário e a senha, corretos, para conseguirem prosseguir a instalação.

Existe a opção de alterar o prefixo das tabelas do banco de dados, que, por padrão, vem wp_.


O próximo passo será definirem um título para o site e o usuário e a senha do painel administrativo, que vocês podem preencher da maneira que acharem melhor.

Caso utilizem uma senha fraca, deverão marcar que estão cientes, para que consigam prosseguir.

Depois de um tempo, teremos a instalação do Wordpress concluída e seremos redirecionados para o painel administrativo.

Por último, vocês devem visitar o site para checarem se está tudo funcionando. Acessem http://localhost:8000.

Caso seja necessário, repitam o procedimento, instalando outros sites, até fixarem bem o conteúdo. A instalação é muito simples, mas é bom praticar.

[Voltar ao Índice](#indice)

---

## <a name="parte3">wp-config e modo debug</a>

Depois de concluída a instalação do Wordpress, no módulo anterior, começaremos o desenvolvimento do nosso tema.

Utilizaremos o PHPStorm, mas vocês podem utilizar outra IDE. Cada IDE terá um tipo de suporte a Wordpress. Algumas trabalharão com plugins. Assim, basta pesquisarem sobre as facilidades que sua IDE pode oferecer, referente a Wordpress. Provavelmente, existirá.

Existe um arquivo de configuração do Wordpress chamado wp-config.php. Ele fica na pasta raiz da plataforma, onde temos os dados do banco de dados e outras configurações. Se quiserem alterar dados no banco, vocês podem fazê-lo, manualmente, caso seja necessário.

Para desenvolvermos, da melhor forma possível, com Wordpress, é muito importante configurarmos o modo DEBUG do Wordpress. Para ativarmos este modo, podemos alterar uma constante, no arquivo wp-config.

O modo debug vem, por padrão, como false, deveremos alterar para true.


Configurando esta opção, o Wordpress mostrará mensagens de erros, durante o desenvolvimento do tema, quando tiverem uma função depreciada ou algum problema envolvendo a plataforma.

Vocês devem desativar este modo, quando forem subir o site para o ambiente de produção.

As outras configurações, continuam iguais, no painel também não terá alteração. O modo DEGUB pode ser alterado, novamente, a qualquer momento.

Outro arquivo que é importante, para fazermos algumas configurações, é o wp-settings.php. Nele vocês podem inicializar pastas, fazer apontamentos, configurar filtros, ações, etc. Podem acompanhar todos os requires que ele faz nos arquivos de configurações do Wordpress. Não é aconselhavel a alteração deste arquivo, mas alguns desenvolvedores se arriscam.

Se vocês não conhecem PHP Orientado a Objetos, não se preocupem, porque o Wordpress não utiliza este padrão. Ele utiliza o procedural funcional, para trabalhar com PHP.

Quem é leigo em PHP, poderá trabalhar, facilmente, porque ele utilizará apenas funções.

Nada impede de trabalharem com Orientação a Objetos, mas o framework irá "empurrar" para o lado procedural.

Daremos continuidade, nos próximos capítulos.

[Voltar ao Índice](#indice)

---

## <a name="parte4">Estrutura de pastas</a>

Falaremos da estrutura de pastas, presente na instalação do Wordpress.

Podemos observar 3 pastas principais, na raiz de todos os projetos:

Diretório | 	Função 
--------- | ------
wp-admin  |	Responsável por configurar o painel administrativo do Wordpress
wp-content |	Responsável por conter os temas, imagens e plugins
wp-includes |	Armazenar as funções do framework.

Se abrirem as pastas wp-admin e wp-includes, irão se deparar com uma infinidade de arquivos e assets, que o Wordpress utiliza em todo o seu funcionamento. Se quiserem ser profissionais em Wordpress, aconselhamos aprofundarem sobre tudo que é utilizado. Caso contrário, vocês podem aprender a utilizar, somente, as funções.

É muito importante que vocês não modifiquem nenhum arquivo das pastas citadas acima, porque, basta uma atualização do wordpress, para que qualquer alteração que tenham feito, seja inutilizada. Os arquivos serão substituídos pelos originais, sem falar que, vocês podem quebrar alguma funcionalidade do próprio Wordpress e talvez coloquem a aplicação em risco. Nunca alterem nenhum arquivo das pastas wp-admin e wp-includes.

Qualquer alteração que desejem fazer, deverá ser feita na pasta wp-content. Dentro desta pasta estão os temas, uploads de arquivos e plugins. A pasta mais interessante para nós, é a pasta themes. É nela que desenvolveremos nosso tema e faremos nossas alterações e configurações.

No momento da criação deste conteúdo o Wordpress disponibilizava 3 temas padrões:

- TWENTYFIFTEEN
- TWENTYSEVENTEEN
- TWENTYSIXTEEN

Vocês podem escolher qual ativar, pois eles já vêm prontos para uso.

Quando acessamos o endereço http://localhost:8000, gerado pelo servidor embutido, o navegador terá acesso ao arquivo index.php, presente nesta pasta themes. Este arquivo será responsável por carregar o tema que estiver ativo no painel.

Dentro dos temas, vocês podem fazer qualquer alteração ou exclusão que quiserem, que não interferirá no funcionamento do CMS Wordpress. Lembrem-se, qualquer alteração deverá ser feita, apenas, na pasta do tema, ou de algum tema padrão, instalado. Nunca no core do Wordpress.

Apresentamos dois motivos, para não realizarem essas alterações:

- Pode quebrar o funcionamento do framework
- Você perderá todas alterações com qualquer atualização de versão
- Nós criaremos a pasta do nosso tema neste diretório.

Trabalharemos com Bootstrap, para criarmos um tema bem interessante. 


[Voltar ao Índice](#indice)

---

## <a name="parte5">Criando primeiro tema</a>

Iniciaremos com a criação de um tema customizado com Wordpress, para que vocês tenham autonomia, suficiente, para criarem seus próprios temas.

Os temas disponíveis estão no painel administrativo na parte de Aparência/Temas. Acessando este setor do painel administrativo, vocês terão acesso ao tema que estiver ativo e aos demais.

O próximo passo será começarmos a criar nosso tema para que ele apareça, nesta tela, junto com os demais.

Primeiro passo

Para criação de um tema, precisamos de uma pasta e dois arquivos. Somente isso, já é a base de um tema. A pasta pode ter o nome que quiserem, pois será um tema personalizado.

Nossa pasta se chamará sonblog. Os arquivos que estarão dentro desta pasta serão: index.php e style.css. No arquivo index, colocaremos uma mensagem, para checar se está funcionando, quando o ativarmos. No arquivo style, teremos que declarar todas as informações do tema, para que o Wordpress consiga reconhecê-lo. Colocaremos informações como: nome, descrição, autor, versão e muitas outras, possíveis.

Conteúdo arquivo index.php
```
Blog da School of Net
```
Conteúdo arquivo style.css
```
/*
Theme Name: Blog da School of Net
Theme URI: http://schoolofnet.com
Author: Luiz Carlos
Author URI: http://github.com/argentinaluiz
Description: Tema do Blog da School of Net
Version: 1.0
License: MIT
License URI: http://schoolofnet.com
Tags: programação, cursos, categorias, tags, posts
Text Domain: sonblog
*/
```

As informações são auto explicativas. Precisamos explicar, apenas, sobre Tags e Text Domain. As tags são utilizadas para identificação, caso queiram disponibilizar o tema na internet e o text domain é utilizado para criação de traduções. Ele serve como um apelido único, que configuramos. Não confundam, text domain, com o nome do tema. São coisas, totalmente, diferentes.

Somente este comentário no arquivo style.css, já é capaz de configurar o tema e fazer com que ele apareça entre os demais. Lembrando que, somente, criar a pasta não fará com que o tema seja reconhecido e nem aceito pelo Wordpress.

A criação, do arquivo index.php e o style.css, é obrigatória. Isso é uma convenção do próprio framework e deve ser mantida.

Se já criaram os arquivos e já editaram o arquivo style, com o comentário acima, o tema já será visualizado, dentro do painel. Observem que ainda não há imagem, como padrão. Ensinaremos como colocar esta imagem.

Basta criarem uma imagem chamada screenshot.png e colocarem dentro do tema. Ele reconhecerá esta imagem e aparecerá, automaticamente. Pegaremos a mesma imagem do tema twentyseventeen, para facilitar o entendimento, mas vocês podem criar a própria imagem, para colocarem no tema.


Ativando tema

Após terem criado a estrutura básica de um tema e terem checado o funcionamento, no painel administrativo, falta ativarmos o mesmo. Ativem o tema e acessem a página inicial do site, para checarem se está, realmente, funcionando.

Vocês deverão ver o conteúdo do arquivo index.php(Blog da School of Net).

Se não tivessem criado o arquivo index.php, apareceria um erro no modo debug. 

Conclusão

Vocês podem observar a importância da estrutura mínima que o Wordpress exige para um tema. Não existe um tema sem a pasta principal e os dois arquivos internos, lembrando que a screenshot é opcional.

Agora que já sabemos o procedimento e a estrutura básica, deslancharemos no restante do conteúdo.

[Voltar ao Índice](#indice)

---

## <a name="parte6">Sobre temas, index.php e style.css</a>

### Sobre temas, index.php e style.css
No último conteúdo criamos o tema, ativamos e conseguimos mostrá-lo no browser. Tudo está 100%. Explicaremos, melhor, o que significa o que fizemos.

Se observarem o painel administrativo, encontrarão posts, categorias, tags, páginas, menus e tudo que for referente à conteúdo. Este é o papel principal do Wordpress, gerenciar conteúdos.

O tema, nada mais é do que um canal de comunicação com o painel, onde mostraremos os conteúdos aos usuários. Nós gerenciamos os conteúdos no administrativo e mostramos, no front-end, através do nosso tema. Podemos mostrar qualquer conteúdo, da forma que quisermos. Podemos falar que o tema é um molde para mostrarmos os dados.

### index.php
Este arquivo será a base do nosso template, qualquer fato que ocorra, o Wordpress sempre recorrerá a este arquivo, como última opção. Se, por acaso, algum endereço que não exista for acessado, o Wordpress não encontrará e redirecionará para o arquivo index. Qualquer erro de hierarquia e estrutura, também será redirecionado para o arquivo index.

Podemos dizer que o index é o arquivo principal do nosso tema, mas isso não significa que nosso tema iniciará por ele. É possível iniciar o tema por outro arquivo, mas o template index.php será nossa salvação, caso nada dê certo.

### style.css
Da mesma forma que temos o index, como arquivo principal do tema, o style também é o arquivo principal, mas da parte de estilização do tema. Não significa que não possamos criar outros arquivos de css, podemos criar a estrutura que quisermos, mas, precisaremos do arquivo style, de qualquer forma, porque ele faz parte da estrutura básica de um tema.


[Voltar ao Índice](#indice)

---

## <a name="parte7">Anatomia de um tema</a>

Para desenvolvermos um tema, temos que entender a estrutura do mesmo. Temos que saber como este tema será mostrado ao usuário.

Para entenderem a anatomia do tema, temos uma imagem, no próprio site do wordpress, que explica o que queremos mostrar. Vejam a imagem abaixo:

![Anatomia de um Tema wordpress](https://github.com/josemalcher/SchoolOfNet-Desenvolvimento-de-temas-para-Wordpress/blob/master/wp-content/themes/son-Desenvolvimento-de-temas-para-Wordpress/img-git/wp_anatomy.png?raw=true)

Quando vocês virem um site, desenvolvido em Wordpress, ele será subdividido em: header, footer, content, seach e sidebars. Nós mostramos o conteúdo com o index, mas podemos, também, mostrar com outros arquivos, o exemplo não é uma regra.

Podemos ter mais do que uma sidebar em uma mesma estrutura.

### Criando arquivos PHP, referentes à anatomia

Sabendo da anatomia, basta iniciarem a criação dos arquivos com os mesmos nomes, presentes na imagem.

* HEADER.PHP
* INDEX.PHP
* FOOTER.PHP
* SEARCH.PHP
* SIDEBAR.PHP

Além dos arquivos, citados acima, existem outros arquivos que são reservados para o Wordpress, mas falaremos, adiante.

O Wordpress reconhecerá estes arquivos, porque fazem parte da estrutura definida por ele. Apesar de existir uma estrutura pré-definida, vocês têm toda liberdade para criarem a estrutura de pasta, que quiserem, de acordo com a regra de negócio de vocês. Somente o arquivo index.php deve estar na raiz.

Vocês podem, inclusive, copiar a mesma estrutura dos temas padrões do Wordpress, caso tenham alguma dúvida. O importante é saberem que existe uma anatomia e existem alguns arquivos corretos, a serem criados.

Criaremos cada parte desta anatomia, para que vocês possam entender como cada uma delas funciona dentro do Wordpress.

[Voltar ao Índice](#indice)

---

## <a name="parte8">Header, footer e sidebar</a>

### Header, footer e sidebar

Neste módulo criaremos 3 partes do tema: header, footer e sidebar.

Utilizaremos o Bootstrap para criar toda estilização do tema. Se não conhecem Bootstrap, na School Of Net há cursos sobre esta ferramenta. Vocês podem procurar por este conteúdo no nosso Portal, para conhecerem a ferramenta e aprenderem a utilizá-la. É um framework css muito bom e muito utilizado, que facilita o desenvolvimento de qualquer front-end.

### header.php

O header é o arquivo que abrirá o HTML, carregará o css e algum arquivo javascript, se for necessário.

```html
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Blog da School of Net</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <h1>Header do Blog</h1>
        </div>
    </div>
</header>
```

### header-personalizado.php
```html
<p>Subheader</p>
```
### footer.php

O footer deverá fechar o que foi aberto no header e também podemos carregar algum script, caso faça parte do tema.
```html
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
```

### footer-personalizado.php
```html
<p>footer personalizado</p>

```
### sidebar.php
```html
<p>Sidebar</p>
```

### sidebar-personalizado.php
```html
<p>Sidebar personalizado</p>
```

### Arquivo index.php

```html
<?php get_header(); ?>
<?php get_header('personalizado'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p>Blog da School of Net</p>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar('personalizado'); ?>
        </div>

    </div>
</div>

<?php get_footer('personalizado'); ?>
<?php get_footer(); ?>
```

### Resumo das funções

* get_header()	- Carrega o header padrão, caso seja passado um parâmetro, ela carrega o header personalizado    
* get_sidebar() - Carrega o sidebar padrão, caso seja passado um parâmetro, ela carrega o sidebar personalizado   
* get_footer() - Carrega o footer padrão, caso seja passado um parâmetro, ela carrega o footer personalizado   

Notem que, podemos criar quantos headers quisermos, quantos footers quisermos e quantas sidebars quisermos. Basta acrescentarmos o sufixo, como no exemplo abaixo:

* HEADER-MYHEADER
* FOOTER-MYFOOTER
* SIDEBAR-MYSIDEBAR

O importante é o arquivo começar com o mesmo nome e depois do traço podemos colocar o nome que quisermos. Para chamar, basta utilizar as funções, acima, passando o que estiver após o traço, como parâmetro. Vejam o exemplo:

* GET_HEADER('MYHEADER')
* GET_FOOTER('MYFOOTER')
* GET_SIDEBAR('MYSIDEBAR')

### Conclusão

Criamos todos os arquivos acima, na pasta raiz e apenas os chamamos no arquivo index.php. Para fazer este carregamento utilizamos as funções do próprio Wordpress.

Desta forma, já montamos a estrutura básica do nosso tema e utilizamos o Bootstrap para separação de blocos. Observem que estamos puxando tudo de CDN, através de links. No final do curso iremos alterar para chamadas locais. Por enquanto, fica assim para facilitar o estudo.

O objetivo desta aula é mostrar a vocês a facilidade que há em trabalhar com o Wordpress e mostrar o nível de personalização que podemos ter, utilizando este framework. Talvez por este motivo ele é uma dos CMS mais utilizados do mundo. Lembrem-se, não sabendo usar as funções corretas e as estruturas corretas, vocês não aproveitarão todos os recursos que ele pode oferecer.

Portanto, pratiquem bastante, criem outros headers, sidebars e footers. Chamem no arquivo index.php e guardem bem este conteúdo.

[Voltar ao Índice](#indice)

---

## <a name="parte9">Template tags</a>

No módulo anterior conseguimos mostrar cabeçalho, rodapé e sidebar. Mostramos os templates padrões e também os personalizados. Isso significa que podemos criar mais do que um header, footer ou sidebar.

A todo momento, utilizamos algumas funções que também foram mostradas no final do módulo passado. Estas funções são conhecidas como template tags do Wordpress.

Existem várias tamplate tags, se quiserem saber mais sobre elas, vocês podem pesquisar no Codex do Wordpress, no link abaixo, e tomar conhecimento de todas.

https://codex.wordpress.org/Template_Tags

Se quiserem conferir a implementação, podem acessar o link de wp-includes, nesta mesma página.

Toda template tag estará em um arquivo com o sufixo -template.php. Vejam alguns exemplos:

* WP-INCLUDES/GENERAL-TEMPLATE.PHP
* WP-INCLUDES/AUTHOR-TEMPLATE.PHP
* WP-INCLUDES/CATEGORY-TEMPLATE.PHP
* WP-INCLUDES/POST-THUMBNAIL-TEMPLATE.PHP

Existem as template tags gerais, para mostrar algum tipo de conteúdo como: javascript, style, etc. Falaremos mais sobre isso no final do conteúdo.

Tags
Quando falamos em tag, referente a estrutura ou template, não estamos falando da mesma tag que é utilizada na criação de um post. Fiquem atentos a diferença.

A tag que falamos neste módulo tem o conceito de uma função que está gerenciando algum tipo de conteúdo ou retornando algum tipo de informação específica.

Temos os seguintes tipos de tags:

* GENERAL TAGS
* AUTHOR TAGS
* BOOKMARK TAGS
* CATEGORY TAGS
* COMMENT TAGS
* LINK TAGS
* POST TAGS
* POST THUMBNAIL TAGS
* NAVIGATION MENU TAGS

Se tiverem dúvida sobre qual tag utilizar, basta clicar em cima de cada uma, que terão acesso ao código. Vejam o conteúdo ao clicar na tag get_header().

![CODEX Template Tag](https://github.com/josemalcher/SchoolOfNet-Desenvolvimento-de-temas-para-Wordpress/blob/master/wp-content/themes/son-Desenvolvimento-de-temas-para-Wordpress/img-git/wp_getheader_codex.png?raw=true)

A imagem mostra a descrição e o uso da função. Nesta página encontarão exemplos de aplicação e todas as informações necessárias a respeito da tag. Quanto mais consultarem a documentação mais se familiarizarão, sabendo que é a fonte oficial do funcionamento da função.

Acessando a pasta wp-include e abrindo o arquivo general-template.php temos acesso a função nativa do get_header(). Vejam o código abaixo para entenderem melhor.

```php
function get_header( $name = null ) {
    /**
     * Fires before the header template file is loaded.
     *
     * The hook allows a specific header template file to be used in place of the
     * default header template file. If your file is called header-new.php,
     * you would specify the filename in the hook as get_header( 'new' ).
     *
     * @since 2.1.0
     * @since 2.8.0 $name parameter added.
     *
     * @param string|null $name Name of the specific header file to use. null for the default header.
     */
    do_action( 'get_header', $name );

    $templates = array();
    $name = (string) $name;
    if ( '' !== $name ) {
        $templates[] = "header-{$name}.php";
    }

    $templates[] = 'header.php';

    locate_template( $templates, true );
}
```
Observem que a função recebe um parâmetro opcional. Caso seja passado o parâmetro, ele puxa o header relacionado, caso não passe nada, ele pegará o header.php padrão, assim como mostramos no módulo anterior.

### Conclusão

Vocês têm acesso à todas as funções do Wordpress, para conhecerem o funcionamento. Tentem sempre ir até a fonte da função, ao invés de somente utilizá-la. Assim, vocês entenderão o funcionamento do framework, o que ajudará durante o desenvolvimento de um tema.

Pesquisem mais tags do Codex, para se habituarem com as funções e os modos de pesquisá-las. Isso será muito bom para todos vocês que pretendem trabalhar com a ferramenta.

[Voltar ao Índice](#indice)

---

## <a name="parte10">The loop</a>

Já vimos boa parte da estrutura padrão de uma página, apresentando na tela: header, footer, content e sidebar. Ainda não mostramos nada relevante do wordpress. Nada que venha do banco de dados.

Falaremos especificamente do content, neste módulo. O content é o conteúdo principal da nossa estrutura de template, onde listaremos uma coleção de informações vindas do banco de dados. Este conteúdo também é conhecido como The Loop.

Podemos criar uma área de conteúdo, utilizando o loop do Wordpress. Mesmo que seja para mostrar apenas uma informação. Tudo dependerá do projeto.

### Mostrando posts recentes

A primeira verificação que devemos fazer é checar como o painel administrativo está configurando a página inicial do nosso site. Acessem Configurações no menu do painel administrativo e depois acessem Leitura.

Neste local temos duas configurações para página inicial:

* SEUS POSTS RECENTES
* UMA PÁGINA ESTÁTICA ( SELECIONAR ABAIXO )

Como vimos nas opções acima, temos como configurar uma página de posts recentes ou uma página estática, como conteúdo inicial. Caso optem por uma página estática, vocês deverão marcar qual será esta página e também qual será a página dos posts.

Em nosso exemplo utilizaremos a primeira opção. Vejam como ficará o loop no arquivo index, depois de configurar esta opção:

```php
<?php get_header(); ?>
<?php get_header('personalizado'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php
            if(have_posts()):
                echo "<ul>";
                while (have_posts()) : the_post();
                    printf('<li>Post ID: %s Post Title: %s Conteúdo: %s</li>',
                    $post->ID, $post->post_title, $post->post_content);
                    echo '<hr>';
                endwhile;
                echo "<ul>";
            else:
                echo "<p>Ainda não temos post.</p>";
            endif;
            ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar('personalizado'); ?>
        </div>
    </div>
</div>

<?php get_footer('personalizado'); ?>
<?php get_footer(); ?>
```
Observem que estamos fazendo uma lógica condicional utilizando if. A lógica utiliza a função have_posts(). Esta função é capaz de verificar se existem posts para serem mostrados ou não. Esta função faz uma busca no banco de dados e analisa a url, para ver se existem parâmetros ou se existe algum tipo de ordenação sendo passada. Na verdade, ela analisa todo contexto, antes de fazer a consulta ao bando de dados.

A função have_posts não irá ver, somente, se tem posts ou não, como seu próprio nome diz. Ela fará toda uma análise da página atual em que se encontra e depois fará uma consulta ao banco para trazer esta informação.

Depois de testar se existem posts, partimos para um laço de repetição while que executará uma ação enquanto existirem posts. Isso quer dizer que passaremos por toda coleção trazida pela função anterior. Mas isso não basta, precisamos passar de post em post para conseguir imprimir os posts atuais de cada iteração. Utilizamos a função the_post(), que é responsável por sempre pegar o próximo post e armazenar em uma variável global chamada $post.

Se inserirmos um var_dump($post), dentro do while, poderemos ver que, a cada iteração nós falamos de uma post diferente. Se quisermos ver, somente, os IDs dos posts, podemos acessar da seguinte maneira: var_dump($post->ID). Desta mesma maneira podemos acessar outras informações desta variável global.

Como a variável é global vocês podem acessar em qualquer arquivo da aplicação. O Wordpress utiliza muito este conceito de variável global. global $post.

Apesar de termos a possibilidade de utilizar o var_dump para debugar dados, nós utilizamos o acesso através da variável global $post, associado a um printf, como vocês puderam ver no código acima.

Acessamos os seguintes itens do post:

* $POST->ID
* $POST->POST_TITLE
* $POST->POST_CONTENT

Acessando assim o ID, o título e o conteúdo de cada post, a cada iteração.

Este loop será utilizado em muitas páginas do Wordpress, porque ele é um loop padrão. Podemos, ou não, acrescentar alguns parâmetros, mas a base será muito parecida.

### Estrutura Loop

```php
<?php
if(have_posts()):
    while (have_posts()) : the_post();
        // Conteúdo
    endwhile;
else:
    // Mensagem se não existir post.
endif;
?>
```
Gravem bem este loop e tentem entendê-lo, porque ele realmente é muito utilizado e muito importante durante o desenvolvimento de temas.

[Voltar ao Índice](#indice)

---

## <a name="parte11">Template tags para post</a>

No módulo anterior falamos do The Loop e mostramos os dados vindos do banco, utilizando a variável global $post. Agora, mostraremos que não precisamos utilizar esta variável para resgatar os dados, pois existem as template tags que fazem isso para nós.

Mostraremos o mesmo loop, do módulo anterior, porém iremos inserir os dados com template tags.

```php
<?php get_header(); ?>
<?php get_header('personalizado'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                    if(have_posts()):
                        echo "<ul>";
                        while(have_posts()) : the_post();
                            printf('<li><h3>Post: %s</h3>, title: %s, content: %s</li>',
                                                  //$post->ID, $post->post_title, $post->post_content);
                                                get_the_permalink(), get_the_title(), get_the_content());
                        endwhile;
                        echo "</ul>";
                    else:
                        echo "<p> Ainda Não há postagem</p>";
                    endif;
                ?>



            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar('personalizado'); ?>
            </div>

        </div>
    </div>

<?php get_footer('personalizado'); ?>
<?php get_footer(); ?>
```

Vejam a substituição:

Variável global |	Template Tag Post
:---------------: | :-------------------:
$post->ID  |	get_the_ID()
$post->post_title |	get_the_title()
$post->post_content |	get_the_content()


Depois de fazermos estas alterações podemos ir até o browser para ver o resultado. Vocês verão que não mudou muito. Os conteúdos continuam vindo da mesma forma, porque os template tags fazem o acesso à variável global $post, para nós.

A grande novidade é que estamos utilizando template tag para gerar o link, automaticamente. Esta função gera o link do post para a página própria dele. Se clicarmos em algum título seremos redirecionados para a página do post. Lembrando que, como não criamos nenhuma página específica para mostrar este conteúdo, o Wordpress mostrará o conteúdo na própria index, de acordo com sua estrutura e hierarquia.

###Conclusão

Neste módulo você precisa observar duas coisas em especial:

1- A utilização de template tags para mostrar os conteúdo dos posts, ao invés de utilizar a variável global

2- Notem que estamos utilizando apenas o arquivo index.php para listar todos os posts e também para mostrar o conteúdo de um só post, quando clicamos no link. O mais interessante que devem notar é que, se é um único arquivo, também é um único código. Sendo um único código, temos um único loop. Falamos desta lógica para que percebam que a função have_posts() interpreta o contexto da sua página atual para trazer a coleção de dados. Como no primeiro momento temos a listagem de posts, ela traz todos os posts. Quando clicamos em um post, em específico, ela interpreta que se trata de uma página particular do post e traz os dados, apenas, do post em questão.

O Wordpress se destaca, entre outros gerenciadores de conteúdo, pela facilidade e reaproveitamento de código. Com um mesmo arquivo conseguimos listar todos os posts e listar o conteúdo de cada um deles. Não estamos dizendo que isso seja correto, somente que isso é possível.

Nos próximos conteúdos vocês entenderão melhor como criar um arquivo específico para exibição do conteúdo particular de cada post, sem utilizar o index.php.


[Voltar ao Índice](#indice)

---

## <a name="parte12">Mostrando thumbnail</a>

No módulo passado listamos os posts utilizando template tags. Isso foi uma evolução em relação ao primeiro modo de listagem. Mostraremos neste capítulo como é possível melhorar a listagem e acrescentar uma imagem a cada post.

Para inserirmos uma imagem para cada post, há imagem destacada, que o Wordpress disponibiliza no painel administrativo. Esta imagem destacada não vem configurada por padrão, adicionaremos o suporte a esta funcionalidade para depois conseguirmos trabalhar com as thumbnails.

Para ativar as imagens destacadas, em nosso painel administrativo, criaremos um arquivo, que faz parte da estrutura padrão de temas Wordpress, chamado functions.php. Este arquivo é utilizado para fazermos a configuração do nosso tema e também para criarmos nossas próprias funções. Sempre que precisarmos criar uma função, para facilitar alguma tarefa de nosso site ou aplicação, é indicado que sejam criadas neste arquivo.

Depois de criarmos este arquivo, teremos que adicionar o código abaixo:

```php
<?php
add_theme_support('post-thumbnails');
?>
```

Somente com esta linha, já podemos atualizar a tela de edição ou adição de posts, que já teremos esta opção na barra lateral. Vejam a imagem abaixo:

![theme support thumb](https://github.com/josemalcher/SchoolOfNet-Desenvolvimento-de-temas-para-Wordpress/blob/master/wp-content/themes/son-Desenvolvimento-de-temas-para-Wordpress/img-git/wp_theme_support_thumb.png?raw=true)

Não se assustem se a imagem destacada aparecer em outro local. Geralmente, ela aparece na última posição da barra lateral e nós a arrastamos para primeiro, para visualizarmos melhor. Caso queiram, podem alterar as posições dos elementos na barra lateral, arrastando e soltando.

Também é possível configurar o tamanho da thumbnail padrão. Vejam o código:

```php
<?php
add_theme_support('post-thumbnails');
set_post_thumbnail_size(120,120);
?>
```

Depois de termos concluido a configuração, adicionaremos uma imagem a um dos posts. Façam este procedimento no post teste e atualizem. Vocês podem criar um novo post, com thumbnail, caso não queiram atualizar.

### Listando posts com imagens

```php
<?php get_header(); ?>
<?php get_header('personalizado'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                if(have_posts()):
                    echo '<ul class="media-list">';
                    while (have_posts()) : the_post();
                        // Formando estutura da thumbnail com Bootstrap
                        $image = sprintf('<div class="media-left"><a href="%s">%s</a></div>',
                            get_the_permalink() , get_the_post_thumbnail());

                        // Formando estrutura de conteúdo com Boostrap
                        $body = sprintf('<div class="media-body"><h3 class="media-heading"><a href="%s">%s</a></h3><p>%s</p></div>',
                            get_the_permalink(), get_the_title(), get_the_content());

                        // Imprimindo estrutura completa de imagem com conteúdo
                        printf('<li>%s%s</li>', $image, $body);
                        echo '<hr>';
                    endwhile;
                    echo "<ul>";
                else:
                    echo "<p>Ainda não temos post.</p>";
                endif;
                ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar('personalizado'); ?>
            </div>
        </div>
    </div>

<?php get_footer('personalizado'); ?>
<?php get_footer(); ?>
```

### Conclusão

Observem que o Loop ainda é o mesmo, e as funções são iguais às anteriores. Há uma função nova neste módulo: get_the_post_thumbnail().

Esta função nos retorna uma tag img completa, vinda de cada post relacionado. Portanto, se o post tiver uma imagem destacada, ele retornará esta imagem. Caso contrário, retornará vazia. Nos próximos capítulos melhoraremos esta função para que não retorne nada, quando não houver imagem. No momento, o objetivo é mostrar uma estrutura de conteúdo mais organizada e com thumbnails. Este objetivo foi atingido neste módulo.

O restante do código é implementação de Bootstrap, que não abordaremos neste conteúdo. Caso não tenham conhecimento de Boostrap, vocês podem procurar este conteúdo na School Of Net, que encontrarão.

Partimos do princípio que já possuam conhecimento sobre as funções sprintf e printf. Caso não saibam, também podem procurar sobre as funções, para que entendam o que foi feito no código acima.

[Voltar ao Índice](#indice)

---
## <a name="parte13">Post sem thumbnail</a>

Como não é obrigatório o post ter uma imagem destacada, melhoraremos nosso exemplo, inserindo uma condição para exibição ou não.

No exemplo passado, como queríamos apenas mostrar uma thumbnail, decidimos não tratar a possibilidade de não existir uma imagem. Agora, acertaremos este detalhe.

Vejam a alteração no arquivo index.php:

```php
<?php
// Código antigo
$image = sprintf('<div class="media-left"><a href="%s">%s</a></div>',
                        get_the_permalink() , get_the_post_thumbnail());

// Código corrigido
$image = '';
if(has_post_thumbnail()):
    $image = sprintf('<div class="media-left"><a href="%s">%s</a></div>',
    get_the_permalink() , get_the_post_thumbnail());
endif;
?>
```

Observem que, primeiro atribuímos um conteúdo vazio para a variável $image, desta forma, caso não exista nenhuma imagem destacada, não será inserido código algum.

Para descobrirmos se existe, ou não, a imagem destacada, utilizamos a função abaixo:

has_post_thumbnail()

Esta função, nativa do Wordpress, retorna true ou false para nossa condicional. Assim, conseguimos exibir a imagem se existir e não inserir nenhum código html, caso não exista.

Agora nosso exemplo está completo.

Façam estas alterações no projeto local e atualizem o browser. Visualmente, não haverá alteração, praticamente de nada. Mas se inspecionarmos o elemento, veremos que não existe mais elemento. Fato que ocorria, anteriormente.

### Conclusão

Agora que corrigimos o exemplo, para que fique mais coeso, daremos continuidade aos conteúdos.

Notem que o texto ainda continua muito grande e isso não é apresentável ao usuário. Melhoraremos isso, também.

No próximo módulo mostraremos como podemos pegar apenas um pedaço do texto e inserir um botão de Leia mais, assim como os sites e blogs costumam fazer, para que a aparência fique melhor e mais organizada. Desta forma podemos colocar qualquer tamanho de texto, que o layout não será quebrado.


[Voltar ao Índice](#indice)

---

## <a name="parte14">Leia mais</a>

Reduziremos o tamanho do texto, de acordo com o número de palavras que quisermos definir. Desta forma, conseguiremos manter um layout padronizado e fazer com que o usuário clique em um botão leia mais, caso ele queira continuar lendo o conteúdo do post. Isso é muito comum em páginas de listagem de posts, porque não faz sentido listar todos os posts, completos. Basta colocar um trecho do conteúdo, para que o usuário saiba do que se trata, e depois adicionamos um botão para acessar o conteúdo completo.

Antes de prosseguirmos com o conteúdo, adicionaremos um título ao nosso exemplo, para que a listagem dos posts possa ficar mais visual e organizada. Vejam trecho do código abaixo:

Adicionem, antes da div class row, um título, para que saibam onde começa listagem dos posts.

```html
<div class="container">
    <h3>Posts Recentes</h3>
    <div class="row">
        <div class="col-md-6">
```

Agora que já adicionamos o título, iremos ao que interessa neste módulo, que é a exibição de parte do conteúdo. Não queremos apresentar o texto completo do post. Suponham um texto muito grande sendo mostrado na íntegra. Não é o que queremos. Vejam como é simples fazer esta edição com o Wordpress.

No painel administrativo edite algum post já criado. Dentro da tela de edição, encontrarão o botão abaixo:

![Leia mais no post wordpress](https://github.com/josemalcher/SchoolOfNet-Desenvolvimento-de-temas-para-Wordpress/blob/master/wp-content/themes/son-Desenvolvimento-de-temas-para-Wordpress/img-git/wp_more_link.png?raw=true)

```php
<?php get_header(); ?>
<?php get_header('personalizado'); ?>

    <div class="container">
        <div class="row">
            <h2>POST RECENTES</h2>
            <div class="row">
                <div class="col-md-6">
                    <?php
                    if (have_posts()):
                        echo '<ul class="media-list">';
                        while (have_posts()) : the_post();
                            // Formando estutura da thumbnail com Bootstrap
                            $image = '';
                            if (has_post_thumbnail()):
                                $image = sprintf('<div class="media-left"><a href="%s">%s</a></div>',
                                    get_the_permalink(), get_the_post_thumbnail());
                            endif;

                            // Formando estrutura de conteúdo com Boostrap
                            $body = sprintf('<div class="media-body"><h3 class="media-heading"><a href="%s">%s</a></h3><p>%s</p></div>',
                                get_the_permalink(), get_the_title(), get_the_content('CONTINUE LENDO...'));

                            // Imprimindo estrutura completa de imagem com conteúdo
                            printf('<li>%s%s</li>', $image, $body);
                            echo '<hr>';
                        endwhile;
                        echo "<ul>";
                    else:
                        echo "<p>Ainda não temos post.</p>";
                    endif;
                    ?>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar('personalizado'); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer('personalizado'); ?>
<?php get_footer(); ?>
```

Notem que, depois que clicamos no botão, o Wordpress já insere uma separação no texto do post. A função get_the_content(), que resgata o conteúdo do post, verifica se existe este recurso adicionado no painel administrativo. Se existir, ela oculta o restante do post e adiciona um link com a classe more-link.

O texto padrão que o Wordpress adiciona no link é (mais...). Vocês podem configurar o texto que quiserem, basta inserirem um parâmetro para a função, como no exemplo abaixo:

```php
get_the_content('Continue lendo...')
```

O primeiro parâmetro que a função aceita é exatamente o texto de leia mais. Desta maneira, o Wordpress passa a imprimir o que passamos como parâmetro e não mais o padrão.

Vocês podem configurar o leia mais, no editor, em qualquer local do texto que quiserem. Basta colocar o cursor no local exato onde querem que esteja o botão de leia mais. Cada post terá uma posição, de acordo com o que configurarmos.

Façam o teste em todos os posts, inserindo, em cada post, um local diferente.

Assim, vocês fixarão este recurso do Wordpress.

Não esqueçam de inserirem o parâmetro para a função get_the_content, para alterarem o valor padrão do link do botão.


[Voltar ao Índice](#indice)

---

## <a name="parte15">Mostrando informações do blog</a>

Para melhorar o exemplo atual, modificaremos o header do projeto. Utilizaremos o navbar do Bootstrap, para preparar o header que receberá a listagem de páginas, formando um menu.

Apresentaremos uma função que é capaz de pegar as informações do Blog que estão contidas no menu Configurações/Geral.

### Função bloginfo

```php
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Blog da School of Net</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- Listagem de páginas -->
            </ul>
        </div>
    </div>
</nav>
```

Obeservem que utilizamos duas vezes a função bloginfo(), a única diferença foi o parâmetro utilizado.

Função	| Parâmetro | Resultado
----- | ------- | --------
bloginfo |	name |	Imprime nome do site, configurado durante a instalação
bloginfo |	url |	Imprime a url do site
get_bloginfo |	name |	Return o nome do site

Notem que não utilizamos a função get_bloginfo, mas nós citamos porque pode ser utilizada. A diferente entre get_blofinfo e bloginfo é que, a primeira apenas retorna o valor e a segunda imprime, direto, o valor. Utilizando a primeira, teremos o mesmo resultado, mas teríamos que utilizar o echo, do PHP, para imprimir.

Vocês podem ver todos os parâmetros existentes para estas duas funções, no link:

https://codex.wordpress.org/pt-br:Template_Tags/bloginfo

Os parâmetros são os mesmos, para ambas as funções.



[Voltar ao Índice](#indice)

---

## <a name="parte16">Mostransdo páginas no menu</a>

Finalmente, adicionaremos as páginas, criadas no painel administrativo, ao menu que criamos no módulo anterior.

Para exemplificar melhor, criamos mais duas páginas, além da página de exemplo, que já vem com a instalação do Wordpress. Criamos: contato e Cursos.

Utilizando a estrutura anterior, basta acrescentarmos as tags li dentro da tag ul, que deixamos vazia no exemplo anterior.

Comentaremos a chamada do arquivo header-personalizado.php, para que possam brincar depois com os exemplos. Estamos comentando para que este exemplo não fique muito poluído.

### Forma manual de criar o menu

```html
<ul class="nav navbar-nav">
    <li><a href="?p=14">Cursos</a></li>
    <li><a href="?p=16">Contato</a></li>
</ul>
```
Da forma acima conseguimos criar o menu, mas teríamos que ficar verificando, no painel, qual o ID de cada página, para criarmos, manualmente. Isto não é nada funcional e muito menos dinâmico.

O Wordpress disponibiliza uma forma para que fique dinâmica a criação, ou seja, assim que criar a página no painel, ela já aparece direto no site, assim que a página for recarregada. É o modo que ensinaremos a seguir.

### Forma dinâmica de criar o menu

```html
<ul class="nav navbar-nav">
    <?php
        $pages = get_pages();
        foreach ($pages as $p):
            $link = get_page_link($p->ID);
            $title = $p->post_title;
            printf('<li><a href="%s">%s</a></li>',$link,$title);
        endforeach;
    ?>
</ul>
```

Desta forma, já temos as páginas de uma forma dinâmica. Notem que, primeiro pegamos todas as páginas existentes com a função get_pages, em seguida, fazemos um foreach para percorrer todas as páginas e listá-las com os links. Os links são resgatados pela função get_page_link, onde passamos o ID da página.

Existe uma forma de ordenar estas páginas. Basta passar o array de configuração para a função get_pages. Vejam as formas de ordenação possíveis, de acordo com a documentação:

```php
<?php
// Ordenando por ordem alfabetica
$pages = get_pages(array(
    'sort\_column' => 'post_title',
    'sort_order' => 'asc' // ou desc
));

// Ordenando por ordem de menu
$pages = get_pages(array(
    'sort\_column' => 'menu_order',
    'sort_order' => 'asc' // ou desc
));
?>
```

Lembrando que, para utilizar a ordenação por ordem de menu, vocês deverão configurar a ordem no painel administrativo, de acordo com a imagem abaixo:

![Ordenação de prioridade de páginas](https://github.com/josemalcher/SchoolOfNet-Desenvolvimento-de-temas-para-Wordpress/blob/master/wp-content/themes/son-Desenvolvimento-de-temas-para-Wordpress/img-git/wp_menu_order_pages.png?raw=true)

Pesquisando no codex, a função get_pages, vocês podem verificar os parâmetros existentes. Nós deixaremos a função sem parâmetro, para pegar o modelo padrão, que será por ordem alfabética.

Para partirmos para outro próximo conteúdo, pedimos que criem uma página chamada PHP, no painel administrativo, para testarem se a mesma aparecerá no menu. Caso apareça, está tudo correto e podemos seguir para o próximo módulo.

[Voltar ao Índice](#indice)

---

## <a name="parte17">Submenu e páginas filhas</a>

Fizemos o desenvolvimento do menu dinâmico, no módulo passado. Vale lembrar a diferença que existe entre páginas e posts. Apesar do Wordpress considerar tudo como sendo post, ele sabe diferenciar os elementos.

Desta forma, existe a possibilidade de criarmos páginas mães e páginas filhas. Quando temos conteúdos relacionados, podemos criar uma página principal e outras relacionadas.

Para exemplificar, configuraremos a página PHP, criada no módulo anterior, como sendo filha da página Cursos. Criaremos mais uma página, chamada Java, e faremos o mesmo processo.

![Página Filha](https://github.com/josemalcher/SchoolOfNet-Desenvolvimento-de-temas-para-Wordpress/blob/master/wp-content/themes/son-Desenvolvimento-de-temas-para-Wordpress/img-git/wp_page_child.png?raw=true)

Conseguimos ter acesso visual às páginas filhas, ao clicarmos no menu Páginas, no painel administrativo. Vejam a imagem abaixo:

![Lista de Páginas Filhas](https://github.com/josemalcher/SchoolOfNet-Desenvolvimento-de-temas-para-Wordpress/blob/master/wp-content/themes/son-Desenvolvimento-de-temas-para-Wordpress/img-git/wp_page_child_list.png?raw=true)

### Ocultando páginas filhas

Observem o browser e verão que todas as páginas estarão aparecendo. Isso ocorre porque, na estrutura que fizemos, não diferenciamos páginas mães de páginas filhas. Para ocultar as páginas filhas, basta acrescentarmos um parâmetro na função get_pages.

```php
    $pages = get_pages(['parent' => 0]);
```

Desta forma, estamos informando que queremos uma página que não tenha "parente", ou seja, não tenha nenhuma relação com qualquer página, serão páginas independentes.

Assim, já eliminamos estas páginas do menu. Agora, faremos aparecer no local correto. Vejam abaixo:

```html
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Blog da School of Net</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                $pages = get_pages(['parent' => 0]);
                foreach ($pages as $p):
                    $childPages = get_pages(['child_of' => $p->ID]);
                    if (!count($childPages)) {
                        $link = get_page_link($p->ID);
                        $title = $p->post_title;
                        printf('<li><a href="%s">%s</a></li>', $link, $title);
                    } else {
                        echo "<li>";
                        printf('<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">%s<span class="caret"></span></a>', $p->post_title);
                        echo '<ul class="dropdown-menu">';
                        foreach ($childPages as $child) {
                            $link = get_page_link($child->ID);
                            $title = $child->post_title;
                            printf('<li><a href="%s">%s</a></li>', $link, $title);
                        }
                        echo "</li></ul>";
                    }
                endforeach;
                ?>
            </ul>
        </div>
    </div>
</nav>
```

Primeiro pegamos as páginas filhas e fazemos um teste. Se não tiver filho, nós mantemos do jeito que estava, anteriormente. Caso tenha, nós caímos na estrutura else.

No else, nós inserimos a estrutura de html e css para menus dropdows, do próprio Bootstrap, e fazemos outro foreach para percorrer todos os filhos de cada página principal.

Assim, teremos o menu funcionando corretamente com suas páginas filhas sendo listadas e estilizadas.

### Configurando link permanente
Caso não gostem do formato atual que as urls estão sendo mostradas, temos a possibilidade de alterar este padrão, no painel administrativo. Acessem Configurações/Links permanentes. Dentre todas as possibilidades, a mais visual seria Nome do post, mas vocês podem escolher a que acharem melhor.

Após a alteração, devem obter a seguinte url: http://localhost:8000/index.php/contato/

Não se preocupem com o index.php no meio da url, isso acontece porque estamos utilizando o servidor embutido do PHP, quando subirem o site para produção, não existirá mais.


[Voltar ao Índice](#indice)

---

## <a name="parte18">Hierarquia de template</a>

Um dos assuntos mais importantes, quando falamos em criação de temas, é a hierarquia de templates.

O Wordpress avaliará toda estrutura e hierarquia de templates, antes de montar a página. Leiam, com atenção, a documentação no link abaixo:

https://developer.wordpress.org/themes/basics/template-hierarchy/

Resumiremos o conceito básico, neste módulo.

Vamos supor que estamos acessando um site Wordpress. Logo que colocamos a url no browser e acessamos, ele já faz a primeira verificação de hierarquia. Ele mostrará a home do site, de acordo com a nossa configuração. Na maioria das vezes, ele utilizará o arquivo index.php, para mostrar esta home.

Existe um diagrama, que foi criado pelos desenvolvedores do framework, que podemos consultar o fluxo. Devemos analisar da esquerda para direita, qual a direção que a hierarquia toma e as considerações que o Wordpress faz ao escolher o template a ser mostrado.

Vocês devem analisar a hierarquia completa no link abaixo:

https://wphierarchy.com

Como falamos, é um assunto muito importante e neste link existe a hierarquia completa. Mostraremos o nosso caso, em específico, na imagem abaixo, para que possam entender:

![Hierarquia de template](https://github.com/josemalcher/SchoolOfNet-Desenvolvimento-de-temas-para-Wordpress/blob/master/wp-content/themes/son-Desenvolvimento-de-temas-para-Wordpress/img-git/wp_hierarchy_static_page.png?raw=true)

Na imagem acima, mostramos todo o caminho que foi percorrido até chegar no index.php e mostrar nossas páginas estáticas. Caso tivéssemos criado algum template anterior, o Wordpress iria parar e executar. Como ele não encontrou nenhum caso, ele continua até chegar no index.php.

Por este motivo falamos, bem no início do conteúdo, que o index.php é o template mais importante do Wordpress e não é a toa que ele é obrigatório em seu tema. Porque, qualquer falta de arquivo ou erro encontrado, o index.php é acionado. Basta analisar a hierarquia, no site acima, e verão que todos os caminhos levam ao index, como fechamento de processo.

No próximo módulo mostraremos como criar um template para página estática e vocês verão que o Wordpress não chegará mais no index, porque ele encontrará este template no meio do caminho e o mostrará.

[Voltar ao Índice](#indice)

---
## <a name="parte19">Template para páginas estáticas</a>

No módulo passado, falamos sobre a hierarquia de templates. Acredito que vocês tenham entendido que o Wordpress trabalha com um processamento hierárquico, até a escolha final do template a ser exibido.

Como estamos falando de páginas estáticas, criaremos um template chamado page.php. Assim, todas as páginas estáticas utilizarão este template para exibição dos conteúdos. O index.php não será utilizado como estrutura final.

Copiaremos o conteúdo do index.php, mas faremos alterações, para agilizar o processo. Façam o mesmo.

#### Arquivo page.php

```php
<?php get_header(); ?>
<?php //get_header('personalizado'); ?>
    <div class="container">
        <h3><?php single_post_title(); ?></h3>
        <div class="row">
            <div class="col-md-9">
                <?php
                if(have_posts()): the_post();
                    the_content();
                else:
                    echo "<p>Ainda não temos post.</p>";
                endif;
                ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <!--<div class="col-md-3">
                <?php //get_sidebar('personalizado'); ?>
            </div>-->
        </div>
    </div>
<?php //get_footer('personalizado'); ?>
<?php get_footer(); ?>
```

As mudanças foram:

1- Colocamos o título, dinamicamente, utilizando a função single_post_title();.  
2- Alteramos o loop, deixando apenas o if e utilizando a função the_content();, que já imprime todo conteúdo pra nós.  
3- Comentamos todo código desnecessário, para que possamos testar depois. Não utilizaremos mais, daqui pra frente.  
4- Alteramos a estrutura de colunas do Bootstrap, deixando 9 colunas para o conteúdo e 3 colunas para sidebar, mantendo a proporção de 12 colunas.  

Agora, toda e qualquer página estática, não utilizará mais o arquivo index.php, mas sim o arquivo page.php. Existe uma maneira de criar outro template, para que atenda uma página em específico, antes de chegar no template page. Vejam a imagem abaixo:

![Mapeamento Pages](https://github.com/josemalcher/SchoolOfNet-Desenvolvimento-de-temas-para-Wordpress/blob/master/wp-content/themes/son-Desenvolvimento-de-temas-para-Wordpress/img-git/wp_page_id_slug.png?raw=true)

Notem que, antes do template page, existem duas estruturas: page-$slug.php e page-$id.php. Lembrem-se que, a hierarquia deve ser analisada da esquerda para direita.

Criaremos primeiro, um arquivo utilizando o ID para vocês verem que ele será mostrado antes do template page e em seguida, criaremos um outro template com slug, para vocês observarem que ele será mostrado antes do template com ID e o template page. É um ótimo exemplo para que vocês entendam a hierarquia.

#### Arquivo page-16.php

```
Página personalizada de contato por ID
```

Em nosso exemplo, a página de contato tem o ID 16, por isso criamos este arquivo com o número 16. No projeto de vocês pode ser que tenha outro ID. Vocês devem criar com o ID da página correta. Assim, somente a página contato que tem o ID 16, utilizará este template, o restante das páginas estáticas continuarão utilizando o template page.

Para descobrir o ID de uma página, acessem o painel administrativo em Páginas e sigam como a imagem abaixo:

![Mapeamento id Slug](https://raw.githubusercontent.com/josemalcher/SchoolOfNet-Desenvolvimento-de-temas-para-Wordpress/31cafc56355863f54461b2e7a49023ab8e2d71e9/wp-content/themes/son-Desenvolvimento-de-temas-para-Wordpress/img-git/wp_page_id.png)

Depois de criado o arquivo acima, acessem o navegador e atualizem a página contato ou acessem-na. Vocês verão a alteração, porque uma nova página será exibida. Em seguida, acessem outra página, para checarem que continua sendo exibida a page.php.

#### Arquivo page-contato.php

Depois de criarmos o arquivo com ID, criamos o arquivo com slug, para observarem a hierarquia funcionando. O template a ser mostrado deverá ser com slug, porque vem antes, na hierarquia.

```
Página personalizada de contato por slug
```
Desta forma, conseguimos mostrar a hierarquia funcionando. Se apagarmos o arquivo page-contato.php o Wordpress mostrará o page-16.php e, se apagarmos este também, ele voltará a mostrar o page.php. Se, por acaso, quiserem apagar o page.php, para testarem, verão que ele retornará ao index.php.

Observem que, se existe, o template mostra. Se não existe, busca um substituto. Este é o conceito de hierarquia do Wordpress.

Com este conceito, vocês conseguem customizar uma página específica sem alterar o layout padrão de todas as outras páginas.


[Voltar ao Índice](#indice)

---
## <a name="parte20">Template para post</a>

Criaremos um template, específico, para mostrar os posts completos. Não é legal mostrarmos no template index.php.

Apresentamos o template single.php. Ele é responsável por mostrar o conteúdo de todos os posts publicados.

Lembrando que, a regra do ID e do slug, do módulo passado, não se aplica para os posts. Para conseguirmos um template personalizado para cada post, ou grupo de posts, teremos que instalar um plugin.

Acessem Plugins/Adicionar novo. Em seguida, pesquisem por **AMS Single Post Template Selector**. Encontrando, façam a instalação e ativação.

Após instalar o plugin, basta criarem um arquivo, com o nome que quiserem. Nós indicamos que tenha sempre single- como prefixo, para que possam organizar melhor o tema.

Nós criaremos o arquivo single-cursos.php.

#### Conteúdo arquivo single-cursos.php

```php
<?php
/* Post Template - Name: Personalizado */
?>

<p>Meu template personalizado</p>
```
Notem que, o identificador para o Wordpress, é o comentário inicial. Nós definiremos o nome do nosso template personalizado, no comentário do arquivo. Desta forma, cada template que criarmos, deverá ter um nome único.

Depois de criarmos o arquivo e configurarmos as ações e layout que ele deverá assumir, basta ir até os posts criados e editá-los ou criar novos posts, selecionando este template. Vejam a imagem abaixo:

![Template para post](https://github.com/josemalcher/SchoolOfNet-Desenvolvimento-de-temas-para-Wordpress/blob/master/wp-content/themes/son-Desenvolvimento-de-temas-para-Wordpress/img-git/wp_single_template.png?raw=true)

Caso não queiram nenhum template específico, podem deixar como Default, que ele pegará o arquivo single.php, automaticamente, caso selecione, ele assumirá o template selecionado.

O Wordpress tem esta facilidade de podermos contar com plugins, para auxiliar o desenvolvimento. Sempre que precisarem de uma funcionalidade, pesquisem por um plugin já pronto, caso não tenha, vocês podem desenvolver um.

Agora, vocês podem personalizar seus templates para posts.

[Voltar ao Índice](#indice)

---
## <a name="parte21">Listando categorias  e tas</a>

Quando trabalhamos com Wordpress, principalmente em posts, trabalhamos com categorias e tags. Podemos ligar um post a várias categorias e atribuir várias tags.

Veremos como trabalhar com estas categorias e tags em nosso tema.

### Listando categorias e tags na sidebar.php

```php
<h3>Categorias</h3>
<ul class="list-group">
    <?php
    $categories = get_categories();
    foreach ($categories as $category):
        printf('<li class="list-group-item"><a href="%s" title="%s">%s</a></li>',
            get_category_link($category->term_id),
            sprintf('Ver posts de %s', $category->name),
            $category->name);
    endforeach;
    ?>
</ul>

<h3>Tags</h3>
<ul class="list-group">
    <?php
    $tags = get_tags();
    foreach ($tags as $tag):
        printf('<li class="list-group-item"><a href="%s" title="%s">%s</a></li>',
            get_tag_link($tag->term_id),
            sprintf('Ver posts sobre %s', $tag->name),
            $tag->name);
    endforeach;
    ?>
</ul>
```

Observem que, assim como os menus, nós pegamos todas as categorias e tags e fizemos um foreach para listar, utilizando o Bootstrap para estilizar.

Assim, as categorias e tags são listadas, dinamicamente. Lembrando que precisa existir algum post atrelado a categoria ou tag, para que ela apareça. Somente criá-la, ela não aparecerá.

Desta forma, o Wordpress já está filtrando os posts por categoria. Como não criamos nenhum template, específico, para categoria nem para tag, o framework está utilizando a index.php para a listagem.

No próximo módulo nós criaremos estes templates, para que não fiquem mais por conta do template index.php fazer esta listagem e filtragem.


[Voltar ao Índice](#indice)

---
## <a name="parte22">Template para categorias e tags</a>

No módulo passado nós conseguimos listar categorias e tags, utilizando o template sidebar.

Não tivemos muitas dificuldades, porque utilizamos as template tags do próprio Wordpress e depois fizemos uma simples listagem. Ainda não estamos trabalhando do modo correto, porque toda vez que clicarmos em uma categoria, como não existe nenhum template, específico, para listagem de categorias ou tags, o Wordpress ainda estará utilizando o template index.php.

Criaremos os templates para que o Wordpress trabalhe de forma correta e independente do index.

Assim como os templates para páginas estáticas, os templates de categorias e tags funcionam com id e slug, além dos tamplates principais. Começaremos com categorias.

### Template para categorias

Criaremos um template chamado category.php, que é o template padrão para categorias, utilizado pelo Wordpress e presente na documentação de hierarquia.

Copiaremos o mesmo conteúdo da index.php e alteraremos somente o título, porque o loop será o mesmo, uma vez que o Wordpress sabe interpretar cada contexto que está inserido.

```php
<?php get_header(); ?>
<?php //get_header('personalizado'); ?>

    <div class="container">
        <h3>Posts da categoria - <?= single_cat_title(); ?></h3>
        <div class="row">
            <div class="col-md-9">
                <?php
                if (have_posts()):
                    echo '<ul class="media-list">';
                    while (have_posts()) : the_post();
                        // Formando estutura da thumbnail com Bootstrap
                        $image = '';
                        if (has_post_thumbnail()):
                            $image = sprintf('<div class="media-left"><a href="%s">%s</a></div>',
                                get_the_permalink(), get_the_post_thumbnail());
                        endif;

                        // Formando estrutura de conteúdo com Boostrap
                        $body = sprintf('<div class="media-body"><h3 class="media-heading"><a href="%s">%s</a></h3><p>%s</p></div>',
                            get_the_permalink(), get_the_title(), get_the_content('Mais[...]'));

                        // Imprimindo estrutura completa de imagem com conteúdo
                        printf('<li>%s%s</li>', $image, $body);
                        echo '<hr>';
                    endwhile;
                    echo "<ul>";
                else:
                    echo "<p>Ainda não temos post.</p>";
                endif;
                ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <!--<div class="col-md-3">
            <?php //get_sidebar('personalizado'); ?>
        </div>-->
        </div>
    </div>

<?php //get_footer('personalizado'); ?>
<?php get_footer(); ?>
```

Observem que utilizamos o mesmo código do template index, mas alteramos o título, que é formado de maneira dinâmica, de acordo com a categoria. Para isto, utilizamos uma função que resgata, automaticamente, a categoria que estamos filtrando.

```
single_cat_title();
```

Este é o template que será utilizado para listar todas as categorias, a partir de agora. Caso queiram estilizar uma página para uma categoria específica, vocês devem seguir a hierarquia, do mesmo modo que fizemos com as páginas.

Identifiquem o id da categoria ou slug e criem o arquivo category-id.php ou category-slug.php. Desta forma, quando se tratar da categoria em questão, o Wordpress utilizará o template criado. Qualquer outra categoria utilizará o category.php.

### Template para Tags

O template tag funciona exatamente da mesma maneira que o template category. Só precimos mudar a nomenclatura do template padrão.

Criaremos o template chamado tag.php e desta forma já teremos um arquivo responsável por listar todas as tags. Se quiserem estilizar uma página para uma tag específica, devem seguir a hierarquia, do mesmo modo que fizemos com páginas e categorias.

Identifiquem o id da tag ou slug e criem o arquivo tag-id.php ou tag-slug.php. Desta forma, quando se tratar da tag em questão, o Wordpress utilizará o template criado. Qualquer outra tag utilizará o tag.php.

O conteúdo do arquivo tag.php será o mesmo do arquivo category, apenas mudamos a função responsável por resgatar a tag atual, para formar o título dinâmico.

```
single_tag_title();
```

### Conclusão

O Wordpress é muito simples de trabalhar, basta que entendam, muito bem, a hierarquia de templates e leiam a documentação. A curva de aprendizagem é baixa e vocês, em pouco tempo, conseguirão criar um blog, site ou um portal de notícias.

Na estrutura do Wordpress, vocês conseguem criar o template específico para cada elemento e também o genérico, que irá funcionar para todos. Fiquem atentos a esta estrutura para que possam utilizar o framework da melhor maneira possível.

[Voltar ao Índice](#indice)

---
## <a name="parte23">Criando busca para post</a>

Criaremos um mecanismo de busca para o site. Adicionaremos na sidebar, mas vocês podem inserir onde quiserem, no layout.

Criaremos um arquivo para conter o código do formulário, que será responsável pela busca. Como utilizaremos em vários templates, decidimos criar desta forma, para que possamos reutilizar em todos.

Para isso, criaremos o arquivo com o nome de searchform.php. Vocês podem criar com o nome que quiserem. Com este nome existe uma template tag que é capaz de puxar, automaticamente, este arquivo. Por isso, utilizaremos este nome, para seguir o padrão do Wordpress.

### Conteúdo do arquivo searchform.php

```php
<form class="form-horizontal" action="<?= home_url('/'); ?>" method="get">
    <div class="form-group">
        <input type="search" class="form-control" name="s" value="<?php echo get_search_query(); ?>">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Ir</button>
    </div>
</form>
```

### Chamando template searchform.php com template tag

No arquivo sidebar.php, chamaremos a template tag get_search_form();, vocês podem chamar onde quiserem e quantas vezes quiserem. Esta função pega o formulário que criamos no arquivo searchform.php.

Adicionamos antes das listagens de categorias e tags.

```php
<?php get_search_form(); ?>
```

### Criando template search.php

De acordo com a hierarquia, se o o Wordpress não encontrar um template search.php ele buscará o index.php direto. Se já executaram os passos acima, as buscas devem estar funcionando. Criaremos o template search.php para termos um template específico para busca. Assim, conseguimos personalizar os resultados.

#### Conteúdo do arquivo search.php

```php
<?php get_header(); ?>
<?php //get_header('personalizado'); ?>

<div class="container">
    <h3>Resultado de posts por <?= get_search_query(); ?></h3>
    <div class="row">
        <div class="col-md-9">
            <?php
            if(have_posts()):
                echo '<ul class="media-list">';
                while (have_posts()) : the_post();
                    // Formando estutura da thumbnail com Bootstrap
                    $image = '';
                    if(has_post_thumbnail()):
                        $image = sprintf('<div class="media-left"><a href="%s">%s</a></div>',
                        get_the_permalink() , get_the_post_thumbnail());
                    endif;

                    // Formando estrutura de conteúdo com Boostrap
                    $body = sprintf('<div class="media-body"><h3 class="media-heading"><a href="%s">%s</a></h3><p>%s</p></div>',
                    get_the_permalink(), get_the_title(), get_the_content('Mais[...]'));

                    // Imprimindo estrutura completa de imagem com conteúdo
                    printf('<li>%s%s</li>', $image, $body);
                    echo '<hr>';
                endwhile;
                echo "<ul>";
            else:
                echo "<p>Nenhum conteúdo encontrado.</p>";
            endif;
            ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
        <!--<div class="col-md-3">
            <?php //get_sidebar('personalizado'); ?>
        </div>-->
    </div>
</div>

<?php //get_footer('personalizado'); ?>
<?php get_footer(); ?>
```

Duplicamos o arquivo category.php para reaproveitar o código e alteramos apenas o título, para que fique dinâmico. Desta forma, o texto pesquisado aparece, dinamicamente, no título do template.

Para isso, utilizamos uma template tag chamada get_search_query();. A mesma, é utilizada no template searchform.php, para que o usuário consiga ter o histórico de sua busca, no campo do formulário.

Depois de criado o template search.php, vocês podem realizar novas buscas e notarão que não está mais utilizando o index.php para listar os resultados.

[Voltar ao Índice](#indice)

---
## <a name="parte24">Página 404</a>

Um assunto que é muito importante, mas algumas pessoas esquecem de tratar, é o template 404.php.

Como o Wordpress sempre busca o index.php, caso não encontre os templates na hierarquia, quando tentamos acessar uma página que não existe, nós somos redirecionados para a index.php e caímos na home do site.

Isso não é legal, porque não estamos informando ao usuário que aquela página acessada, anteriormente, não existe.

Veja o conteúdo do arquivo 404.php que criamos.

```php
<?php get_header(); ?>
<?php //get_header('personalizado'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9 text-center">
                <h3>Erro 404!!</h3>
                <p class="alert alert-danger">Opss!! Esta página não existe.</p>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
            <!--<div class="col-md-3">
            <?php //get_sidebar('personalizado'); ?>
        </div>-->
        </div>
    </div>
<?php //get_footer('personalizado'); ?>
<?php get_footer(); ?>
```
Lembrem-se, sempre, de criarem o arquivo 404.php. Façam sua estilização para informar que o usuário está tentando acessar um conteúdo que não existe e seu sistema ou site será mais completo.

[Voltar ao Índice](#indice)

---
## <a name="parte25">Trabalhando com Assets</a>

Ensinaremos como importar qualquer tipo de assets para utilizarem no tema. Pode ser uma arquivo style ou um javascript, por exemplo.

Primeiro, temos a forma manual, que, nem sempre é a mais indicada, mas dependendo do projeto, funciona. Aprenderemos uma função que é responsável por pegar o caminho relativo, para que consigam fazer a inclusão destes arquivos.

Criamos uma pasta assets, na pasta raiz do projeto, onde teremos os arquivos do Bootstrap. No início do conteúdo, nós chamamos os arquivos de forma online, via CDN e falamos que no final iríamos ensinar a fazer de forma local. Portanto, baixamos os arquivos do Bootstrap e colocamos na pasta assets.

### Chamando assets manual no header.php

```php
<?php
<link rel="stylesheet" href="<?php printf('%s/assets/css/bootstrap.min.css',get_template_directory_uri()); ?>">
?>
```

Podemos substituir a forma online, que está atualmente, por este código acima. Desta forma, estamos puxando o css do arquivo local e não mais do conteúdo CDN.

A função get_template_directory_uri() retorna o seguinte valor http://localhost:8000/wp-content/themes/sonblog, que é exatamente o que precisamos para chegar até a pasta do tema que estamos. Vale lembrar que ele pega o endereço relativo do tema que estiver ativo, sempre.

Utilizamos o printf para imprimir o caminho relativo completo, adicionando o que faltava para chegar até o arquivo que queríamos. Faremos o mesmo com o javascript. Vejam, abaixo:

```php
<?php
<script src="<?php printf('%s/assets/js/bootstrap.min.js',get_template_directory_uri()); ?>"></script>
?>
```

Desta forma, temos o mesmo efeito anterior, e todas as funcionalidades do Bootstrap, corretamente, carregadas de forma local. Mas, como dissemos, não é a forma mais recomendada, utilizando Wordpress.

Existe uma forma em que chamamos direto no arquivo functions.php utilizando função, onde podemos chamar todos os assets na ordem que quisermos. Podemos escolher se chamaremos no header ou no footer.

### Chamando assets no arquivo functions.php

```php
<?php
function my_wp_scripts(){
    wp_enqueue_style('bootstrap', sprintf('%s/assets/css/bootstrap.min.css',get_template_directory_uri()));
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_script('bootstrap', sprintf('%s/assets/js/bootstrap.min.js',get_template_directory_uri()),['jquery'],null,true);
}

add_action('wp_enqueue_scripts' , 'my_wp_scripts');
?>
```
Esta é a forma mais indicada para chamar arquivos de css, javascript e, até mesmo, imagens, caso necessite.

Resumindo, criamos uma função e a chamamos no momento em que o Wordpress chamar todos os scripts. Nós adicionamos uma ação para conseguir este efeito.

add_action('wp_enqueue_scripts' , 'my_wp_scripts');

O primeiro parâmetro é a escolha do momento do carregamento do Wordpress em que iremos incluir os nossos arquivos e, o segundo, é o nome da função que criamos, com a fila de arquivos a serem incluídos.

Dentro da nossa função trabalhamos com dois tipos de funções: wp_enqueue_style e wp_enqueue_scripts. Como o próprio nome diz, uma é para carregarmos estilos e a outra, para carregarmos scripts.

Estas duas funções possuem mais parâmetros, para saberem mais, vejam os links abaixo:

https://developer.wordpress.org/reference/functions/wp_enqueue_style/

https://developer.wordpress.org/reference/functions/wp_enqueue_script/

Notem que, na função de scripts, utilizamos mais parâmetros. Vejam o que são cada um deles:

1- Nome de registro, que deve ser único entre os scripts, podendo se repetir para os styles.  
2- Caminho relativo do arquivo  
3- Dependências  
4- Versão  
5- True ou false. True significa que é para carregar no footer e false o contrário. O padrão, caso não informe, será false.  

Desta forma, estamos carregando o script do Bootstrap no footer, como deveria ser.

### wp_head() e wp_footer()

Estas duas funções são essenciais para que o tema seja completo, porque ambas fazem o carregamento de funções, estilos e scripts que fazem com que o tema tenha mais poder. Sem estas duas funções, não temos acesso à barra de navegação do painel, que será criada após a inclusão das mesmas, e nem podemos chamar os scripts e estilos da forma que chamamos no arquivo functions.php.

### Onde chamar a função wp_head()?

O local mais indicado para chamar a função wp_head é antes do fechamento da tag head do html. Podemos então abrir o arquivo header.php e adicionar, conforme o código, abaixo:

```php
<head>
    <meta charset="UTF-8">
    <title>Blog da School of Net</title>
    <?php wp_head(); ?>
</head>
```
### Onde chamar a função wp_footer()?

O local mais indicado para chamar a função wp_footer é antes do fechamento da tag body do html. Podemos abrir o arquivo footer.php e adicionar, confore o código, abaixo:

```php
<footer>
    <div class="container">
        <div class="row text-center">
            <p>School of Net <?php echo date('Y')?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
```

### Estilizando o footer

Notem que alteramos o footer para conclusão do nosso projeto. Inserimos a tag footer e centralizamos o texto. Para ficar melhor, adicionamos algumas formatações ao nosso arquivo style.css, que até então não tínhamos utilizado. Vejam o código, abaixo:

```css
footer {
    height: 60px;
    background-color: black;
    color: white;
}

footer .container{
    padding: 20px;
}
```

O código acima, foi adicionado apenas por estética, para não finalizarmos com o footer sem nenhuma estilização, pois todos os outros blocos já estavam estilizados com Bootstrap.

### Conclusão

Este foi nosso conteúdo de Desenvolvimento de temas para Wordpress, esperamos que vocês tenham aprendido os conceitos básicos da criação de uma tema Wordpress.

Poderíamos resumir este assunto, falando que o mais importante seria vocês entenderem os arquivos modelos, que fomos criando no decorrer dos módulos, referentes a hierarquia do framework. Saber qual o processo do Wordpress até renderizar uma página, porque o restante é somente conhecimento de PHP, HTML e CSS.

Vocês já podem editar os temas padrões do Wordpress, caso queiram, pois já possuem o conhecimento básico de como os mesmos são criados.

A School Of Net quer abranger todo e qualquer conteúdo de tecnologia que seja relevante. Podem esperar por mais conteúdos como este.

Esperamos que vocês tenham gostado do conteúdo. Usem todo conhecimento para criarem sites como quiserem.

Obrigado por terem chegado até o final deste conteúdo. Não parem por aqui, continuem procurando conteúdos na School Of Net, para estarem por dentro das novas tecnologias.

[Voltar ao Índice](#indice)

---