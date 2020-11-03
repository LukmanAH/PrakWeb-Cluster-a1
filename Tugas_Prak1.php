<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .wrap {
      background: blue;
      width: 784px;
      margin: 10px auto;
      font-family: sans-serif;
    }

    header {
      background: grey;
      /*height: 50px;*/

      width: 784px;
      height: 200px;
      text-align: center;
    }

    .clear {
      clear: both;
    }

    .container {
      height: 450px;
    }

    aside {
      background: yellow;
      float: left;
      width: 200px;
      height: 100%;
      text-align: center;
    }

    article {
      background: red;
      float: left;
      height: 100%;
      width: 584px;
      text-align: center;
    }

    footer {
      background: purple;
      width: 784px;
      height: 100px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="wrap">
    <header>
      <br><br><br><br>
      <h2>BAGIAN HEADER (WIDTH : 784PX, HEIGHT: 200PX)</h2>
    </header>

    <div class="container">

      <aside>
        <H3>KOLOM 1<br>
          AUTO HEIGHT <br>
          WIDTH : 200PX <br></H3>

      </aside>

      <article>
        <h3> KOLOM 1<br>
          AUTO HEIGHT <br>
          WIDTH : 584PX <br>
        </h3>
      </article>
    </div>
    <div class="clear"></div>
    <footer>
      <br>
      <h3>FOOTER WIDTH: 784PX, HEIGHT: 100PX</h3>
    </footer>
  </div>
</body>

</html>