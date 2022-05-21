

@extends('layouts.master')


@section('maindiv')
   @foreach ($translatestaticdat as $t)
       
   
   <!-- end of nav bar -->
  
   <!-- end of nav bar -->
  
<!-- start Facilities -->

<section class="facilities-section">
    <div class="lyr2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 facilities-content text-center pt-5">
                    <h2>{{$t->snghead }} </h2>
                    <p>{{$t->sngdesc }}</p>
                </div>
            </div>
            <div >
                <div class="row facility">
                    <div class="col-5">
                    <img  src="{{asset("storage/$product->img")}}" alt="">
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5">
                    <h4><i class="lnr lnr-dinner"></i>  {{$product->title}} </h4>
                   
                    <p> {{$product->skills}}</p>
                    <p> {{$product->description}}</p>
                    <p> <a href="{{$product->link}}" target="_blank" rel="noopener noreferrer">{{$product->link}}</a> </p>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</section>
@endforeach

@stop

<!-- end Facilities -->

   <!-- start of our cliant -->

   <!-- end of our cliant -->
   <!-- start of pricing section -->
  
   <!-- end of pricing section -->
   <!-- start of question section -->
  
   <!-- end of question section -->
   <!-- start of connect section -->
  
   <!-- end of connect section -->
   <!-- start of footer -->
  