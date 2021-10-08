
<?php $users = require __DIR__ . "/api/getUsers.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Mysql PHP | CRUD</title>
  <link rel="stylesheet" type="text/css" href="./css/tailwind.min.css" />
</head>
<body class="bg-gray-100">

<header class="bg-white h-16 shadow-sm px-8 flex items-center">
  <h1 class="text-gray-700 text-lg font-semibold">CRUD App using MySQL and PHP</h1>
</header>

<main class="bg-white max-w-4xl rounded shadow my-8 sm:mx-8 lg:mx-auto px-4 py-8">

  <a href="create.php" class="btn-primary mb-2">Add new user</a>

  <!-- component -->
  <section class="font-mono">
    <div class="w-full overflow-hidden rounded-lg shadow-sm">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Name</th>
              <th class="px-4 py-3">Gender</th>
              <th class="px-4 py-3">Age</th>
              <th class="px-4 py-3"></th>
            </tr>
          </thead>
          <tbody class="bg-white">
            <?php foreach($users as $user) : ?>
            <tr class="text-gray-700">
              <td class="px-4 py-3 border">
                <div class="flex items-center text-sm">
                  <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="<?= $user['image'] ?>" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold text-black"><?= $user['fullname'] ?></p>
                    <a href="#" class="text-primary-400"><?= $user['email'] ?></a>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-md font-semibold border"><?= $user['gender'] ?></td>
              <td class="px-4 py-3 text-md border"><?= $user['age'] ?></td>
              <td class="px-4 py-3 text-sm border whitespace-nowrap">
                <a href="update.php?id=<?= $user['id'] ?>" class="btn-primary">Edit</a>
                <button onclick="confirmDelete(<?= $user['id'] ?>)" class="btn-red">Delete</button>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

</main>

<script>

function confirmDelete(id) {
  if (confirm('Are you sure to delete this user?')) {
    window.location.href = 'api/deleteUser.php?id=' + id;
  }
}

</script>

</body>
</html>