<?php
    require_once('template_header.php');
    require_once("template_menu.php");
    $currentlogin = $_SESSION['login'];
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="accueil.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><inf>i</inf>MangerMieux</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="accueil.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Accueil</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Alimentation
            </div>

            <!-- Nav Item - Aliments -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="aliments.php" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Mes aliments</span>
                </a>
            </li>

            <!-- Nav Item - Journal -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="journal.php" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Mon journal</span>
                </a>
            </li>

            <!-- Nav Item - Repas -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="repas.php" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Mon dernier repas</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Profil
            </div>

            <!-- Nav Item - Mes informations -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="profil.php" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Mes informations</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!--Se déconnecter -->
            <div class="sidebar-heading text-center active">
                <a href="../Back_end/unconnected.php"><i class="fas fa-fw fa-folder"></i>
                    <span>Se déconnecter</span>
            </div>
            
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Recherche..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['login']?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Mes repas</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row justify-content-center">
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-warning">Vous êtes sur la page dédiée à votre dernier repas</h6>
                                </div>
                                <div class="card-body">
                                    <p>Vous pouvez saisir les détails de votre dernier repas ici, <br> ils seront ajoutés à vos  précédentes sélections.</p>
                                    <p>Veillez à remplir le champ quantité des parties de repas <br>que vous remplissez!</p>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-warning">Voir l'historique de vos derniers repas</h6>
                                </div>
                                <div class="card-body">
                                    <p>Pour consulter les dernières saisies de vos repas, <br>vous pouvez <a href="journal.php">cliquer ici</a>!</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-warning">Formulaire de saisie de repas</h6>
                                </div>
                                <div class="card body" style="padding: 30px">
                                    <form method="post" id="addNewRepas" action="" onsubmit="onFormSubmit();">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="date" class="form-control form-control-user" name="date"
                                                id="inputDate" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="time" class="form-control form-control-user" name="heure"
                                                id="inputHeure" value="00:00">       
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <select class="form-control form-control-user" id="repas" required>
                                                    <option value="Default">Repas de la journée</option>
                                                    <option value="Petit-déjeuner">Petit-déjeuner</option>
                                                    <option value="Déjeuner">Déjeuner</option>
                                                    <option value="Goûter">Goûter</option>
                                                    <option value="Dîner">Dîner</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select class="form-control form-control-user" id="place" required>
                                                    <option value="Default">Partie du repas</option>
                                                    <option value="Entree">Entrée</option>
                                                    <option value="Déjeuner">Plat</option>
                                                    <option value="Goûter">Dessert</option>
                                                    <option value="Dîner">Encas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user"
                                                    name="nomAliment" id="inputAliment" placeholder="Aliment">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user"
                                                    name="quantite" id="qt" placeholder="Quantité (en g)">
                                            </div>
                                        </div>
                                        <input class="btn btn-warning btn-user btn-block" type="submit" value="Valider"/>
                                        <hr>
                                    </form>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-warning">Données venant d'être ajoutées</h6>
                                </div>
                                <div class="card body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable_repas" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="text-align: center; vertical-align: middle">Date</th>
                                                    <th scope="col" style="text-align: center; vertical-align: middle">Heure</th>
                                                    <th scope="col" style="text-align: center; vertical-align: middle">Repas</th>
                                                    <th scope="col" style="text-align: center; vertical-align: middle">Moment du repas</th>
                                                    <th scope="col" style="text-align: center; vertical-align: middle">Aliment</th>
                                                    <th scope="col" style="text-align: center; vertical-align: middle">Quantité</th>
                                                    <th scope="col" style="text-align: center; vertical-align: middle">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody id="AlimentsTableBody">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    

<script>
    function onFormSubmit() {
        event.preventDefault();
        let date = $("#inputDate").val();
        let heure = $("#inputHeure").val();
        //let type_repas = $("#inputRepas").val();
        let selectElmt = document.getElementById("repas");
        let type_repas = selectElmt.options[selectElmt.selectedIndex].text;
        /* let entree1 = $("#inputEntree1").val();
        let qt1 = $("#qt1").val();
        let entree2 = $("#inputEntree2").val();
        let qt2 = $("#qt2").val();
        let plat = $("#inputPlat").val();
        let qt3 = $("#qt3").val();
        let accompagnement1 = $("#inputAcc1").val();
        let qt4 = $("#qt4").val();
        let accompagnement2 = $("#inputAcc2").val();
        let qt5 = $("#qt5").val();
        let laitage = $("#inputLait").val();
        let qt6 = $("#qt6").val();
        let fruit1 = $("#inputFruit1").val();
        let qt7 = $("#qt7").val();
        let fruit2 = $("#inputFruit2").val();
        let qt8 = $("#qt8").val(); */
        let selectElmt2 = document.getElementById("place");
        let place_repas = selectElmt2.options[selectElmt2.selectedIndex].text;
        let aliment = $("#inputAliment").val(); 
        let qt = $("#qt").val();
        let login = "<?php echo $currentlogin;?>";
        /*   let repas = {login, date, heure, type_repas, entree1,entree2,plat,accompagnement1,accompagnement2,laitage,fruit1,fruit2, qt1, qt2, qt3, qt4, qt5, qt6, qt7, qt8}; */
        let repas = {login, date, heure, type_repas, place_repas, aliment, qt};  
        $.post({
                url : '../Back_end/addJournal.php',
                dataType : 'json',
                data : repas
            })
        .done(function(){
            /* $('#AlimentsTableBody').append(`<tr><td>${date}</td><td>${heure}</td><td>${type_repas}</td><td>${entree1}</td><td>${entree2}</td><td>${plat}</td><td>${accompagnement1}</td><td>${accompagnement2}</td><td>${laitage}</td><td>${fruit1}</td><td>${fruit2}</td><td><input type="button" value="Modifier" onclick="modif(this)"><input type="button" value="Supprimer" onclick="suppr(this)"><input type="button" value="Sauvegarder" onclick="sauv(this)"></td></tr>`); */
            $('#AlimentsTableBody').append(`<tr><td>${date}</td><td>${heure}</td><td>${type_repas}</td><td>${place_repas}</td><td>${aliment}</td><td>${qt}</td><td><input type="button" class="btn btn-primary btn-user btn-block" value="Modifier" onclick="modif(this)"><input type="button" class="btn btn-danger btn-user btn-block" value="Supprimer" onclick="suppr(this)"><input type="button" class="btn btn-success btn-user btn-block" value="Sauvegarder" onclick="sauv(this)"></td></tr>`);
        })
        .fail(function(){
            console.log('Erreur lors de l\'ajout');
        })
    }

    function suppr(btn) {
        var row = btn.parentNode.parentNode;
        let date = row.children[0].innerHTML;
        let heure = row.children[1].innerHTML;
        let type_repas = row.children[2].innerHTML;
        let place_repas  = row.children[3].innerHTML;
        let aliment = row.children[4].innerHTML;
        let qt = row.children[5].innerHTML;
        /* let entree1 = row.children[3].innerHTML;
        let entree2 = row.children[4].innerHTML;
        let plat = row.children[5].innerHTML;
        let acc1 = row.children[6].innerHTML;
        let acc2 = row.children[7].innerHTML;
        let laitage = row.children[8].innerHTML;
        let fruit1 = row.children[9].innerHTML;
        let fruit2 = row.children[10].innerHTML; */
        let login = "<?php echo $currentlogin;?>";
        /* let repas = {login,date,heure,type_repas,entree1,entree2,plat,acc1,acc2,laitage,fruit1,fruit2};  */
        let repas = {login,date,heure,type_repas,place_repas,aliment,qt}; 
        $.ajax({
            url : "../Back_end/deleteJournal.php",
            method : "POST",
            dataType: "json",
            data : repas,
        })
        .done(function(data){
            row.parentNode.removeChild(row);
        })
        .fail(function(){
            console.log('Erreur lors de la suppression');
        })
    }

    function modif(btn) {
        var row = btn.parentNode.parentNode;
        var repas = row.childNodes;
        console.log(repas);
        var type_repas = repas[2];
        var place_repas = repas[3];
        var aliment = repas[4];
        var qt = repas [5];
/*             var entree1 = repas[3];
        var entree2 = repas[4];
        var plat = repas[5];
        var acc1 = repas[6];
        var acc2 = repas[7];
        var laitage = repas[8];
        var fruit1 = repas[9];
        var fruit2 = repas[10]; */
        /* var newtype_repas = type_repas.innerHTML;
        type_repas.innerHTML = "<input type='text' id ='type_repas_modif' value='"+newtype_repas+"'>"; */

        /* var newentree1 = entree1.innerHTML;
        entree1.innerHTML = "<input type='text' value='"+newentree1+"'>";

        var newentree2 = entree2.innerHTML;
        entree2.innerHTML = "<input type='text' value='"+newentree2+"'>";

        var newplat = plat.innerHTML;
        plat.innerHTML = "<input type='text' value='"+newplat+"'>";

        var newacc1 = acc1.innerHTML;
        acc1.innerHTML = "<input type='text' value='"+newacc1+"'>";

        var newacc2 = acc2.innerHTML;
        acc2.innerHTML = "<input type='text' value='"+newacc2+"'>";

        var newlaitage = laitage.innerHTML;
        laitage.innerHTML = "<input type='text' value='"+newlaitage+"'>";
        
        var newfruit1 = fruit1.innerHTML;
        fruit1.innerHTML = "<input type='text' value='"+newfruit1+"'>";

        var newfruit2 = fruit2.innerHTML;
        fruit2.innerHTML = "<input type='text' value='"+newfruit2+"'>";    */

        /* var newplace_repas = place_repas.innerHTML;
        place_repas.innerHTML = "<input type='text' id='place_repas_modif' value='"+newplace_repas+"'>"; */

        var newaliment = aliment.innerHTML;
        aliment.innerHTML = "<input type='text' id='aliment_modif' value='"+newaliment+"'>";

        var newqt = qt.innerHTML;
        qt.innerHTML = "<input type='text' id='qt_modif' value='"+newqt+"'>";
    }

    function sauv(btn) {
        /*   var row = btn.parentNode.parentNode;
        console.log(row);
        var enfant = row.childNodes;
        console.log(enfant);
        var type_repas = enfant[2]; */
/*            var entree1 = enfant[3];
        var entree2 = enfant[4];    
        var plat = enfant[5];
        var acc1 = enfant[6];
        var acc2 = enfant[7];
        var laitage = enfant[8];
        var fruit1 = enfant[9];
        var fruit2 = enfant[10]; */
        /* var place_repas = enfant[3];
        var aliment = enfant[4];
        var qt = enfant[5]; */
        /* var date = 
        var heure = */
        var login = "<?php echo $currentlogin;?>";
        /* var type_repas = $("#type_repas_modif").val();
        var place_repas = $("#place_repas_modif").val(); */
        var aliment = $("#aliment_modif").val();
        var qt = $("#qt_modif").val();
        /* repas = {type_repas,entree1,entree2,plat,acc1,acc2,laitage,fruit1,fruit2}; */
        var repas = {aliment, qt, login};
        console.log(repas);
        $.ajax({
            url :"../Back_end/sauvJournal.php",
            method :"post",
            dataType :"json",
            data: repas,
        })
        .done(function(){
            for(k=4;k<=5;k++) {
                var row = btn.parentNode.parentNode;
                var enfant = row.childNodes;
                enfant[k].innerHTML = enfant[k].childNodes[0].value;
            }
        })
        .fail(function(){
            console.log("Erreur lors de la mise à jour des données");
        })
        
    }

    /* $(document).ready(function(){
        $('#repas').change(function(){
            console.log($(this).val());
            if($(this).val()=='Petit-déjeuner'){
                $('#heure_repas').val()='08:00';
            }
        });
    }); */

</script>
</body>
<?php
    require_once('template_footer.php');
?>   