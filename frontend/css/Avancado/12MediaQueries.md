# Media Queries

@media at-rules, usado para direcionar estilos em mídias específicas, como tela ou impressão, já foram abordadas. Mas isso pode ser levado a um nível ainda maior de sofisticação, permitindo que você especifique diferentes opções de design dependendo do tamanho da tela. Uma página pode então ser otimizada e disposta de maneira completamente diferente para telefones celulares, tablets e vários tamanhos de janela do navegador.

Para recapitular, se quisermos aplicar algum CSS apenas à mídia baseada em tela, por exemplo, uma opção seria inserir algo como o seguinte na parte inferior de uma folha de estilo:

@media screen {

    body { font: 12px arial, sans-serif }
    #nav { display: block }

}

## Browser-size specific CSS

Para estender o exemplo anterior, não apenas a mídia baseada em tela pode ser direcionada, mas também a mídia baseada em tela de um determinado tamanho:

@media screen and (max-width: 1000px) {
    #content { width: 100% }
}

Isso diz a um navegador para aplicar um bloco de CSS quando sua janela de visualização tiver 1000 pixels de largura ou menos. Você pode usar isso para fazer algo tão simples como tornar uma área de conteúdo ou navegação mais restrita ou pode reorganizar completamente o layout de uma página (como empilhar seções de página umas sobre as outras em vez de exibi-las em colunas).

Você pode aplicar mais de uma regra @media, então você pode ter vários designs diferentes que dependem do tamanho do navegador:

@media screen and (max-width: 1000px) {
    #content { width: 100% }
}

@media screen and (max-width: 800px) {
    #nav { float: none }
}

@media screen and (max-width: 600px) {
    #content aside {
        float: none;
        display: block;
    }
}

Observe que se, por exemplo, uma área de layout tivesse 600 pixels de largura ou menos, todos os três seriam aplicados (porque seria menor ou igual a 1000px, 800px e 600px).

Além de usar uma largura máxima geral na área de conteúdo principal (os elementos do artigo), este site também possui várias regras CSS que dependem do tamanho. Se você puder fazer isso, tente redimensionar seu navegador para ver as alterações entrarem em vigor.

Você também pode usar "min-width" no lugar de "max-width" se quiser fazer as coisas ao contrário e aplicar CSS a tamanhos iguais ou acima de um determinado comprimento.

## Orientation-specific CSS

Se você deseja aplicar CSS dependendo da orientação do navegador, faça o seguinte:

@media screen and (orientation: landscape) {
    #nav { float: left }
}

@media screen and (orientation: portrait) {
    #nav { float: none }
}

Isso pode ser especialmente útil com dispositivos móveis ...

## Device-specific CSS

Não estamos falando de CSS diferente para cada marca e modelo de laptop e telefone, mas podemos, com a consciência relativamente limpa (contanto que sejamos sensatos), especificar os gostos e as dimensões da tela do dispositivo e sua proporção de pixels.

Um tipo de mídia "handheld" existe e poderia ser usado como portátil @mídia handheld mas não é amplamente suportado e a distinção do que é "handheld" tornou-se obscura devido à proliferação de todos os tipos de dispositivos com todos os tipos de tamanhos de tela.

## Width and height

device-width, device-height, min-device-width, max-device-width, min-device-height e max-device-height podem ser usados para atingir a resolução computada de um dispositivo:

@media screen and (min-device-height: 768px) and (max-device-width: 1024px) {
    /* You can apply numerous conditions separated by "and" */
}

## Pixel ratio

É importante ter em mente que um pixel CSS não precisa ser igual a um pixel físico do monitor. Embora uma tela possa ter fisicamente 720 pixels de largura, um navegador pode realmente aplicar CSS assumindo que ela tenha 480 pixels de largura, por exemplo. Isso é feito para que uma página da web com design padrão caiba mais provavelmente na tela. Neste exemplo, há uma proporção de pixel de 1,5: 1: Há 1½ pixels físicos para cada pixel CSS. Um monitor de desktop padrão bog terá uma proporção de pixel de 1:1:Um pixel CSS para cada pixel físico.

Se você deseja aplicar estilos apenas a esses dispositivos, pode usar algo como:

@media (device-pixel-ratio: 2) {
    body { background: url(twiceasbig.png) }
}

Isso se aplica a aparelhos como o iPhone (4 e superior), com uma proporção de pixels de 2:1. Você também pode usar a proporção de pixel de dispositivo mínimo e proporção de pixel de dispositivo máximo.

Por falar em iPhones também use -webkit-device-pixel-ratio, etc, etc ...

Você também pode mexer na janela de visualização de um dispositivo para que toque como você deseja. Voltando ao HTML, o seguinte metaelemento forçará um dispositivo a renderizar uma página na largura da janela de visualização (em vez de tentar mostrar um design de largura maior e diminuir o zoom, o que fará por padrão se a página puder ser mais larga do que a largura da janela de visualização) e também evita que o usuário aumente e diminua o zoom:

<meta name = "viewport" content = "width = device-width, initial-scale = 1, maximum-scale = 1, user-scalable = no">

A vantagem disso é que você pode controlar exatamente o que é aplicado ao tamanho físico da tela. E embora seja doloroso remover os controles do usuário, se o design for deliciosamente grande e feito apenas para aquela tela pequena, não deve haver necessidade de zoom.

O site HTML Dog segue esta abordagem: em vez de um pequeno dispositivo tentar renderizar uma página maior e mais gorda reduzindo-a, o CSS a transforma em um design de coluna única feito especificamente para tal dispositivo.

## Others

Você também pode aplicar estilos dependendo da resolução do dispositivo:

@media screen and (resolution: 326dpi) { /* */ }

@media screen and (min-resolution: 96dpi) { /* */ }

Ou em sua proporção:

@media screen and (device-aspect-ratio: 16/9) { /* */ }

## Original em inglês

https://www.htmldog.com/guides/css/


