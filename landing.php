<!DOCTYPE html>
<html class="scroll-smooth">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hola Tailwind!!!</title>
	<link rel="stylesheet" type="text/css" href="src/css/estilos.css">
</head>
<body>

	<header class="bg-blue-500" id="inicio">


		<!-- navigation -->
		<nav class="py-6 text-white grid justify-items-center items-center gp-6 wrapper md:grid-flow-col md:justify-between">
			<a href="#">
				<h2 class="text-3xl font-extrabold mb-4">Landing.</h2>
			</a>

			<div class="space-x-4">
				<a href="#inicio" class="mr-4">Inicio</a>
				<a href="#habilidades" class="mr-4">Habilidades</a>
				<a href="#proyectos">Proyectos</a>
				<a href="#contacto">Contacto</a>
			</div>
		</nav>


		<!-- saludos -->
		<section class="wrapper py-14 flex flex-col items-center justify-items-center gap-12 pt-2 md:flex-row min-h-[600px]">

			<img src="girl.jpg" alt="Woman" class="block max-w-lg w-full mb-4 mx-auto md:w-2/5">

			<div class="text-white space-y-6 text-center md:w-3/5 md:text-left">

				<h1 class="text-3xl font-bold md:text-4xl">Yo soy Tiago, y será un placer ayudarte!</h1>
			
				<p class="max-w-lg">
					Programador web, con dominio de HTML, CSS, PHP, SQL y JavaScript para crear experiencias web dinámicas y atractivas.
				</p>

				<a href="#contacto" class="inline-block bg-slate-700 py-4 px-8 rounded-xl font-bold">
					Contáctame ahora
				</a>

			</div>

		</section>

	</header>


	<main>

		<!-- habilidades -->
		<section class="wrapper py-20 text-center" id="habilidades">

			<h2 class="text-3xl font-bold md:text-4xl">Nuestras Habilidades</h2>

			<div class="mt-12 grid gap-8 max-w-md mx-auto md:grid-flow-col md:max-w-none auto-cols-fr">


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


		<!-- proyectos -->
		<section class="bg-slate-50 py-20" id="proyectos">
			<div class="wrapper text-center">
				<h2 class="text-3xl font-bold mb-6 md:text-4xl">Nuestro Trabajo</h2>

				<p class="font-light text-xl text-slate-500 md:w-2/3 mx-auto">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. 
				</p>

				<div class="mt-12 grid gap-12 md:grid-flow-col auto-cols-fr">

					<article class="w-4/5 mx-auto space-y-4">

						<img 
							class="aspect-square object-cover rounded-2xl"
							src="img/woman2.jpg" 
							alt="Woman">

						<h3 class="text-2xl font-medium">Taiwind</h3>

						<p class="font-light text-slate-500">
							Tailwind es un framework CSS moderno que simplifica el diseño y personalización de páginas web.
						</p>

					</article>


					<article class="w-4/5 mx-auto space-y-4">

						<img 
							class="aspect-square object-cover rounded-2xl"
							src="img/woman3.jpg" 
							alt="Woman">

						<h3 class="text-2xl font-medium">Bootstrap</h3>

						<p class="font-light text-slate-500">
							Bootstrap es un marco de trabajo frontend que facilita la creación de sitios web responsivos
						</p>

					</article>


					<article class="w-4/5 mx-auto space-y-4">

						<img 
							class="aspect-square object-cover rounded-2xl"
							src="img/woman4.jpg" 
							alt="Woman">

						<h3 class="text-2xl font-medium">Laravel</h3>

						<p class="font-light text-slate-500">
							Laravel es un framework PHP potente y versátil para construir aplicaciones web eficientes y escalables
						</p>

					</article>
				</div>


			</div>
		</section>




		<section 
			class="wrapper py-20 grid gap-12 md:grid-flow-col auto-cols-fr items-center" 
			id="contacto">
			<div>
				<h2 class="text-3xl font-bold">Dame tu correo, y te contactaré a la brevedad</h2>

				<p class="font-light text-slate-600 text-lg mt-4">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>

			<form class="grid gap-6">
				<input 
					class="border border-slate-900 p-4 rounded-lg text-center"
					type="email" 
					placeholder="hola@tailwind.com">

				<input 
					class="bg-orange-500 text-white py-4 px-10 rounded-lg"
					type="submit" 
					value="Contáctame">
			</form>
		</section>



		<footer class="bg-blue-100">

			<div class="wrapper py-20">

				<section class="flex flex-col text-center gap-6 border-b-2 border-slate-400 pb-8 md:flex-row md:justify-between md:items-center md:pb-10">
					<h2 class="text-3xl text-slate-900 font-extrabold">Landing</h2>

					<p class="text-slate-600">micorreo@micorreo.com</p>
				</section>




				<section class="flex flex-col text-center gap-6 pt-8 md:flex-row md:justify-between md:items-center md:pt-10">

					<div class="flex justify-center gap-4 text-slate-900">
						<a href="#inicio">Inicio</a>
						<a href="#habilidades">Habilidades</a>
						<a href="#proyectos">Proyectos</a>
						<a href="#contacto">Contacto</a>
					</div>



					<div class="grid grid-flow-col auto-cols-max gap-8 justify-center">
						<a href="#">
							<img 
							class="w-7 "
							src="img/facebook.svg">
						</a>

						<a href="#">
							<img 
							class="w-7 "
							src="img/instagram.svg">
						</a>

						<a href="#">
							<img 
							class="w-7 "
							src="img/twitter.svg">
						</a>
					</div>
				</section>
			</div>
		</footer>

	</main>

</body>

</html>
