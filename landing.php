<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hola Tailwind!!!</title>
	<link rel="stylesheet" type="text/css" href="src/css/estilos.css">
</head>
<body>	

	<header class="bg-blue-500 min-h-[600px]">
		<nav class="py-6 text-white grid justify-items-center items-center gp-6 wrapper">
			<a href="#">
				<h2 class="text-3xl font-extrabold mb-4">Landing.</h2>
			</a>

			<div class="space-x-4">
				<a href="#" class="mr-4">Home</a>
				<a href="#" class="mr-4">Habilidades</a>
				<a href="#">Proyectos</a>
			</div>
		</nav>

		<section class="wrapper py-14 flex-col items-center justify-items-center gap-12 pt-2">

			<img src="girl.jpg" alt="Woman" class="block max-w-lg w-full mb-4 mx-auto">

			<div class="text-white space-y-6 text-center">

				<h1 class="text-3xl font-bold">Yo soy Tiago, y será un placer ayudarte!</h1>
			
				<p class="max-w-lg mx-auto">
					Programador web, con dominio de HTML, CSS, PHP, SQL y JavaScript para crear experiencias web dinámicas y atractivas.
				</p>

				<a href="#" class="inline-block bg-slate-700 py-4 px-8 rounded-xl font-bold">
					Contáctame ahora
				</a>

			</div>

		</section>

	</header>



	<main>
		<section class="wrapper py-20 text-center">
			<h2 class="text-3xl font-bold">Nuestras Habilidades</h2>

			<div class="mt-12 grid gap-8 max-w-md mx-auto">
				<article class="space-y-6">
					<svg 
						xmlns="http://www.w3.org/2000/svg" 
						class="fill-orange-700 w-20 mx-auto" 
						viewBox="0 0 24 24"><path d="M4.136 3.012h15.729l-1.431 16.15-6.451 1.826-6.414-1.826-1.433-16.15zm5.266 7.302-.173-2.035 7.533.002.173-1.963-9.87-.002.522 5.998h6.835l-.243 2.566-2.179.602-2.214-.605-.141-1.58H7.691l.247 3.123L12 17.506l4.028-1.08.558-6.111H9.402v-.001z"></path></svg>
						<h3 class="text-slate-900 text-xl font-bold">HTML5</h3>
						<p class="w-2/3 text-slate-600 mx-auto">
							HTML es un lenguaje para crear páginas web con elementos estructurados y contenido visual.
						</p>
				</article>


				<article class="space-y-6">
					<svg xmlns="http://www.w3.org/2000/svg" 
					class="fill-blue-700 w-20 mx-auto" 
					viewBox="0 0 24 24" ><path d="M4.192 3.143h15.615l-1.42 16.034-6.404 1.812-6.369-1.813L4.192 3.143zM16.9 6.424l-9.8-.002.158 1.949 7.529.002-.189 2.02H9.66l.179 1.913h4.597l-.272 2.62-2.164.598-2.197-.603-.141-1.569h-1.94l.216 2.867L12 17.484l3.995-1.137.905-9.923z"></path></svg>
						<h3 class="text-slate-900 text-xl font-bold">CSS3 + Tailwind + Bootstrap</h3>
						<p class="w-2/3 text-slate-600 mx-auto">
							CSS es clave para dar estilo y diseño a las páginas web, mejorando su apariencia.
						</p>
				</article>


				<article class="space-y-6">
					<svg xmlns="http://www.w3.org/2000/svg" 
					class="fill-yellow-400 w-20 mx-auto" 
					viewBox="0 0 24 24">
						<path d="M3 3h18v18H3V3zm16.525 13.707c-.131-.821-.666-1.511-2.252-2.155-.552-.259-1.165-.438-1.349-.854-.068-.248-.078-.382-.034-.529.113-.484.687-.629 1.137-.495.293.09.563.315.732.676.775-.507.775-.507 1.316-.844-.203-.314-.304-.451-.439-.586-.473-.528-1.103-.798-2.126-.775l-.528.067c-.507.124-.991.395-1.283.754-.855.968-.608 2.655.427 3.354 1.023.765 2.521.933 2.712 1.653.18.878-.652 1.159-1.475 1.058-.607-.136-.945-.439-1.316-1.002l-1.372.788c.157.359.337.517.607.832 1.305 1.316 4.568 1.249 5.153-.754.021-.067.18-.528.056-1.237l.034.049zm-6.737-5.434h-1.686c0 1.453-.007 2.898-.007 4.354 0 .924.047 1.772-.104 2.033-.247.517-.886.451-1.175.359-.297-.146-.448-.349-.623-.641-.047-.078-.082-.146-.095-.146l-1.368.844c.229.473.563.879.994 1.137.641.383 1.502.507 2.404.305.588-.17 1.095-.519 1.358-1.059.384-.697.302-1.553.299-2.509.008-1.541 0-3.083 0-4.635l.003-.042z"></path>
					</svg>
						<h3 class="text-slate-900 text-xl font-bold">Javascript + React</h3>
						<p class="w-2/3 text-slate-600 mx-auto">
							JavaScript es un lenguaje poderoso usado para crear interactividad y dinamismo en páginas web modernas.
						</p>
				</article>


			</div>
		</section>
	</main>

</body>

</html>
