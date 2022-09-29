# Specificity

Se você tiver duas (ou mais) regras CSS conflitantes que apontam para o mesmo elemento, existem algumas regras básicas que um navegador segue para determinar qual é a regra mais específica e, portanto, a que será usada.

Pode não parecer algo tão importante e, na maioria dos casos, você não encontrará nenhum conflito, mas quanto maiores e mais complexos se tornam seus arquivos CSS, ou quanto mais arquivos CSS você começa a lidar, maior a probabilidade de haver conflitos surgindo.

Mais específico = maior precedência

Se os seletores forem iguais, o último sempre terá precedência. Por exemplo, se você tivesse:

p { color: red }
p { color: blue }

Então o parágrafo será azul, que é a última regra.

No entanto, você geralmente não terá seletores idênticos com declarações conflitantes propositalmente (porque não há muito sentido). Conflitos surgem legitimamente, entretanto, quando você tem seletores aninhados.

div p { color: red }
p { color: blue }

Neste exemplo, pode parecer que um p dentro de uma div teria a cor azul, visto que a regra para colorir p com azul vem por último, mas na verdade eles seriam coloridos com a cor vermelha devido à especificidade do primeiro seletor. 

Basicamente, quanto mais específico for um seletor, mais preferência ele terá quando se trata de estilos conflitantes.

## Calculating Specificity

A especificidade real de um grupo de seletores aninhados requer alguns cálculos. Você pode dar a cada seletor de ID ("#whatever") um valor de 100, a cada seletor de classe (".whatever") um valor de 10 e a cada seletor de HTML ("whatever") um valor de 1. Quando você adiciona todos eles, você tem um valor de especificidade.
     • p tem uma especificidade de 1 (1 seletor HTML)
     • div p tem uma especificidade de 2 (2 seletores HTML, 1 + 1)
     • .tree tem uma especificidade de 10 (1 seletor de classe)
     • div p.tree tem uma especificidade de 12 (2 seletores HTML + um seletor de classe, 1 + 1 + 10)
     • #baobab tem uma especificidade de 100 (seletor de id)
     • body #content .alternative p tem uma especificidade de 112 (seletor HTML + seletor de id + seletor de classe + seletor HTML, 1 + 100 + 10 + 1)

Portanto, se todos esses exemplos fossem usados, div p.tree (com uma especificidade de 12) venceria div p (com uma especificidade de 2) e body #content .alternative p venceria todos eles, independentemente de a ordem.


