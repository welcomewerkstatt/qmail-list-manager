<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style type="text/css">
    html {
      font-family: sans-serif;
    }

    body {
      max-width: 500px;
      margin-left: auto;
      margin-right: auto;
      padding: 15px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    button {
      margin-top: 2em;
    }

    .alert {
      padding: 20px;
      color: white;
      margin-bottom: 15px;
    }

    .success {
      background-color: #4CAF50;
    }

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }

    .closebtn:hover {
      color: black;
    }

  </style>
  <title>Mailinglist manager</title>
</head>
<body>
  <h2>Mailinglist manager</h2>
  <?php if ($success !== false): ?>
    <div class="alert success">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      List has been successfully saved.
    </div>
  <?php endif; ?>
  <p>Every recipient must be on a single line. No other separators (spaces, commas) are allowed.</p>
  <form action="index.php" method="POST">
    <textarea id="story" name="receivers" rows="20" cols="50"><?= $current ?></textarea>
    <button type="submit">Save</button>
  </form>
</body>
</html>