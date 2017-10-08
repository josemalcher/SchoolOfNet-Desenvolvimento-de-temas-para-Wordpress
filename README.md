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

## <a name="parte10"> </a>

[Voltar ao Índice](#indice)

---

## <a name="parte11"> </a>

[Voltar ao Índice](#indice)

---

## <a name="parte12"> </a>

[Voltar ao Índice](#indice)

---

## <a name="parte13"> </a>

[Voltar ao Índice](#indice)

---

## <a name="parte14"> </a>

[Voltar ao Índice](#indice)

---

## <a name="parte15"> </a>

[Voltar ao Índice](#indice)

---

## <a name="parte16"> </a>

[Voltar ao Índice](#indice)

---

## <a name="parte17"> </a>

[Voltar ao Índice](#indice)

---

## <a name="parte18"> </a>

[Voltar ao Índice](#indice)

---
## <a name="parte19"> </a>

[Voltar ao Índice](#indice)

---
## <a name="parte20"> </a>

[Voltar ao Índice](#indice)

---
## <a name="parte21"> </a>

[Voltar ao Índice](#indice)

---
## <a name="parte22"> </a>

[Voltar ao Índice](#indice)

---
## <a name="parte23"> </a>

[Voltar ao Índice](#indice)

---
## <a name="parte24"> </a>

[Voltar ao Índice](#indice)

---
## <a name="parte25"> </a>

[Voltar ao Índice](#indice)

---