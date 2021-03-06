<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<style>
			body {
				font: 14px sans-serif;
				width: 100%;
				margin: 0;
			}
			
			header, nav, footer {
				display: block;
			}
			
			h1, h2, ul, p { margin: 0; }
			
			#nav-principal li { display:inline; margin-right: 10px; }
			
			body {
				display: "aaaaa"
							 "bbbbb"
							 "ccccc"
							 "d.e.f"
							 "ggggg";
				400px 5px 200px 5px 150px;
				
			}
			
			#topo h1 { position: a; }
			#topo h2 { position: b; }
			#nav-principal { position: c; }
			#principal { position: d; }
			#aux { position: e; }
			#nav-secundaria { position: f; }
			#rodape { position: g; }
			body::slot(a) { background: orange; }
			body::slot(b) { background: yellow; }
			body::slot(c) { background: greenyellow; }
			body::slot(d) { background: burlywood; }
			body::slot(e) { background: khaki; }
			body::slot(f) { background: magenta; }
			body::slot(g) { background: gray; } 
		</style>
		<script src="bootstrap/js/modernizr.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script src="bootstrap/js/jquery.tpl_layout1.1.6.min.js"></script>
		<script>
			$(document).ready(function(){
				$.setTemplateLayout();
			});
		</script>
	</head>
	<body>
		<header id="topo">
			<h1>Topo 1</h1>
			<h2>Topo 2</h2>
		</header>
	
		<div id="principal">
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
			<p>Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus.</p>
			<p>Phasellus libero felis, blandit nec, commodo ut, imperdiet ut, nibh. Suspendisse potenti. Donec ullamcorper cursus dolor.Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus.</p>
		</div>
		
		<aside id="aux">
			<p>Pellentesque sapien. Sed purus sapien, eleifend ac, volutpat ac, molestie eget, massa.Morbi eleifend, purus quis laoreet faucibus, ante augue malesuada mi, id rhoncus augue lorem eget elit. Ut sollicitudin sodales purus.</p>
		</aside>
		
		<nav id="nav-principal">
			<ul>
				<li><a href="#">Link A</a></li>
				<li><a href="#">Link B</a></li>
				<li><a href="#">Link C</a></li>
			</ul>
		</nav>
		
		<nav id="nav-secundaria">
			<ul>
				<li><a href="#">Link A</a></li>
				<li><a href="#">Link B</a></li>
				<li><a href="#">Link C</a></li>
			</ul>
		</nav>
		
		<footer id="rodape">
			<p>Rodape</p>
		</footer>
	</body>
</html>