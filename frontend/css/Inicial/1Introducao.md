# Introdução ao CSS

CSS, ou Cascading Styles Sheets, é uma forma de estilizar e apresentar HTML. Enquanto o HTML é o conteúdo, a folha de estilo é a apresentação desse conteúdo.

Os estilos não têm praticamente nada de HTML, eles têm o formato de ‘propriedade: valor’ e a maioria das propriedades pode ser aplicada à maioria das tags HTML.

## Conteúdo

    Applying CSS - The different ways you can apply CSS to HTML.
    Selectors, Properties, and Values - The bits that make up CSS.
    Colors - How to use color.
    Text - How to manipulate the size and shape of text.
    Margins and Padding - How to space things out.
    Borders - Erm. Borders. Things that go around things.
    Putting It All Together - Throwing all of the above ingredients into one spicy hotpot.

Original em inglês

https://www.htmldog.com/guides/css/beginner/


## Aplicando CSS ao HTML

Existem 3 maneiras de aplicar CSS ao HTML

- Inline - Inline ou estilos embutidos são inseridos diretamente nas tags HTML usando o atributo style.

Exemplo

<p style="color: red">text</p>

- Interna - Estilos incorporados ou internos são usados para a página inteira. Dentro do elemento head, as tags de estilo circundam todos os estilos da página.

Exemplo:

<!DOCTYPE html>
<html>
<head>
<title>CSS Example</title>
<style>

    p {
        color: red;
    }

    a {
        color: blue;
    }

</style>
...

Isso tornará todos os parágrafos da página vermelhos e todos os links azuis.

- Externo - Estilos externos são usados para todo o site de várias páginas. Há um arquivo CSS separado.

Exemplo

css/style.css

p {
    color: red;
}

a {
    color: blue;
}

<!DOCTYPE html>
<html>
<head>
    <title>CSS Example</title>
    <link rel="stylesheet" href="css/style.css">
...


