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


     <footer>
          <div class="top_footer">
               <div class="container">
                    <div class="content_footer">
                         <div class="menu_col">
                              <h2>DC COMICS</h2>
                              <ul>
                                   <li>CHARACTER</li>
                                   <li>COMICS</li>
                                   <li>TV</li>
                                   <li>GAMES</li>
                                   <li>VIDEOS</li>
                                   <li>NEWS</li>
                              </ul>
                              <h2>SHOP</h2>
                              <ul>
                                   <li>SHOP</li>
                                   <li>SHOP DC</li>

                              </ul>
                         </div>
                         <div class="menu_col">
                              <h2>DC </h2>
                              <ul>
                                   <li>COMICS</li>
                                   <li>TV</li>
                                   <li>GAMES</li>
                                   <li>VIDEOS</li>
                                   <li>NEWS</li>
                                   <li>TV</li>
                                   <li>GAMES</li>
                                   <li>VIDEOS</li>
                                   <li>NEWS</li>
                              </ul>


                         </div>
                         <div class="menu_col">
                              <h2>SITES </h2>
                              <ul>
                                   <li>COMICS</li>
                                   <li>TV</li>
                                   <li>GAMES</li>
                                   <li>VIDEOS</li>
                                   <li>NEWS</li>
                                   <li>TV</li>
                                   <li>GAMES</li>
                                   <li>VIDEOS</li>
                                   <li>NEWS</li>
                              </ul>
                         </div>
                    </div>
               </div>
          </div>

          <div class="bottom_footer">
               <div class="container">
                    <div class="content_bt">


                         <button>
                              SING UP NOW
                         </button>
                         <div class="right_bt_content d-flex">
                              <h2>FOLLOW US</h2>

                              <img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt="">
                              <img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt="">
                              <img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
                              <img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt="">
                              <img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt="">
                         </div>
                    </div>
               </div>
          </div>
     </footer>

</body>

</html>