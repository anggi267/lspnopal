<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>John Travel</title>
<!-- 
Journey Template 
http://www.templatemo.com/tm-511-journey
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
      </head>

      <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>    
            <div class="tm-top-bar" id="tm-top-bar">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="img/logo.png" alt="Site logo">
                                John Travel
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#top">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href= "{{route('login')}}"class="nav-link" href="#tm-section-2">Sign In</a>
                                </li>
                            </ul>
                        </div>                            
                    </nav>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- .tm-top-bar -->

        <div class="tm-page-wrap mx-auto">
            <section class="tm-banner">
                <div class="tm-container-outer tm-banner-bg">
                    <div class="container">

                        <div class="row tm-banner-row tm-banner-row-header">
                            <div class="col-xs-12">
                                <div class="tm-banner-header">
                                    <h1 class="text-uppercase tm-banner-title">Let's Tour and Travel</h1>
                                    <img src="img/dots-3.png" alt="Dots">
                                    <p class="tm-banner-subtitle">Selamat datang di Agen Tour dan Travel kami!
                                        <br><br>
                                        Kami adalah mitra perjalanan terpercaya yang siap membantu Anda merencanakan petualangan yang tak terlupakan. Dengan pengalaman kami dalam industri pariwisata, kami menyediakan paket wisata yang dikustomisasi sesuai dengan kebutuhan dan preferensi Anda 
                                        <br><br>
                                        Selamat datang di dunia petualangan dengan Agen Tour dan Travel kami.
                                    </p>
                
                                </div>    
                            </div>  <!-- col-xs-12 -->                      
                        </div> <!-- row -->
                        <div class="tm-banner-overlay"></div>
                    </div>  <!-- .container -->                   
                </div>     <!-- .tm-container-outer -->                 
            </section>

            <section class="p-5 tm-container-outer tm-bg-gray">            
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                        
                            <h2 class="text-uppercase mb-4">Your <strong>Journey</strong> is our priority</h2>
                            <p class="mb-4">Selamat Datang di John Travel layanan Tour dan Travel yang menyediakan Paket Wisata, Info Wisata, dan Rekomendasi Wisata Populer.</p>
                            <a href="{{route('login')}}" class="text-uppercase btn-primary tm-btn">Login/Register</a>                              
                        </div>
                    </div>
                </div>            
            </section>
            
            <div class="tm-container-outer" id="tm-section-2">
                <section class="tm-slideshow-section">
                    <div class="tm-slideshow">
                        <img src="img/kota.jpg" alt="Image">
                        <img src="img/sejarah.jpg" alt="Image">
                        <img src="img/eropa.jpg" alt="Image">    
                    </div>
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">Rekomendasi Tempat Wisata Eropa</h2>
                        <p>Eropa adalah benua yang kaya akan sejarah, kebudayaan, dan keindahan alam. Terdiri dari berbagai negara yang berbeda, Eropa menawarkan pengalaman wisata yang beragam dan menarik.</p>
                        <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Book</a>
                    </div>
                </section>
                <section class="clearfix tm-slideshow-section tm-slideshow-section-reverse">

                    <div class="tm-right tm-slideshow tm-slideshow-highlight">
                        <img src="img/indo.jpg" alt="Image">
                        <img src="img/jepang.jpg" alt="Image">
                        <img src="img/vietnam.jpg" alt="Image">
                    </div> 

                    <div class="tm-slideshow-description tm-slideshow-description-left tm-bg-highlight">
                        <h2 class="">Rekomendasi Tempat Wisata Asia</h2>
                        <p>Asia adalah benua yang kaya akan keindahan alam, warisan budaya, sejarah yang kaya, dan kehidupan perkotaan yang modern. Dari pesisir yang indah hingga pegunungan yang menjulang tinggi, Asia menawarkan berbagai macam pengalaman wisata yang menarik.</p>
                        <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-highlight">Book</a>
                    </div>                        

                </section>
                <section class="tm-slideshow-section">
                    <div class="tm-slideshow">
                        <img src="img/tm-img-03.jpg" alt="Image">
                        <img src="img/tm-img-02.jpg" alt="Image">
                        <img src="img/tm-img-01.jpg" alt="Image">
                    </div>
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">Rekomendasi Tempat Wisata Amerika</h2>
                        <p>Amerika, atau Amerika Serikat, adalah negara yang terletak di benua Amerika Utara dan terkenal sebagai destinasi wisata yang menakjubkan. Negara ini memiliki beragam pemandangan alam, kebudayaan yang kaya, serta kota-kota yang megah.</p>
                        <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Book</a>
                    </div>
                </section>
            </div>        
            <div class="tm-container-outer" id="tm-section-3">
                <ul class="nav nav-pills tm-tabs-links">
                    <li class="tm-tab-link-li">
                        <a href="#1a" data-toggle="tab" class="tm-tab-link">
                            <img src="img/north-america.png" alt="Image" class="img-fluid">
                            North America
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#2a" data-toggle="tab" class="tm-tab-link">
                            <img src="img/south-america.png" alt="Image" class="img-fluid">
                            South America
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#3a" data-toggle="tab" class="tm-tab-link">
                            <img src="img/europe.png" alt="Image" class="img-fluid">
                            Europe
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#4a" data-toggle="tab" class="tm-tab-link active"><!-- Current Active Tab -->
                            <img src="img/asia.png" alt="Image" class="img-fluid">
                            Asia
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#5a" data-toggle="tab" class="tm-tab-link">
                            <img src="img/africa.png" alt="Image" class="img-fluid">
                            Africa
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#6a" data-toggle="tab" class="tm-tab-link">
                            <img src="img/australia.png" alt="Image" class="img-fluid">
                            Australia
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#7a" data-toggle="tab" class="tm-tab-link">
                            <img src="img/antartica.png" alt="Image" class="img-fluid">
                            Antartica
                        </a>
                    </li>
                </ul>
                <div class="tab-content clearfix">
                	
                    <!-- Tab 1 -->
                    <div class="tab-pane fade" id="1a">
                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight">One North</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$110</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>                        
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Felis nec dignissim</h3>
                                    <p class="tm-text-highlight">Two North</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <div id="preload-hover-img"></div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$120</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Sed fermentum justo</h3>
                                    <p class="tm-text-highlight">Three North</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$130</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Maecenas ultricies neque</h3>
                                    <p class="tm-text-highlight">Four North</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$140</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Back To Home</a>
                    </div> <!-- tab-pane -->
                    
                    <!-- Tab 2 -->
                    <div class="tab-pane fade" id="2a">

                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">South Resort Hotel</h3>
                                    <p class="tm-text-highlight">South One</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$220</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>                        
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Aenean ac ante nec diam</h3>
                                    <p class="tm-text-highlight">South Second</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$230</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Suspendisse nec dapibus</h3>
                                    <p class="tm-text-highlight">South Third</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$240</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Aliquam viverra mi at nisl</h3>
                                    <p class="tm-text-highlight">South Fourth</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$250</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Back To Home</a>
                    </div> <!-- tab-pane -->          
                    
                    <!-- Tab 3 -->     
                    <div class="tab-pane fade" id="3a">

                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/eropa.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Europe Hotel</h3>
                                    <p class="tm-text-highlight">Venecia, Italy</p>
                                    <p class="tm-text-gray">Hotel di Italia menawarkan pengalaman menginap yang tak terlupakan di negara yang kaya akan budaya, sejarah, dan keindahan alam. Dari hotel mewah yang megah hingga penginapan yang sederhana namun nyaman, ada banyak pilihan untuk memenuhi kebutuhan dan anggaran Anda.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$330</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>                        
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/london.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">London Bridge</h3>
                                    <p class="tm-text-highlight">London, England</p>
                                    <p class="tm-text-gray">London Bridge adalah salah satu landmark terkenal di London, Inggris. Jembatan ini melintasi Sungai Thames dan menghubungkan City of London dengan Borough of Southwark. London Bridge telah menjadi simbol penting sejak zaman Romawi, dengan sejarah yang panjang dan beragam.

                                        London Bridge saat ini adalah jembatan yang modern dengan desain yang elegan. Jembatan ini menawarkan pemandangan indah Sungai Thames dan panorama kota London. Setiap hari, ribuan orang melintasi jembatan ini untuk bepergian dari satu sisi sungai ke sisi lainnya.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$340</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/menara pissa.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Menara Pissa</h3>
                                    <p class="tm-text-highlight">Italy</p>
                                    <p class="tm-text-gray">Menara Pisa, atau dikenal juga sebagai Menara Miring Pisa, adalah salah satu landmark paling terkenal di Italia. Terletak di kota Pisa, Tuscany, menara ini terkenal karena kemiringannya yang mencolok.

                                        Menara Pisa awalnya dibangun pada abad ke-12 sebagai menara lonceng untuk Katedral Pisa yang terdekat. Namun, selama pembangunannya, menara mulai miring karena pondasi yang lemah dan tanah yang tidak stabil di daerah tersebut.
                                        
                                        Menara Pisa memiliki tinggi sekitar 56 meter dan terdiri dari delapan tingkat dengan tujuh lonceng yang terletak di puncaknya. Keunikan terbesar menara ini adalah kemiringannya yang mencapai sudut sekitar 4 derajat.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$350</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/mediteran.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Medditeran</h3>
                                    <p class="tm-text-highlight">Istanbul, Turkey</p>
                                    <p class="tm-text-gray">Wisata balon udara di Mediterania menawarkan pengalaman yang menakjubkan dengan pemandangan spektakuler dan panorama yang memukau. Anda dapat memilih dari beberapa destinasi menarik di kawasan Mediterania yang memungkinkan Anda untuk mengapresiasi keindahan alam dan pemandangan indah dari ketinggian udara.

                                        Misalnya, Kapadokya di Turki adalah salah satu tujuan populer untuk wisata balon udara. Dengan formasi batu kapur yang unik dan lembah-lembah yang memukau, penerbangan balon udara di Kapadokya memberikan pengalaman yang tak terlupakan.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$360</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Back To Home</a>
                    </div> <!-- tab-pane -->
                    
                    <!-- Tab 4 -->
                    <div class="tab-pane fade show active" id="4a">
                    <!-- Current Active Tab WITH "show active" classes in DIV tag -->
                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/jakarta.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Jakarta Resort Hotel</h3>
                                    <p class="tm-text-highlight">Jakarta</p>
                                    <p class="tm-text-gray">SSCBD (Sudirman Central Business District) adalah area bisnis yang terletak di pusat Jakarta, Indonesia. Di sekitar SCBD, Anda akan menemukan beberapa hotel yang berkualitas dan mewah.

                                        Hotel-hotel di SCBD Jakarta menawarkan akomodasi yang nyaman dan fasilitas yang lengkap. Kebanyakan hotel-hotel ini dirancang dengan gaya modern dan elegan, serta dilengkapi dengan berbagai fasilitas seperti kolam renang, pusat kebugaran, spa, dan restoran mewah.
                                        
                                        </p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$440</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>                        
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/nimo.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Nimo Island</h3>
                                    <p class="tm-text-highlight">Bandung, Indonesia</p>
                                    <p class="tm-text-gray">Nimo Island adalah sebuah pulau kecil yang terletak di perairan Bandung, Jawa Barat, Indonesia. Pulau ini menawarkan pengalaman liburan yang menyenangkan dan menenangkan bagi para pengunjung.

                                        Nimo Island dikenal karena keindahan pantainya yang eksotis. Pasir putih yang halus, air laut yang jernih, dan pemandangan alam yang memukau menjadikan pulau ini tempat yang ideal untuk bersantai dan menikmati keindahan alam.</p>   
                                </div>
                                <div id="preload-hover-img"></div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$50</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/kyoto.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Kyoto Resort Hotel</h3>
                                    <p class="tm-text-highlight">Kyoto, jepang</p>
                                    <p class="tm-text-gray">Kyoto, Jepang, adalah tujuan wisata yang terkenal dengan keindahan alam, budaya tradisional, dan warisan sejarahnya. Di kota ini, Anda dapat menemukan berbagai macam hotel yang menawarkan pengalaman menginap yang unik dan berkelas.

                                        Hotel-hotel di Kyoto sering kali mencerminkan tradisi dan keanggunan Jepang. Beberapa hotel memiliki desain yang mencerminkan arsitektur tradisional Jepang, dengan tatami (perabotan tradisional Jepang) dan taman-taman yang indah. Sementara itu, hotel-hotel modern di Kyoto menawarkan fasilitas mewah dan gaya kontemporer.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$560</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/halong.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Halong Bay</h3>
                                    <p class="tm-text-highlight">Halong, Vietnam</p>
                                    <p class="tm-text-gray">Halong Bay adalah salah satu tujuan wisata paling populer di Vietnam. Terletak di Laut China Timur, Halong Bay terkenal karena keindahan alamnya yang menakjubkan.

                                        Halong Bay terdiri dari ratusan pulau-pulau kecil yang tersebar di atas air biru yang tenang. Formasi batu kapur yang menjulang tinggi di antara air membentuk pemandangan yang menakjubkan. Bebatuan ini dihiasi dengan hutan lebat, gua-gua yang indah, dan laguna yang menyegarkan.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$470</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Back To Home</a>
                    </div> <!-- tab-pane -->
                    
                    <!-- Tab 5 -->
                    <div class="tab-pane fade" id="5a">

                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/zanzibar.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Afrika Resort Hotel</h3>
                                    <p class="tm-text-highlight">Zanzibar, Afrika</p>
                                    <p class="tm-text-gray">Zanzibar adalah sebuah pulau yang terletak di pantai timur Afrika, di lepas pantai Tanzania. Pulau ini terkenal dengan keindahan pantainya yang memukau dan budaya yang kaya. Di Zanzibar, Anda dapat menemukan berbagai macam hotel yang menawarkan pengalaman menginap yang eksotis.

                                        Hotel-hotel di Zanzibar sering kali terletak di dekat pantai, sehingga Anda dapat menikmati pemandangan laut yang indah dan akses mudah ke pasir putih yang halus. Beberapa hotel memiliki desain yang mencerminkan kekayaan budaya dan arsitektur Zanzibar, dengan sentuhan tradisional dan suasana yang khas.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$550</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>                        
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/savana.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Savannah</h3>
                                    <p class="tm-text-highlight">Savannah, South Afrika</p>
                                    <p class="tm-text-gray">Savana Afrika adalah salah satu ekosistem yang paling terkenal dan ikonik di dunia. Terletak di berbagai negara di Afrika, seperti Kenya, Tanzania, dan Afrika Selatan, savana ini ditandai dengan padang rumput yang luas, pohon-pohon yang tersebar, dan kehadiran hewan liar yang mengesankan.

                                        Savana Afrika menawarkan pemandangan yang menakjubkan dan keanekaragaman hayati yang luar biasa. Di sini, Anda dapat melihat gerombolan raksasa gajah, singa yang mencari mangsanya, kawanan zebra yang berlarian, jerapah yang anggun, dan banyak spesies hewan lainnya. Savana juga menjadi tempat migrasi spektakuler dari jutaan herbivora, seperti gnus dan jerapah, yang mengisi langit savana dengan gerakan mereka yang luar biasa.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$560</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/madagascar.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Madagascar</h3>
                                    <p class="tm-text-highlight">Madagascar, Afrika</p>
                                    <p class="tm-text-gray">Madagaskar adalah sebuah pulau yang terletak di lepas pantai timur Afrika, di Samudra Hindia. Pulau ini terkenal karena kekayaan alamnya yang luar biasa, keanekaragaman hayati yang unik, dan keindahan alam yang menakjubkan.

                                        Madagaskar adalah rumah bagi banyak spesies flora dan fauna endemik, yang tidak ditemukan di tempat lain di dunia. Anda dapat menemukan berbagai macam makhluk yang menakjubkan, termasuk lemurs, kameleon, dan burung langka.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$570</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/robeg.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Mountain Robberg</h3>
                                    <p class="tm-text-highlight">Robberg, Afrika</p>
                                    <p class="tm-text-gray">Robberg adalah sebuah tanjung yang terletak di sepanjang pantai Garden Route, Afrika Selatan. Tanjung ini terkenal karena keindahan alamnya yang memukau dan menjadi tempat yang populer untuk menjelajahi alam liar.

                                        Robberg menawarkan pemandangan yang spektakuler dengan pantai berpasir putih yang luas, tebing-tebing yang menjulang tinggi, dan air laut yang biru jernih. Di sekitar tanjung ini, terdapat taman alam Robberg yang melindungi keanekaragaman hayati yang kaya, termasuk burung laut, anjing laut, dan spesies tumbuhan langka.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$580</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>    
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Back To Home</a>
                    </div> <!-- tab-pane -->   
                    
                    <!-- Tab 6 -->            
                    <div class="tab-pane fade" id="6a">

                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Hotel Australia</h3>
                                    <p class="tm-text-highlight">City One</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$660</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>                        
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Proin interdum ullamcorper</h3>
                                    <p class="tm-text-highlight">City Two</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$650</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Beach Barbecue Sunset</h3>
                                    <p class="tm-text-highlight">City Three</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$640</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Grand Resort Pasha</h3>
                                    <p class="tm-text-highlight">City Four</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$630</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>   
                        </div>                        

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Back To Home</a>
                    </div> <!-- tab-pane -->
                    
                    <!-- Tab 7 -->
                    <div class="tab-pane fade" id="7a">

                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/polar.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Antartica Resort Hotel</h3>
                                    <p class="tm-text-highlight">Polar, Antartica</p>
                                    <p class="tm-text-gray">"Polar Hotel" adalah sebuah istilah umum yang digunakan untuk menggambarkan hotel atau akomodasi yang terletak di wilayah kutub, seperti Kutub Utara (Arktik) atau Kutub Selatan (Antarktika). Hotel semacam ini biasanya didesain untuk memenuhi kebutuhan pengunjung yang tertarik untuk menjelajahi dan mengalami kehidupan di lingkungan kutub yang ekstrem.

                                        Polar Hotel di Antarktika biasanya terletak di pangkalan penelitian atau kapal pesiar yang beroperasi di wilayah tersebut. Hotel ini menyediakan akomodasi nyaman bagi para penjelajah, peneliti, dan wisatawan yang mengunjungi Antarktika. Pengunjung dapat mengamati kehidupan satwa liar seperti penguin, lumba-lumba, dan paus, serta menjelajahi gletser, es laut, dan panorama alam yang menakjubkan.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$770</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>                        
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/iceland.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Aurora Iceland</h3>
                                    <p class="tm-text-highlight">Iceland</p>
                                    <p class="tm-text-gray">Aurora Hotel biasanya terletak di daerah kutub utara seperti Norwegia, Swedia, Finlandia, dan Islandia. Hotel ini didesain khusus untuk memungkinkan pengunjung mengamati dan menikmati Aurora Borealis dengan kenyamanan. Beberapa hotel bahkan memiliki kamar dengan atap kaca atau observatorium Aurora yang memungkinkan tamu melihat Aurora Borealis langsung dari kamar mereka.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$230</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/sweden.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Sweden Hotel</h3>
                                    <p class="tm-text-highlight">Sweden, Antartica</p>
                                    <p class="tm-text-gray">Swedia adalah negara yang terkenal dengan keindahan alamnya yang memukau, budaya yang kaya, dan desain minimalis yang elegan. Di seluruh negara ini, Anda dapat menemukan berbagai macam hotel yang menawarkan pengalaman menginap yang unik dan memuaskan.

                                        Hotel-hotel di Swedia mencerminkan gaya hidup modern dan estetika minimalis yang menjadi ciri khas negara ini.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$140</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/antartika.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Antartica</h3>
                                    <p class="tm-text-highlight">Antartica</p>
                                    <p class="tm-text-gray">Antarktika adalah benua yang terletak di Kutub Selatan bumi. Ini adalah tempat yang sangat terpencil dan ekstrem, dengan kondisi iklim yang keras dan akses terbatas. Antarktika terkenal dengan keindahan alamnya yang menakjubkan dan keanekaragaman hayatinya yang unik.

                                        Antarktika memiliki pemandangan es yang megah, gletser yang mengagumkan, dan pegunungan yang menjulang tinggi. Benua ini juga dikelilingi oleh lautan yang mempesona dan dihuni oleh berbagai spesies satwa liar seperti penguin, anjing laut, paus, dan burung-burung laut.</p>   
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$190</p>
                                    <p class="tm-recommended-price-link">Book</p>
                                </a>
                            </div>    
                        </div>                        

                        <a href="" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Back To Home</a>
                    </div> <!-- tab-pane -->
                </div>
            </div>
            <footer class="tm-container-outer">
                <p class="mb-0">Copyright © <span class="tm-current-year">2099</span> John Company.id
                    
                . Designed by <a rel="nofollow" href="http://www.google.com/+templatemo" target="_parent">Naofal Faisal</a></p>
            </footer>
        </div>
    </div> <!-- .main-content -->

    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
    <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
    <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
    <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
    <script src="js/jquery.scrollTo.min.js"></script>           <!-- https://github.com/flesler/jquery.scrollTo -->

</body>
</html>