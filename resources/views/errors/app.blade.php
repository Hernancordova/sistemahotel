<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Error</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap" rel="stylesheet">

  <style>
    @font-face {
      font-family: 'Poetsen One';
      font-style: normal;
      font-weight: 400;
      src: url("{{ asset('errors/fonts/PoetsenOne-Regular.woff') }}");
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      width: 100%;
      height: 100vh;
      background: url("{{ asset('errors/img/background.svg') }}");
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      font-family: 'Poetsen One', sans-serif;
      padding: 40px;
    }

    .body {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-family: 'Poetsen One', sans-serif;
    }

    .contain-image {
      padding: 40px;
    }
    .img-person {
      width: 500px;
    }

    .description {
      color: #fff;
    }

    .description h2 {
      margin-block-end: 1em;
      font-weight: 200;
    }

    .description h1 {
      font-size: 45px;
      letter-spacing: 1px;
    }

    .copyright {
      width: 100%;
      color: #fff;
      font-size: 16px;
      text-align: center;
    }

    .button {
      padding: 0.5em 2em;
      display: inline-block;
      border-radius: 3rem;
      border: none;
      background: white;
      text-align: center;
      color: #5c5c5c;
      text-decoration: none;
      /* margin-block-start: 0.7em; */
    }
    @media (max-width: 975px) {
      body {
        align-items: center;
        justify-content: space-between;
      }
      .body {
        flex-direction: column;
      }
      .img-person {
        width: 300px;
      }
    }
  </style>
</head>

<body>

  <div class="body">
    @yield('content')
    <div class="contain-image">
      <img src="{{ asset('errors/img/police-3.png') }}" class="img-person" title="Imagen persona caminando triste" alt="Imagen persona caminando triste">
    </div>
  </div>
  <div class="copyright">  Full Tecnología {{date('Y')}} &copy; Copyright</div>
</body>
</html>
