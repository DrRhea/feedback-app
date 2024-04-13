<?php include 'config/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Project</title>
  <link href="style.css" rel="stylesheet">
</head>
<body class="font-[Poppins] flex flex-col items-center">

  <nav class="w-3/4 p-4 flex justify-between">
    <h2 class="font-semibold text-xl">RheCode</h2>
    <ul class="flex gap-8 text-gray-400">
      <li class="<?= ($_SERVER['PHP_SELF'] == '/project_01/src/index.php') ? "underline text-black" : "text-gray-400"?> hover:opacity-50"><a href="index.php">Home</a></li>
      <li class="<?= ($_SERVER['PHP_SELF'] == '/project_01/src/feedback.php') ? "underline text-black" : "text-gray-400"?> hover:opacity-50"><a href="feedback.php">Feedback</a></li>
      <li class="<?= ($_SERVER['PHP_SELF'] == '/project_01/src/about.php') ? "underline text-black" : "text-gray-400"?> hover:opacity-50"><a href="about.php">About</a></li>
    </ul>
  </nav>