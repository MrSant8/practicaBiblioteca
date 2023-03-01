
<body>
	<h1>Practica Biblioteca M07</h1>
	<p>Framework utilizado: Laravel v10.1</p>
	<p>PHP version utilizada: 7.4.33</p>
	<p>Sistema operativo: Ventura 13.2</p>
	<h2>Comandos utilizados:</h2>
	<ul>
		<li>Comando para migrar: <code>php artisan migrate</code></li>
		<li>Comando para rehacer la migracion: <code>php artisan migrate:rollback</code></li>
		<li>Comando para añadir los seeders a la BBDD:
			<ul>
				<li><code>php artisan db:seed --class=BookCategoryTableSeeder</code></li>
				<li><code>php artisan db:seed --class=CategoriesTableSeeder</code></li>
			</ul>
		</li>
	</ul>
</body>
</html>
