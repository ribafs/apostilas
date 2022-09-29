# Práticas recomendadas para apps da Web

O desenvolvimento de páginas e aplicativos da Web para dispositivos móveis apresenta desafios diferentes em comparação com o desenvolvimento de páginas da Web para navegadores típicos de computadores. Confira os seguintes recursos relacionados:

    IU Pixel-Perfect no modo WebView (link em inglês)
    Como criar um Web design responsivo com foco em dispositivos móveis (link em inglês)
    Imagens com DPI alto para densidades de pixels variáveis (link em inglês)

Para ajudar você a começar, veja a seguir uma lista de práticas que precisam ser seguidas para fornecer um aplicativo da Web mais eficaz para Android e outros dispositivos móveis.

    Redirecionar dispositivos móveis para uma versão móvel do seu site

    Há várias maneiras de redirecionar solicitações para a versão móvel do site usando redirecionamentos do servidor. Na maioria das vezes, isso é feito "farejando" a string do user agent fornecida pelo navegador da Web. Para determinar se uma versão móvel do seu site precisa ser exibida ou não, procure a string "mobile" no user agent.

    Observação: dispositivos Android com tela grande que exibem sites do tamanho original ,como tablets, não incluem a string "mobile" no user agent, enquanto o restante da string do user agent é praticamente idêntica. Por isso, é importante veicular a versão móvel do site com base na presença da string "mobile" no user agent.
    Usar DOCTYPE HTML5 em dispositivos móveis

    A linguagem de marcação mais comum em sites para dispositivos móveis é HTML5. Esse padrão encoraja o desenvolvimento voltado para dispositivos móveis para garantir que os sites funcionem bem em vários dispositivos. Ao contrário de linguagens da Web anteriores, o HTML5 exige declarações <DOCTYPE> e charset mais simples:

    <!DOCTYPE html>
    ...
    <meta charset="UTF-8">
    

Usar os metadados da janela de visualização para redimensionar corretamente a página da Web

No documento <head>, você precisa fornecer metadados que especifiquem como você quer que a janela de visualização do navegador renderize a página da Web. Por exemplo, os metadados da janela de visualização podem especificar a altura e a largura da janela de visualização do navegador, a escala inicial da página da Web e até a densidade da tela desejada.

Exemplo:

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        

    Para saber mais sobre como usar os metadados da janela de visualização para dispositivos com tecnologia Android, leia Como desenvolver para telas de apps da Web.
    Usar um layout linear vertical

    Evite a necessidade de rolar para a direita e para a esquerda na navegação pela página da Web. A rolagem para cima e para baixo é mais fácil para o usuário e deixa sua página mais simples.
    Definir a altura e a largura do layout como match_parent

    Definir a altura e a largura do objeto WebView como match_parent garante que as visualizações do seu app sejam dimensionadas corretamente. Não é recomendado definir a altura como wrap_content, porque isso atrapalha o dimensionamento e, em apps para Android 4.4 (API de nível 19) ou versões anteriores, as metatags viewport do HTML são ignoradas para preservar a compatibilidade com versões anteriores. Da mesma forma, definir a largura do layout como wrap_content não é compatível e faz com que o WebView use a largura do pai. Devido a esse comportamento, também é importante verificar se nenhum dos objetos de layout pais do objeto WebView tem a altura e a largura definidas como wrap_content.
    Evitar várias solicitações de arquivos

    Como dispositivos móveis normalmente têm uma velocidade de conexão muito mais lenta do que a de um computador desktop, você precisa fazer com que suas páginas da Web sejam carregadas o mais rápido possível. Uma forma de acelerar o processo é evitar o carregamento de arquivos extras, como folhas de estilo e arquivos de script, no <head>. Uma maneira melhor de otimizar o carregamento de páginas em dispositivos móveis é realizando uma Análise para dispositivos móveis no PageSpeed Insights. Se você quiser otimizar o desempenho do seu app, consulte as Regras do PageSpeed Insights.

Para ver um guia mais completo sobre a criação de ótimos aplicativos da Web para dispositivos móveis, consulte as Práticas recomendadas da Web para dispositivos móveis do W3C (link em inglês). Para ver mais orientações sobre como melhorar a velocidade do seu site em dispositivos móveis e computadores, consulte os tutoriais de velocidade do Google em Tornar a Web mais rápida.

https://developer.android.com/guide/webapps/best-practices

