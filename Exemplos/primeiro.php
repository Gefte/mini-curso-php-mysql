<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
        <title>Sejam bem-vindos!!!</title>
		<style>
			
			h1 {
				color: #006600;
			}
		
		</style>
	</head>
	<body>
		<h1><!-- comentário em HTML -->
			<?php
			
				//comentário em PHP linha única
				/*
					comentário em PHP múltiplas linhas
				*/
				
				date_default_timezone_set("America/Cuiaba");
				
				//em PHP utilizamos '.' (ponto) para concatenar
				echo "Olá! Hora agora: "
					.date("Y-m-d H:i");
				
			?>
		</h1>
	</body>
</html>