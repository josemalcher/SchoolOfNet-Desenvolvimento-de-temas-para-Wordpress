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

## <a name="parte5"> </a>

[Voltar ao Índice](#indice)

---

## <a name="parte6"> </a>

[Voltar ao Índice](#indice)

---

## <a name="parte7"> </a>

[Voltar ao Índice](#indice)

---

## <a name="parte8"> </a>

[Voltar ao Índice](#indice)

---

## <a name="parte9"> </a>

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