const addPorteurBtn = document.querySelector('#add-porteur-btn');
const porteursContainer = document.querySelector('#porteurs');
let porteurCount = 1;

addPorteurBtn.addEventListener('click', () => {
  if(porteurCount >= 6)
    return
  // create a new porteur div
  const newPorteur = document.createElement('div');
  newPorteur.setAttribute('class', 'p-6 bg-white shadow rounded-lg');
  porteurCount++;
  newPorteur.innerHTML = `
          <h3 class="text-md font-medium mb-2">Porteur #${porteurCount}</h3>
          <div class="mb-4">
            <label for="prenom${porteurCount}" class="block text-sm font-medium text-gray-700 mb-1">Prénom Nom</label>
            <input type="text" required id="prenom${porteurCount}1" name="prenom${porteurCount}" class="text-gray-600 focus:outline-none form-input rounded-md shadow-sm w-full" placeholder="Entrez le prénom du porteur">
          </div>
          <div class="mb-4">
            <label for="email${porteurCount}" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" required id="email${porteurCount}" name="email${porteurCount}" class="focus:outline-none form-input rounded-md shadow-sm w-full" placeholder="Entrez l'adresse email du porteur">
          </div>
          <div class="mb-4">
            <label for="tel${porteurCount}" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
            <input type="tel" required id="tel${porteurCount}" name="tel${porteurCount}" class="focus:outline-none form-input rounded-md shadow-sm w-full" placeholder="Entrez le numéro de téléphone du porteur">
          </div>
          <div class="mb-4">
            <label for="classe${porteurCount}" class="block text-sm font-medium text-gray-700 mb-1">Classe</label>
            <select id="classe${porteurCount}" name="classe${porteurCount}" class="text-gray-600 focus:outline-none form-input rounded-md shadow-sm w-full" placeholder="Entrez la classe du porteur">
              <option value="1ere annee">1ère année</option>
              <option value="2eme annee">2ème année</option>
              <option value="3eme annee">3ème année</option>
              <option value="4eme annee">4ème année</option>
              <option value="5eme annee">5ème année</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="departement${porteurCount}" class="block text-sm font-medium text-gray-700 mb-1">Département</label>
            <select id="departement${porteurCount}" name="departement${porteurCount}" class="text-gray-600 focus:outline-none form-input rounded-md shadow-sm w-full" placeholder="Entrez la classe du porteur">
              <option value="Informatique">Informatique</option>
              <option value="Electrique">Electrique</option>
              <option value="Mecanique">Mécanique</option>
              <option value="GCBA">GCBA</option>
              <option value="Gestion">Gestion</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="sexe${porteurCount}" class="block text-sm font-medium text-gray-700 mb-1">Sexe</label>
            <div class="flex items-center">
              <label for="sexe${porteurCount}_femme" class="mr-2">
                <input type="radio" id="sexe_femme" name="sexe${porteurCount}" value="femme" class="form-radio">
                Femme
              </label>
              <label for="sexe${porteurCount}_homme">
                <input type="radio" id="sexe_homme" name="sexe${porteurCount}" value="homme" class="form-radio">
                Homme
              </label>
            </div>
          </div>
          `
    porteursContainer.appendChild(newPorteur)
})
