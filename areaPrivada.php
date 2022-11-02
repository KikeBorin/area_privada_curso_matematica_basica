<?php
    session_start();
	//aqui verifica se o usuário está logado, senão estiver é direcionada ao header("location: index.php")//
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Curso de Matemática Básica</title>
	<link rel="stylesheet" href="componentesCurso/estiloCurso.css">
</head>

<body>
	<header>
		<h1>Curso de Matemática Básica</h1>
	</header>

	<main>
		<article>
            <a href="sair.php">
				<svg version="1.1" style="width:30px; height: 30px; fill: green" xmlns="http://www.w3.org/2000/svg" 
				xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" 
				enable-background="new 0 0 1000 1000" xml:space="preserve">
					<metadata> 
						Svg Vector Icons : http://www.onlinewebfonts.com/icon 
					</metadata>
					<g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)">
						<path d="M4773.4,4984.6c-233.6-77.1-394.7-214.9-516.2-441.5l-63.1-121.5l-7-2415.2c-7-2672.1-11.7-2546,
						142.5-2772.5c168.2-247.6,509.2-392.4,791.8-341c284.9,53.7,504.5,217.2,621.3,467.1l63.1,133.1v2452.5v2452.5l-60.7,
						130.8c-135.5,289.6-394.7,464.8-705.4,478.8C4939.3,5015,4831.8,5003.3,4773.4,4984.6z"/>
						<path 
						d="M2057,3393.9c-168.2-46.7-266.3-114.4-450.8-308.3C910.1,2359.2,457,1368.8,354.2,348.1C228.1-875.8,
						615.8-2153.5,1391.3-3087.8c177.5-212.5,555.9-581.6,747.4-726.4c875.9-670.4,1971.4-1018.4,3048.2-971.7c1228.6,
						56.1,2317.1,544.2,3164.9,1420.1c378.4,392.4,621.3,738.1,852.6,1216.9c628.3,1298.7,619,2807.5-23.4,4101.6c-233.6,
						469.5-464.8,796.5-810.5,1156.2c-186.9,191.5-259.3,238.3-450.8,287.3c-390.1,
						100.4-817.5-123.8-957.7-499.9c-39.7-107.4-49-172.9-42-331.7c9.3-252.2,58.4-357.4,280.3-600.3c406.4-448.5,
						647-913.3,768.4-1485.5c72.4-336.4,72.4-864.2,0-1200.6c-128.5-607.3-397.1-1102.5-831.5-1536.9c-434.4-436.8-932-705.4-1536.9-831.5c-338.7-72.4-866.6-72.4-1200.6,
						0C3189.8-2833.2,2285.9-1931.6,2031.3-721.6c-72.4,336.3-72.4,864.2,0,1200.6c119.1,567.6,366.7,1046.4,756.8,
						1473.8c217.2,235.9,280.3,364.4,292,612c7,163.5,0,221.9-42,331.7C2895.5,3279.5,2451.7,3503.7,2057,3393.9z"/>
					</g></g>
    			</svg> 
			</a>
		<p>
			Aqui você encontrará o Curso de Matemática Básica, oferecido de forma gratuita. 
			Este curso está separado em conteúdos na forma de vídeos, com uma linguagem simples e objetiva.
		</p>

		<p>
			Para aproveitar melhor este curso, sugerimos que assista os vídeos em sequência e 
			faça a lista de exercícios, conforme sua progressão nos conteúdos. 
			Esta lista está disponível logo abaixo.
		</p>

		<picture>
			<embed src="componentesCurso/Curso-de-Matemática-Básica-com-Gabarito.pdf" width="100%" height="315px"/>
		</picture>

		<p>
			Como dito acima, você encontrará os vídeos separados em conteúdos e com o nome de cada conteúdo 
			na parte superior dele. Em outras palavras, esperamos que você siga as nossas recomendações 
			e aproveite o curso ao máximo. Bons estudos!
		</p>

		<p>Pré-Curso – Operações com Números Naturais + Exercícios de Fixação.</p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/iksJkvFzD1Y" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
			clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 1 – Operações com Números Decimais.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/97dsHdGjPG0" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Complemento – Aula 1 – Exercícios Resolvidos.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/a8x5dc7O_0U" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 2 – Operações com Números Inteiros + Exercícios de Fixação.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/bOydj25NbGQ" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 3 – Divisão Não Exata + Exercícios de Fixação.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/J6uTzORe8vU" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 4 – Conceito de Fração, Tipos de Frações, Adição e Subtração com Frações.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/xfbO0EyvV7k" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 5 – Multiplicação, Divisão e Simplificação de Frações + Exercícios de Fixação.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/9w1E60bo_l0" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Complemento – Aula 2, Aula 4 e Aula 5 – Exercícios Resolvidos.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/sImIoEpijw0" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 6 – Potenciação e Propriedades da Potenciação.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/JNNMf7BOuEc" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 7 – Radiciação e Propriedades da Radiciação.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/sanQGdBYVHA" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 8 – Expressões Numéricas.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/ZTJcAlfdwdw" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 9 – Decimal Exato e Decimal Periódico + Exercícios de Fixação.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/ICZ7d-EvLq8" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 10 – Transformações e Porcentagem de um Número + Exercícios de Fixação.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Vf5YjbrffA4" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Informações Complementares – Aulas 5, 6 , 9 e 10.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/3FKLL_KunMo" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Exercícios Resolvidos Compilados – (Parte 1).<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/fSWKvEdyuC8" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Exercícios Resolvidos Compilados – (Parte 2).<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/SoLJ-7TDno4" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Exercícios Resolvidos Compilados – (Parte 3).<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/56NSwq1Y128" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Exercícios Resolvidos Compilados – (Parte 4).<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/NnMF3fkK1P0" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 11 – Expressões Algébricas + Exercícios de Fixação.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/TMmZhjB8c1g" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 12 – Equação do 1º Grau + Exercícios de Fixação.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/G7cS5zhkrE8" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 13 – Razão e Proporção + Exercícios de Fixação.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/ijr1A9TGzzk" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 14 – Regra de Três Simples + Exercícios de Fixação.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/C5zlVU9z2VY" 
			itle="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 15 – Sistemas de Medidas.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/es5aLSGCaCo" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Exercícios Resolvidos Compilados – (Parte 5).<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/l22JEC2VfPw" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<p>Aula 16 – Juros Simples + Exercícios de Fixação.<p>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/J8vMAvdKWZI" 
			title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
			encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		</article>	
	</main>
	<div class="whats">
		<a href="https://wa.me/551499138####?text=Olá%20estudante!%20Tudo%20bem?%20Tem%20interesse%20em%20aulas%20particulares?" 
		target="_blank"> 
			<img src="componentesCurso/logo-whatsapp.png" width="50" alt="Dúvidas? Fale conosco!" 
			title="Dúvidas? Fale conosco!">
		</a>
	</div>	
	<footer>
        <p>Site criado por <a href="https://github.com/KikeBorin" target="_blank">Fernando Borin</a></p>
    </footer>
</body>
</html>	
