<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="navs.css" />
    <link rel="shortcut icon" type="image/png" href="pic/icon.png" />
   
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>


.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto auto auto auto;
  
  padding: 10px;
}
.grid-item {
  
  padding: 20px;
  font-size: 30px;
  text-align: center;
}


    #eventname{color: brown;}
    #eventtime{color: red;}
    #eventdate{color: seagreen;}
        a {
            color: purple;
            text-decoration: none;
        }
        .card {
            background-color: transparent;
            width: 250px;
            height: 250px;
            perspective: 1000px;
        }
        .card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
        .card:hover .card-inner {
            transform: rotateY(180deg);
        }
        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }
        .card-front {
            background-color: #bbb;
            color: black;
        }
        .card-back {
            background-color: white;
            transform: rotateY(180deg);
        }
    </style>

    <title>Event</title>
    <div class="flex flex-col h-screen">
    <header>
        <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="index.html" class="flex items-center">
                    <img src="pic/logo.png" class="mr-3 h-6 sm:h-24 sm:w-32" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Event Hub</span>
                </a>
                <div class="flex md:order-2">

                    <div>
                        <a class="dropdown-toggle flex items-center hidden-arrow" href="#" id="dropdownMenuButton2" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="./pic/user.png" class="rounded-full"
                            style="height: 25px; width: 25px" alt="" loading="lazy" />
                        </a>
                    </div>

                    <a href="index.html">
                        <button type="button"
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4
                             focus:outline-none focus:ring-red-300 font-medium 
                             rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-red-600 
                             dark:hover:bg-red-700 dark:focus:ring-red-800">Logout</button></a>


              
                </div>
                <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-4">
                    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                        <li>
                            <a href="index_event.html"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Home</a>
                        </li>
                        <li>
                            <a href="event.html"
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                                aria-current="page">Event</a>
                        </li>
                        <li>
                            <a href="about_event.html"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >About</a>
                        </li>
                        <li>
                            <a href="contact_event.html"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</head>

<body>
   



    <main class="p-4 flex-grow bg--200">

      <div class="flex justify-center">
        <div class="mb-3 xl:w-96">
          <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
            <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
            <button class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <hr>
      <hr>
      <br><br><br>
      <h1 class="text-3xl">Business & Seminars</h1>

<div class="grid-container">
 
  
  <div class="card">
    <div class="card-inner">
        <div class="card-front">
            <img src=
"Pictures/Business & Seminars/25.jpg"
                    style="width:250px;height:250px;">
        </div>
          
        <div class="card-back">
            <h1 id="eventname">SEMINAR ON FINANCE FOR NON-FINANCE EXECUTIVES</h1>
            <p>Muscat- Oman Convention & Exhibition Centre</p>
              <p id="eventdate"> 14/06/2022 - 18/06/2022 for 5 days</p>
              <p id="eventtime">10:00 AM</p>
              
              <p><b>2 OMR</b></p>
            <br><br>
              <a href="payment.html">
                Get The Ticket
            </a>
        </div>
    </div>
</div>



<div class="card">
  <div class="card-inner">
      <div class="card-front">
          <img src=
"Pictures/Business & Seminars/male-business-executive-giving-speech.jpg"
                  style="width:250px;height:250px;">
      </div>
        
      <div class="card-back">
          <h1 id="eventname">Unravelling NFTs</h1>
          <p>Muscat- Oman Convention & Exhibition Centre</p>
            <p id="eventdate"> Tue, June 30</p>
            <p id="eventtime">9:00 AM</p>
            <p><b>20 OMR</b></p>
          <br><br>
            <a href="payment.html">
              Get The Ticket
          </a>
      </div>
  </div>
</div>




<div class="card">
  <div class="card-inner">
      <div class="card-front">
          <img src=
"Pictures/Business & Seminars/waiting-room-with-monitors.jpg"
                  style="width:250px;height:250px;">
      </div>
        
      <div class="card-back">
          <h1 id="eventname">Entrepreneurial in this new world</h1>
          <p> ONLINE </p>
            <p id="eventdate"> Mon, December 30, 2022</p>
            <p id="eventtime">5:00 PM – 6:00 PM </p>
          
          <br><br>
            <a href="">
              Free - Online
          </a>
      </div>
  </div>
</div>


</div>

<hr>
<hr>

<br>

<h1 class="text-3xl">Sport & Fitness</h1>


<div class="grid-container">


  <div class="card">
    <div class="card-inner">
        <div class="card-front">
            <img src=
  "Pictures/Sport & Fitness/Aquathlon_1.jpg"
                    style="width:250px;height:250px;">
        </div>
          
        <div class="card-back">
            <h1 id="eventname">AQUATHLON CHALLENGE </h1>
            <p>Sultan Qaboos Sports Complex, ,Muscat, Oman</p>
              <p id="eventdate">  Fri Sep 2 2022</p>
              <p id="eventtime">07:00 am</p>

            <br><br>
              <a href="">
                Free Entery
            </a>
        </div>
    </div>
  </div>


  <div class="card">
    <div class="card-inner">
        <div class="card-front">
            <img src=
  "Pictures/Sport & Fitness/flay-lay-scale-weights.jpg"
                    style="width:250px;height:250px;">
        </div>
          
        <div class="card-back">
            <h1 id="eventname">OMAN HEALTH By Omanexpo LLC</h1>
            <p>Oman International Exhibition Centre</p>
              <p id="eventdate"> 04 Oct 2022 - 06 Oct 2022</p>
              <p id="eventtime">8.00 AM -9.00 PM</p>
            
            <br><br>
              <a href="">
                Free Entery
            </a>
        </div>
    </div>
  </div>





</div>

<hr>
<hr>

<br>


<h1 class="text-3xl">Music & Concerts</h1>

<div class="grid-container">
 
  <div class="card">
    <div class="card-inner">
        <div class="card-front">
            <img src=
  "Pictures/Music & Concerts/32The Oman wold festival of folk music-min.jpg"
                    style="width:250px;height:250px;">
        </div>
          
        <div class="card-back">
            <h1 id="eventname">The Oman World Folk Music Festival</h1>
            <p>Muscat- Oman Convention & Exhibition Centre</p>
              <p id="eventdate">16-7-22 to 20-7-22</p>
              <p id="eventtime">6.30 PM</p>
              <p><b>15 OMR</b></p>
            <br><br>
              <a href="payment.html">
                Get The Ticket
            </a>
        </div>
    </div>
  </div>

<div class="card">
  <div class="card-inner">
      <div class="card-front">
          <img src=
"Pictures/Music & Concerts/BEETHOVEN’S NINTH SYMPHONY.jpg"
                  style="width:250px;height:250px;">
      </div>
        
      <div class="card-back">
          <h1 id="eventname">BEETHOVEN’S NINTH SYMPHONY</h1>
          <p>ROHM, muscat</p>
            <p id="eventdate"> September 13 2022       </p>
            <p id="eventtime"> 7:00 PM  </p>
            <p><b>15 OMR</b></p>
          <br><br>
            <a href="payment.html">
              Get The Ticket
          </a>
      </div>
  </div>
</div>

<div class="card">
  <div class="card-inner">
      <div class="card-front">
          <img src=
"Pictures/Music & Concerts/MARCEL KHALIFE.jpg"
                  style="width:250px;height:250px;">
      </div>
        
      <div class="card-back">
          <h1 id="eventname">MARCEL KHALIFE</h1>
          <p> royal Opera House muscat</p>
            <p id="eventdate">September 26 2022 - September 27 2022</p>
            <p id="eventtime">7:00 PM</p>
            <p><b>25 OMR</b></p>
          <br><br>
            <a href="payment.html">
              Get The Ticket
          </a>
      </div>
  </div>
</div>

<div class="card">
  <div class="card-inner">
      <div class="card-front">
          <img src=
"Pictures/Music & Concerts/Pipe_Organ.jpg"
                  style="width:250px;height:250px;">
      </div>
        
      <div class="card-back">
          <h1 id="eventname">PIPE ORGAN CONCERT</h1>
          <p>royal Opera House muscat</p>
            <p id="eventdate"> November 16 2022</p>
            <p id="eventtime"> 7:30 PM  </p>
            <p><b>10 OMR</b></p>
          <br><br>
            <a href="payment.html">
              Get The Ticket
          </a>
      </div>
  </div>
</div>


</div>


<hr>
<hr>
<br>

<h1 class="text-3xl">Food & Drink</h1>

<div class="grid-container">
  
  <div class="card">
    <div class="card-inner">
        <div class="card-front">
            <img src=
  "Pictures/Food/fho_logo_13295.webp"
                    style="width:250px;height:250px;">
        </div>
          
        <div class="card-back">
            <h1 id="eventname">Food & Hospitality Oman Muscat</h1>
            <p>Muscat- Oman Convention & Exhibition Centre</p>
              <p id="eventdate">26.09.2022 - 28.09.2022</p>
              <p id="eventtime">Monday - Wednesday, 3 days</p>
            
            <br><br>
              <a href="">
                Free Entery - info..
            </a>
        </div>
    </div>
  </div>




</div>



      </main>
</body>











<footer class=" text-center bg-gray-900 text-white">
    <div class="container px-6 pt-6">
      <div class="flex justify-center mb-6">
        <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
          <svg aria-hidden="true"
          focusable="false"
          data-prefix="fab"
          data-icon="facebook-f"
          class="w-2 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 320 512"
        >
          <path
            fill="currentColor"
            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
          ></path>
          </svg>
        </a>
  
        <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
          <svg aria-hidden="true"
          focusable="false"
          data-prefix="fab"
            data-icon="twitter"
            class="w-3 h-full mx-auto"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
          >
            <path
              fill="currentColor"
              d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
            ></path>
          </svg>
        </a>
  
        <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
          <svg aria-hidden="true"
          focusable="false"
          data-prefix="fab"
            data-icon="google"
            class="w-3 h-full mx-auto"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 488 512"
          >
            <path
              fill="currentColor"
              d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
            ></path>
          </svg>
        </a>
  
        <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
          <svg aria-hidden="true"
          focusable="false"
          data-prefix="fab"
          data-icon="instagram"
            class="w-3 h-full mx-auto"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
          >
            <path
              fill="currentColor"
              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
            ></path>
          </svg>
        </a>
  
        <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
          <svg aria-hidden="true"
          focusable="false"
          data-prefix="fab"
          data-icon="linkedin-in"
            class="w-3 h-full mx-auto"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512"
          >
            <path
              fill="currentColor"
              d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
            ></path>
          </svg>
        </a>
  
        <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
          <svg aria-hidden="true"
          focusable="false"
          data-prefix="fab"
          data-icon="github"
            class="w-3 h-full mx-auto"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 496 512"
          >
            <path
              fill="currentColor"
              d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
            ></path>
          </svg>
        </a>
      </div>
  
      
  
      <div class="mb-6">
        <p>
          This website was deveolped by UTAS student in Diploma year
        </p>
      </div>
  
      <div class="grid lg:grid-cols-4 md:grid-cols-2">
        <div class="mb-6">
          <h5 class="uppercase font-bold mb-2.5">Leader</h5>
  
          <ul class="list-none mb-0">
            <li>
              <a href="#!" class="text-white">Mohammed Al-Marshudi</a>
            </li>
            <li>
              <a href="#!" class="text-white">16S194</a>
            </li>
            <li>
              <a href="#!" class="text-white"></a>
            </li>
            <li>
              <a href="#!" class="text-white">momarshudi@gmail.com</a>
            </li>
          </ul>
        </div>
  
        <div class="mb-6">
          <h5 class="uppercase font-bold mb-2.5">Team</h5>
  
          <ul class="list-none mb-0">
            <li>
              <a href="#!" class="text-white">SAMIYA AL-WAHAIBI</a>
            </li>
            <li>
              <a href="#!" class="text-white">16S19125</a>
            </li>
            <li>
              <a href="#!" class="text-white"></a>
            </li>
            <li>
              <a href="#!" class="text-white">-</a>
            </li>
          </ul>
        </div>
  
        <div class="mb-6">
          <h5 class="uppercase font-bold mb-2.5">Team</h5>
  
          <ul class="list-none mb-0">
            <li>
              <a href="#!" class="text-white">Rawan Al-Jabri</a>
            </li>
            <li>
              <a href="#!" class="text-white">16J1968</a>
            </li>
            <li>
              <a href="#!" class="text-white"></a>
            </li>
            <li>
              <a href="#!" class="text-white">-</a>
            </li>
          </ul>
        </div>
  
        <div class="mb-6">
          <h5 class="uppercase font-bold mb-2.5">Team</h5>
  
          <ul class="list-none mb-0">
            <li>
              <a href="#!" class="text-white">SAFA AL-MASKARI</a>
            </li>
            <li>
              <a href="#!" class="text-white">16S19190</a>
            </li>
            <li>
              <a href="#!" class="text-white"></a>
            </li>
            <li>
              <a href="#!" class="text-white">-</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="index.html">Event Hub</a>
    </div>
  </footer>
</div>
<!--<script src="./script.js"></script>
  <script>document.getElementById("demo").innerHTML = Math.floor(1000000000 + Math.random() * 9000000000);</script>
  <p id="demo"></p>-->

</html>