<?php
    /* require_once('../Back_end/database.php');
    $requete = "SELECT DISTINCT LIBELLE_TYPE, NOM_ALIMENT FROM aliments join types on aliments.id_type = types.id_type ORDER BY types.LIBELLE_TYPE, aliments.NOM_ALIMENT;";
    $retours = mysqli_query($mysqli,$requete);
    
    $fichier = fopen("../Back_end/type_aliment.js","w");
    fclose($fichier);
    
    $fichier = fopen("../Back_end/type_aliment.js","w+");
    $chaine=""; $un_type=""; $chaine_types="";

    fwrite($fichier, "function retour_aliments(un_type)\r\n");
    fwrite($fichier, "{\r\n\tvar chaine_aliments='';\r\n");
    fwrite($fichier, "\r\n\tswitch(un_type)\r\n\t{\r\n");

    while($retour = mysqli_fetch_array($retours)){
        if($retour["liste_types"])!= $un_type){
            if($un_type!=""){
                $chaine = rtrim($chaine, "|");
                $chaine .= "';\r\n";
                $chaine .= "\t\t\tbreak;\r\n";
            }
            $un_type = $retour["liste_types"]);
            $chaine_types .= $retour["liste_types"]."|";
            $chaine .= "\t\tcase '".substr($un_type, 0, 50)."':\r\n";
            $chaine .= "\t\t\tchaine_aliments='";
        }
        else{
            $chaine .= trim(utf8_encode($retour["liste_aliments"]))."|";
        }
    }
    $chaine = rtrim($chaine, "|");
    $chaine .= "';\r\n";
    $chaine .= "\t\t\tbreak;\r\n";

    fwrite($fichier, $chaine);

    fwrite($fichier, "\t}\r\n\r\n\treturn chaine_aliments;\r\n}");
    fclose($fichier); */
?> 

<?php
    require_once('template_header.php');
?>
<head>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"/>
    <script type="text/javascript" src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#dataTableNewAliments').DataTable();
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
                        <h1 class="h3 mb-0 text-gray-800">Ajouter un aliment</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row justify-content-center">
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-danger">Créer un nouvel aliment dans la base de données</h6>
                                </div>
                                <div class="card-body">
                                    <p>Vous pouvez ici ajouter les aliments que vous souhaitez dans notre base de données.</p>
                                    <p>Pour cela, rien de simple, remplissez le formumaire ci-dessous!</p>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-danger">Voir l'ensemble de vos aliments</h6>
                                </div>
                                <div class="card-body">
                                    <p>Pour consulter la base de données de vos aliments, <br>vous pouvez <a href="aliments.php">cliquer ici</a>!</p>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-danger">Formulaire de saisie d'aliment</h6>
                                </div>
                                <div class="card body">
                                    
                                    <form method="post" id="addNewAliment" action="" onsubmit="onFormSubmit();" style="padding: 30px">
                                        <div class="form-group row">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <label for="inputNom" class="nom" id="inputNom">Nom de l'aliment</label>
                                                <input type="text" class="form-control" id="inputNom2" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <select class="form-control form-control-user" id="choix_type">
                                                    <option value="00">Sélectionner un type</option>
                                                    <optgroup label='Plats et Accompagnements'>
                                                        <option value='Salades_composees'>101</option>
                                                        <option value='soupes'>102</option>
                                                        <option value='plats_composés'>103</option>
                                                        <option value='pizzas_tartes_crepes_salees'>104</option>
                                                        <option value='sandwichs'>105</option>
                                                        <option value='pates_riz_cereales'>301</option>
                                                        <option value='legume'>201</option>
                                                        <option value='pommes_de_terre'>202</option>
                                                        <option value='legumineuses'>203</option>
                                                        <option value='pains'>302</option>
                                                        <option value='biscuits_aperitifs'>303</option>   
                                                    </optgroup>
                                                    <optgroup label='Fruits'>
                                                        <option value='fruits'>204</option>
                                                        <option value='fruits_a_coque'>205</option>
                                                    </optgroup>  
                                                    <optgroup label='Viandes et Protéines'>
                                                        <option value='viandes_cuites'>401</option>
                                                        <option value='viandes_crues'>402</option>          
                                                        <option value='charcuterie'>403</option>
                                                        <option value='autres_viandes'>404</option>
                                                        <option value='oeufs'>410</option>
                                                    </optgroup>
                                                    <optgroup label='Poissons'>
                                                        <option value='poissons_cuits'>405</option>
                                                        <option value='poissons_crus'>406</option>
                                                        <option value='autres_poissons'>409</option>
                                                    </optgroup>
                                                    <optgroup label='Produits Laitiers'>
                                                        <option value='laits'>501</option>
                                                        <option value='produits_laitiers_frais'>502</option>
                                                        <option value='Fromages'>503</option>
                                                        <option value='cremes'>504</option>
                                                    </optgroup>
                                                    <optgroup label='Boissons'>
                                                        <option value='eaux'>601</option>
                                                        <option value='boissons_sans_alcool'>602</option>
                                                        <option value='boissons_alcoolisees'>603</option>
                                                    </optgroup>
                                                        <optgroup label='Produits Sucrés'>
                                                        <option value='sucres_miel'>701</option>
                                                        <option value='chocolats'>702</option>
                                                        <option value='confiseries'>703</option>
                                                        <option value='confitures'>704</option>
                                                        <option value='viennoiseries'>705</option>
                                                        <option value='biscuits_sucres'>706</option>
                                                        <option value='cereales_petit_dej'>707</option>
                                                        <option value='barres_cerealieres'>708</option>
                                                        <option value='gateaux'>709</option>
                                                        <option value='glaces'>801</option>
                                                        <option value='sorbets'>802</option>
                                                        <option value='desserts_glaces'>803</option>
                                                    </optgroup>
                                                    <optgroup label='Matières Grasses'>
                                                        <option value='beurres'>901</option>
                                                        <option value='huiles_vegetales'>902</option>
                                                        <option value='margarines'>903</option>
                                                        <option value='huiles_poisson'>904</option>
                                                        <option value='autres_matieres_grasses'>905</option>
                                                    </optgroup>
                                                        <optgroup label='Sauces et Condiments'>  
                                                        <option value='sauces'>1001</option>
                                                        <option value='condiments'>1002</option>
                                                    </optgroup>
                                                    <optgroup label='Aides Culinaires'>
                                                        <option value='aides_culinaires'>1003</option>
                                                        <option value='sels'>1004</option>
                                                        <option value='epices'>1005</option>
                                                        <option value='herbes'>1006</option>
                                                        <option value='algues'>1007</option>
                                                    </optgroup>
                                                    <optgroup label='Produits Infantiles'>
                                                        <option value='laits_infantiles'>1101</option>
                                                        <option value='petits_pots'>1102</option>
                                                        <option value='desserts_infantiles'>1103</option>
                                                        <option value='cereales_infantiles'>1104</option>
                                                    </optgroup>
                                                    <optgroup label='Alimentation particulière'>
                                                        <option value='substituts'>411</option>
                                                        <option value='denrees'>1008</option>
                                                    </optgroup>
                                                    <optgroup label='Ingrédients Divers'>
                                                        <option value='ingredients'>1009</option>
                                                    </optgroup>
                                                    <optgroup label='Non Défini'>
                                                        <option value='non_defini'>1105</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <p> Détails des apports nutritionnels (pour <strong>100 grammes</strong> de l'aliment) : </p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center">
                                                <label for="inputApports" class="nom" id="inputApports">Apports calorifiques(kcal/100g): </label>
                                                <input type="text" class="form-control" id="inputAppCalo2">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center">
                                                <label for="inputEau" class="eau" id="inputEau">Eau (en grammes)</label>
                                                <input type="text" class="form-control" id="inputEau2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center">
                                                <label for="inputProteines" class="proteines" id="inputProteines">Protéines (x6.25 en grammes)
                                                </label>
                                                <input type="text" class="form-control" id="inputProteines2">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center">
                                                <label for="inputGlucides" class="glucides" id="inputGlucides">Glucides (en grammes)
                                                </label>
                                                <input type="text" class="form-control" id="inputGlucides2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center">
                                                <label for="inputLipides" class="lipides" id="inputLipides">Lipides (en grammes)                                                   
                                                </label>
                                                <input type="text" class="form-control" id="inputLipides2">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center">
                                                <label for="inputSucres" class="sucres" id="inputSucres">Sucres (en grammes)                                                   
                                                </label>
                                                <input type="text" class="form-control" id="inputSucres2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center">
                                                <label for="inputFibres" class="fibres" id="inputFibres">Fibres alimentaires (en grammes)
                                                </label>
                                                <input type="text" class="form-control" id="inputFibres2">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center">
                                                <label for="inputSel" class="sel" id="inputSel">Sel (en grammes)</label>
                                                <input type="text" class="form-control" id="inputSel2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0" style="text-align: center">
                                                <label for="inputVD" class="VD" id="inputVD">Vitamine D (en microgrammes)</label>
                                                <input type="text" class="form-control" id="inputVD2">
                                            </div>
                                            <div class="col-sm-4 mb-3 mb-sm-0" style="text-align: center">
                                                <label for="inputVE" class="VE" id="inputVE">Vitamine E (en milligrammes)</label>
                                                <input type="text" class="form-control" id="inputVE2">
                                            </div>
                                            <div class="col-sm-4 mb-3 mb-sm-0" style="text-align: center">
                                                <label for="inputVC" class="VC" id="inputVC">Vitamine C (en milligrammes)</label>
                                                <input type="text" class="form-control" id="inputVC2">
                                            </div>
                                        </div>
                                        <input class="btn btn-danger btn-user btn-block" type="submit" value="Valider"/>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-danger">Tableau des types d'aliments et leur identifiant</h6>
                                </div>
                                <div class="card body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTableNewAliments" width="100%" cellspacing="0" style="padding: 30px">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center; vertical-align: middle">Id du type</th>
                                                    <th style="text-align: center; vertical-align: middle">Libellé du type</th>
                                                    <th style="text-align: center; vertical-align: middle">Catégorie</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>101</td>
                                                    <td>Salades composées et crudités</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>102</td>
                                                    <td>Soupes</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>103</td>
                                                    <td>Plats composés</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>104</td>
                                                    <td>Pizzas, tartes et crêpes salées</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>105</td>
                                                    <td>Sandwichs</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>301</td>
                                                    <td>Pâtes, riz et céréales</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>302</td>
                                                    <td>Pains</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>202</td>
                                                    <td>Pommes de terre et autres tubercules</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>201</td>
                                                    <td>Légumes</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>203</td>
                                                    <td>Légumineuses</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>303</td>
                                                    <td>Biscuits apéritifs</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>204</td>
                                                    <td>Fruits</td>
                                                    <td>Fruits</td>
                                                </tr>
                                                <tr>
                                                    <td>205</td>
                                                    <td>Fruits à coque et graines oléagineuses</td>
                                                    <td>Fruits</td>
                                                </tr>
                                                <tr>
                                                    <td>401</td>
                                                    <td>Viandes cuites</td>
                                                    <td>Viandes et Protéines</td>
                                                </tr>
                                                <tr>
                                                    <td>402</td>
                                                    <td>Viandes crues</td>
                                                    <td>Viandes et Protéines</td>
                                                </tr>
                                                <tr>
                                                    <td>403</td>
                                                    <td>Charcuteries</td>
                                                    <td>Viandes et Protéines</td>
                                                </tr>
                                                <tr>
                                                    <td>404</td>
                                                    <td>Autres produits à base de viande</td>
                                                    <td>Viandes et Protéines</td>
                                                </tr>
                                                <tr>
                                                    <td>410</td>
                                                    <td>Oeufs</td>
                                                    <td>Viandes et Protéines</td>
                                                </tr>
                                                <tr>
                                                    <td>405</td>
                                                    <td>Poissons cuits</td>
                                                    <td>Poissons</td>
                                                </tr>
                                                <tr>
                                                    <td>406</td>
                                                    <td>Poissons crus</td>
                                                    <td>Poissons</td>
                                                </tr>
                                                <tr>
                                                    <td>409</td>
                                                    <td>Produits à base de poissons et produits de la mer</td>
                                                    <td>Poissons</td>
                                                </tr>
                                                <tr>
                                                    <td>501</td>
                                                    <td>Laits</td>
                                                    <td>Produits Laitiers</td>
                                                </tr>
                                                <tr>
                                                    <td>502</td>
                                                    <td>Produits laitiers frais</td>
                                                    <td>Produits Laitiers</td>
                                                </tr>
                                                <tr>
                                                    <td>503</td>
                                                    <td>Fromages</td>
                                                    <td>Produits Laitiers</td>
                                                </tr>
                                                <tr>
                                                    <td>504</td>
                                                    <td>Crèmes</td>
                                                    <td>Produits Laitiers</td>
                                                </tr>
                                                <tr>
                                                    <td>601</td>
                                                    <td>Eaux</td>
                                                    <td>Boissons</td>
                                                </tr>
                                                <tr>
                                                    <td>602</td>
                                                    <td>Boissons sans alcool</td>
                                                    <td>Boissons</td>
                                                </tr>
                                                <tr>
                                                    <td>603</td>
                                                    <td>Boissons alcoolisées</td>
                                                    <td>Boissons</td>
                                                </tr>
                                                <tr>
                                                    <td>701</td>
                                                    <td>Sucres et Miels</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>702</td>
                                                    <td>Chocolats et produits à base de chocolat</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>703</td>
                                                    <td>Confiseries non chocolatées</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>704</td>
                                                    <td>Confitures</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>705</td>
                                                    <td>Viennoiseries</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>706</td>
                                                    <td>Biscuits sucrés</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>707</td>
                                                    <td>Céréales de petit-déjeuner</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>708</td>
                                                    <td>Barres céréalières</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>709</td>
                                                    <td>Gâteaux et Pâtisseries</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>801</td>
                                                    <td>Glaces</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>802</td>
                                                    <td>Sorbets</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>803</td>
                                                    <td>Desserts Glacés</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>901</td>
                                                    <td>Beurres</td>
                                                    <td>Matières Grassses</td>
                                                </tr>
                                                <tr>
                                                    <td>902</td>
                                                    <td>Huiles et graisses végétales</td>
                                                    <td>Matières Grassses</td>
                                                </tr>
                                                <tr>
                                                    <td>903</td>
                                                    <td>Margarines</td>
                                                    <td>Matières Grassses</td>
                                                </tr>
                                                <tr>
                                                    <td>904</td>
                                                    <td>Huiles de poisson</td>
                                                    <td>Matières Grassses</td>
                                                </tr>
                                                <tr>
                                                    <td>905</td>
                                                    <td>Autres matières grasses</td>
                                                    <td>Matières Grassses</td>
                                                </tr>
                                                <tr>
                                                    <td>1001</td>
                                                    <td>Sauces</td>
                                                    <td>Sauces et Condiments</td>
                                                </tr>
                                                <tr>
                                                    <td>1002</td>
                                                    <td>Condiments</td>
                                                    <td>Sauces et Condiments</td>
                                                </tr>
                                                <tr>
                                                    <td>1003</td>
                                                    <td>Aides culinaires</td>
                                                    <td>Aides Culinaires</td>
                                                </tr>
                                                <tr>
                                                    <td>1004</td>
                                                    <td>Sels</td>
                                                    <td>Aides Culinaires</td>
                                                </tr>
                                                <tr>
                                                    <td>1005</td>
                                                    <td>Epices</td>
                                                    <td>Aides Culinaires</td>
                                                </tr>
                                                <tr>
                                                    <td>1006</td>
                                                    <td>Herbes</td>
                                                    <td>Aides Culinaires</td>
                                                </tr>
                                                <tr>
                                                    <td>1007</td>
                                                    <td>Algues</td>
                                                    <td>Aides Culinaires</td>
                                                </tr>
                                                <tr>
                                                    <td>1101</td>
                                                    <td>Laits et boissons infantiles</td>
                                                    <td>Produits Infantiles</td>
                                                </tr>
                                                <tr>
                                                    <td>1102</td>
                                                    <td>Petits pots salés et plats infantiles</td>
                                                    <td>Produits Infantiles</td>
                                                </tr>
                                                <tr>
                                                    <td>1103</td>
                                                    <td>Desserts infantiles</td>
                                                    <td>Produits Infantiles</td>
                                                </tr>
                                                <tr>
                                                    <td>1104</td>
                                                    <td>Céréales et Biscuits infantiles</td>
                                                    <td>Produits Infantiles</td>
                                                </tr>
                                                <tr>
                                                    <td>411</td>
                                                    <td>Substituts de produits carnés</td>
                                                    <td>Alimentation Particulière</td>
                                                </tr>
                                                <tr>
                                                    <td>1008</td>
                                                    <td>Denrées destinées à une alimentation particulière</td>
                                                    <td>Alimentation Particulière</td>
                                                </tr>
                                                <tr>
                                                    <td>1009</td>
                                                    <td>Ingrédients divers</td>
                                                    <td>Ingrédients Divers</td>
                                                </tr>
                                                <tr>
                                                    <td>1105</td>
                                                    <td>Non défini</td>
                                                    <td>Non Défini</td>
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
        </div>
    </div>
<table>
    <thead>
        <tr>
            <th>Id du type</th>
            <th>Libellé du type</th>
            <th>Catégorie</th>
        </tr>
    </thead>
    

<script>
    function onFormSubmit() {
        event.preventDefault();
        /* let valeur = document.getElementById("choix_type");
        console.log(valeur); 
        let type_aliment = valeur.options; */ 
        let selectElmt = document.getElementById("choix_type");
        let type_aliment = selectElmt.options[selectElmt.selectedIndex].text;
        
        let nom = $("#inputNom2").val();
        let apports = $("#inputAppCalo2").val();
        let eau = $("#inputEau2").val();
        let proteines = $("#inputProteines2").val();
        let glucides = $("#inputGlucides2").val();
        let lipides = $("#inputLipides2").val();
        let sucres = $("#inputSucres2").val();
        let fibres = $("#inputFibres2").val();
        let sel = $("#inputSel2").val();
        let vd = $("#inputVD2").val();
        let ve = $("#inputVE2").val();
        let vc = $("#inputVC2").val();
        let donnees = {type_aliment, nom,apports,eau,proteines,glucides,lipides,sucres,fibres,sel,vd,ve,vc};
        $.post({
                url : '../Back_end/addNewAliment.php',
                dataType : 'json',
                data : donnees
        })
        .done(function(){
            console.log("Nouvel aliment ajouté");
        })
        .fail(function(){
            console.log("Echec de l'ajout");
        })
    }
</script>

</body>

<?php
    require_once('template_footer.php');
?>    

<?php
    /* mysqli_close($mysqli); */
?>