<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Cadastro - REDEBOOK</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/login.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#birthdate').mask('99/99/9999');
		});
	</script>
</head>

<body>   
    <header>
        <div class="container">
            <a href=""><img src="<?= $base; ?>/assets/images/redebook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form method="POST" action="<?= $base; ?>/cadastro">
            <?php if (!empty($flash)) : ?>
                <div class="flash"> <?php echo $flash; ?> </div>
            <?php endif ?>

            <input placeholder="Digite seu Nome Completo" class="input" type="text" name="name" />

            <input placeholder="Digite seu E-mail" class="input" type="email" name="email" />

            <input placeholder="Digite sua Senha" class="input" type="password" name="password" />

            <input placeholder="Digite sua Data de Nascimento" class="input" type="text" name="birthdate" id="birthdate" />

            <input class="button" type="submit" value="Fazer cadastro" />

            <a href="<?= $base; ?>/login">Já tem conta? Faça o login</a>
        </form>
    </section>
    
</body>

</html>