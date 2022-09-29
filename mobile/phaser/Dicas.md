## Dicas sobre o Phaser

## Zerar margens esquerda e topo:
```html
<style>* { padding: 0; margin: 0; }</style>
```

Deixar no início da index.html, antes de qualquer css e javascript.
Assim o canvas será criado iniciando no canto superior esquerdo, sem margem.

## Criar no início do nosso js:
```js
(function(){
	//Testar:
	//console.log(Phaser);
	// Criar uma instância do Phaser com os parâmetros: largura, altura, renderização, id elemento, objeto
	var game = new Phaser.Game(800,600,Phaser.AUTO, null, {preload: preload, create: create, update: update});

	function preload(){}
	function create(){}
	function update(){}
}());
```

## Alinhar objeto na tela:

Centralizar na horizontal (x) e na vertical (y):
objeto.anchor.set(.5);// (.5) = (0.5, 0.5)

Alinhar no canto superior direito (x=1 e y=0):
objeto.anchor.set(1, 0);

Alinhas no canto superior esquerdo:
objeto.anchor.set(0, 1);

Alinhar no canto inferior esquerdo:
objeto.anchor.set(0, 1);

Alinhas no canto inferior direito:
objeto.anchor.set(1, 1); // ou (1)


