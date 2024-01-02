<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .button {
      background-color: white;
      padding: 14px 28px;
      font-size: 35px;
      cursor: pointer;
    }

    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100px;
      border: 4px solid pink;
      border-radius: 50px;
    }

    .default {
      border-color: #e7e7e7;
      color: black;
    }

    .heading {
      color: transparent;
      background: var(--gradient);
      -webkit-background-clip: text;
      background-clip: text;
      padding: 0 1rem;
      padding-top: 2.5rem;
      text-align: center;
      font-size: 4rem;
      text-transform: uppercase;
    }
  </style>
</head>

<body>

  <div class="center">
    <a href="
    <?php $result4 = mysqli_query($conn, "SELECT * from eplatform where epname='" . $pname . "'");
      while ($row4 = mysqli_fetch_array($result4)) 
      {
        echo $row4['link'];
      }
    ?>
    " class="button default">
      <h7 class="heading"> Get more information here </h7>
    </a>

  </div>
</body>

</html>