# Seletores Class e ID

No Tutorial de CSS para iniciantes, examinamos apenas os seletores HTML - aqueles que representam uma tag HTML.

Você também pode definir seus próprios seletores na forma de seletores de classe ou ID.

A vantagem disso é que você pode ter o mesmo elemento HTML, mas apresentá-lo de maneira diferente dependendo de sua classe ou ID. Um elemento h1 com a classe 'grande' tem uma característica e um h1 com a classe 'pequeno' tem outra característica, como veremos a seguir.

No CSS, um seletor de classe é um nome precedido por um ponto final (".") e um seletor de ID é um nome precedido por um caractere hash ("#").

Portanto, o CSS pode ser semelhante a:

## ID
```css
#top {
    background-color: #ccc;
    padding: 20px
}
```
## class

.intro {
    color: red;
    font-weight: bold;
}

O HTML se refere ao CSS usando os atributos id e class. Pode ser algo assim:

<div id="top">

<h1>Chocolate curry</h1>

<p class="intro">This is my recipe for making curry purely with chocolate</p>

<p class="intro">Mmm mm mmmmm</p>

</div>

## Diferença entre ID e class

A diferença entre um ID e uma classe é que um ID pode ser usado para identificar um único elemento, enquanto uma classe pode ser usada para identificar vários elementos.

Você também pode aplicar um seletor a um elemento HTML específico simplesmente declarando o seletor HTML primeiro, de modo que p.jam {/* qualquer */} será aplicado apenas a elementos de parágrafo que tenham a classe "jam".

.jam{
  color: red;
}

p.jam{
  font-size: 14px;
}

<p class="jam">Ribamar FS</p>

<p>Este é padrão</p>


