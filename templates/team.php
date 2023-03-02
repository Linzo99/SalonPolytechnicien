<html lang="en">
  <head>
    <?php include 'head.php' ?>
    <title>Equipe</title>
  </head>
  <body class="bg-gray-100">
    <header class="w-screen h-screen overflow-hidden relative">
      <img src="/static/assets/img/SDP/Crea SDP site paysage.png" class="absolute inset--0 w-full h-full">
      <nav class="bg-gray-300/50 sticky top-4 shadow-md">
        <?php include 'header.php' ?>
      </nav>
    </header>
    <form class="" action="" method="POST">
      <div class="flex flex-col items-center min-h-screen bg-gray-100 p-4">
        <div class="max-w-[90%] w-full">
          <div>
            <h2 class="text-center text-3xl font-extrabold text-blue-600">
              Membres de votre projet
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
              Ajouter les différents membres de votre projet.
            </p>
          </div>
          <div id="porteurs" class="p-4 grid align-center justify-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
              <div class="p-6 bg-white shadow rounded-lg">
                <h3 class="text-md font-medium mb-2">Porteur #1</h3>
                <div class="mb-4">
                  <label for="prenom1" class="block text-sm font-medium text-gray-700 mb-1">Prénom Nom</label>
                  <input type="text" required id="prenom1" name="prenom1" class="text-gray-600 focus:outline-none form-input rounded-md shadow-sm w-full" placeholder="Entrez le prénom du porteur">
                </div>
                <div class="mb-4">
                  <label for="email1" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                  <input type="email" required id="email1" name="email1" class="focus:outline-none form-input rounded-md shadow-sm w-full" placeholder="Entrez l'adresse email du porteur">
                </div>
                <div class="mb-4">
                  <label for="tel1" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                  <input type="tel" required id="tel1" name="tel1" class="focus:outline-none form-input rounded-md shadow-sm w-full" placeholder="Entrez le numéro de téléphone du porteur">
                </div>
                <div class="mb-4">
                  <label for="classe1" class="block text-sm font-medium text-gray-700 mb-1">Classe</label>
                  <select id="classe1" name="classe1" class="text-gray-600 focus:outline-none form-input rounded-md shadow-sm w-full" placeholder="Entrez la classe du porteur">
                    <option value="1ere annee">1ère année</option>
                    <option value="2eme annee">2ème année</option>
                    <option value="3eme annee">3ème année</option>
                    <option value="4eme annee">4ème année</option>
                    <option value="5eme annee">5ème année</option>
                  </select>
                </div>
                <div class="mb-4">
                  <label for="departement1" class="block text-sm font-medium text-gray-700 mb-1">Département</label>
                  <select id="departement1" name="departement1" class="text-gray-600 focus:outline-none form-input rounded-md shadow-sm w-full" placeholder="Entrez la classe du porteur">
                    <option value="Informatique">Informatique</option>
                    <option value="Electrique">Electrique</option>
                    <option value="Mecanique">Mécanique</option>
                    <option value="GCBA">GCBA</option>
                    <option value="Gestion">Gestion</option>
                  </select>
                </div>
                <div class="mb-4">
                  <label for="sexe1" class="block text-sm font-medium text-gray-700 mb-1">Sexe</label>
                  <div class="flex items-center">
                    <label for="sexe1_femme" class="mr-2">
                      <input type="radio" id="sexe1_femme" name="sexe1" value="femme" class="form-radio">
                      Femme
                    </label>
                    <label for="sexe1_homme">
                      <input type="radio" id="sexe1_homme" name="sexe1" value="homme" class="form-radio">
                      Homme
                    </label>
                  </div>
                </div>
              </div>
          </div>
          <div class="flex items-center justify-center">
            <div class="mt-2 space-y-2">
              <button class="bg-blue-600 text-white px-4 py-2 rounded-md" id="add-porteur-btn">Ajouter membre</button>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 p-4">
        <div class="max-w-[90%] w-full">
          <div>
            <h2 class="mt-4 text-center text-3xl font-extrabold text-blue-600">
              Informations du projet
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
              Remplissez le formulaire ci-dessous pour déposer un projet.
            </p>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2  gap-6">
              <div class="col-span-1">
                <label for="nom_projet" class="block text-md font-medium text-gray-700">
                  Nom du projet
                </label>
                <div class="mt-1">
                  <textarea id="nom_projet" name="nom_projet" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 block w-full p-1 sm:text-sm border-blue-300 rounded-md"></textarea>
                </div>
              </div>
              <div class="col-span-1">
                <label for="cible" class="block text-md font-medium text-gray-700">
                  Les cibles dans le cadre de votre projet
                </label>
                <div class="mt-1">
                  <textarea id="cible" name="cible" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 block w-full p-1 sm:text-sm border-blue-300 rounded-md"></textarea>
                </div>
              </div>
              <div class="col-span-1">
                <label for="problem" class="block text-md font-medium text-gray-700">
                  Quel problème cherchez vous à résoudre ?
                </label>
                <div class="mt-1">
                  <textarea id="problem" name="problem" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 block w-full p-1 sm:text-sm border-blue-300 rounded-md"></textarea>
                </div>
              </div>
              <div class="col-span-1">
                <label for="solution" class="block text-md font-medium text-gray-700">
                  Quelle solution envisagez-vous face à ce problème ?
                </label>
                <div class="mt-1">
                  <textarea id="solution" name="solution" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 block w-full p-1 sm:text-sm border-blue-300 rounded-md"></textarea>
                </div>
              </div>
              <div class="col-span-1">
                <label for="nouveau" class="block text-md font-medium text-gray-700">
                  Qu’envisagez-vous d’apporter de nouveau ?
                </label>
                <div class="mt-1">
                  <textarea id="nouveau" name="nouveau" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 block w-full p-1 sm:text-sm border-blue-300 rounded-md"></textarea>
                </div>
              </div>
              <div class="col-span-1">
                <label for="nouveau" class="block text-md font-medium text-gray-700">
                  Complément d'information
                </label>
                <div class="mt-1">
                  <textarea id="complement" name="complement" rows="3" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm text-gray-700 block w-full p-1 sm:text-sm border-blue-300 rounded-md"></textarea>
                </div>
              </div>
              <div class="col-span-1">
                <label class="block text-md font-medium text-gray-700">
                  A quel niveau se situe votre projet ?
                </label>
                <div class="mt-2 space-y-2 text-gray-700">
                  <div>
                    <label class="inline-flex items-center">
                      <input type="radio" class="form-radio" name="niveau_projet" value="idee de projet">
                      <span class="ml-2">Vous avez juste une idée de projet?</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center">
                      <input type="radio" class="form-radio" name="niveau_projet" value="prototype">
                      <span class="ml-2">Vous avez déjà votre prototype?</span>
                    </label>
                  </div>
                  <div>
                    <label class="inline-flex items-center">
                      <input type="radio" class="form-radio" name="niveau_projet" value="phase de test">
                      <span class="ml-2">Vous êtes en phase de test?</span>
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
                    <input id="secteur-agriculture" name="secteur[]" type="checkbox" value="Agriculture/Agroalimentaire" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="secteur-agriculture" class="ml-3 text-gray-700">Agriculture/Agroalimentaire</label>
                  </div>
                  <div class="flex items-center">
                    <input id="secteur-sante" name="secteur[]" type="checkbox" value="Sante" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="secteur-sante" class="ml-3 text-gray-700">Santé</label>
                  </div>
                  <div class="flex items-center">
                    <input id="secteur-electronique" name="secteur[]" type="checkbox" value="Electronique" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="secteur-electronique" class="ml-3 text-gray-700">Électronique</label>
                  </div>
                  <div class="flex items-center">
                    <input id="secteur-informatique" name="secteur[]" type="checkbox" value="Informatique" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="secteur-informatique" class="ml-3 text-gray-700">Informatique</label>
                  </div>
                  <div class="flex items-center">
                    <input id="secteur-energie" name="secteur[]" type="checkbox" value="Energie" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="secteur-energie" class="ml-3 text-gray-700">Énergie</label>
                  </div>
                  <div class="flex items-center">
                    <input id="secteur-transport" name="secteur[]" type="checkbox" value="Transport" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="secteur-transport" class="ml-3 text-gray-700">Transport</label>
                  </div>
                  <div class="flex items-center">
                    <input id="secteur-education" name="secteur[]" type="checkbox" value="Education/formation" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <label for="secteur-education" class="ml-3 text-gray-700">Éducation/Formation</label>
                  </div>
                </div>
              </div>
              <div class="col-span-1">
                <label class="block text-md font-medium text-gray-700">
                  Disposez-vous d'un prototype (s) a presenter lors du salon?
                </label>
                <div class="mt-2 space-y-2">
                  <div class="relative flex items-start">
                    <div class="flex items-center h-5">
                      <input id="prototype" name="prototype" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="prototype" class="font-medium text-gray-700">Oui</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex items-center justify-center">
              <div class="mt-2 space-y-2">
                <input type="submit" value="Soumettre votre projet" class="cursor-pointer bg-blue-600 text-white px-4 py-2 rounded-md">
              </div>
            </div>
        </div>
      </div>
    </form>
    <script type="text/javascript" src="/static/js/addPorteur.js"></script>
  </body>
</html>
