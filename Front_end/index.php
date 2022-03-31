<!DOCTYPE html>
<html>
    <head>
        <title> Mon profil iMangerMieux </title>
        <link rel="stylesheet" href="sb-admin-2.css" type="text/css"
                media="screen" title="default" charset="utf-8"/>
    </head>
    <body class="bg-gradient-primary">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                        <p>Bonjour ! Nous sommes le :
                                            <?php
                                            // Affichage de la date
                                            echo date("d/m/Y");?> </p>
                                        <p> Il est : 
                                        <?php
                                            // Affichage de l'heure
                                            date_default_timezone_set('Europe/Amsterdam');
                                            echo date("H:i");
                                        ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Vous avez déjà un compte iMangerMieux, connectez-vous ici :</h1>
                                        </div>
                                        <form class="user" id="login_form" action="../Back_end/connected.php" method="POST">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                    name="login" aria-describedby="loginHelp"
                                                    placeholder="Entrez Votre Login...">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                    name="password" placeholder="...puis votre mot de passe">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Se souvenir de moi</label>
                                                </div>
                                            </div>
                                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Se connecter...">
                                                
                                            <hr>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.php">Mot de passe oublié?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="newprofil.php">Créer mon compte!</a>
                                        </div>
                                    </div>
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

</html>
