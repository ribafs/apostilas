# Exemplos de CSS

O código abaixo cobre todos os métodos CSS da seção Inicial. Se você salvar isso como seu arquivo CSS e olhar para o arquivo HTML, então você deve entender agora o que cada propriedade CSS faz e como aplicá-las. A melhor maneira de entender tudo isso é mexer nos arquivos HTML e CSS e ver o que acontece quando você muda as coisas.

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Exemplo de CSS</title>

<style>
body {
    font-family: arial, helvetica, sans-serif;
    font-size: 14px;
    color: black;
    background-color: #ffc;
    margin: 20px;
    padding: 0;
}

/* This is a comment, by the way */

p {
    line-height: 21px;
}

h1 {
    color: #ffc;
    background-color: #900;
    font-size: 2em;
    margin: 0;
    margin-bottom: 7px;
    padding: 4px;
    font-style: italic;
    text-align: center;
    letter-spacing: 0.5em;
    border-bottom-style: solid;
    border-bottom-width: 0.5em;
    border-bottom-color: #c00;
}

h2 {
    color: white;
    background-color: #090;
    font-size: 1.5em;
    margin: 0;
    padding: 2px;
    padding-left: 14px;
}

h3 {
    color: #999;
    font-size: 1.25em;
}

img {
    border-style: dashed;
    border-width: 2px;
    border-color: #ccc;
}

a {
    text-decoration: none;
}

strong {
    font-style: italic;
    text-transform: uppercase;
}

li {
    color: #900;
    font-style: italic;
}

table {
    background-color: #ccc;
}
</style>
</head>
<body>
        <h1>Título 1 - CSS</h1>
        <h2>Título 2 - Exemplo de CSS</h2>
        <h3>Título 3 - Exemplo de CSS</h3>  
        <p>Parágrafo</p>
  
        <strong>Teste com strong</strong>  

        <!-- Link back to HTML Dog: -->
        <p><b>Imagem</b> <br><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
  
  <p>Lista
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
  </ul>
  </p>
  
  <table>
    <tr>
      <td>TD da Tabela</td>
    </tr>
  </table>
  </table>
</body>
</html>



