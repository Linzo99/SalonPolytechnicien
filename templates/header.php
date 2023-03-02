<div class="bg-white">
    <div class="container mx-auto flex justify-between items-center py-4">
        <div class="w-1/4 md:w-1/2 pl-4">
            <?php 
              if(!isset($_SESSION['loggedin'])){ ?>
                <a class="text-blue-600 text-xl font-bold hover:text-gray-600" href="/">Accueil</a>
              <?php }
              else{ ?>
                <a class="text-blue-600 text-xl font-bold hover:text-gray-600" href="/team">Dashboard</a>
              <?php } ?>
        </div>
        <div class="w-3/4 md:w-1/2 pr-4 flex justify-end">
            <?php 
              if(!isset($_SESSION['loggedin'])){ ?>
                <a class="text-gray-600 text-md italic hover:text-blue-600 mx-4" href="/inscription">inscription</a>
                <a class="text-gray-600 text-md italic hover:text-blue-600 mx-4" href="/connexion">connexion</a>
              <?php }
              else{ ?>
                <a class="text-gray-600 text-md italic hover:text-blue-600 mx-4" href="/disconnect">Deconnexion</a>
              <?php } ?>
        </div>
   </div>
</div>
