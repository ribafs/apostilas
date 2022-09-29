# Exemplos

    • Positioning 1 - static 
    • Positioning 2 - relative 
    • Positioning 3 - absolute 
    • Positioning 4 - absolute within a relative box 
    • Floating 1 - a simple floated box 
    • Floating 2 - two floated boxes 
    • Floating 3 - clearing floated boxes 
    • Page layout 1 - two columns step 1 - positioning a navigation column 
    • Page layout 2 two columns step 2 - using margin to push the content out from under the navigation column 
    • Page layout 3 - using a border to provide the background for a column 
    • Page layout 4 - three columns 
    • Page layout 5 - adding a header 
    • Page layout 6 - footers won’t always work with absolute positioned columns… 
    • Page layout 7 - adding a footer using floated columns 
    • Charles Darwin - a styled up version of the basic principles of the previous examples 

```html
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Positioning: static</title>
        <style>
                body {
                        font: 1em/1.5 arial, helvetica, sans-serif;
                }
                
                div {
                        width: 700px;
                }
                
                span {
                        background: #f99;
                        padding: 0 1em;
                }
                
                em {
                        padding: 0 1em;
                        background: #c00;
                        color: white;
                        font-weight: bold;
                }
        </style>
</head>
<body>
        <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore <span>R2D2</span><em>Torquil</em><span>Fred</span> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Positioning: relative</title>
        <style>
                body {
                        font: 1em/1.5 arial, helvetica, sans-serif;
                }
                
                div {
                        width: 700px;
                }
                
                span {
                        background: #f99;
                        padding: 0 1em;
                }
                
                em {
                        position: relative;
                        top: 2em;
                        left: 2em;
                        padding: 0 1em;
                        background: #c00;
                        color: white;
                        font-weight: bold;
                }
        </style>
</head>
<body>
        <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore <span>R2D2</span><em>Torquil</em><span>Fred</span> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Positioning: absolute</title>
        <style>
                body {
                        font: 1em/1.5 arial, helvetica, sans-serif;
                }
                
                div {
                        width: 700px;
                }
                
                span {
                        background: #f99;
                        padding: 0 1em;
                }
                
                em {
                        position: absolute;
                        top: 2em;
                        left: 2em;
                        padding: 0 1em;
                        background: #c00;
                        color: white;
                        font-weight: bold;
                }
        </style>
</head>
<body>
        <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore <span>R2D2</span><em>Torquil</em><span>Fred</span> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Positioning: absolute 2</title>
        <style>
                body {
                        font: 1em/1.5 arial, helvetica, sans-serif;
                }
                
                div {
                        width: 700px;
                }
                
                p {
                        position: relative;
                }
                
                span {
                        background: #f99;
                        padding: 0 1em;
                }
                
                em {
                        position: absolute;
                        top: 2em;
                        left: 2em;
                        padding: 0 1em;
                        background: #c00;
                        color: white;
                        font-weight: bold;
                }
        </style>
</head>
<body>
        <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore <span>R2D2</span><em>Torquil</em><span>Fred</span> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Floating 1</title>
        <style>
                body {
                        font: 80%/1.5 arial, helvetica, sans-serif;
                }
                
                code {
                        font: bold 1em courier;
                }
                
                #second {
                        width: 7em;
                        float: left;
                        
                        color: white;
                        background: #060;
                        padding: 1em;
                        margin: 0;
                }
        </style>
</head>
<body>
        <p>First paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p id="second">Second paragraph. Has the CSS <code>width: 7em; float: left</code> applied.</p>
        <p>Third paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Fourth paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Fifth paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Sixth paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Seventh paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Floating 2</title>
        <style>
                body {
                        font: 80%/1.5 arial, helvetica, sans-serif;
                }
                
                code {
                        font: bold 1em courier;
                }
                
                #second {
                        width: 7em;
                        float: left;
                        
                        color: white;
                        background: #060;
                        padding: 1em;
                        margin: 0;
                }
                
                #fourth {
                        width: 20em;
                        float: right;
                        
                        color: white;
                        background: #006;
                        padding: 1em;
                        margin: 0;
                }
        </style>
</head>
<body>
        <p>First paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p id="second">Second paragraph. Has the CSS<br><code>width: 7em; float: left</code><br>applied.</p>
        <p>Third paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p id="fourth">Fourth paragraph. Has the CSS<br><code>width: 20em; float: right</code><br>applied.</p>
        <p>Fifth paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Sixth paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Seventh paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Floating 3</title>
        <style>
                body {
                        font: 80%/1.5 arial, helvetica, sans-serif;
                }
                
                code {
                        font: bold 1em courier;
                }
                
                #second {
                        width: 7em;
                        float: left;
                        
                        color: white;
                        background: #060;
                        padding: 1em;
                        margin: 0;
                }
                
                #fourth {
                        clear: left;
                        border: 1px solid black;
                }
                
        </style>
</head>
<body>
        <p>First paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p id="second">Second paragraph. Has the CSS <code>width: 7em; float: left</code> applied.</p>
        <p>Third paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p id="fourth">Fourth paragraph. Has the CSS <code>clear: left</code> applied.</p>
        <p>Fifth paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Sixth paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Seventh paragraph. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Page layout 1</title>
        <style>
                body {
                        font: 80% arial, helvetica, sans-serif;
                        margin: 0;
                }
                
                #navigation {
                        position: absolute;
                        left: 0;
                        width: 15em;
                }

                #content {
                        color: #ccc;
                }
                
                
        </style>
</head>
<body>
        <div id="navigation">
                <ul>
                        <li><a href="">Biology</a></li>
                        <li><a href="">Evolution</a></li>
                        <li><a href="">Natural Selection</a></li>
                        <li><a href="">Genetics</a></li>
                </ul>
                <ul>
                        <li><a href="">Erasmus Darwin</a></li>
                        <li><a href="">Lamarck</a></li>
                        <li><a href="">Charles Darwin</a></li>
                        <li><a href="">Wallace</a></li>
                        <li><a href="">Dawkins</a></li>
                </ul>
        </div>

        <div id="content">
                <h2>On the Origin of The Origin</h2>
                <p>Darwin's father was dead set on his son becoming a cleric but even though the young rapscallion began to study theology he found worms much more interesting.</p>
                <p>When a lonely man with a moustache asked Darwin to ride with him on his boat named after a dog, Darwin agreed and set off around the world fiddling with wildlife.</p>
                <p>Some say it was a load of birds from a bunch of islands hundreds of miles off the Ecuadorean coast that inspired his now widely accepted explanation of the mechanism of evolution. "Why does that bird on that island have a beak like that while that finch on that island has a beak like that? AHA! I've got it! Natural Selection!" he thought. It wasn't actually quite like that, but, y'know, it's a fine, popular romantic myth.</p>

                <h2>The Origin</h2>
                <p>Upon return from his jaunt, Charles chronicled his escapades (as <em>The Voyage of the Beagle</em>) and got a bit carried away with barnacles, although his theory of evolution was always ticking away in the back of his mind.</p>
                <p>Some 20 or so year after he returned to England, a Welsh naturalist by the name of Wallace popped up with a similar idea to Darwin's grand theory. Darwin got a move on.</p>
                <p>In 1858 a paper jointly attributed to Darwin and Wallace was presented to the Linnean Society of London that sent rumbles across the establishment and really ticked off a fair few people. The next year saw the publication of Darwin's 500-page "abstract" - <em>On The Origin of Species by Means of Natural Selection or the Preservation of Favoured Races In The Struggle For Life</em> (or <abbr>OTOOSBMONSOTPOFRITSFL</abbr> for short).</p>
                <p>Darwin, already a prominent arc in scientific circles, was propelled into megastardom.</p>

                <h2>After The Origin</h2>
                <p>Chuck D revised The Origin five times, toning down each one a bit more than the one before it, partly to appease his religious wife. Who also happened to be his cousin. But some years later he'd had enough of trying to disguise the logical conclusion that humans are descended from the same common ancestor as all other animals and his third classic, <em>The Descent of Man</em>, was published and <em>really</em> pissed off the religious establishment.</p>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Page layout 2</title>
        <style>
                body {
                        font: 80% arial, helvetica, sans-serif;
                        margin: 0;
                }
                
                #navigation {
                        position: absolute;
                        left: 0;
                        width: 15em;
                }

                #content {
                        margin-left: 15em;
                }
        </style>
</head>
<body>
        <div id="navigation">
                <ul>
                        <li><a href="">Biology</a></li>
                        <li><a href="">Evolution</a></li>
                        <li><a href="">Natural Selection</a></li>
                        <li><a href="">Genetics</a></li>
                </ul>
                <ul>
                        <li><a href="">Erasmus Darwin</a></li>
                        <li><a href="">Lamarck</a></li>
                        <li><a href="">Charles Darwin</a></li>
                        <li><a href="">Wallace</a></li>
                        <li><a href="">Dawkins</a></li>
                </ul>
        </div>

        <div id="content">
                <h2>On the Origin of The Origin</h2>
                <p>Darwin's father was dead set on his son becoming a cleric but even though the young rapscallion began to study theology he found worms much more interesting.</p>
                <p>When a lonely man with a moustache asked Darwin to ride with him on his boat named after a dog, Darwin agreed and set off around the world fiddling with wildlife.</p>
                <p>Some say it was a load of birds from a bunch of islands hundreds of miles off the Ecuadorean coast that inspired his now widely accepted explanation of the mechanism of evolution. "Why does that bird on that island have a beak like that while that finch on that island has a beak like that? AHA! I've got it! Natural Selection!" he thought. It wasn't actually quite like that, but, y'know, it's a fine, popular romantic myth.</p>

                <h2>The Origin</h2>
                <p>Upon return from his jaunt, Charles chronicled his escapades (as <em>The Voyage of the Beagle</em>) and got a bit carried away with barnacles, although his theory of evolution was always ticking away in the back of his mind.</p>
                <p>Some 20 or so year after he returned to England, a Welsh naturalist by the name of Wallace popped up with a similar idea to Darwin's grand theory. Darwin got a move on.</p>
                <p>In 1858 a paper jointly attributed to Darwin and Wallace was presented to the Linnean Society of London that sent rumbles across the establishment and really ticked off a fair few people. The next year saw the publication of Darwin's 500-page "abstract" - <em>On The Origin of Species by Means of Natural Selection or the Preservation of Favoured Races In The Struggle For Life</em> (or <abbr>OTOOSBMONSOTPOFRITSFL</abbr> for short).</p>
                <p>Darwin, already a prominent arc in scientific circles, was propelled into megastardom.</p>

                <h2>After The Origin</h2>
                <p>Chuck D revised The Origin five times, toning down each one a bit more than the one before it, partly to appease his religious wife. Who also happened to be his cousin. But some years later he'd had enough of trying to disguise the logical conclusion that humans are descended from the same common ancestor as all other animals and his third classic, <em>The Descent of Man</em>, was published and <em>really</em> pissed off the religious establishment.</p>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Page layout 3</title>
        <style>
                body {
                        font: 80% arial, helvetica, sans-serif;
                        margin: 0;
                }
                
                h2 {
                        margin-top: 0;
                }
                
                #navigation {
                        position: absolute;
                        left: 0;
                        width: 15em;
                }

                #content {
                        border-left: 15em solid #ccf;
                }
        </style>
</head>
<body>
        <div id="navigation">
                <ul>
                        <li><a href="">Biology</a></li>
                        <li><a href="">Evolution</a></li>
                        <li><a href="">Natural Selection</a></li>
                        <li><a href="">Genetics</a></li>
                </ul>
                <ul>
                        <li><a href="">Erasmus Darwin</a></li>
                        <li><a href="">Lamarck</a></li>
                        <li><a href="">Charles Darwin</a></li>
                        <li><a href="">Wallace</a></li>
                        <li><a href="">Dawkins</a></li>
                </ul>
        </div>

        <div id="content">
                <h2>On the Origin of The Origin</h2>
                <p>Darwin's father was dead set on his son becoming a cleric but even though the young rapscallion began to study theology he found worms much more interesting.</p>
                <p>When a lonely man with a moustache asked Darwin to ride with him on his boat named after a dog, Darwin agreed and set off around the world fiddling with wildlife.</p>
                <p>Some say it was a load of birds from a bunch of islands hundreds of miles off the Ecuadorean coast that inspired his now widely accepted explanation of the mechanism of evolution. "Why does that bird on that island have a beak like that while that finch on that island has a beak like that? AHA! I've got it! Natural Selection!" he thought. It wasn't actually quite like that, but, y'know, it's a fine, popular romantic myth.</p>

                <h2>The Origin</h2>
                <p>Upon return from his jaunt, Charles chronicled his escapades (as <em>The Voyage of the Beagle</em>) and got a bit carried away with barnacles, although his theory of evolution was always ticking away in the back of his mind.</p>
                <p>Some 20 or so year after he returned to England, a Welsh naturalist by the name of Wallace popped up with a similar idea to Darwin's grand theory. Darwin got a move on.</p>
                <p>In 1858 a paper jointly attributed to Darwin and Wallace was presented to the Linnean Society of London that sent rumbles across the establishment and really ticked off a fair few people. The next year saw the publication of Darwin's 500-page "abstract" - <em>On The Origin of Species by Means of Natural Selection or the Preservation of Favoured Races In The Struggle For Life</em> (or <abbr>OTOOSBMONSOTPOFRITSFL</abbr> for short).</p>
                <p>Darwin, already a prominent arc in scientific circles, was propelled into megastardom.</p>

                <h2>After The Origin</h2>
                <p>Chuck D revised The Origin five times, toning down each one a bit more than the one before it, partly to appease his religious wife. Who also happened to be his cousin. But some years later he'd had enough of trying to disguise the logical conclusion that humans are descended from the same common ancestor as all other animals and his third classic, <em>The Descent of Man</em>, was published and <em>really</em> pissed off the religious establishment.</p>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Page layout 4</title>
        <style>
                body {
                        font: 80% arial, helvetica, sans-serif;
                        margin: 0;
                }
                
                h2 {
                        margin-top: 0;
                }
                
                #navigation1 {
                        position: absolute;
                        left: 0;
                        width: 200px;
                }

                #navigation2 {
                        position: absolute;
                        right: 0;
                        width: 150px;
                }
        
                #content {
                        margin: 0 150px 0 200px;
                }
        </style>
</head>
<body>
        <div id="navigation1">
                <ul>
                        <li><a href="">Biology</a></li>
                        <li><a href="">Evolution</a></li>
                        <li><a href="">Natural Selection</a></li>
                        <li><a href="">Genetics</a></li>
                </ul>
        </div>

        <div id="navigation2">
                <ul>
                        <li><a href="">Erasmus Darwin</a></li>
                        <li><a href="">Lamarck</a></li>
                        <li><a href="">Charles Darwin</a></li>
                        <li><a href="">Wallace</a></li>
                        <li><a href="">Dawkins</a></li>
                </ul>
        </div>

        <div id="content">
                <h2>On the Origin of The Origin</h2>
                <p>Darwin's father was dead set on his son becoming a cleric but even though the young rapscallion began to study theology he found worms much more interesting.</p>
                <p>When a lonely man with a moustache asked Darwin to ride with him on his boat named after a dog, Darwin agreed and set off around the world fiddling with wildlife.</p>
                <p>Some say it was a load of birds from a bunch of islands hundreds of miles off the Ecuadorean coast that inspired his now widely accepted explanation of the mechanism of evolution. "Why does that bird on that island have a beak like that while that finch on that island has a beak like that? AHA! I've got it! Natural Selection!" he thought. It wasn't actually quite like that, but, y'know, it's a fine, popular romantic myth.</p>

                <h2>The Origin</h2>
                <p>Upon return from his jaunt, Charles chronicled his escapades (as <em>The Voyage of the Beagle</em>) and got a bit carried away with barnacles, although his theory of evolution was always ticking away in the back of his mind.</p>
                <p>Some 20 or so year after he returned to England, a Welsh naturalist by the name of Wallace popped up with a similar idea to Darwin's grand theory. Darwin got a move on.</p>
                <p>In 1858 a paper jointly attributed to Darwin and Wallace was presented to the Linnean Society of London that sent rumbles across the establishment and really ticked off a fair few people. The next year saw the publication of Darwin's 500-page "abstract" - <em>On The Origin of Species by Means of Natural Selection or the Preservation of Favoured Races In The Struggle For Life</em> (or <abbr>OTOOSBMONSOTPOFRITSFL</abbr> for short).</p>
                <p>Darwin, already a prominent arc in scientific circles, was propelled into megastardom.</p>

                <h2>After The Origin</h2>
                <p>Chuck D revised The Origin five times, toning down each one a bit more than the one before it, partly to appease his religious wife. Who also happened to be his cousin. But some years later he'd had enough of trying to disguise the logical conclusion that humans are descended from the same common ancestor as all other animals and his third classic, <em>The Descent of Man</em>, was published and <em>really</em> pissed off the religious establishment.</p>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Page layout 5</title>
        <style>
                body {
                        font: 80% arial, helvetica, sans-serif;
                        margin: 0;
                }
                
                h1, h2 {
                        margin: 0;
                }
                
                #header {
                        background: #ccc;
                }
                
                #navigation {
                        position: absolute;
                        left: 0;
                        top: 70px;
                        width: 150px;
                }
                
                #content {
                        margin-left: 150px;
                }
        </style>
</head>
<body>
        <div id="header">
                <h1>Charles Darwin</h1>
        </div>

        <div id="navigation">
                <ul>
                        <li><a href="">Biology</a></li>
                        <li><a href="">Evolution</a></li>
                        <li><a href="">Natural Selection</a></li>
                        <li><a href="">Genetics</a></li>
                </ul>
                <ul>
                        <li><a href="">Erasmus Darwin</a></li>
                        <li><a href="">Lamarck</a></li>
                        <li><a href="">Charles Darwin</a></li>
                        <li><a href="">Wallace</a></li>
                        <li><a href="">Dawkins</a></li>
                </ul>
        </div>

        <div id="content">
                <h2>On the Origin of The Origin</h2>
                <p>Darwin's father was dead set on his son becoming a cleric but even though the young rapscallion began to study theology he found worms much more interesting.</p>
                <p>When a lonely man with a moustache asked Darwin to ride with him on his boat named after a dog, Darwin agreed and set off around the world fiddling with wildlife.</p>
                <p>Some say it was a load of birds from a bunch of islands hundreds of miles off the Ecuadorean coast that inspired his now widely accepted explanation of the mechanism of evolution. "Why does that bird on that island have a beak like that while that finch on that island has a beak like that? AHA! I've got it! Natural Selection!" he thought. It wasn't actually quite like that, but, y'know, it's a fine, popular romantic myth.</p>

                <h2>The Origin</h2>
                <p>Upon return from his jaunt, Charles chronicled his escapades (as <em>The Voyage of the Beagle</em>) and got a bit carried away with barnacles, although his theory of evolution was always ticking away in the back of his mind.</p>
                <p>Some 20 or so year after he returned to England, a Welsh naturalist by the name of Wallace popped up with a similar idea to Darwin's grand theory. Darwin got a move on.</p>
                <p>In 1858 a paper jointly attributed to Darwin and Wallace was presented to the Linnean Society of London that sent rumbles across the establishment and really ticked off a fair few people. The next year saw the publication of Darwin's 500-page "abstract" - <em>On The Origin of Species by Means of Natural Selection or the Preservation of Favoured Races In The Struggle For Life</em> (or <abbr>OTOOSBMONSOTPOFRITSFL</abbr> for short).</p>
                <p>Darwin, already a prominent arc in scientific circles, was propelled into megastardom.</p>

                <h2>After The Origin</h2>
                <p>Chuck D revised The Origin five times, toning down each one a bit more than the one before it, partly to appease his religious wife. Who also happened to be his cousin. But some years later he'd had enough of trying to disguise the logical conclusion that humans are descended from the same common ancestor as all other animals and his third classic, <em>The Descent of Man</em>, was published and <em>really</em> pissed off the religious establishment.</p>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Page layout 6</title>
        <style>
                body {
                        font: 80% arial, helvetica, sans-serif;
                        margin: 0;
                }
                
                h1, h2 {
                        margin: 0;
                }
                
                #header {
                        background: #ccc;
                }
                
                #navigation {
                        position: absolute;
                        left: 0;
                        width: 150px;
                }
                
                #content {
                        margin-left: 150px;
                }
                
                #footer {
                        background: #ccc;
                }
                
                #footer p {
                        margin: 0;
                }
        </style>
</head>
<body>
        <div id="header">
                <h1>Charles Darwin</h1>
        </div>

        <div id="navigation">
                <ul>
                        <li><a href="">Biology</a></li>
                        <li><a href="">Evolution</a></li>
                        <li><a href="">Natural Selection</a></li>
                        <li><a href="">Genetics</a></li>
                </ul>
                <ul>
                        <li><a href="">Erasmus Darwin</a></li>
                        <li><a href="">Lamarck</a></li>
                        <li><a href="">Charles Darwin</a></li>
                        <li><a href="">Wallace</a></li>
                        <li><a href="">Dawkins</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div id="content">
                <h2>On the Origin of The Origin</h2>
                <p>Darwin's father was dead set on his son becoming a cleric but even though the young rapscallion began to study theology he found worms much more interesting.</p>
                <p>When a lonely man with a moustache asked Darwin to ride with him on his boat named after a dog, Darwin agreed and set off around the world fiddling with wildlife.</p>
                <p>Some say it was a load of birds from a bunch of islands hundreds of miles off the Ecuadorean coast that inspired his now widely accepted explanation of the mechanism of evolution. "Why does that bird on that island have a beak like that while that finch on that island has a beak like that? AHA! I've got it! Natural Selection!" he thought. It wasn't actually quite like that, but, y'know, it's a fine, popular romantic myth.</p>

                <h2>The Origin</h2>
                <p>Upon return from his jaunt, Charles chronicled his escapades (as <em>The Voyage of the Beagle</em>) and got a bit carried away with barnacles, although his theory of evolution was always ticking away in the back of his mind.</p>
                <p>Some 20 or so year after he returned to England, a Welsh naturalist by the name of Wallace popped up with a similar idea to Darwin's grand theory. Darwin got a move on.</p>
                <p>In 1858 a paper jointly attributed to Darwin and Wallace was presented to the Linnean Society of London that sent rumbles across the establishment and really ticked off a fair few people. The next year saw the publication of Darwin's 500-page "abstract" - <em>On The Origin of Species by Means of Natural Selection or the Preservation of Favoured Races In The Struggle For Life</em> (or <abbr>OTOOSBMONSOTPOFRITSFL</abbr> for short).</p>
                <p>Darwin, already a prominent arc in scientific circles, was propelled into megastardom.</p>

                <h2>After The Origin</h2>
                <p>Chuck D revised The Origin five times, toning down each one a bit more than the one before it, partly to appease his religious wife. Who also happened to be his cousin. But some years later he'd had enough of trying to disguise the logical conclusion that humans are descended from the same common ancestor as all other animals and his third classic, <em>The Descent of Man</em>, was published and <em>really</em> pissed off the religious establishment.</p>
        </div>

        <div id="footer">
                <p>Content is &copy; Copyright Patrick Griffiths.</p>
                <p>This page is valid HTML5.</p>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Page layout 7</title>
        <style>
                body {
                        font: 80% arial, helvetica, sans-serif;
                        margin: 0;
                }
                
                h1, h2 {
                        margin: 0;
                }
                
                #header {
                        background: #ccc;
                }
                
                #navigation {
                        float: left;
                        width: 150px;
                }
                
                #content {
                        margin-left: 150px;
                }
                
                #footer {
                        clear: left;
                        background: #ccc;
                }
                
                #footer p {
                        margin: 0;
                }
                
        </style>
</head>
<body>
        <div id="header">
                <h1>Charles Darwin</h1>
        </div>

        <div id="navigation">
                <ul>
                        <li><a href="">Biology</a></li>
                        <li><a href="">Evolution</a></li>
                        <li><a href="">Natural Selection</a></li>
                        <li><a href="">Genetics</a></li>
                </ul>
                <ul>
                        <li><a href="">Erasmus Darwin</a></li>
                        <li><a href="">Lamarck</a></li>
                        <li><a href="">Charles Darwin</a></li>
                        <li><a href="">Wallace</a></li>
                        <li><a href="">Dawkins</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div id="content">
                <h2>On the Origin of The Origin</h2>
                <p>Darwin's father was dead set on his son becoming a cleric but even though the young rapscallion began to study theology he found worms much more interesting.</p>
                <p>When a lonely man with a moustache asked Darwin to ride with him on his boat named after a dog, Darwin agreed and set off around the world fiddling with wildlife.</p>
                <p>Some say it was a load of birds from a bunch of islands hundreds of miles off the Ecuadorean coast that inspired his now widely accepted explanation of the mechanism of evolution. "Why does that bird on that island have a beak like that while that finch on that island has a beak like that? AHA! I've got it! Natural Selection!" he thought. It wasn't actually quite like that, but, y'know, it's a fine, popular romantic myth.</p>

                <h2>The Origin</h2>
                <p>Upon return from his jaunt, Charles chronicled his escapades (as <em>The Voyage of the Beagle</em>) and got a bit carried away with barnacles, although his theory of evolution was always ticking away in the back of his mind.</p>
                <p>Some 20 or so year after he returned to England, a Welsh naturalist by the name of Wallace popped up with a similar idea to Darwin's grand theory. Darwin got a move on.</p>
                <p>In 1858 a paper jointly attributed to Darwin and Wallace was presented to the Linnean Society of London that sent rumbles across the establishment and really ticked off a fair few people. The next year saw the publication of Darwin's 500-page "abstract" - <em>On The Origin of Species by Means of Natural Selection or the Preservation of Favoured Races In The Struggle For Life</em> (or <abbr>OTOOSBMONSOTPOFRITSFL</abbr> for short).</p>
                <p>Darwin, already a prominent arc in scientific circles, was propelled into megastardom.</p>

                <h2>After The Origin</h2>
                <p>Chuck D revised The Origin five times, toning down each one a bit more than the one before it, partly to appease his religious wife. Who also happened to be his cousin. But some years later he'd had enough of trying to disguise the logical conclusion that humans are descended from the same common ancestor as all other animals and his third classic, <em>The Descent of Man</em>, was published and <em>really</em> pissed off the religious establishment.</p>
        </div>

        <div id="footer">
                <p>Content is &copy; Copyright Patrick Griffiths.</p>
                <p>This page is valid HTML5.</p>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Charles Darwin</title>
        <style>
                body {
                        font: 80% arial, helvetica, sans-serif;
                        background: #ccc url(/examples/images/lizards2.gif);
                        margin: 0;
                }
                
                .accessaid, h1 {
                        position: absolute;
                        height: 0;
                        overflow: hidden;
                }
                
                #header {
                        background: #036 url(/examples/images/charlesdarwin.gif);
                        height: 60px;
                }
                
                #navigation {
                        position: absolute;
                        top: 60px;
                        margin-top: 0.5em;
                        left: 0;
                        width: 134px;
                }
                
                #navigation ul {
                        margin: 0 0 1em 0;
                        padding: 0;
                        list-style: none;
                }
                
                #navigation ul a {
                        color: white;
                        text-decoration: none;
                        display: block;
                        background: #17a;
                        border-left: 3px solid #28b;
                        padding: 0 0.5em;
                        margin: 0 1em 3px 1em;
                }
                
                #navigation a:visited {
                        color: #ccc;
                }
                
                #navigation a:hover {
                        background: #39c;
                        border-color: white;
                }
                
                #content {
                        border-left: 134px solid #069;
                        background: white url(/examples/images/lizards.gif) repeat-y;
                        padding: 1px 20px 1em 40px;
                }
                h2 {
                        font-size: 1.5em;
                        color: #036;
                }
                
                h3 {
                        font-size: 1.25em;
                        color: #036;
                }
                
                #content img {
                        width: 100px;
                        height: 150px;
                        padding: 1px;
                        border: 1px solid #333;
                        float: right;
                        margin: 0 0 1em 1em;
                }
                
                #container {
                        position: relative;
                        width: 580px;
                        border: solid #036;
                        border-width: 0 3px;
                        margin: auto;
                }
        </style>
</head>
<body>
        <div id="container">
                <div id="header">
                        <h1>Charles Darwin</h1>
                </div>
                <div id="navigation">
                        <p><a href="#content" class="accessaid">Skip navigation</a></p>
                        <ul>
                                <li><a href="">Biology</a></li>
                                <li><a href="">Evolution</a></li>
                                <li><a href="">Natural Selection</a></li>
                                <li><a href="">Genetics</a></li>
                        </ul>
                        <ul>
                                <li><a href="">Erasmus Darwin</a></li>
                                <li><a href="">Lamarck</a></li>
                                <li><a href="">Charles Darwin</a></li>
                                <li><a href="">Wallace</a></li>
                                <li><a href="">Dawkins</a></li>
                        </ul>
                        <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Site map</a></li>
                        </ul>
                </div>

                <div id="content">
                        <h2>On the Origin of The Origin</h2>
                        <p><img src="/examples/images/darwin.jpg" alt="Darwin">Darwin's father was dead set on his son becoming a cleric but even though the young rapscallion began to study theology he found worms much more interesting.</p>
                        <p>When a lonely man with a moustache asked Darwin to ride with him on his boat named after a dog, Darwin agreed and set off around the world fiddling with wildlife.</p>
                        <p>Some say it was a load of birds from a bunch of islands hundreds of miles off the Ecuadorean coast that inspired his now widely accepted explanation of the mechanism of evolution. "Why does that bird on that island have a beak like that while that finch on that island has a beak like that? AHA! I've got it! Natural Selection!" he thought. It wasn't actually quite like that, but, y'know, it's a fine, popular romantic myth.</p>

                        <h2>The Origin</h2>
                        <p>Upon return from his jaunt, Charles chronicled his escapades (as <em>The Voyage of the Beagle</em>) and got a bit carried away with barnacles, although his theory of evolution was always ticking away in the back of his mind.</p>
                        <p>Some 20 or so year after he returned to England, a Welsh naturalist by the name of Wallace popped up with a similar idea to Darwin's grand theory. Darwin got a move on.</p>
                        <p>In 1858 a paper jointly attributed to Darwin and Wallace was presented to the Linnean Society of London that sent rumbles across the establishment and really ticked off a fair few people. The next year saw the publication of Darwin's 500-page "abstract" - <em>On The Origin of Species by Means of Natural Selection or the Preservation of Favoured Races In The Struggle For Life</em> (or <abbr>OTOOSBMONSOTPOFRITSFL</abbr> for short).</p>
                        <p>Darwin, already a prominent arc in scientific circles, was propelled into megastardom.</p>

                        <h2>After The Origin</h2>
                        <p>Chuck D revised The Origin five times, toning down each one a bit more than the one before it, partly to appease his religious wife. Who also happened to be his cousin. But some years later he'd had enough of trying to disguise the logical conclusion that humans are descended from the same common ancestor as all other animals and his third classic, <em>The Descent of Man</em>, was published and <em>really</em> pissed off the religious establishment.</p>
                </div>
        </div>

        <!-- Link back to HTML Dog: -->
        <p><a href="http://www.htmldog.com/examples/"><img src="http://www.htmldog.com/badge1.gif" alt="HTML Dog"></a></p>
</body>
</html>
```

