<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <title></title> -->
     <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
     <div class="container">
          <div class="header">
               <h1>Curiculum Vitae</h1>
          </div>
          <div class="navbar">
               <ul class="list-nav">
                    <li><a href="/">About</a></li>
                    <li><a href="/portofolio">Portofolio</a></li>
                    <li><a href="/kontak">Kontak</a></li>
               </ul>
          </div>
          <div class="content">
               @yield('konten')
          </div>
     </div>
     <footer>
          <p class="footer-text">
               Copyright &copy; 2021
          </p>
     </footer>
</body>
</html>