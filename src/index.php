<?php include 'inc/header.php'; ?>

<?php
  $name = $email = $feedback = '';

    if(isset($_POST['submit'])) {
      if(!empty($_POST['name'])) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      }
      if(!empty($_POST['email'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      }
      if(!empty($_POST['feedback'])) {
        $feedback = filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      }
    }

    if(!empty($name) && !empty($email) && !empty($feedback)) {
      $query = "INSERT INTO tb_feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

      if(mysqli_query($conn, $query)) {
        header('Location: feedback.php');
      } else {
        echo 'Error' . mysqli_error($conn);
      }
    }
?>

  <main class="flex flex-col gap-2 items-center mt-6 mb-3">
    <img src="img/logo.webp" alt="">
    <h1 class="font-bold text-3xl">Feedback</h1>
    <h3 class="italic">Leave feedback for RheCode</h3>
  </main>

  <section>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="w-96 flex flex-col gap-2 mt-3 mb-6">
      <label for="name" class="w-fit">Name</label>
      <input type="text" name="name" id="name" class="border-solid border-2 border-gray-300 rounded-md p-1 focus-within:outline-none px-3 focus:ring-4 focus:ring-slate-950 focus:duration-150 focus:border-none hover:border-slate-600 duration-200" placeholder="Enter your name" autocomplete="off" required>
      <label for="email" class="w-fit">Email</label>
      <input type="email" name="email" id="email" class="border-solid border-2 border-gray-300 rounded-md p-1 px-3 focus-within:outline-none focus:ring-4 focus:ring-slate-950 focus:duration-150 focus:border-none hover:border-slate-600 duration-200" placeholder="Enter your email" autocomplete="off" required>
      <label for="feedback" class="w-fit">Feedback</label>
      <textarea name="feedback" id="feedback" cols="30" rows="3" class="border-solid border-2 border-gray-300 rounded-md p-1 px-3 focus-within:outline-none focus:ring-4 focus:ring-slate-950 focus:duration-150 focus:border-none hover:border-slate-600 duration-200" placeholder="Enter your feedback" autocomplete="off" required></textarea>
      <button type="submit" name="submit" class="bg-slate-950 text-white rounded-md py-2 mt-2 hover:bg-slate-800 duration-300">Submit</button>
    </form>
  </section>

<?php include 'inc/footer.php'; ?>