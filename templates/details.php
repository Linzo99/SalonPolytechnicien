<html lang="en">
  <head>
    <?php include 'head.php' ?>
    <title>Equipe</title>
  </head>
  <body class="bg-gray-100">
    <div class="bg-white">
        <div class="container mx-auto flex justify-between items-center py-4">
            <div class="w-1/4 md:w-1/2 pl-4">
                <a class="text-blue-600 text-xl font-bold hover:text-gray-600" href="/team">Dashboard</a>
            </div>
            <div class="w-3/4 md:w-1/2 pr-4 flex justify-end">
                <a class="text-gray-600 text-md italic hover:text-blue-600 mx-4" href="/disconnect">Deconnexion</a>
            </div> </div>
    </div>
    <section class="" action="" method="POST">
      <div class="flex flex-col items-center min-h-screen bg-gray-100 p-4">
        <div class="max-w-[90%] w-full">
          <div>
            <h2 class="text-center text-3xl font-extrabold text-blue-600">
              Membres
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
              Les membres du projet.
            </p>
          </div>
              <div id="porteurs" class="p-4 grid align-center justify-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                  foreach($porteurs as $k=>$p){ ?>
                        <div class="p-6 bg-white shadow rounded-lg">
                        <h3 class="text-md font-medium mb-2">Porteur #<?= $k+1 ?></h3>
                          <div class="mb-4">
                            <label for="prenom1" class="block text-sm font-medium text-gray-700 mb-1">Prénom Nom</label>
                            <input type="text" readonly required id="prenom" value="<?= $p->prenom ?>" name="prenom1" class="text-gray-500 focus:outline-none form-input rounded-md shadow-sm w-full" placeholder="Entrez le prénom du porteur">
                          </div>
                          <div class="mb-4">
                            <label for="email1" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" readonly value="<?= $p->email ?>" required id="email1" name="email1" class="focus:outline-none text-gray-500 form-input rounded-md shadow-sm w-full" placeholder="Entrez l'adresse email du porteur">
                          </div>
                          <div class="mb-4">
                            <label for="tel1" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                            <input type="tel" readonly value="<?= $p->tel ?>" required id="tel1" name="tel1" class="focus:outline-none form-input rounded-md text-gray-500 shadow-sm w-full" placeholder="Entrez le numéro de téléphone du porteur">
                          </div>
                          <div class="mb-4">
                            <label for="classe1" class="block text-sm font-medium text-gray-700 mb-1">Classe</label>
                            <input type="classe" readonly value="<?= $p->classe ?>" required id="classe" name="classe" class="focus:outline-none form-input rounded-md text-gray-500 shadow-sm w-full" placeholder="Entrez le numéro de téléphone du porteur">
                          </div>
                          <div class="mb-4">
                            <label for="departement" class="block text-sm font-medium text-gray-700 mb-1">Département</label>
                            <input type="department" readonly value="<?= $p->departement ?>" required id="departement" name="classe" class="focus:outline-none form-input rounded-md text-gray-500 shadow-sm w-full" placeholder="Entrez le numéro de téléphone du porteur">
                          </div>
                          <div class="mb-4">
                            <label for="sexe1" class="block text-sm font-medium text-gray-700 mb-1">Sexe</label>
                            <div class="flex items-center">
                              <label for="sexe1_femme" class="mr-2 text-gray-500">
                                <?= $p->sexe ?>
                              </label>
                            </div>
                          </div>
                        </div>
                  <?php }
                ?>
            </div>
        </div>
      </div>
      <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-4">
        <div class="max-w-[90%] w-full">
          <div>
            <h2 class="mt-4 text-center text-3xl font-extrabold text-blue-600">
              Informations
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
              Ci-dessous les informations concernant le projet.
            </p>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-4">
              <div class="col-span-1">
                <label for="nom_projet" class="block text-md font-medium text-gray-700">
                  Nom du projet
                </label>
                <div class="mt-1">
                <textarea id="nom_projet" readonly name="nom_projet" rows="3" class="font-bold shadow-sm focus:ring-blue-500 focus:border-blue-500 text-md text-gray-700 block w-full p-2 sm:text-md border-blue-300 rounded-md"><?= $nom_projet ?></textarea>
                </div>
              </div>
              <div class="col-span-1">
                <label for="cible" class="block text-md font-medium text-gray-700">
                  Les cibles dans le cadre de votre projet
                </label>
                <div class="mt-1">
                <textarea readonly  id="cible" name="cible" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 text-md text-gray-700 block w-full p-2 sm:text-md border-blue-300 rounded-md"><?= $cible ?></textarea>
                </div>
              </div>
              <div class="col-span-1">
                <label for="problem" class="block text-md font-medium text-gray-700">
                  Quel problème cherchez vous à résoudre ?
                </label>
                <div class="mt-1">
                <textarea readonly id="problem" name="problem" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 text-md text-gray-700 block w-full p-2 sm:text-md border-blue-300 rounded-md"><?= $problem ?></textarea>
                </div>
              </div>
              <div class="col-span-1">
                <label for="solution" class="block text-md font-medium text-gray-700">
                  Quelle solution envisagez-vous face à ce problème ?
                </label>
                <div class="mt-1">
                <textarea readonly id="solution" name="solution" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 text-md text-gray-700 block w-full p-2 sm:text-md border-blue-300 rounded-md"><?= $solution ?></textarea>
                </div>
              </div>
              <div class="col-span-1">
                <label for="nouveau" class="block text-md font-medium text-gray-700">
                  Qu’envisagez-vous d’apporter de nouveau ?
                </label>
                <div class="mt-1">
                <textarea readonly id="nouveau" name="nouveau" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 text-md text-gray-700 block w-full p-2 sm:text-md border-blue-300 rounded-md"><?= $nouveau ?></textarea>
                </div>
              </div>
              <div class="col-span-1">
                <label for="nouveau" class="block text-md font-medium text-gray-700">
                  Complément d'information
                </label>
                <div class="mt-1">
                <textarea readonly id="complement" name="complement" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 text-md text-gray-700 block w-full p-2 sm:text-md border-blue-300 rounded-md"><?= $complement ?></textarea>
                </div>
              </div>
              <div class="col-span-1">
                <label class="block text-md font-medium text-gray-700">
                  A quel niveau se situe votre projet ?
                </label>
                <div class="mt-2 space-y-2 text-gray-700">
                  <div>
                    <label class="inline-flex items-center">
                    <span class="ml-2 text-md font-medium uppercase"><?= $niveau_projet ?></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-span-1">
                <label class="block text-md font-medium text-gray-700">
                  Secteur ou Domaine d'activité
                </label>
                <div class="mt-2 space-y-1 grid grid-cols-2 gap-2">
                  <div class="flex items-center">
                    <?php
                      foreach(explode(';', $secteur) as $s){ ?>
                        <label for="secteur-agriculture" class="ml-3 bg-blue-400 p-2 text-white rounded-md"><?= $s ?></label>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <div class="col-span-1">
                <label class="block text-md font-medium text-gray-700">
                  Disposez-vous d'un prototype (s) a presenter lors du salon?
                </label>
                <div class="mt-2 space-y-2">
                  <div class="relative flex items-start">
                    <div class="ml-3 text-sm">
                    <label for="prototype" class="p-2 px-3 bg-blue-600 text-white rounded-md font-medium text-gray-700"><?php echo $prototype=='on'?'Oui':'Non' ?></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <script type="text/javascript" src="/static/js/addPorteur.js"></script>
  </body>
</html>
