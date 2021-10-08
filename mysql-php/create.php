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

<main class="bg-white max-w-xl rounded shadow my-8 sm:mx-8 lg:mx-auto px-4 py-8">

  <h4 class="text-lg text-gray-800 border-b border-gray-300 pb-2 mb-4">Add new User</h4>

  <section>

    <form class="grid grid-cols-1 gap-4" action="api/saveUser.php" method="POST">

      <div class="form-group">
        <label>Fullname: </label>
        <input class="form-input" type="text" name="fullname"/>
      </div>
      <div class="form-group">
        <label>Email: </label>
        <input class="form-input" type="email" name="email"/>
      </div>
      <div class="form-group">
        <label>Age: </label>
        <input class="form-input" type="number" name="age"/>
      </div>
      <div class="form-group">
        <label>Gender: </label>
        <select class="form-input" name="gender">
          <option value="">-- Select Gender --</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>

      <div class="flex justify-end">

        <a href="index.php" class="btn-default">Cancel</a>
        <button class="btn-primary ml-2">Save</button>

      </div>

    </form>

  </section>

</main>

</body>
</html>