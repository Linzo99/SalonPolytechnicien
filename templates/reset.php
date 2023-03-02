<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'head.php' ?>
    <title>Reset Password</title>
  </head>
  <body class="bg-gray-100">
    <?php include 'header.php' ?>
    <div class="bg-gray-100 w-screen h-screen flex justify-center items-center">
    <div class="bg-white w-full max-w-md shadow-md rounded-lg overflow-hidden text-blue-500">
      <div class="flex flex-col items-center space-y-2 pt-2">
        <?php if(isset($errors['db'])){ ?>
          <p class="text-red-600 text-xs text-center"><?= $errors["db"] ?> </p>
        <?php } ?>
      </div>
      <form class="px-6 py-4" method="POST">
        <div class="mb-4">
          <label class="block font-bold text-blue-500 mb-2 text-center" for="email">Email</label>
          <?php if(isset($errors['email'])){ ?>
            <p class="text-red-600 text-xs text-center"><?= $errors["email"] ?> </p>
          <?php } ?>
          <input
            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-blue-400 focus:outline-none focus:shadow-outline"
            id="email"
            type="text"
            placeholder="aliounesall@esp.sn"
            name="email"
            required
          >
        </div>
        <div class="flex flex-col space-y-2 items-center justify-between">
          <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit"
            name="inscription"
          >
            Reset
          </button>
        </div>
      </form>
    </div>
    </div>
  </body>
</html>

