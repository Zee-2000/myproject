<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Registration Form.css">
        <link rel="stylesheet" href="../Login/login.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/clinic.css') }}">>

</head>
{{-- @extends('layouts.app')
@section("body") --}}
<header class="header">

    <a href="#" class="logo">
        <img src="./image/Logo.jpeg" alt="" width="140" height="50">
    </a>

    <nav class="navbar">
        <a href="{{ url("home") }}">home</a>
        {{-- <a href="Registeration_form">myaccounts</a> --}}

        <div class="dropdown">
  <a href="#dropdown">Categories</a>
  <div class="dropdown-content">
   @auth
   @foreach ($categories as $item)                  
   <a href="{{ route("showcatgory",["id"=>$item["id"]]) }}">{{ $item['name'] }}</a>
 @endforeach  
   @endauth 

</div>
</div>
        <a href="{{ url('clinic') }}">Clinic</a>
        <a href="{{ url('vetlogin') }}">Vet</a>
        <a href="{{ url('about') }}">aboutus</a>
        <a href="{{ url('cart') }}" class="icons"><div class="fas fa-shopping-cart" id="cart-btn"></div></a>

       

                @guest
                    @if (Route::has('login'))

                            <a class="navbar" href="{{ route('login') }}">{{ __('Login') }}</a>

                    @endif

                    @if (Route::has('register'))

                            <a class="navbar" href="{{ route('register') }}">{{ __('Register') }}</a>

                    @endif
                @else


             <div class="dropdown">
                  <a class="navbar" href="#dropdown" style="color: rgb(209, 115, 7)" >
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-content">

                                <a class="dropdown-item" href="{{ route('profile') }}" >
                                    {{ __('MyProfile') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" >
                                    {{ __('Logout') }}
                                </a>
                            </div>

                @endguest
               
               
                
               
               
</nav>




</header>


</div>
    </header>
    <main id="clinic" >

   
    <section class="home" id="home">

        <div class="image">
            <img src="image/home-img.svg" alt="">
        </div>
    
        <div class="content">
            <h3>Caring
                Hands Pet
                Clinic</h3>
            <p>A group of specialized doctors are ready to provide high quality medical care for your pet</p>
            <a href="#contact_info" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
        </div>
    
    </section>
    
    <!-- home section ends -->
    
    <!-- icons section starts  -->
     
    {{-- <section class="icons-container">
    
        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>140+</h3>
            <p>doctors at work</p>
        </div>
    
        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1040+</h3>
            <p>satisfied patients</p>
        </div>
    
        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>500+</h3>
            <p>bed facility</p>
        </div>
    
        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>80+</h3>
            <p>available hospitals</p>
        </div>
    
    </section> --}}
  
    <!-- icons section ends -->
    
    <!-- services section starts  -->
   
    <section class="services" id="services">
    
        <h1 class="heading"> our <span>services</span> </h1>
    
        <div class="box-container">
            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>expert doctors</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            </div>
    
    
            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>Emergency Care</h3>
                <p>We always have a veterinarian on call for emergencies for pet that requires immediate medical attention.</p>
            </div>
    
            <div class="box">
                <i class="fa-solid fa-bone-break"></i>
                <h3>Surgery </h3>
                <p>Surgeries range from simple procedures such as stitching, spaying & neutering to a more complex ones.</p>
            </div>
    
            
            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            </div>
    
            {{-- <div class="box">
                <i class="fa-solid fa-microscope"></i>                <h3>Laboratory Testing </h3>
                <p>Laboratory tests are required to aid in diagnosing when a physical exam is not enough.

                </p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
     --}}
            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
                <p>Our staff are compassionate and are here to provide individualized care for your pet at all times.</p>
            </div>
    
        </div>
    
    </section>
     -->
    <!-- services section ends -->
    
    <!-- about section starts  -->
    
    <section class="about" id="about">
    
        <h1 class="heading"> <span>about</span> us </h1>
    
        <div class="row">
    
            <div class="image">
                <img src="image/about-img.svg" alt="">
            </div>
    
            <div class="content">
                <h3>we take care of your pets' healthy life</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            </div>
    
        </div>
    
    </section>
    
    <!-- about section ends -->
    
    <!-- doctors section starts  -->
    
    <section class="doctors" id="doctors">
    
        <h1 class="heading"> our <span>doctors</span> </h1>
    

    
            
        </div>
    
    </section>
    <section class="book" id="book">
    
        <h1 class="heading"> <span>book</span> now </h1>    
    
        <div class="row">
    
            <div class="image">
                <img src="image/book-img.svg" alt="">
            </div>
            <form action="{{route('store')}}"  method="post"  enctype="multipart/form-data">
                @csrf
                                <h3>book appointment</h3>
                                <input type="text"  name="user_id" value="{{Auth::id()}}" hidden placeholder="Enter your pet category" class="box" required>
                                <input type="text"  name="petCategory"  placeholder="Enter your pet category" class="box" required>
                                <input type="text" name="pet_case" placeholder="Enter pet case description" class="box" required>
                                <input type="text"  name="vet_id" value="{{$data}}" hidden class="box" required>
                                <input type="submit" value="book now" class="btn">
            </form>
    
        </div>
    
    </section>
    
    
    <section class="footer">

        <div class="box-container">
    
            <div class="box">
                <a href="#" class="logo">
            <img src="./image/Logo.jpeg" alt="" width="140" height="50">
        </a>
                <p>A PETSHOP</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
    
            <div class="box">
                <h3>contact info</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#" class="links"> <i class="fas fa-envelope"></i> petshop@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Egypt, Aswan - 400104 </a>
            </div>
    
            <div class="box">
                <h3>quick links</h3>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> myaccount </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Clinic </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Vet </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> aboutus </a>
    
            </div>
    
            {{-- <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <input type="email" placeholder="your email" class="email">
                <input type="submit" value="subscribe" class="btn">
                <img src="image/payment.png" class="payment-img" alt="">
            </div> --}}
    
        </div>
    
    </section>
    
  </main>
    
  {{-- @endsection --}}