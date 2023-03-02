<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php' ?>
    <title>Dashboard</title>
</head> 
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!--Header-->
    <div class="bg-white">
        <div class="container mx-auto flex justify-between items-center py-4">
            <div class="w-1/4 md:w-1/2 pl-4">
                <a class="text-blue-600 text-xl font-bold hover:text-gray-600" href="/team">Dashboard</a>
            </div>
            <div class="w-3/4 md:w-1/2 pr-4 flex justify-end">
                <a class="text-gray-600 text-md italic hover:text-blue-600 mx-4" href="/disconnect">Deconnexion</a>
            </div>
        </div>
    </div>

    <!--Main-->
    <div class="container mx-auto mt-8">
        <div class="w-full flex flex-wrap justify-between items-center mb-4">
          <div class="p-4 rounded-md shadow-md shadow-blue-500 text-blue-600 text-center">
            <p class="font-medium uppercase">Total Projets</p>
            <?= $statistiques['nb_projets'] ?>
          </div>
          <div class="p-4 rounded-md shadow-md shadow-blue-500 text-blue-600 text-center">
            <p class="font-medium uppercase">Projets Retenus</p>
            <?= $statistiques['nb_projets_retenus'] ?>
          </div>
          <div class="p-4 rounded-md shadow-md shadow-blue-500 text-blue-600 text-center">
            <p class="font-medium uppercase">Total Femmes</p>
            <?= $statistiques['nb_filles'] ?>
          </div>
          <div class="p-4 rounded-md shadow-md shadow-blue-500 text-blue-600 text-center">
            <p class="font-medium uppercase">Total Hommes</p>
            <?= $statistiques['nb_garcons'] ?>
          </div>
        </div>

        <div>
          <h2 class="text-center text-3xl font-extrabold text-blue-600">
            Projets
          </h2>
          <p class="mt-2 text-center text-sm text-gray-600">
            Les differents projets soumis.
          </p>
        </div>
        <div class="flex flex-wrap -mx-4">
        <?php
        // Query the projects and their creator's email
        foreach($projets as $row) {
        ?>
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white shadow-md rounded-lg p-4">
                    <div class="flex justify-between">
                        <h3 class="font-bold text-lg"><?php echo $row["nom_projet"]; ?></h3>
                        <span class="text-sm"><?= $row["username"]; ?></span>
                    </div>
                    <hr class="my-2">
                    <p class="text-sm mb-2 truncate p-1"><?= $row["solution"]; ?></p>
                    <div class="flex justify-between">
                        <a href="/projet?id=<?= $row["id"]; ?>" class="bg-blue-500 text-sm hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Details</a>
                        <?php if($row["valide"] == '0'): ?>
                        <a href="/validate?id=<?= $row['id'] ?>" class="bg-green-500 hover:bg-green-700 text-sm text-white font-bold py-2 px-4 rounded">Valider</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
    </div>

</body>
</html>

