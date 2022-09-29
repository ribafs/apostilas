# At-rules

At-Rules: @import, @media, and @font-face

At-rules são pequenos abraços inteligentes e poderosos que encapsulam um monte de regras CSS e as aplicam a algo específico. Eles podem ser usados para importar outros arquivos CSS, aplicar CSS a uma mídia específica ou incorporar fontes incomuns.

Cada regra começa com um arroba "@".

## Importando

Vamos começar com a regra @import simples. Isso é usado para anexar outra folha de estilo em sua existente.

@import url(morestyles.css);

Isso pode ser usado se um site requer folhas de estilo longas e complexas que podem ser mais fáceis de gerenciar se forem divididas em arquivos menores.

Importante

As regras @import devem ser colocadas no topo de uma folha de estilo, antes de qualquer outra regra.

## Targeting media types/Tipos de mídia de segmentação

@media pode ser usado para aplicar estilos a uma mídia específica, como impressão.

@media print {
    body {
        font-size: 10pt;
        font-family: times, serif;
    }

    #navigation {
        display: none;
    }
}

Os valores que seguem "@media" podem incluir screen, print, projection, handheld e all ou uma lista separada por vírgulas de mais de um, como:

@media screen, projection {
    /* ... */
}

Não para por aí. O CSS 3 permite que você segmente não apenas uma mídia específica, mas também variáveis relacionadas a essa mídia, como o tamanho da tela (particularmente útil na segmentação de celulares). Dê uma olhada na página Media Queries (https://www.htmldog.com/guides/css/advanced/mediaqueries/) para mais detalhes.

## Embedding fonts

@font-face existe há muito tempo, mas foi quase inútil durante grande parte de sua vida. CSS 3 o aprimorou e agora é amplamente usado como uma técnica para incorporar fontes em uma página da web para que um tipo de letra possa ser usado mesmo que não esteja no computador do usuário. Assim, você não precisa mais depender de fontes "seguras para a web", como Arial ou Verdana. Tempos emocionantes.

@font-face {
    font-family: "font of all knowledge";
    src: url(fontofallknowledge.woff);
}

O que isso faz é criar uma fonte chamada "font of all knowledge" usando o descritor da família de fontes e vincular o arquivo de fonte "fontofallknowledge.woff" a esse nome usando o descritor src. "font of all knowledge" pode então ser usada em uma regra de fonte padrão, como:

p { font-family: "font of all knowledge", arial, sans-serif; }

A fonte será baixada (neste caso do mesmo diretório do arquivo CSS) e aplicada aos parágrafos. Se o navegador estiver muito decrépito para lidar com novas fontes brilhantes, ele simplesmente reverterá para a próxima fonte padrão da lista. Magia!

Você também pode procurar várias fontes para aplicar à regra com uma lista separada por vírgulas. Verificar se uma fonte já está presente no computador de um usuário, eliminando a necessidade de baixá-la, também pode ser feito substituindo "url" no valor src por "local".

E como um arquivo de fonte pode conter uma grande quantidade de pesos ou estilos, você também pode especificar em qual deles está interessado. Portanto, a regra @font-face pode ter a seguinte aparência:

@font-face {
    font-family: "font of all knowledge";
    src: local("font of all knowledge"), local(fontofallknowledge), url(fontofallknowledge.woff);
    font-weight: 400;
    font-style: normal;
}

Legalmente falando, você não pode simplesmente jogar qualquer fonte antiga que você deseja na Internet porque existem direitos autorais e termos de uso a serem considerados, sem mencionar problemas de compatibilidade e otimização.

No entanto, existem fontes da web gratuitas que você pode encontrar, baixar, fazer upload e usar. Você mesmo pode criar uma se você for um cientista maluco inteligente. Também existem fornecedores de fontes da web, como o Typekit da Adobe, que têm uma grande seleção de fontes para escolher a um preço.

O Google Web Fonts tem uma seleção mais limitada, mas é de uso gratuito e torna as coisas super fáceis. Tudo que você precisa fazer é criar um link para um de seus arquivos CSS externos, que nada mais é do que uma regra @font-face, e besteira - você tem uma fonte nova e adorável para brincar.


