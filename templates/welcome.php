<html class="scroll-smooth" lang="en">
<head>
    <?php include 'head.php' ?>
    <title>Welcome</title>
</head>
<body>
    <div class="h-screen flex overflow-hidden bg-gray-100">
        <!-- Fixed sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <!-- Sidebar content -->
                <div class="w-full flex flex-col overflow-y-auto bg-blue-600">
                    <nav class="flex flex-col px-2 pr-6 py-4 space-y-2 text-white">
                        <a href="#accueil" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-md font-medium">Accueil</a>
                        <a href="/resultats" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-md font-medium">Liste des projets</a>
                        <a href="#presentation" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-md font-medium">Présentation SDP</a>
                        <a href="#focus" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-md font-medium">Focus edition 2023</a>
                        <a href="#directeur" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-md font-medium">Mot du Directeur</a>
                        <a href="#parrains" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-md font-medium">Parrain de l'édition</a>
                        <a href="#programmes" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-md font-medium">Exposition</a>
                        <a href="#partenaires" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-md font-medium">Partenaires</a>
                        <a href="#contacts" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-md font-medium">Contact</a>
                    </nav>
                </div>
        </div>

        <!-- Page content -->
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <main class="flex-1 relative overflow-y-auto focus:outline-none">
                <!-- Page sections -->
                <section id="accueil" class="h-screen">
                  <img src="/static/assets/img/SDP/Crea SDP site paysage.png" class="w-full h-full object-cover">
                </section>
                <section id="presentation" class="h-screen flex flex-col justify-center">
                  <div>
                      <h2 class="text-center text-3xl font-extrabold text-blue-600">
                        PRESENTATION DU SALON DU POLYTECHNICIEN
                      </h2>
                      <p class="mt-2 text-center text-sm text-gray-600">
                        De quoi s'agit t'il ?
                      </p>
                  </div>
                  <div class="max-w-4xl divide-y divide-gray-300 text-xs sm:text-md p-4 text-gray-800 space-y-4 mx-auto sm:px-6 lg:px-8">
                      <p class="mt-4 text-lg">
                        Le Salon du Polytechnicien, qui se tiendra cette année les 27 et 28 mai 2022, est un rendez-vous phare de l’Ecole Supérieure Polytechnique (ESP) de l’Université Cheikh Anta Diop de Dakar (UCAD). Ce salon a comme objectif principal de promouvoir et de partager les réalisations des étudiants et chercheurs de l’ESP et de créer un cadre d’échange fécond entre le secteur privé, les institutions de l’état et celles universitaires sur différentes thématiques. La thématique du salon du polytechnicien 2022 porte sur : L’innovation et l’entrepreneuriat durable.
                      </p>
                      <p class="mt-4 text-lg">
                        Autour de ce thème, l’Ecole Supérieure Polytechnique en partenariat avec les acteurs du secteur privé et public vont discuter, échanger et définir des axes prioritaires pour l’innovation et l’entrepreneuriat avec des usages pratiques s'alignant parfaitement avec les priorités et les besoins de notre économie nationale (PAP2, PSE), sous-régionale et les objectifs de développement durable. A cet effet, l’ESP compte organiser les assises de l’entrepreneuriat et de l’innovation durable.
                      </p>
                      <p class="mt-4 text-lg">
                        L’un des objectifs du salon du polytechnicien 2022 sera aussi d’élargir le cadre de discussion avec d’autres acteurs/secteurs et également de réfléchir et de poser les jalons d’une innovation durable et responsable tant sur le plan de l’environnement, de l’éthique, que de la santé.
                      </p>
                  </div>
                </section>
                <section id="focus" class="max-h-screen flex flex-col justify-center">
                  <div>
                      <h2 class="text-center text-3xl font-extrabold text-blue-600">
                        FOCUS EDITION 2023
                      </h2>
                      <p class="mt-2 text-center text-sm text-gray-600">
                        Sur quoi portera t'il ?
                      </p>
                  </div>
                  <div class="flex flex-wrap mt-8 p-4 md:p-8 text-white space-x-3">
                    <div class="divide-y p-4 divide-gray-400 space-y-4 flex-1 bg-white shadow-md shadow-blue-300">
                        <div class="flex justify-center items-center">
                            <span class="px-6 py-2 rounded-full bg-blue-600">Objectifs</span>
                        </div>
                        <div class="mt-2">
                          <p class="text-gray-700 pt-2">
                            Promouvoir et de partager les réalisations des étudiants et chercheurs de l’ESP et de créer un cadre d’échange fécond entre le secteur privé, les institutions de l’état et celles universitaires sur différentes thématiques.
                          </p>
                        </div>
                    </div>
                    <div class="divide-y p-4 divide-gray-400 space-y-4 flex-1 bg-white shadow-md shadow-blue-300">
                        <div class="flex justify-center items-center">
                            <span class="px-6 py-2 rounded-full bg-blue-600">Résultats attendus</span>
                        </div>
                        <div class="mt-2">
                          <div class="text-gray-700 pt-2">
                            <p>Livre blanc</p>
                            <p>50 produits et projets innovants exposés</p>
                            <p>+ 2 000 visiteurs</p>
                            <p>Community Access & Collaboration</p>
                          </div>
                        </div>
                    </div>
                    <div class="divide-y p-4 divide-gray-400 space-y-4 flex-1 bg-white shadow-md shadow-blue-300">
                        <div class="flex justify-center items-center">
                            <span class="px-6 py-2 rounded-full bg-blue-600">Cibles</span>
                        </div>
                        <div class="mt-2">
                          <p class="text-gray-700 pt-2">
                            Secteurs privés- Les incubateurs- L’administration et les différents ministères (ODD)- Les écoles d’enseignement supérieur et les universités- Le ministère de l’environnement- Les organismes de développement
                          </p>
                        </div>
                    </div>
                  </div>
                </section>
                <section id="directeur" class="h-screen p-4 flex flex-col justify-center">
                  <div>
                      <h2 class="text-center text-3xl font-extrabold text-blue-600">
                      MOT DU DIRECTEUR
                      </h2>
                      <p class="mt-2 text-center text-sm text-gray-600">
                      Votre attention svp
                      </p>
                  </div>
                  <div class="max-w-4xl mt-8 divide-y divide-gray-300 text-gray-800 space-y-4 mx-auto sm:px-6 lg:px-8">
                    <p class="text-md md:text-lg font-medium columns-2 gap-4">
                        Le Salon du Polytechnicien, rendez-vous phare de l'ESP de L'UCAD,
                        se tiendra cette année les 27 et 28 mai 2023. il représent une
                        opportunuité pour les étudiant de l'ESP de présenter leurs projets
                        de création d'entreprise devant un jury composé d'enseignants et de
                        professionnels, partenaires de l'école.

                        Le thème du Salon cette année portera sur l'innovation et l'entrepreunariat
                        durable.

                        Autour de ce thème, l'ESP et ses partenaires des  secteurs privés et publiques
                        échangeront et définiront des axes prioritaire pour l'innovation et 
                        l'entrepreneuriat.

                        En outre, ils exploreront ensemble les possibilités de financement qui
                        viendront en appoint du fonds d'amorçage interne qui a été mis en place
                        pour accompagner les projets primés qui seront incubés au niveau de la
                        forge de l'ESP.
                    </p>
                  </div>
                </section>
                <section id="parrains" class="max-h-screen p-4 md:p-8 flex flex-col justify-center">
                  <div>
                      <h2 class="text-center text-3xl font-extrabold text-blue-600">
                      PARRAINS DE L'EDITION
                      </h2>
                      <p class="mt-2 text-center text-sm text-gray-600">
                        Vos applaudissement svp?
                      </p>
                  </div>
                  <div class="flex p-4 justify-around mt-4">
                    <div class="flex-1 max-w-md mx-auto rounded-md overflow-hidden shadow-lg">
                      <div>
                        <img class="w-full object-cover object-center" src="/static/assets/img/SDP/Codou MARRE.png" alt="The Godfather">
                      </div>
                      <div class="p-4">
                        <h2 class="font-bold text-xl mb-2">Professeure Codou Guéye MAR DIOP</h2>
                        <p class="text-gray-700 text-base">Ancienne Rectrice de l’Université Amadou Makhtar MBOW</p>
                      </div>
                    </div>
                    <div class="flex-1  max-w-md mx-auto rounded-md overflow-hidden shadow-lg">
                      <img class="w-full object-cover object-center" src="/static/assets/img/SDP/Cheikh Oumar HANNE.png" alt="The Godfather">
                      <div class="p-4">
                        <h2 class="font-bold text-xl mb-2">Docteur Cheikh Oumar HANNE</h2>
                        <p class="text-gray-700 text-base">Ministre de l’Enseignement Supérieur de la Recherche et de l’Innovation</p>
                      </div>
                    </div>
                  </div>
                </section>
                <section id="programmes" class="max-h-screen p-8 flex flex-col justify-center">
                  <div>
                      <h2 class="text-center text-3xl font-extrabold text-blue-600">
                      PROGRAMME
                      </h2>
                      <p class="mt-2 text-center text-sm text-gray-600">
                        Planning ?
                      </p>
                  </div>
                  <div>
                    <div class="flex flex-col mt-3 space-y-2">
                      <details open class="peer peer-open:closed">
                        <summary class="bg-blue-600 p-3 rounded-t-2xl list-none text-white cursor-s-resize">SAMEDI 23/05/2023</summary>
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                              <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                  <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Heure
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Programme
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Lieu
                                    </th>
                                  </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      9:00 AM
                                    </td>
                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-900">
                                      --
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      --
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      10:00 AM
                                    </td>
                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-900">
                                      --
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      --
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      11:00 AM
                                    </td>
                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-900">
                                      --
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      --
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      --
                                    </td>
                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-900">
                                      --
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      --
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      1:00 PM
                                    </td>
                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-900">
                                      --
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      --
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      <summary>
                    </details>
                    <details closed class="peer peer-open:closed">
                        <summary class="bg-blue-600 p-3 rounded-t-2xl list-none text-white cursor-s-resize">DIMANCHE 24/05/2023</summary>
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                              <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                  <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Heure
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Programme
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                      Lieu
                                    </th>
                                  </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      9:00 AM
                                    </td>
                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-900">
                                      --
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      --
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      10:00 AM
                                    </td>
                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-900">
                                      --
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      --
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      11:00 AM
                                    </td>
                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-900">
                                      --
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      --
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      12:00 PM
                                    </td>
                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-900">
                                      --
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      --
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      1:00 PM
                                    </td>
                                    <td class="px-6 py-4 whitespace-wrap text-sm text-gray-900">
                                      --
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                      --
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      <summary>
                    </details>
                  </div>
                </section>
                <section id="partenaires" class="max-h-screen p-8 flex flex-col justify-center">
                  <div>
                      <h2 class="text-center text-3xl font-extrabold text-blue-600">
                      PARTENAIRES
                      </h2>
                      <p class="mt-2 text-center text-sm text-gray-600">
                        Nos Remerciements ?
                      </p>
                  </div>
                  <div class="flex flex-wrap gap-4 space-y-4 justfify-center p-4">
                    <img src="/static/assets/img/SDP/partenaires/alumniesp.png" class="w-20 h-14"> 
                    <img src="/static/assets/img/SDP/partenaires/aner.png" class="w-20 h-14"> 
                    <img src="/static/assets/img/SDP/partenaires/ceaagir.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/ceaagrisan.png" class="w-20 h-14">  
                    <img src="/static/assets/img/SDP/partenaires/cee.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/cetud.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/cfic.png" class="w-20 h-14"> 
                    <img src="/static/assets/img/SDP/partenaires/cheese.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/css.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/dpworl.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/fbnbank.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/fondation ucad.jpg" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/force.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/groupe coselec.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/haske.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/helio.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/robotech.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/jep.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/lse.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/mlsri.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/nicomatic.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/noe.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/onud.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/seneau.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/tolbi.png" class="w-20 h-14">
                    <img src="/static/assets/img/SDP/partenaires/tooshare.png" class="w-20 h-14">
                  </div>
                </section>
                <section id="contacts" class="m-h-screen p-8 flex flex-col justify-center">
                  <div>
                      <h2 class="text-center text-3xl font-extrabold text-blue-600">
                      CONTACTS
                      </h2>
                      <p class="mt-2 text-center text-sm text-gray-600">
                        Comment nous joindre ?
                      </p>
                  </div>
                  <div class="w-full mt-2 space-y-2 max-w-4xl divide-y divide-gray-300 text-gray-800 space-y-4 mx-auto sm:px-6 lg:px-8">
                      <details open class="bg-white">
                          <summary class="w-full p-2 bg-blue-300 text-white font-medium uppercase cursor-s-resize list-none shadow-md">Service Valorisation</summary>
                          <p class="p-2">
                            Mouhamed Rassoul KANE | rassoul.kane@esp.sn | +221 77 324 24 29

                            Mouhamadou Lamine KEBE | mouhamadoulamine.kebe@esp.sn | +221 77 397 12 54
                          </p>
                      </details>
                      <details open class="bg-white">
                          <summary class="w-full p-2 bg-blue-300 text-white font-medium uppercase cursor-s-resize list-none shadow-md">Service Communication et Relations Publiques</summary>
                          <p class="p-2">
                            Fatima FAYE| fatima.faye@esp.sn | +221 77 573 42 71
                          </p>
                      </details>
                      <details class="bg-white">
                          <summary class="w-full bg-blue-300 text-white p-2 font-medium uppercase cursor-s-resize list-none shadow-md">Service des Affaires Sociales, de la Vie étudiante et du Sport</summary>
                          <p class="p-2">
                            Rosa SOW | rosa.sow@esp.sn | +221 77 520 37 50
                          </p>
                      </details>
                      <details class="bg-white">
                          <summary class="w-full p-2 bg-blue-300 text-white font-medium uppercase cursor-s-resize list-none shadow-md">Président du Comité Exécutif des Etudiants</summary>
                          <p class="p-2">
                            Cheikh DIAGNE | cheikhdiagne@esp.sn | +221 77 240 79 5
                          </p>
                      </details>
                      <details class="bg-white">
                          <summary class="w-full p-2 bg-blue-300 text-white font-medium uppercase cursor-s-resize list-none shadow-md">Comité d'organisation</summary>
                          <p class="p-2">
                            Ndiaga NDIAYE | ndiaga.ndiaye@esp.sn | +221 77 442 37 37
                          </p>
                      </details>
                  </div>
                </section>
            </main>
        </div>
    </div>
</body>
</html>
