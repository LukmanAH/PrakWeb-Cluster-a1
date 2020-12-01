<?php echo doctype('html5'); ?>

<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>

  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

  <style>
    * {
      padding: 0;
      margin: 0;
      font-family: 'DM Sans', sans-serif;
    }

    .center-login {
      background-color: black;
      color: white;
      text-align: center;
      width: 40%;
      margin: 9rem auto;

    }

    .form-login {
      max-width: 100%;
      width: 80%;
      padding: 10px 10px;
      margin: 5px 0;
      border: 1px solid #c9c9c9;
      border-radius: 3px;
      transition: all 0.2s;
    }

    .form-login:hover {
      border-color: #5d5858
    }

    .form-login:focus {
      border: 1px solid #323232;
    }

    .form-button {
      width: 40%;
      color: black;
      padding: 10px 15px;
      border-radius: 3px;
      font-size: 16px;
      background-color: grey;
    }

    .form-button:hover {
      background-color: #726b6b;
    }

    .form-button:focus {
      border: none
    }

    h2 {
      font-size: 40px;
      margin-bottom: 10px;
      color: #615f5f;
    }

    .border-title {
      width: 50px;
      border: 2px solid #726b6b;
      margin-bottom: 2rem;
      border-radius: 5px;
    }

    .success {
      color: green;
    }

    .danger {
      color: red;
    }
  </style>
</head>

<body>


  <div class="center-login">

    <h2>Login</h2>

    <?php
    if ($this->session->flashdata('success') <> '') {
    ?>
      <p class="success"><?php echo $this->session->flashdata('success'); ?></p>
    <?php
      echo br(2);
    } else if ($this->session->flashdata('danger') <> '') {
    ?>
      <p class="danger"><?php echo $this->session->flashdata('danger'); ?></p>
    <?php
      echo br(2);
    }
    ?>
    <?php

    validation_errors();

    $username = array(
      'name'            => 'username',
      'type'            => 'text',
      'value'           => "",
      // 'placeholder'     => 'Username',
      'class'           => 'form-login',
    );

    $password = array(
      'name'            => 'password',
      'type'            => 'password',
      // 'placeholder'     => 'Password',
      'value'           => "",
      'class'           => 'form-login',
    );

    $submit = array(
      'name'            => 'insertusers',
      'type'            => 'submit',
      'value'           => 'Submit',
      'placeholder'     => '',
      'class'           => 'form-button'
    );

    echo  form_open_multipart('home/loginAction');

    echo form_label('Username');
    echo br(1);
    echo form_input($username);
    echo  form_error('username');
    echo  br(2);


    echo form_label('Password');
    echo br(1);
    echo form_input($password);
    echo  form_error('password');
    echo  br(2);

    echo  form_submit($submit);
    echo br(2);

    echo form_close();

    if ($this->session->flashdata('sukses_insert_users') <> '') {
      echo $this->session->flashdata('sukses_insert_users');
    }

    ?>

  </div>

</body>

</html>