<!DOCTYPE html>
<html>
   
<head>
   <meta charset="utf-8" />
   {{-- <title>task 2</title> --}}
   <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
   <link rel=" stylesheet" href="{{asset('assets/css/all.min.css')}}" />
   <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
   <link rel="stylesheet" href="{{asset('assets/css/External/all.min.css')}}" />
   <link rel="stylesheet" href="{{asset('assets/css/External/bootstrap.min.css')}}">   
   <link rel="stylesheet" href="{{asset('assets/css/External/animate.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/External/owl.carousel.css')}}"> 
    {{-- <link rel="stylesheet" href="{{asset('assets/css/styel.css')}}" /> --}}
    
</head>

<body>
   @foreach ($translatestaticdat as $t)
   <!-- end of nav bar -->
   <nav>
      
          
      
      <div class="container">
         <h2 class="fl-left">{{$t->logo}}</h2>
         <ul>
            <li>
               <a href="">{{$t->home }}</a>
            </li>
            <li>
               <a href="">{{$t->services }}</a>
            </li>
            <li>
               <a href="">{{$t->team }}</a>
            </li>
            <li>
               <a href="">{{$t->review }}</a>
            </li>
            <li>
               <a href="">{{$t->product }}</a>
            </li>
           
              
         </ul>
      </div>
   </nav>
   <!-- end of nav bar -->
   <!-- start of header -->
   <header class="margin" id="home">
      <div class="container">
         <section>
           <b><h2 style="font-weight: bolder; color: rgb(69, 69, 151)">{{$t->hdesc }} </h2></b> 
            <button class="pointer button">{{$t->hbtn }}</button>
         </section>

      </div>
      <figure class="pointer">
         <img src="{{asset('assets/images/header.jpg')}}" alt = "people talk about business">
      </figure>
   </header>
   <!-- end of header -->
   <div class="clear"></div>
   <!-- about us section -->

   <!-- end of about us section  -->
   <div class="clear"></div>



   <div>
       @yield('maindiv')
   </div>
   <!--  start of services section -->

   <!--  end of services section -->
   <!-- why choose us section  -->
  
   <!-- end of why choose us -->
   <!--  start of statics section -->

 
   <!--  end of statics section -->
   <!-- call section -->

   <!-- end of call section -->
   <!--  start of social  -->

   <!-- enf of social -->
   <!--  start of social 2 -->

   <!--  start of social 2 -->
   <!-- start of portfolio -->

   <!-- end of portfolio -->
    <!-- start blog -->

  <!-- end blog -->

   <!-- srart testimonials -->
  
   <!-- end testimonials -->
   <!-- team section -->

   <!-- end of team section -->
    <!-- start product  -->


  <!-- end product  -->
   <!-- start of our cliant -->

   <!-- end of our cliant -->
   <!-- start of pricing section -->
  
   <!-- end of pricing section -->
   <!-- start of question section -->
  
   <!-- end of question section -->
   <!-- start of connect section -->
  
   <!-- end of connect section -->
   <!-- start of footer -->

   <footer>
      <p style="color: aliceblue"> {{$t->footer}}</p>
      <a href="#home">
         <i class="fas fa-arrow-circle-up"> </i>
      </a>

   </footer>
   @endforeach
   
   <!-- end of footer -->

   <script src="{{asset('assets/js/External/jquery-3.5.1.min.js')}}"></script>
   <script src="{{asset('assets/js/External/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/js/External/wow.min.js')}}"></script>
   <script src="{{asset('assets/js/External/owl.carousel.min.js')}}"></script>
   <script src="{{asset('assets/js/main.js')}}"></script>
   
   
</body>

</html>