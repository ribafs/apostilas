# Margens e Padding/preenchimento

Margem e preenchimento são as duas propriedades mais comumente usadas para espaçar elementos. A margem é o espaço fora de um elemento, enquanto o preenchimento é o espaço dentro do elemento.

Altere o código CSS de h2 para o seguinte:

h2 {
    font-size: 1.5em;
    background-color: #ccc;
    margin: 20px;
    padding: 40px;
}

Este texto aparecerá com margens à esquerda, acima, abaixo e à direita de 20 px ao redor da frase Apenas um teste. Veja abaixo o box model, representando as várias propriedades ao redor de um elemento.

## Box Model

        Margin superior

        Border superior

        Padding superior

Left    Conteúdo            Também temos margin, border, padding na direita e na esquerda       Right

        Padding inferior

        Border inferior

        Margin inferior

Ordem

conteúdo no centro
padding ao redor do conteúdo
border ao redor do padding
margin ao redor das bordas

Não somos obrigados a usar sempre todos eles, mas é bom saber que todos os elementos tem margin, border, padding e content, nesta ordem.

width = largura do content
height - altura do content

Um bom exemplo, que pode ser modificado online para melhor entendimento:

https://www.w3schools.com/css/tryit.asp?filename=trycss_boxmodel

Veja o código abaixo:

<!DOCTYPE html>
<html>
<head>
<style>
div {
  background-color: lightgrey;
  width: 300px;
  padding: 30px;
  border: 15px solid green;
  margin: 50px;
}
</style>
</head>
<body>

<h2>Demonstrating the Box Model</h2>

<p>The CSS box model is essentially a box that wraps around every HTML element. It consists of: borders, padding, margins, and the actual content.</p>

<div>This text is the content of the box. We have added a 50px padding, 20px margin and a 15px green border. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

</body>
</html>

Como está:
- Largura do conteúdo - 300px
- Preenchimento/padding - 30px ao redor do conteúdo
- Bordas/border - 15px verde ao redor do padding
- Margens/margin - 50px ao redor das bordas

Ao invés de usar as propriedades como no exemplo acima, que já contempla os 4 lados, também podemos especificar cada um dos lados:

padding-top, 
padding-right, 
padding-bottom 
padding-left

border-top, 
border-right, 
border-bottom, 
border-left, 

margin-top, 
margin-right, 
margin-bottom, 
margin-left, 


