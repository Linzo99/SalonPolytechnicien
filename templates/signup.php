<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- Importation de Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100 w-screen h-screen flex justify-center items-center">
    <div class="bg-white w-full max-w-md shadow-md rounded-lg overflow-hidden text-blue-500">
      <div class="flex flex-col items-center space-y-2 pt-2">
        <img class= "w-20" src="/static/assets/img/SDP/Logo_UCAD_bleu.png">
        <h1 class="text-3xl font-bold text-center mb-4">Inscription</h1>
          <?php if(isset($errors['db'])){ ?>
            <p class="text-red-600 text-xs text-center"><?= $errors["db"] ?> </p>
          <?php } ?>
      </div>
      <form class="px-6 py-4" method="POST">
        <div class="mb-4">
          <label class="block font-bold text-blue-500 mb-2" for="nom_equipe">Nom de l'équipe</label>
          <input
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-400 focus:outline-none focus:shadow-outline"
            id="nom_equipe"
            type="text"
            placeholder="Nom de l'équipe"
            name="nom_equipe"
            required
          >
        </div>
        <div class="mb-4">
          <label class="block font-bold text-blue-500 mb-2" for="email">Email</label>
          <?php if(isset($errors['email'])){ ?>
            <p class="text-red-600 text-xs text-center"><?= $errors["email"] ?> </p>
          <?php } ?>
          <input
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-400 focus:outline-none focus:shadow-outline"
            id="email"
            type="email"
            placeholder="aliounesall@esp.sn"
            name="email"
            required
          >
        </div>
        <div class="mb-4">
          <label class="block font-bold text-blue-500 mb-2" for="password">Mot de passe</label>
          <?php if(isset($errors['password'])){ ?>
            <p class="text-red-600 text-xs text-center"><?= $errors["password"] ?> </p>
          <?php } ?>
          <input
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-400 focus:outline-none focus:shadow-outline"
            id="password"
            type="password"
            placeholder="Mot de passe"
            name="password"
            required
          >
        </div>
        <div class="flex flex-col space-y-2 items-center justify-between">
          <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit"
            name="inscription"
          >
            S'inscrire
          </button>
          <a
            class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
            href="/connexion"
          >
            Déjà inscrit? Connectez-vous!
          </a>
        </div>
      </form>
    </div>
  </body>
</html>
