<!DOCTYPE html>
<html>

<head>
  <title></title>
  <style>
    .wrap {
      background: blue;
      width: 900px;
      margin: 10px auto;
    }

    /*bagian header*/
    .wrap .header {
      background: green;
      /*height: 50px;*/
      padding: 2px 10px;
    }

    /*akhir header*/

    /*bagian menu*/
    .wrap .menu {
      background: yellow;
    }

    .wrap .menu ul {
      padding: 0;
      margin: 0;
      background: yellow;
      overflow: hidden;
    }

    .wrap .menu ul li {
      float: left;
      list-style-type: none;
      padding: 10px;
    }

    /*akhir menu*/

    .clear {
      clear: both;
    }

    .badan {
      height: 450px;
    }

    /*bagian sidebar*/
    .wrap .badan .sidebar {
      background: orange;
      float: left;
      width: 25%;
      height: 100%;
    }

    /*akhir sidebar*/

    .wrap .badan .content {
      background: red;
      float: left;
      height: 100%;
      width: 75%;
    }

    .wrap .footer {
      width: 100%;
      padding: 10px;
    }
  </style>
</head>

<body>
  <div class="wrap">
    <div class="header">
      <h1>Malas Ngoding</h1>
      <p>Tutorial belajar membuat layout website sederhana</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">HTML</a></li>
        <li><a href="#">CSS</a></li>
        <li><a href="#">PHP</a></li>
        <li><a href="#">Javascript</a></li>
      </ul>
    </div>
    <div class="badan">
      <div class="sidebar">
        sidebar
        <ul>
          <li><a href="#">Tutorial HTML dasar</a></li>
          <li><a href="#">Tutorial CSS dasar</a></li>
          <li><a href="#">Tutorial PHP dasar</a></li>
          <li><a href="#">Tutorial JQuery dasar</a></li>
        </ul>
      </div>
      <div class="content">
        content
      </div>
    </div>
    <div class="clear"></div>
    <div class="footer">
      footer
    </div>
  </div>
</body>

</html>