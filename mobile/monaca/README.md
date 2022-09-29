# Criando apps mobile com facilidade

Se você mexe com programação web (HTML, CSS e JavaScript) então pode criar aplicativos e jogos mobile do tipo híbridos. Existe uma enorme quantidade de frameworks para a criação de aplicativos mobile. Alguns que trabalham com o código nativo e outros que trabalham com código web e convertem para código nativo, os chamados híbridos.

Como mexo bem pouco com Java e o android-studio é muito pesado para a minha máquina fiz uma boa pesquisa por alternativas.

O Phonegap fazia isso muito bem. Eu instalava sua cli em meu desktop. Com ela criava um projeto simples, então adaptava para um aplicativo web existente (agenda por exemplo) ou para um jogo. Depois que estava funcionando nonavegador eu sompactava e mandava para a nuvem e ele gerava o apk para mim. Eu não precisava ter nem mesmo o Java instalado. Todo este trabalho pesado e trabalhoso de instalar e configurar ele fazia na nuvem.

O Phonegap foi descontinuado pela Adobe. Visitando seu site https://build.phonegap.com/ vi um link para o blog onde explicam por que o descontinuaram. Inclusive indicam alternativas ao Phonegap. A primeira da lista é o Monaco, que é a minha preferida. Com ele criamos aplicativos e jogos mobile de forma similar a que criavamos no Phonegap.

## Resumindo o processo de criação:

- Efetuamos o registro no site - https://monaca.io/
- Podemos criar o aplicativo pela IDE do site ou via cli instalada localmente
- Depois de criar um aplicativo básico então adaptamos para o app ou jogo que queremos e se com a cli enviamos para a nuvem
- Efetuamos as configurações na IDE
- Efetuamos o build para Android, iOS ou Windows
- Ao final podemos baixar o binário ou enviar um link do mesmo para nosso e-mail. É prudente baixar, pois eles não mantém os binários, somente o código

Caso queira tutoriais detalhados sobre como criar um aplicativo e um jogo, inclusive os apks, veja abaixo:

https://github.com/ribafs/mobile/tree/main/Monaca

Outros exemplos e tutoriais, inclusive sobre localstore, websql, indexeddb, etc

https://github.com/ribafs/mobile
