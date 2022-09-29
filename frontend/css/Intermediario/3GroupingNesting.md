# Grouping and Nesting

Agrupamento e aninhamento

Acima temos duas maneiras de simplificar o código - HTML e CSS - e torná-lo mais fácil de gerenciar.

## Agrupamento

Você pode dar as mesmas propriedades a vários seletores sem ter que repeti-los.

Por exemplo, se você tem algo como:

h1 {
  text-align: center;
  color: red;
}

h2 {
  text-align: center;
  color: red;
}

p {
  text-align: center;
  color: red;
}

Você pode simplesmente separar os seletores com vírgulas em uma linha e aplicar as mesmas propriedades a todos eles, fazendo o seguinte:

Agrupando. O código abaixo é correspondente ao código acima

h1, h2, p {
  text-align: center;
  color: red;
}

Exemplo de uso

<style>
h1, h2, p {
  text-align: center;
  color: red;
}
</style>

<h1>Hello World!</h1>
<h2>Smaller heading!</h2>
<p>This is a paragraph.</p>

Exemplo: se eu quizer que h1, h2 e h3 sejam marrons:

<style type="text/css">
h1, h2, h3 {
	color: Maroon;
}
</style>

<h1>Main header</h1>

<h2>Header level 2</h2>

<h3>Header level 3</h3>

Você também pode misturar e combinar os seletores de classe e ID, se quiser: 

<style type="text/css">
#main{
  background-color: gray;
}
.sub{
  border: 20px solid red;
}
.someClass{
  border: 20px solid green;
}
#anID{
  background-color: yellow;
  border: 10px solid black;
}
h1#main, h2.sub, h3, .someClass, #anID {
	color: Maroon;
}
</style>

<h1 id="main">Main header</h1>

<h2 class="sub">Header level 2</h2>

<h3 class="someClass">Header level 3</h3>

<p id="anID">Parágrafo</p>

Outro exemplo

<style type="text/css">
h1, h2, h3 {
	color: Maroon;
	text-align: center;
}

/* Veja que h1 já tem a propriedade color definida anteriormente, mas seu alinhamento definido antes não valerá, pois abaixo ele foi reescrito pelo left */
h1 {
	background-color: Silver;
	padding: 10px;
	text-align: left;
}

h2, h3 {
	background-color: Gray;
	padding: 5px;
}
</style>

<h1>Main header</h1>

<h2>Header level 2</h2>

<h3>Header level 3</h3>

## Nesting/Aninhamento

Se o CSS for bem estruturado, não deve haver necessidade de usar muitos seletores de classe ou ID. Isso ocorre porque você pode especificar propriedades para seletores dentro de outros seletores.

Por exemplo:

#top {
    background-color: #ccc;
    padding: 1em
}

#top h1 {
    color: #ff0;
}

#top p {
    color: red;
    font-weight: bold;
}

Isso ocorre porque, ao separar os seletores com espaços, estamos dizendo "h1 dentro do ID top tem a cor #ff0" e "p dentro do ID top é vermelho e em negrito".
Isso pode ficar bem complicado (porque pode ir para mais de dois níveis, como este dentro deste dentro deste dentro deste etc.) e pode exigir um pouco muita prática.

Isso elimina a necessidade de classes ou IDs nas tags p e h1 se forem aplicadas ao HTML da forma seguinte:

<div id="top">
    <h1>Chocolate curry</h1>
    <p>This is my recipe for making curry purely with chocolate</p>
    <p>Mmm mm mmmmm</p>
</div>

.class1, .class2 {
    some stuff
}

.class2 {
    some more stuff
}

main p {
	font-size: 1rem;
}

footer p {
	font-size: 0.75rem;
}

main p {
	font-size: 1rem;
}

header p, footer p {
	font-size: 0.75rem;
}


## Usando o !important

h1, h2, h3{

color:#333;

}

Se fizer assim:

h3{
  color:blue;
}

A cor do h3 não será azul. Somente se usar o !important

h3{
  color:blue !important;
}

## Usando várias classes no atributo class:

Um bom exemplo é o dos botões do Bootstrap

<button class="btn btn-primary">Enviar</button>

.btn {
    font-size: 14px;
    padding: 5px
}

.btn-primary {
    color: #ff0;
    background-color: #0f0;
}


