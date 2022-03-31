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
                            <h1 class="h4 text-gray-900 mb-4">Créer un compte!</h1>
                        </div>
                        <form class="user" id="new_form" action="../Back_end/profil.php" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="nom"
                                        placeholder="Nom">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" name="prénom"
                                        placeholder="Prénom">       
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user"
                                        name="login" placeholder="Login">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control form-control-user"
                                        name="age" placeholder="Age">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Adresse mail">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                        name="password" id="exampleInputPassword" placeholder="Mot de passe">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        name="repeat_password" id="exampleRepeatPassword" placeholder="Confirmez le mot de passe">
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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

<?php
require_once('template_footer.php');
?>