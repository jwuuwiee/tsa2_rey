<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Resume</title>

  <style>
    body { font-family: Arial, sans-serif; margin: 0; background: #f5f5f5; }

    .topbar {
      background: #7b2d42;
      color: white;
      padding: 16px 24px;
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .topbar img {
      border-radius: 50%;
      border: 3px solid white;
    }

    nav {
      background: #5a1f30;
      display: flex;
      flex-wrap: wrap;
    }

    nav a {
      color: white;
      text-decoration: none;
      padding: 10px 16px;
      font-size: 0.85rem;
    }

    nav a:hover, nav a.active {
      background: #7b2d42;
    }

    .content {
      max-width: 800px;
      margin: 30px auto;
      padding: 0 20px;
    }

    .card {
      background: white;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 24px;
      margin-bottom: 20px;
    }

    h2 {
      color: #7b2d42;
      border-bottom: 1px solid #ddd;
      padding-bottom: 6px;
    }

    footer {
      text-align: center;
      padding: 14px;
      font-size: 0.8rem;
      color: #888;
      border-top: 1px solid #ddd;
      background: white;
      margin-top: 20px;
    }
  </style>
</head>

<body>

<div class="topbar">
  <img src="photo.jpg" width="100" height="100">
  <div>
    <h1><?= $firstname . " " . $lastname ?></h1>
    <p><?= $title ?></p>
  </div>
</div>