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
      background-image: url('gambar/img2.jpg');
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

    .vertikal ul {
      list-style-type: none;
      border: 1px solid black;
      width: 200px;
      margin: 0;
      padding: 0;
      font-family: arial;
      font-size: 16px;
      font-weight: bold;
      background-color: crimson;
    }

    .vertikal ul li a {
      display: block;
      color: white;
      margin: 5px 7px;
      text-decoration: none;
      border-bottom: 1px solid black;
      padding: 5px;
    }

    .vertikal ul li a:hover {
      background-color: orange;
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

    </header>

    <div class="container">

      <aside>
        <nav class=”vertikal”>
          <ul>
            <li><a href=”#”>Islam</a></li>
            <li><a href=”#”>Ekonomi</a></li>
            <li><a href=”#”>Kesehatan</a></li>
            <li><a href=”#”>Motivasi</a></li>
            <li><a href=”#”>Travelling</a></li>
          </ul>
        </nav>
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
      <h3>@M. Lukman Al Hakim 118140103 </h3>
    </footer>
  </div>
</body>

</html>