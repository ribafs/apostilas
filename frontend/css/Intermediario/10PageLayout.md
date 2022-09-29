# Layout de Página

Antigamente, nós usavam tabelas HTML para fazer o layout das páginas da web. Mas CSS logo apareceu e mudou tudo isso.

O layout com CSS é fácil. Você apenas pega um pedaço da sua página e joga onde quiser. Você pode colocar esses pedaços de forma absoluta ou relativa a outro pedaço.

## Positioning/Posicionamento

A propriedade position é usada para definir se uma caixa/box é absoluta, relativa, estática ou fixa:

    • static é o valor padrão e renderiza uma box na ordem normal das coisas, conforme aparecem no HTML.
    • relative é muito parecido com static, mas a box pode ser deslocada de sua posição original com as propriedades  top, right, bottom e left.
    • O absolute puxa uma caixa para fora do fluxo normal do HTML e a entrega a um mundo todo próprio. Neste mundinho maluco, a caixa absolute pode ser colocada em qualquer lugar da página usando as propriedades top, right, bottom e left.
    • fixed se comporta como absoluto, mas posicionará absolutamente uma box em referência à janela do navegador em oposição à página da web, portanto, as boxes fixas devem permanecer exatamente onde estão na tela, mesmo quando a página é rolada.

Quando falamos de boxes absolutamente posicionadas sendo colocadas em qualquer lugar da página, elas ainda estão relativamente posicionadas nas bordas da página. E para adicionar outro retrocesso, a página não precisa realmente ser o contêiner - uma box será posicionada "absolutamente" em relação a qualquer box contêiner posicionada não estática. Apenas ignore isso por enquanto ...

## Layout usando posicionamento absoluto

Você pode criar um layout tradicional de duas colunas com posicionamento absoluto se tiver algo como o seguinte HTML:

<div id="navigation">
    <ul>
        <li><a href="this.html">This</a></li>
        <li><a href="that.html">That</a></li>
        <li><a href="theOther.html">The Other</a></li>
    </ul>
</div>

<div id="content">
    <h1>Ra ra banjo banjo</h1>
    <p>Welcome to the Ra ra banjo banjo page. Ra ra banjo banjo. Ra ra banjo banjo. Ra ra banjo banjo.</p>
    <p>(Ra ra banjo banjo)</p>
</div>

Usar seções é mais interessante que divs

E se você aplicar o seguinte CSS:

#navigation {
    position: absolute;
    top: 0;
    left: 0;
    width: 200px;
}

#content {
    margin-left: 200px;
}

Agora sim, com o CSS ficam duas colunas, uma ao lado da outra.

Você verá que isso definirá a barra de navegação para a esquerda e definirá a largura para 200 pixels. Como a navegação está absolutamente posicionada, ela não tem nada a ver com o fluxo do resto da página, portanto, tudo o que é necessário é definir a margem esquerda da área de conteúdo para ser igual à largura da barra de navegação.

Com um posicionamento inteligente, você pode organizar quantos blocos quiser. Se você quiser adicionar uma terceira coluna, por exemplo, você pode adicionar um pedaço “navigation2” ao HTML e alterar o CSS para:

#navigation {
    position: absolute;
    top: 0;
    left: 0;
    width: 200px;
}

#navigation2 {
    position: absolute;
    top: 0;
    right: 0;
    width: 200px;
}

#content {
    margin: 0 200px; /* setting top and bottom margin to 0 and right and left margin to 200px */
}

A única desvantagem das boxes posicionadas de forma absoluta é que, como vivem em um mundo próprio, não há como determinar com precisão onde elas terminam. Se você fosse usar os exemplos acima e todas as suas páginas tivessem pequenas barras de navegação e grandes áreas de conteúdo, você estaria bem, mas, especialmente ao usar valores relativos para larguras e tamanhos, muitas vezes você tem que abandonar qualquer esperança de colocar qualquer coisa, como um rodapé, abaixo dessas caixas. Se você quisesse fazer isso, uma maneira seria flutuar/float seus pedaços, em vez de posicioná-los de maneira absoluta.

## Floating

Uma box flutuante a deslocará para a direita ou esquerda de uma linha, com o conteúdo ao redor fluindo ao redor dela.

A flutuação normalmente é usada para deslocar blocos menores em uma página, como empurrar um link de navegação para a direita de um contêiner, mas também pode ser usada com blocos maiores, como colunas de navegação.

Usando float, você pode fazer:
float: left
float: right

Trabalhando com o mesmo HTML, você pode aplicar o seguinte CSS:

#navigation {
    float: left;
    width: 200px;
}

#navigation2 {
    float: right;
    width: 200px;
}

#content {
    margin: 0 200px;
}

Se você não quiser que a próxima box envolva os objetos flutuantes, você pode aplicar a propriedade clear:

     • clear: left - limpará as caixas flutuantes da esquerda
     • clear: right - limpará as caixas flutuantes da direita
     • clear: both - limparão as caixas flutuantes esquerda e direita.

Portanto, se, por exemplo, você quiser um rodapé em sua página, poderá adicionar um pedaço de HTML ...

<div id="footer">
    <p>Footer! Hoorah!</p>
</div>
…and then add the following CSS:

#footer {
    clear: both;
}

Um rodapé que aparecerá abaixo de todas as colunas, independentemente do comprimento de qualquer uma delas.

Esta foi uma introdução geral ao posicionamento e flutuação/float, com ênfase nos “pedaços” maiores de uma página, mas lembre-se, esses métodos também podem ser aplicados a qualquer caixa dentro dessas caixas. Com uma combinação de posicionamento, flutuação, margens, preenchimento e bordas, você deve ser capaz de representar qualquer web design que sua pequena imaginação travessa possa conjurar. A melhor maneira de aprender? Fazendo!

## Diversos exemplos no site da HTML Dog

https://www.htmldog.com/examples/


