<?php include 'inc/header.php'; ?>

<?php
  $query = "SELECT * FROM tb_feedback";
  $result = mysqli_query($conn, $query);

  $feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

  <main class="w-1/2 flex flex-col items-center gap-4 my-6">
    <h1 class="text-3xl font-bold mb-4">Feedback</h1>
    
    <?php foreach($feedbacks as $feedback): ?>
      <div class="flex flex-col gap-3 py-8 px-4 border rounded-md shadow-sm">
        <p class="lg:text-md xl:text-lg"><?= $feedback['feedback']; ?></p>
        <div class="flex justify-between">
            <div class="flex gap-2">
              <span class="font-semibold"><?= $feedback['name']; ?></span>
              <span class="italic font-light"><?= $feedback['email']; ?></span>
            </div>
            <div class="">
              <span class="italic font-light"><?= $feedback['date']; ?></span>
            </div>
        </div>
      </div>
    <?php endforeach; ?>

  </main>

<?php include 'inc/footer.php'; ?>