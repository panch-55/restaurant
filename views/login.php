
<div class="container">
    <div class="ro">
        <div class="col s12 m7">
            <div class="card">
    <div class="card-content">
    <center>

        <h4 class="">Iniciar sesion</h4 c>
            
    <form action="" method="post" id="login">
        <div class="input-field col 12">
            <input type="text" name="user" id="email" class="validate" required>
            <label for="email" class="error">Usuario</label>
        </div>
        <div class="input-field col 12">
            <input type="password" name="pass" class="validate" minlength="5" maxlength="20" required>
            <label for="password" class="error">Password</label>
        </div>

        <button type = "submit" id="btnLogn" class="waves-effect waves-light btn">Iniciar Sesion</button>
    </form>
   
    </center>
    </div>
            </div>
        </div>
    </div>
    
    <?php 
        if (isset($_GET['error'])) { 
    ?>
        <div><?php echo $_GET['error']; ?></div>
    <?php } ?>
</div>
