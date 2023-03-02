<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php' ?>
    <title>resultats</title>
</head>
<body class="bg-gray-100">
    <?php include 'header.php' ?>
    <div class="container mt-8 mx-auto flex flex-col justify-center items-center">
      <div>
        <h2 class="text-center text-3xl font-extrabold text-blue-600">
          Les projets retenus
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
         ici les differents projets retenus.
        </p>
      </div>
      <table class="min-w-full divide-y divide-gray-200 mt-3">
        <thead class="bg-blue-300">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
              # Numero
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
              Nom Projet
            </th>
          </tr>
        </thead>
          <?php foreach ($projets as $k=>$project): ?>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap font-bold">
                  <?= $k+1 ?>
                </td>
                <td class="px-6 py-4 whitespace-wrap font-bold">
                  <?= $project['nom_projet'] ?>
                </td>
              </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
</body>
</html>

