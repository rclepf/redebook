<?= $render('header', ['loggedUser' => $loggedUser]); ?>

<section class="container main">
    <?= $render('sidebar', ['activeMenu' => 'config']); ?>


    <section class="feed mt-10">

        <h1>Configurações</h1>

        <?php if (!empty($flash)) : ?>
            <div class="flash"><?php echo $flash; ?></div>
        <?php endif; ?>

        <form class="config-form" method="POST" enctype="multipart/form-data" action="<?= $base; ?>/config">

            <label>
                Novo Avatar:<br />
                <input type="file" name="avatar" /><br />
                <img class="image-edit" src="<?= $base; ?>/media/avatars/<?= $user->avatar; ?>" />
            </label>

            <label>
                Nova Capa:<br />
                <input type="file" name="cover" /><br />
                <img class="image-edit" src="<?= $base; ?>/media/covers/<?= $user->cover; ?>" />
            </label>

            <hr />

            <label>
                Nome Completo:<br />
                <input type="text" name="name" value="<?= $user->name; ?>" />
            </label>

            <label>
                Data de nascimento:<br />
                <input type="text" name="birthdate" id="birthdate" value="<?= date('d/m/Y', strtotime($user->birthdate)); ?>" />
            </label>

            <label>
                E-mail:<br />
                <input type="email" name="email" value="<?= isset($user->email); ?>" />
            </label>

            <label>
                Cidade:<br />
                <input type="text" name="city" value="<?= $user->city; ?>" />
            </label>

            <label>
                Trabalho:<br />
                <input type="text" name="work" value="<?= $user->work; ?>" />
            </label>

            <hr />

            <label>
                Nova Senha:<br />
                <input type="password" name="password" />
            </label>

            <label>
                Confirmar Nova Senha:<br />
                <input type="password" name="password_confirm" />
            </label>

            <button class="button">Salvar</button>

        </form>

    </section>

</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script>
    $(document).ready(function() {
        $('#birthdate').mask('99/99/9999');
    });
</script>

<?= $render('footer'); ?>