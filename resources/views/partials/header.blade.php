<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>


     <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

     @vite('resources/js/app.js')

</head>

<body>
     <header>
          <div class="navbar">

               <div class="menu">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png')}}">
                    <ul>
                         <li>CHARACTER</li>
                         <li>COMICS</li>
                         <li>MOVIES</li>
                         <li>TV</li>
                         <li>GAMES</li>
                         <li>COLLECTIBLES</li>
                         <li>VIDEOS</li>
                         <li>FANS</li>
                         <li>NEWS</li>
                         <li>SHOP</li>
                    </ul>
               </div>
          </div>
          <div class="jumbo">
               <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}">
          </div>

     </header>

</body>

</html>