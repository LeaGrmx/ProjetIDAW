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
                                    <h6 class="m-0 font-weight-bold text-danger">Créer un nouvel aliment dans la base de données.</h6>
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
                                    
                                    <form method="post" id="addNewAliment" action="" onsubmit="onFormSubmit();">
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
                                                        <option value='Salades_composees'>Salades composées et crudités</option>
                                                        <option value='soupes'>Soupes</option>
                                                        <option value='plats_composés'>Plats composés</option>
                                                        <option value='pizzas_tartes_crepes_salees'>Pizzas, tartes et crêpes salées</option>
                                                        <option value='sandwichs'>Sandwichs</option>
                                                        <option value='pates_riz_cereales'>Pâtes, riz et céréales</option>
                                                        <option value='pains'>Pains</option>
                                                        <option value='pommes_de_terre'>Pommes de terre et autres tubercules</option>
                                                        <option value='legume'>Légumes</option>
                                                        <option value='legumineuses'>Légumineuses</option>
                                                        <option value='biscuits_aperitifs'>Biscuits apéritifs</option>   
                                                    </optgroup>
                                                    <optgroup label='Fruits'>
                                                        <option value='fruits'>Fruits</option>
                                                        <option value='fruits_a_coque'>Fruits à coque et graines oléagineuses</option>
                                                    </optgroup>  
                                                    <optgroup label='Viandes et Protéines'>
                                                        <option value='viandes_cuites'>Viandes cuites</option>
                                                        <option value='viandes_crues'>Viandes crues</option>          
                                                        <option value='charcuterie'>Charcuteries</option>
                                                        <option value='autres_viandes'>Autres produits à base de viande</option>
                                                        <option value='oeufs'>Oeufs</option>
                                                    </optgroup>
                                                    <optgroup label='Poissons'>
                                                        <option value='poissons_cuits'>Poissons cuits</option>
                                                        <option value='poissons_crus'>Poissons crus</option>
                                                        <option value='autres_poissons'>Produits à base de poissons et produits de la mer</option>
                                                    </optgroup>
                                                    <optgroup label='Produits Laitiers'>
                                                        <option value='laits'>Laits</option>
                                                        <option value='produits_laitiers_frais'>Produits laitiers frais</option>
                                                        <option value='Fromages'>Fromages</option>
                                                        <option value='cremes'>Crèmes</option>
                                                    </optgroup>
                                                    <optgroup label='Boissons'>
                                                        <option value='eaux'>Eaux</option>
                                                        <option value='boissons_sans_alcool'>Boissons sans alcool</option>
                                                        <option value='boissons_alcoolisees'>Boissons alcoolisées</option>
                                                    </optgroup>
                                                        <optgroup label='Produits Sucrés'>
                                                        <option value='sucres_miel'>Sucres et Miels</option>
                                                        <option value='chocolats'>Chocolats et produits à base de chocolat</option>
                                                        <option value='confiseries'>Confiseries non chocolatées</option>
                                                        <option value='confitures'>Confitures</option>
                                                        <option value='viennoiseries'>Viennoiseries</option>
                                                        <option value='biscuits_sucres'>Biscuits sucrés</option>
                                                        <option value='cereales_petit_dej'>Céréales de petit-déjeuner</option>
                                                        <option value='barres_cerealieres'>Barres céréalières</option>
                                                        <option value='gateaux'>Gâteaux et Pâtisseries</option>
                                                        <option value='glaces'>Glaces</option>
                                                        <option value='sorbets'>Sorbets</option>
                                                        <option value='desserts_glaces'>Desserts Glacés</option>
                                                    </optgroup>
                                                    <optgroup label='Matières Grasses'>
                                                        <option value='beurres'>Beurres</option>
                                                        <option value='huiles_vegetales'>Huiles et graisses végétales</option>
                                                        <option value='margarines'>Margarines</option>
                                                        <option value='huiles_poisson'>Huiles de poisson</option>
                                                        <option value='autres_matieres_grasses'>Autres matières grasses</option>
                                                    </optgroup>
                                                        <optgroup label='Sauces et Condiments'>  
                                                        <option value='sauces'>Sauces</option>
                                                        <option value='condiments'>Condiments</option>
                                                    </optgroup>
                                                    <optgroup label='Aides Culinaires'>
                                                        <option value='aides_culinaires'>Aides culinaires</option>
                                                        <option value='sels'>Sels</option>
                                                        <option value='epices'>Epices</option>
                                                        <option value='herbes'>Herbes</option>
                                                        <option value='algues'>Algues</option>
                                                    </optgroup>
                                                    <optgroup label='Produits Infantiles'>
                                                        <option value='laits_infantiles'>Laits et boissons infantiles</option>
                                                        <option value='petits_pots'>Petits pots salés et plats infantiles</option>
                                                        <option value='desserts_infantiles'>Desserts infantiles</option>
                                                        <option value='cereales_infantiles'>Céréales et Biscuits infantiles</option>
                                                    </optgroup>
                                                    <optgroup label='Alimentation particulière'>
                                                        <option value='substituts'>Substituts de produits carnés</option>
                                                        <option value='denrees'>Denrées destinées à une alimentation particulière</option>
                                                    </optgroup>
                                                    <optgroup label='Ingrédients Divers'>
                                                        <option value='ingredients'>Ingrédients divers</option>
                                                    </optgroup>
                                                    <optgroup label='Non Défini'>
                                                        <option value='non_defini'>Non défini</option>
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
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="inputApports" class="nom" id="inputApports">Apports calorifiques(kcal/100g): </label>
                                                <input type="text" class="form-control" id="inputAppCalo2">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="inputEau" class="eau" id="inputEau">Eau (en grammes)</label>
                                                <input type="text" class="form-control" id="inputEau2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="inputProteines" class="proteines" id="inputProteines">Protéines (*6,25; en grammes)
                                                </label>
                                                <input type="text" class="form-control" id="inputProteines2">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="inputGlucides" class="glucides" id="inputGlucides">Glucides (en grammes)
                                                </label>
                                                <input type="text" class="form-control" id="inputGlucides2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="inputLipides" class="lipides" id="inputLipides">Lipides (en grammes)                                                   
                                                </label>
                                                <input type="text" class="form-control" id="inputLipides2">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="inputSucres" class="sucres" id="inputSucres">Sucres (en grammes)                                                   
                                                </label>
                                                <input type="text" class="form-control" id="inputSucres2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="inputFibres" class="fibres" id="inputFibres">Fibres alimentaires (en grammes)
                                                </label>
                                                <input type="text" class="form-control" id="inputFibres2">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="inputSel" class="sel" id="inputSel">Sel (en grammes)</label>
                                                <input type="text" class="form-control" id="inputSel2">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <label for="inputVD" class="VD" id="inputVD">Vitamine D (en microgrammes)</label>
                                                <input type="text" class="form-control" id="inputVD2">
                                            </div>
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <label for="inputVE" class="VE" id="inputVE">Vitamine E (en milligrammes)</label>
                                                <input type="text" class="form-control" id="inputVE2">
                                            </div>
                                            <div class="col-sm-4 mb-3 mb-sm-0">
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
                                        <table class="table table-bordered" id="dataTable_aliments" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Id du type</th>
                                                    <th>Libellé du type</th>
                                                    <th>Catégorie</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Salades composées et crudités</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Soupes</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Plats composés</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Pizzas, tartes et crêpes salées</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Sandwichs</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Pâtes, riz et céréales</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Pains</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Pommes de terre et autres tubercules</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Légumes</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Légumineuses</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Biscuits apéritifs</td>
                                                    <td>Plats et accompagnements</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Fruits</td>
                                                    <td>Fruits</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Fruits à coque et graines oléagineuses</td>
                                                    <td>Fruits</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>Viandes cuites</td>
                                                    <td>Viandes et Protéines</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>Viandes crues</td>
                                                    <td>Viandes et Protéines</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>Charcuteries</td>
                                                    <td>Viandes et Protéines</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>Autres produits à base de viande</td>
                                                    <td>Viandes et Protéines</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>Oeufs</td>
                                                    <td>Viandes et Protéines</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Poissons cuits</td>
                                                    <td>Poissons</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>Poissons crus</td>
                                                    <td>Poissons</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Produits à base de poissons et produits de la mer</td>
                                                    <td>Poissons</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>Laits</td>
                                                    <td>Produits Laitiers</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>Produits laitiers frais</td>
                                                    <td>Produits Laitiers</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>Fromages</td>
                                                    <td>Produits Laitiers</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>Crèmes</td>
                                                    <td>Produits Laitiers</td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td>Eaux</td>
                                                    <td>Boissons</td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td>Boissons sans alcool</td>
                                                    <td>Boissons</td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td>Boissons alcoolisées</td>
                                                    <td>Boissons</td>
                                                </tr>
                                                <tr>
                                                    <td>29</td>
                                                    <td>Sucres et Miels</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>30</td>
                                                    <td>Chocolats et produits à base de chocolat</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>31</td>
                                                    <td>Confiseries non chocolatées</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>32</td>
                                                    <td>Confitures</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>33</td>
                                                    <td>Viennoiseries</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td>Biscuits sucrés</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>35</td>
                                                    <td>Céréales de petit-déjeuner</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>36</td>
                                                    <td>Barres céréalières</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>37</td>
                                                    <td>Gâteaux et Pâtisseries</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>38</td>
                                                    <td>Glaces</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>39</td>
                                                    <td>Sorbets</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>40</td>
                                                    <td>Desserts Glacés</td>
                                                    <td>Produits Sucrés</td>
                                                </tr>
                                                <tr>
                                                    <td>41</td>
                                                    <td>Beurres</td>
                                                    <td>Matières Grassses</td>
                                                </tr>
                                                <tr>
                                                    <td>42</td>
                                                    <td>Huiles et graisses végétales</td>
                                                    <td>Matières Grassses</td>
                                                </tr>
                                                <tr>
                                                    <td>43</td>
                                                    <td>Margarines</td>
                                                    <td>Matières Grassses</td>
                                                </tr>
                                                <tr>
                                                    <td>44</td>
                                                    <td>Huiles de poisson</td>
                                                    <td>Matières Grassses</td>
                                                </tr>
                                                <tr>
                                                    <td>45</td>
                                                    <td>Autres matières grasses</td>
                                                    <td>Matières Grassses</td>
                                                </tr>
                                                <tr>
                                                    <td>46</td>
                                                    <td>Sauces</td>
                                                    <td>Sauces et Condiments</td>
                                                </tr>
                                                <tr>
                                                    <td>47</td>
                                                    <td>Condiments</td>
                                                    <td>Sauces et Condiments</td>
                                                </tr>
                                                <tr>
                                                    <td>48</td>
                                                    <td>Aides culinaires</td>
                                                    <td>Aides Culinaires</td>
                                                </tr>
                                                <tr>
                                                    <td>49</td>
                                                    <td>Sels</td>
                                                    <td>Aides Culinaires</td>
                                                </tr>
                                                <tr>
                                                    <td>50</td>
                                                    <td>Epices</td>
                                                    <td>Aides Culinaires</td>
                                                </tr>
                                                <tr>
                                                    <td>51</td>
                                                    <td>Herbes</td>
                                                    <td>Aides Culinaires</td>
                                                </tr>
                                                <tr>
                                                    <td>52</td>
                                                    <td>Algues</td>
                                                    <td>Aides Culinaires</td>
                                                </tr>
                                                <tr>
                                                    <td>53</td>
                                                    <td>Laits et boissons infantiles</td>
                                                    <td>Produits Infantiles</td>
                                                </tr>
                                                <tr>
                                                    <td>54</td>
                                                    <td>Petits pots salés et plats infantiles</td>
                                                    <td>Produits Infantiles</td>
                                                </tr>
                                                <tr>
                                                    <td>55</td>
                                                    <td>Desserts infantiles</td>
                                                    <td>Produits Infantiles</td>
                                                </tr>
                                                <tr>
                                                    <td>56</td>
                                                    <td>Céréales et Biscuits infantiles</td>
                                                    <td>Produits Infantiles</td>
                                                </tr>
                                                <tr>
                                                    <td>57</td>
                                                    <td>Substituts de produits carnés</td>
                                                    <td>Alimentation Particulière</td>
                                                </tr>
                                                <tr>
                                                    <td>58</td>
                                                    <td>Denrées destinées à une alimentation particulière</td>
                                                    <td>Alimentation Particulière</td>
                                                </tr>
                                                <tr>
                                                    <td>59</td>
                                                    <td>Ingrédients divers</td>
                                                    <td>Ingrédients Divers</td>
                                                </tr>
                                                <tr>
                                                    <td>60</td>
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
        let proteines = $("#inputProteine2").val();
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