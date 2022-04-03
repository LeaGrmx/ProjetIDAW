<?php
    require_once("template_header.php");
    require_once("template_menu.php");
?>
<head>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/src/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"/>
    <script type="text/javascript" src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#dataTableAliments').DataTable();
        } );
    </script>
</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

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
            <li class="nav-item active">
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
            <li class="nav-item">
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
                                <button class="btn btn-danger" type="button">
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
                        <h1 class="h3 mb-0 text-gray-800">Mes aliments</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row justify-content-center">
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-danger">Vous êtes sur la page dédiée à vos aliments</h6>
                                </div>
                                <div class="card-body">
                                    <p>Vous pouvez retrouver sur cette page l'ensemble des aliments regroupés dans votre base de données.</p>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-danger">Ajouter un aliment</h6>
                                </div>
                                <div class="card-body">
                                    <p>Pour compléter la base de données que nous proposons, <br>vous pouvez <a href="newaliment.php">cliquer ici</a> pour renseigner un nouvel aliment !</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <!-- Content Row :datatable-->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-danger">Base de données des aliments</h6>
                            <p> Dans cette table, les apports calorifiques sont indiqués en kcal/100g, la quantité de vitamine D est renseignée en microg/100g, les quantités de vitamines E et C en mg/100g et le reste des données est renseigné en (g/100g).</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTableAliments" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>ID_TYPE</th>
                                            <th>Apport calorifique</th>
                                            <th>Eau</th>
                                            <th>Protéines</th>
                                            <th>Glucides</th>
                                            <th>Lipides</th>
                                            <th>Sucre</th>
                                            <th>Fibres</th>
                                            <th>Sel</th>
                                            <th>Vit.D</th>
                                            <th>Vit.C</th>
                                            <th>Vit.E</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Banane</td>
                                            <td>204</td>
                                            <td>90</td>
                                            <td>75</td>
                                            <td>1</td>
                                            <td>19</td>
                                            <td>0</td>
                                            <td>15</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>7</td>
                                            <td><input type="button" class="btn btn-primary btn-user btn-block" value="Modifier" onclick="modif(this)"><input type="button" class="btn btn-danger btn-user btn-block" value="Supprimer" onclick="suppr(this)"><input type="button" class="btn btn-success btn-user btn-block" value="Sauvegarder" onclick="sauv(this)"></td>
                                        </tr>
                                        <tr>
                                            <td>Carotte crue</td>
                                            <td>201</td>
                                            <td>40</td>
                                            <td>88</td>
                                            <td>0</td>
                                            <td>7</td>
                                            <td>0</td>
                                            <td>6</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td><input type="button" class="btn btn-primary btn-user btn-block" value="Modifier" onclick="modif(this)"><input type="button" class="btn btn-danger btn-user btn-block" value="Supprimer" onclick="suppr(this)"><input type="button" class="btn btn-success btn-user btn-block" value="Sauvegarder" onclick="sauv(this)"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
    function suppr(btn) {
            var row = btn.parentNode.parentNode;
            let nom = row.children[0].innerHTML;
            let id_type = row.children[1].innerHTML;
            let apports = row.children[2].innerHTML;
            let eau  = row.children[3].innerHTML;
            let proteines = row.children[4].innerHTML;
            let glucides = row.children[5].innerHTML;
            let lipides = row.children[6].innerHTML;
            let sucres = row.children[7].innerHTML;
            let fibres = row.children[8].innerHTML;
            let sel = row.children[9].innerHTML;
            let vd = row.children[10].innerHTML;
            let vc = row.children[11].innerHTML;
            let ve = row.children[12].innerHTML;
            let aliment = {nom,id_type,apports,eau,proteines,glucides,lipides,sucres,fibres,sel,vd,vc,ve};
            $.ajax({
                url : "../Back_end/deleteAliment.php",
                method : "POST",
                dataType: "json",
                data : aliment,
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
        var aliment = row.childNodes;
        console.log(aliment);
        var apports = repas[2];
        var eau = repas[3];
        var proteines = repas[4];
        var glucides = repas [5];
        var lipides = repas [6];
        var sucres = repas [7];
        var fibres = repas [8];
        var sel = repas [9];
        var vd = repas [10];
        var vc = repas [11];
        var ve = repas [12];
        var newapports = apports.innerHTML;
        apports.innerHTML = "<input type='text' id='apports_modif' value='"+newapports+"'>";
        var neweau = eau.innerHTML;
        eau.innerHTML = "<input type='text' id='eau_modif' value='"+neweau+"'>";
        var newproteines = proteines.innerHTML;
        proteines.innerHTML = "<input type='text' id='proteines_modif' value='"+newproteines+"'>";
        var newglucides = glucides.innerHTML;
        glucides.innerHTML = "<input type='text' id='glucides_modif' value='"+newglucides+"'>";
        var newlipides = lipides.innerHTML;
        lipides.innerHTML = "<input type='text' id='lipides_modif' value='"+newlipides+"'>";
        var newsucres = sucres.innerHTML;
        sucres.innerHTML = "<input type='text' id='sucres_modif' value='"+newsucres+"'>";
        var newfibres = fibres.innerHTML;
        fibres.innerHTML = "<input type='text' id='fibres_modif' value='"+newfibres+"'>";
        var newsel = sel.innerHTML;
        sel.innerHTML = "<input type='text' id='sel_modif' value='"+newsel+"'>";
        var newvd = vd.innerHTML;
        vd.innerHTML = "<input type='text' id='vd_modif' value='"+newvd+"'>";
        var newvc = vc.innerHTML;
        vc.innerHTML = "<input type='text' id='vc_modif' value='"+newvc+"'>";
        var newve = ve.innerHTML;
        ve.innerHTML = "<input type='text' id='ve_modif' value='"+newve+"'>";
        }

        function sauv(btn) {
            var login = "<?php echo $currentlogin;?>";
            var apports = $("#apports_modif").val();
            var eau = $("#eau_modif").val();
            var proteines = $("#proteines_modif").val();
            var glucides = $("#glucides_modif").val();
            var lipides = $("#lipides_modif").val();
            var sucres = $("#sucres_modif").val();
            var fibres = $("#fibres_modif").val();
            var sel = $("#sel_modif").val();
            var vd = $("#vd_modif").val();
            var vc = $("#vc_modif").val();
            var ve = $("#ve_modif").val();
            var aliment = {apports,eau,proteines,glucides,lipides,sucres,fibres,sel,vd,vc,ve};
            console.log(aliment);
            $.ajax({
                url :"../Back_end/sauvAliment.php",
                method :"post",
                dataType :"json",
                data: aliment,
            })
            .done(function(){
                for(k=2;k<=12;k++) {
                    var row = btn.parentNode.parentNode;
                    var enfant = row.childNodes;
                    enfant[k].innerHTML = enfant[k].childNodes[0].value;
                }
            })
            .fail(function(){
                console.log("Erreur lors de la mise à jour des données");
            })
            
        }
</script>

<body>
<?php
    require_once("template_footer.php");
?>