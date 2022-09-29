# Universal, child e adjascent

Em tutoriais anteriores, cobrimos seletores de HTML, seletores de classe e ID e como combinar seletores para direcionar caixas de elemento específicas. Com o uso de três caracteres itty-bitty, você pode identificar ainda mais um elemento, reduzindo a necessidade de inchar seu HTML com atributos de classe e ID.

## Universal selectors

Usando um asterisco (“*”), você pode direcionar tudo. Você pode usá-lo sozinho para definir estilos globais para uma página ou como um descendente de um seletor para definir estilos de tudo dentro de algo.

O seguinte, por exemplo, definirá a margem e o preenchimento de tudo em uma página como zero e tudo dentro de um elemento com o ID "contato" a ser exibido como um bloco:

* {
    margin: 0;
    padding: 0;
}

#contact * {
    display: block;
}

Um seletor universal autônomo é comumente usado para "redefinir" muitos dos estilos padrões de um navegador. Definir uma margem como zero, por exemplo, eliminará todo o espaçamento em torno de parágrafos, cabeçalhos e aspas em bloco.

## Child selectors

Um símbolo maior que (“>”) pode ser usado para especificar um elemento que é filho de outro elemento, ou seja, algo imediatamente aninhado em algo.

Então, com este HTML ...

<ul id="genus_examples">
    <li>Cats
        <ul>
            <li>Panthera</li>
            <li>Felis</li>
            <li>Neofelis</li>
        </ul>
    </li>
    <li>Apes
        <ul>
            <li>Pongo</li>
            <li>Pan</li>
            <li>Homo</li>
        </ul>
    </li>
</ul>

… E o seguinte CSS…

#genus_examples > li { border: 1px solid red }

… Uma borda vermelha será desenhada ao redor de "Gatos" e "Macacos" apenas, ao invés de ao redor de cada item da lista (o que seria o caso com #genus_examples li {border: 1px solid red}). Isso ocorre porque gente como “Panthera” e “Felis” são netos de “genus_examples”, não filhos.

Agora teste com este:

#genus_examples li { border: 1px solid red }

## Adjacent selectors/Seletores adjascentes

Um sinal de mais (“+”) é usado para direcionar um irmão adjacente de um elemento, essencialmente, algo imediatamente após algo.

Com o seguinte HTML:

<h1>Clouded leopards</h1>
<p>Clouded leopards are cats that belong to the genus Neofelis.</p>
<p>There are two extant species: Neofelis nebulosa and Neofelis diardi.</p>

e CSS

h1 + p { font-weight: bold }

Apenas o primeiro parágrafo, o que segue o título, ficará em negrito.

Um seletor CSS 3, irmão em geral/general sibling usa um til (“~”) e irá combinar um elemento seguindo outro independentemente de sua imediação. Portanto, no exemplo acima, 

h1 ~ p {font-weight: bold} 

estilizará todos os parágrafos após o título de nível superior, mas se houvesse qualquer ps precedendo h1, eles não seriam afetados.


