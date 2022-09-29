# Criação de um aplicativo mobile android no Monaca

Usarei um exemplo pure-js-crud encontrado no GitHub e a plataforma Monaca para gerar o binário atk

O exemplo é o mais simples possível. Apenas quero mostrar como funciona. Depois poderemos adicionar funcionalidades e características ou um exemplo mais sofisticado.

## Ferramentas usadas

- pure-js-crud - https://github.com/raghuv9/pure-js-crud
- Framework Monaca - https://monaca.io/

## Limite de builds por dia

No plano free somente um build pode ser feito por dia

## Projeto

Podemos criar o projeto pelo site da Monaca ou via sua cli, pelo desktop. Pelo site fazemos login e ir para o site da console

Somente o Google Chrome é suportado atualmente para usar a IDE

https://console.monaca.mobi/dashboard

## Build

E fazer o build também pode ser pelo site.

## Configurações do aplicativo

Selecionar o projeto e clicar à direita em Build
Clique abaixo em App configuration e preencha.

Dica:

Package Name

Padrão - com.example.helloworld

Meu domínio - ribafs.me
Meu projeto - crud-js

me.ribafs.crudjs

## Criação do projeto

Criando o projeto no https://console.monaca.mobi/dashboard

- Clicar em Create New Project
- Em project Type clique em Blank (sem nenhum framework)
- Project name - crud-js
- Description - Pequeno CRUD feito com JS
- Create project

## Estrutura criada

node_modules/
res/
www/
.gitignore
.monacaignore
config.xml
LICENSE
package-lock.json
package.json

Na pasta www é que está o código do nosso aplicativo. Todo o restante faz paste da estrutura do Monaca

www/
    components/
    css/
    index.html
    manifest.json

## Abrir o projeto na IDE

Clique no nome do projeto para selecioná-lo

Clique para abrir a Open in Cloud IDE

## Adaptação do projeto criado para o nosso pure-js-crud

Agora é o momento em que vamos usar o exemplo criado e adaptar para o pure-js-crud

O index.html do projeto criado pelo Monaca tem o seguinte código:

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="default-src * data: gap: content: https://ssl.gstatic.com; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
    <script src="components/loader.js"></script>
    <link rel="stylesheet" href="components/loader.css">
    <link rel="stylesheet" href="css/style.css">
    <script>
    </script>
</head>
<body>
	<br />
    This is a template for Monaca app.
</body>
</html>

Precisamos manter a estrutura existente e apenas adicionar o código do pure-js-crud que não tem aqui.

Olhando a seção <head> do pure-js-crud e comparando com esta, vejo que precisamos trazer o include do bootstrap e o title.

## Pré-visualização

Aba direita da IDE

Para conseguir visualizar no emulador da IDE precisamos ajustar a plataforma. Por default ele exibe um iPhone 8 - 750.
Se estiver usando Android ajuste para uma das opções:

Pixel 2 - 1080x1920
Pixel 2 XL - 1440x2880
Galaxy 58 - 1440x2960
Xperia XZ1 - 1080x1920

Idealmente devemos criar um app responsivo, que se adapte a qualquer dimensões.

Veja que se for visualizar e testar um aplicativo android usando o emulador iOS não dará certo.

Depois precisaremos substituir todo o body acima pelo do pure-js-crud. Então o index.html final do do Monaca ficará assim:

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="default-src * data: gap: content: https://ssl.gstatic.com; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
    <script src="components/loader.js"></script>
    <link rel="stylesheet" href="components/loader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>JS CRUD</title>
    <script>
    </script>
</head>
<body>
    <br>
    <div class="container">
    <h1>JS CRUD</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form onsubmit="return validateMyForm()" autocomplete="off">
                    <table class="table">
                    <tr>
                    <div class="form-group">
                        <td><label>Nome</label></td>
                        <td><input type="text" id="name" name="name" class="form-control"></td>
                    </div>
                    </tr>
                    <tr>
                    <div class="form-group">
                        <td><label>Idade</label></td>
                        <td><input type="text" id="age" name="age" class="form-control"></td>
                    </div>
                    </tr>
                    <tr>
                    <td></td><td><button class="btn btn-primary btn-sm">Enviar</button></td>
                    </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-primary text-center">Abaixo seus dados</h2>
                    <table class="table" id="mytable">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="main.js"></script>
</html>

O index está pronto. Apenas copie e cole sobrescrevendo o existente na ide. Como nosso pequeno pure-js-crud tem somente dois arquivos, então precisamoso enviar o main.js para a nuvem. Devemos enviá-lo para que fique no mesmo diretório do index.html, ou seja, dentro da pasta www

- Abrir a pasta www
- Vamos criar o arquivo main.js dentro de www
- Abrir main.js (clicar sobre ele com o botão direito - Open File)
- Copiar o conteúdo do main.js local para o main.js da ide
- Salvar teclando Ctrl+S

Com pouco tempo já aparece o preview no nosso CRUD à direita.

## Efetuando o Build para Android

Clicar no menu superior - Build
Build App for Android

Veja que temos duas opções, build para debug e para release.

Custom Build Debug e Debug Build

Debug Build - Start Build

Rolar um pouco a tela da área do build

Download to local PC
Install via QR code
Notify registered e-mail - envia um email com o link para download para o e-mail registrado no Monaca

Voltar para Build Android APP

Build for Release
Release Build
Alias (ribafs)  Password - ********
Start Build

Congratulations!
Your build is successfully finished. Please download and install the app on the device. Please click here to see the build log.
A successful build does not guarantee that your application will pass the regulation tests for uploading on an app store.


