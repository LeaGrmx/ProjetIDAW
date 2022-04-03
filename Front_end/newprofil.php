<?php
    require_once('template_header.php');
?>
<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block"></div> -->
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Créez un compte!</h1>
                        </div>
                        <form method="POST" class="user" id="new_account" action="" onsubmit="onFormSubmit();">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="nom"
                                        id ="idnom" placeholder="Nom">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="prénom"
                                        id="idprénom" placeholder="Prénom">       
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user"
                                        name="login" id="idlogin" placeholder="Login" required> 
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control form-control-user"
                                        name="age" id="idage" placeholder="Age" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Adresse mail" required>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                        name="password" id="exampleInputPassword" placeholder="Mot de passe" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        name="repeat_password" id="exampleRepeatPassword" placeholder="Confirmez le mot de passe" required>
                                </div>
                            </div>
                            <input class="btn btn-primary btn-user btn-block" type="submit" value="Valider" />
                            <hr>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.php">Mot de passe oublié?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="index.php">Vous avez déjà un compte? Connectez-vous!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="src/jquery/jquery.min.js"></script>
<script src="src/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="src/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="src/js/sb-admin-2.min.js"></script>

<script>
    function onFormSubmit() {
        event.preventDefault();
        let nom = $("#idnom").val();
        let prénom = $("#idprénom").val();
        let login = $("#idlogin").val();
        let age = $("#idage").val();
        let mail = $("#exampleInputEmail").val();
        let mdp = $("#exampleInputPassword").val();
        let confirm_mdp = $("#exampleRepeatPassword").val();

        let donnees = {nom,prénom,login,age,mail,mdp,confirm_mdp};
        $.post({
                url : '../Back_end/addAccount.php',
                dataType : 'json',
                data : donnees
        })
        .done(function(){
            console.log("Nouveau compte ajouté");
        })
        .fail(function(){
            console.log("Echec de l'ajout");
            alert('Mot de passe différents!');
        })
    }
</script>

</body>

<?php
require_once('template_footer.php');
?>