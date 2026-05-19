<?php include("header.php"); ?>
<?php include("nav.php"); ?>

<div class="content">
  <div class="card">
    <h2>Personal Information</h2>
    <p><b>Name:</b> <?= $firstname . " " . $lastname ?></p>
    <p><b>Email:</b> <?= $email ?></p>
    <p><b>Phone:</b> <?= $phone ?></p>
    <p><b>Location:</b> <?= $location ?></p>
  </div>
</div>

<?php include("footer.php"); ?>