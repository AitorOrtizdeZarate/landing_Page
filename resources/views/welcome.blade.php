<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/css.css">

        <title>Laravel</title>
    </head>
    <body>
       <nav>
           <div class="col-12 bg-warning" id="header">
                <div id="logo">
                     <img src="imagenes/logo.png" id="logoimg">
                </div>
                <div id="titulo">
                    <h1>Esturi</h1>
               </div>
               <div id="menu">
                   <div class="btn-group dropleft">
                      <button type="button" class="btn btn-secondary dropdown-toggle bg-dark" data-toggle="dropdown">
                        Menu
                      </button>
                      <div class="dropdown-menu">
                       <button class="dropdown-item" type="button">Idiomas</button>
                       <button class="dropdown-item" type="button">Contacto</button>
                      </div>
                    </div>
               </div>
           </div>
       </nav>
       <div id="inf" class="col-12 bg-dark text-warning">
           <h2>¿QUIENES SOMOS?</h2>
           <div class="col-7 ">
               <p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
               cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
               proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b></p>
           </div>
       </div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46453.28084427487!2d-2.008902497281466!3d43.307349767099105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51affe3b68fe15%3A0xe43ec55994864649!2zU2FuIFNlYmFzdGnDoW4sIEd1aXDDunpjb2E!5e0!3m2!1ses!2ses!4v1574669358895!5m2!1ses!2ses" frameborder="0" style="border:0;" allowfullscreen="" id="mapa"></iframe>



       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       
       <div id="form" class="col-12 bg-dark text-warning">
           <form>
                Nombre: <br>
               <input type="text" name="nombre"><br>
                Correo: <br>
               <input type="text" name="correo"><br>
                Mensaje: <br>
               <input type="text" name="mensaje"><br><br>
               <button>Enviar</button>
           </form>
       </div>
    
           <div class="col-12 bg-warning" id="footer">
               <ul>
                   <li>Twitter</li>
                   <li>Facebook</li>
                   <li>Instagram</li>
                   <li>Google +</li>
               </ul>
           </div>
      
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
