# Borders

Bordas podem ser aplicadas à maioria dos elementos HTML dentro do body.

Para fazer uma borda ao redor de um elemento, tudo que você precisa é o estilo da borda. 

Os valores do estilo podem ser 

solid, 
dotted, (pontos)
dashed, (barras)
double, 
groove, (ranhura)
ridge, (crista)
inset, (inserção)
outset (início)

border-width - define a largura da borda, mais comumente usando pixels como valor. Existem também propriedades para:

border-top-width, 
border-right-width, 
border-bottom-width
border-left-width

border-color - configura a cor da borda

Exemplo

h2 {
    border-style: dashed;
    border-width: 3px;
    border-left-width: 10px;
    border-right-width: 10px;
    border-color: red;
}

Exemplo2

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Borders</title>
        <style>
                body {
                        font-size: 80%;
                        color: #000; /* Note that borders that do not have an explicit color will take on this color declaration */
                        margin: 0;
                        padding: 0;
                }
        
                p {
                        padding: 4em;
                        margin: 2em;
                }
                
                code {
                        font: 1em/1.5 Courier;
                }
        
                #border1 {      
                        border: 1px solid;
                        
                }
                
                #border2 {
                        border: 1px dotted;
                }
                
                #border3 {
                        border: 2px dashed #ccc;
                }
                
                #border4 {
                        border: solid;
                        border-width: 1px 5px 10px 15px;
                }
                
                #border5 {
                        border: 5px;
                        border-style: solid dotted dashed solid;
                }
                
                #border6 {
                        border: 5px solid;
                        border-color: black #444 #888 #ccc;
                }
                
                #borderCollie {
                        border: 3px dotted #06c;
                }
        </style>
</head>
<body>
        <p id="border1"><code>border: 1px solid;</code></p>
        <p id="border2"><code>border: 1px dotted;</code></p>
        <p id="border3"><code>border: 2px dashed #ccc;</code></p>
        <p id="border4"><code>border: solid;<br>
                                border-width: 1px 5px 10px 15px;</code></p>
        <p id="border5"><code>border: 5px;<br>
                                border-style: solid dotted dashed solid;</code></p>
        <p id="border6"><code>border: 5px solid;<br>
                                border-color: black #444 #888 #ccc;</code></p>


        <!-- Link back to HTML Dog: -->
        <p id="borderCollie"><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>


