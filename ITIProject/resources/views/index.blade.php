@extends('layouts.master')
   <!-- end of header -->

   @section('maindiv')
   @foreach ($translatestaticdat as $t)
   <div class="clear"></div>
   <!-- about us section -->

   <!-- end of about us section  -->
   <div class="clear"></div>
   <!--  start of services section -->
   <div class="service margin paddingBottom">
      <div class="container">
         <h2 class="h" id="services">{{$t->Serv }}</h2>
         <p class="center-p">{{$t->Sdesc }} </p>
            @foreach ($service as $s)
         <div  >
            <div class="layer pointer">
            </div>
            <i class="{{$s->icone}}" style="background-color: #e6c3c899; color:#d84c60;"></i>
            <h3>{{$s->title}}</h3>
            <p class="p"> {{$s->description}}</p>
           
         </div>
         @endforeach
        
    
        
   
      </div>
   </div>
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
  <section id="blog">
    <div class="container">
      <div class="title text-center">
        <span class="wow fadeInLeft"> {{$t->rev }}</span>
        <h3 class="wow bounceIn">{{$t->rdesc }}</h3>
      </div>
      <div class="owl-carousel owl-theme">
     
        
        @foreach ($review as $r)
        <div  class="item">
          <div class="card">
            <div class="card-img">
            <img src="{{asset("storage/$r->img")}}" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <a href="#" class="card-title">{{$r->content}}  </a>
              <p class="card-text">{{$r->name}}</p>
              <p class="card-text">{{$r->title}}</p>
            </div>
          </div>
        </div>
        @endforeach
     
     
       
      </div>
    </div>
  </section>
  <!-- end blog -->

   <!-- srart testimonials -->
  
   <!-- end testimonials -->
   <!-- team section -->
   <div class="team margin paddingBottom">
      <div class="container">
         <h2 class="h" id="team">{{$t->tem }}</h2>
         <p class="center-p ">{{$t->tdesc }}</p>
        
        
            @foreach ($team as $t)
         <figure class="pointer" style="background-color: #777">
             <img src="{{asset("Storage/$t->img")}}" alt="">
         
            
            <p class="pointer">
               {{$t->name}}
               <span> {{$t->title}}</span>
            </p>
            <ul>
               <li>
                  <i class="fab fa-twitter pointer"></i>
               </li>
               <li>
                  <i class="fab fa-facebook pointer"></i>
               </li>
               <li>
                  <i class="fab fa-linkedin-in pointer"></i>
               </li>
               <li>
                  <i class="fab fa-instagram pointer"></i>
               </li>
            </ul>
        
         </figure>
         @endforeach
      </div>
   </div>
   <!-- end of team section -->
    <!-- start product  -->
  <section class="product">
    <div class="container">
      <div class="title text-center">
        <span class="wow fadeInLeft">{{$t->footer }}</span>
        <h3 class="wow bounceIn">{{$t->pdesc }}</h3>
      </div>
      <div class="product-all">
        <button class="btn d-xl-none d-md-none d-block" id="btnToggle">filter</button>
        <div class="product-list">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pro-all-tab" data-toggle="pill" href="#pro-all" role="tab" aria-controls="pro-all" aria-selected="true">ALL</a>
            </li>
            @foreach ($category as $c)
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pro-vege-tab" data-toggle="pill" href="#pro-vege" role="tab" aria-controls="pro-vege" aria-selected="false">{{$c->title}}</a>
            </li>
            @endforeach
           
           
          </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
             
          <div class="tab-pane fade show active" id="pro-all" role="tabpanel" aria-labelledby="pro-all-tab">
            <div class="row">
                @foreach ($product as $p)
              <div class="col-lg-3 col-md-4">
                <div class="item wow fadeInRight">
                    <a href="{{url("/singleproject/$p->id/$lang")}}"  rel="noopener noreferrer">
                  <div class="fade-one">
                    <img style="width: 100%; " src="{{asset("storage/$p->img")}}" class="img-fliud" alt="">
                    <a href="#" class="item-title">{{$p->description}}</a>
                    <div class="price">
                      <span class="sale">{{$p->category_id}}</span>
                      
                    </div>
                    <div class="sale">{{$p->title}}</div>
                  </div>
                </a>
                  <div class="fade-two">
                    <div class="icon-button">
                      {{-- <button class="btn"><i class="fas fa-search"></i></button>
                      <button class="btn"><i class="fas fa-shopping-cart"></i></button> --}}
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
          
          {{-- // --}}
      
          {{-- // --}}

        
          {{-- // --}}
       

        </div>
      </div>
    </div>
  </section>

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
   @endforeach

   @stop

 