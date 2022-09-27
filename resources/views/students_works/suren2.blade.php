<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- ******************** bootstrap v ******************** -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- ******************** bootstrap ^ ******************** -->

    <link rel="stylesheet" href="{{asset('students_works/suren/2/style/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Work</title>
</head>
<body>
    
    <!-- ******************** header v ******************** -->
    <header class="container-fluid backroundimg1">
        <div class="container contenton navbar1">
            <div class="row align-items-center pt-2 pb-2">
                <div class="col-3">
                    <a href="#">
                        <img class="img-fluid" width="100px" height="70px" src="{{asset('students_works/suren/2/img/navbar logo.png')}}" alt="navbar logo">
                    </a>
                </div>
                <div class="col-3"></div>
                <div class="col-6">
                    <nav>
                        <ul class="nav nav-pills navul" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" href="#menu1">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#menu2">Work</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#menu1">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#menu2">Contact</a>
                            </li>
                          </ul>
                    </nav>
                </div>
            </div>
            <div class="d-flex justify-content-center pt-5 pb-5">            
                <div id="demo" class="carousel slide carousel1" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner pt-5 mt-5">
                        <div class="carousel-item active">
                            <h1 class="text-light text-center">Lorem ipsum dolor sit amet consectetur.</h1>
                        </div>
                        <div class="carousel-item">
                            <h1 class="text-light text-center">Lorem ipsum dolor sit amet consectetur adipisicing.</h1>
                        </div>
                        <div class="carousel-item">
                            <h1 class="text-light text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>   
    </header>
    <!-- ******************** header ^ ******************** -->
    
    <!-- ******************** main v ******************** -->
    <main>

        <!-- ******************** section1 v ******************** -->
        <section>
            <div class="container pt-5 pb-5">
                <h1 class="text-warning text-center">About Us</h1>
                <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                <div class="row pt-5 pb-4">
                    <div class="col-2"></div>
                    <div class="col-5 border border-dark pt-2 pb-2">
                        <img width="100px" height="100px" class="img-fluid border border-dark float-left mr-2" src="{{asset('students_works/suren/2/icon/home icon.png')}}" alt="home icon">
                        <h4>The begining</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, vel.</p>
                    </div>
                    <div class="col-5 text-center">
                        <img width="100px" height="100px" class="img-fluid rounded-circle" src="{{asset('students_works/suren/2/img/home1.png')}}" alt="home">
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row pb-4">
                    <div class="col-2"></div>                    
                    <div class="col-5 text-center">
                        <img width="100px" height="100px" class="img-fluid rounded-circle" src="{{asset('students_works/suren/2/img/home2.jpg')}}" alt="home">
                    </div>
                    <div class="col-5 border border-dark pt-2 pb-2">
                        <img width="100px" height="100px" class="img-fluid border border-dark float-left mr-2" src="{{asset('students_works/suren/2/icon/home-icon.png')}}" alt="home icon">
                        <h4>The begining</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, vel.</p>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row pb-4">
                    <div class="col-2"></div>
                    <div class="col-5 border border-dark pt-2 pb-2">
                        <img width="100px" height="100px" class="img-fluid border border-dark float-left mr-2" src="{{asset('students_works/suren/2/icon/home2 icon.png')}}" alt="home icon">
                        <h4>The begining</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, vel.</p>
                    </div>
                    <div class="col-5 text-center">
                        <img width="100px" height="100px" class="img-fluid rounded-circle" src="{{asset('students_works/suren/2/img/home3.jpg')}}" alt="home">
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </section>
        <!-- ******************** section1 ^ ******************** -->

        <!-- ******************** section2 v ******************** -->
        <section class="container-fluid bg-dark">
            <div class="container pt-5 pb-5">
                <h1 class="text-warning text-center">Work</h1>
                <p class="text-center text-light">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <div class="row pt-4">
                    <div class="col-6 text-light">
                        <img width="75px" height="75px" class="float-left mr-2" src="{{asset('students_works/suren/2/icon/sec2img5.png')}}">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, reprehenderit.</p>
                    </div>
                    <div class="col-6 text-light">
                        <img width="75px" height="75px" class="float-left mr-2" src="{{asset('students_works/suren/2/icon/sec2img1.png')}}">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, reprehenderit.</p>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-6 text-light">
                        <img width="75px" height="75px" class="float-left mr-2" src="{{asset('students_works/suren/2/icon/sec2img3.png')}}">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, reprehenderit.</p>
                    </div>
                    <div class="col-6 text-light">
                        <img width="75px" height="75px" class="float-left mr-2" src="{{asset('students_works/suren/2/icon/sec2img2.png')}}">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, reprehenderit.</p>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-6 text-light">
                        <img width="75px" height="75px" class="float-left mr-2" src="{{asset('students_works/suren/2/icon/sec2img4.png')}}">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, reprehenderit.</p>
                    </div>
                    <div class="col-6 text-light">
                        <img width="75px" height="75px" class="float-left mr-2" src="{{asset('students_works/suren/2/icon/sec2img6.png')}}">
                        <h4>Lorem, ipsum.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, reprehenderit.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ******************** section2 ^ ******************** -->

        <!-- ******************** section3 v ******************** -->
        <section>
            <div class="container text-center pt-5 pb-5">
                <h1 class="text-warning">Services</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <div class="row pt-4">
                    <div class="col-4">
                        <img width="75px" height="75px" class="border border-dark p-4" src="{{asset('students_works/suren/2/icon/home1.jpg')}}">
                        <h5>Lorem, ipsum.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                    <div class="col-4">
                        <img width="75px" height="75px" class="border border-dark p-4" src="{{asset('students_works/suren/2/icon/home2.jpg')}}">
                        <h5>Lorem, ipsum.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                    <div class="col-4">
                        <img width="75px" height="75px" class="border border-dark p-4" src="{{asset('students_works/suren/2/icon/home3.png')}}">
                        <h5>Lorem, ipsum.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>                
            </div>
        </section>
        <!-- ******************** section3 ^ ******************** -->

        <!-- ******************** section4 v ******************** -->
        <section class="container-fluid pt-5">
            <h1 class="text-warning text-center">Gallery</h1>
            <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
            <div class="row">
                <div class="col-3 m-0 p-0">
                    <img class="img-fluid" src="{{asset('students_works/suren/2/img/homedesign1.jpg')}}">
                </div>
                <div class="col-3 m-0 p-0">
                    <img class="img-fluid" src="{{asset('students_works/suren/2/img/homedesign2.jpg')}}">
                </div>
                <div class="col-3 m-0 p-0">
                    <img class="img-fluid" src="{{asset('students_works/suren/2/img/homedesign3.jpg')}}">
                </div>
                <div class="col-3 m-0 p-0">
                    <img class="img-fluid" src="{{asset('students_works/suren/2/img/homedesign4.jpg')}}">
                </div>
            </div>
            <div class="row">
                <div class="col-3 m-0 p-0">
                    <img class="img-fluid" src="{{asset('students_works/suren/2/img/homedesign5.jpg')}}">
                </div>
                <div class="col-3 m-0 p-0">
                    <img class="img-fluid" src="{{asset('students_works/suren/2/img/homedesign6.jpg')}}">
                </div>
                <div class="col-3 m-0 p-0">
                    <img class="img-fluid" src="{{asset('students_works/suren/2/img/homedesign7.jpg')}}">
                </div>
                <div class="col-3 m-0 p-0">
                    <img class="img-fluid" src="{{asset('students_works/suren/2/img/homedesign8.jpg')}}">
                </div>
            </div>
            <div class="container pt-5 pb-5">
                <h2 class="text-warning text-center">About Project</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="row">
                    <div class="col-6">
                        <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas velit maiores animi aperiam saepe tempore aliquid qui ipsum porro, deserunt dignissimos a perspiciatis dolor, laborum aut numquam ipsa debitis quasi!</p>
                        <ul id="sectionul1">
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem, ipsum dolor.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="mb-2">
                            <img width="200px" height="200px" class="img-fluid mr-2" src="{{asset('students_works/suren/2/img/homedesign9.jpg')}}">
                            <img width="200px" height="200px" class="img-fluid" src="{{asset('students_works/suren/2/img/homedesign10.jpg')}}">                            
                        </div>
                        <div>
                            <img width="200px" height="200px" class="img-fluid mr-2" src="{{asset('students_works/suren/2/img/homedesign11.jpg')}}">                    
                            <img width="200px" height="200px" class="img-fluid" src="{{asset('students_works/suren/2/img/homedesign12.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ******************** section4 ^ ******************** -->

        <!-- ******************** section5 v ******************** -->
        <section class="container-fluid backroundimg2">
            <div class="container text-center text-light contenton pt-5 pb-5">
                <h3>Meet Our Team</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <div class="row">
                    <div class="col-3">
                        <img class="img-fluid border border-muted" src="{{asset('students_works/suren/2/img/engineer1.jpg')}}">
                        <h5 class="text-warning">John</h5>
                        <p>Manager</p>
                    </div>
                    <div class="col-3">
                        <img class="img-fluid border border-muted" src="{{asset('students_works/suren/2/img/engineer2.jpg')}}">
                        <h5 class="text-warning">Rodjer</h5>
                        <p>Marketing</p>
                    </div>
                    <div class="col-3">
                        <img class="img-fluid border border-muted" src="{{asset('students_works/suren/2/img/engineer3.jpg')}}">
                        <h5 class="text-warning">Amalia</h5>
                        <p>SEO</p>
                    </div>
                    <div class="col-3">
                        <img class="img-fluid border border-muted" src="{{asset('students_works/suren/2/img/engineer4.jpeg')}}">
                        <h5 class="text-warning">Angelina</h5>
                        <p>Desighn</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ******************** section5 ^ ******************** -->

        <!-- ******************** section6 v ******************** -->
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-6">
                    <h3 class="text-center">Testimonials</h3>
                    <p class="text-center">Lorem ipsum, dolor Lorem, ipsum dolor. sit amet consectetur adipisicing elit. Saepe, omnis?</p>
                    <div class="pt-3 slideeng">
                        <img class="img-fluid rounded-circle float-left mr-2 engineer" src="{{asset('students_works/suren/2/img/engineer5.jpg')}}">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est nulla, officia porro totam, optio, temporibus illum repellat sapiente asperiores molestiae tempore commodi fuga similique at mollitia illo necessitatibus suscipit ut?</p>
                        <a href="#">John</a>
                    </div>
                    <div class="pt-2 slideeng">
                        <img class="img-fluid rounded-circle float-left mr-2 engineer" src="{{asset('students_works/suren/2/img/engineer6.jpg')}}">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est nulla, officia porro totam, optio, temporibus illum repellat sapiente asperiores molestiae tempore commodi fuga similique at mollitia illo necessitatibus suscipit ut?</p>
                        <a href="#">Angelina</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="d-flex justify-content-between circlecont pt-5">
                            <div class="rounded-circle circle"></div>
                            <div class="rounded-circle circle"></div>
                            <div class="rounded-circle circle"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="text-center text-warning">Our Skills</h3>
                    <p class="text-center">Lorem ipsum dolor sit amet, elit. Omnis exercitationem aut aliquam provident ratione molestias!</p>
                    <div class="pt-3">
                        <p>lorem</p>
                        <div class="progress">                                
                            <div class="progress-bar bg-secondary progress-bar-striped" style="width:30%"></div>                                
                        </div>
                        <p>0</p>
                        <p>lorem</p>
                        <div class="progress">                                
                            <div class="progress-bar bg-secondary progress-bar-striped" style="width:25%"></div>                                
                        </div>
                        <p>0</p>
                        <p>lorem</p>
                        <div class="progress">                               
                            <div class="progress-bar bg-secondary progress-bar-striped" style="width:70%"></div>                                
                        </div>
                        <p>0</p>
                        <p>lorem</p>
                        <div class="progress">                                
                            <div class="progress-bar bg-secondary progress-bar-striped" style="width:60%"></div>                                
                        </div>
                        <p>0</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ******************** section6 ^ ******************** -->

        <!-- ******************** section7 v ******************** -->
        <section class="container-fluid backroundimg3">
            <div class="container pt-5 pb-5 contenton">
                <div class="row">
                    <div class="col-8 text-center text-light">
                        <h1 class="text-warning">Contact</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <form class="form-inline justify-content-center">
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control infoinput mb-2 mr-sm-2 col-12" id="email2" placeholder="Name" name="name">                           
                                </div>
                                <div class="col-4">
                                    <input type="email" class="form-control infoinput mb-2 mr-sm-2 col-12" id="pwd2" placeholder="Email" name="email">
                                </div>
                                <div class="col-4">
                                    <input type="phone" class="form-control infoinput mb-2 col-12" id="pwd2" placeholder="Phone" name="phone">                            
                                </div>
                            </div>
                            <textarea class="form-control infoinput col-12" rows="5" id="comment" name="text" placeholder="Message"></textarea>
                            <button class="btn btn-warning mt-2">Submit</button>                            
                        </form>
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="{{asset('students_works/suren/2/img/googlemap.png')}}">
                    </div>
                </div>
            </div>
        </section>
        <!-- ******************** section7 ^ ******************** -->

    </main>
    <!-- ******************** main ^ ******************** -->

    <!-- ******************** footer v ******************** -->
    <footer>
        <div class="container pt-5 pb-5">
            <h1 class="text-center text-warning">Find Us</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <div class="row">
                <div class="col-4">
                    <h5 class="text-warning">
                        <img width="50px" height="50px" src="{{asset('students_works/suren/2/icon/phone.png')}}">
                        Phone
                    </h5>
                    <dl class="pl-5">
                        <dd>+37 5465-456-456</dd>
                        <dd>+65 4654-456-987</dd>
                    </dl>
                </div>
                <div class="col-4">
                    <h5 class="text-warning">
                        <img width="50px" height="50px" src="{{asset('students_works/suren/2/icon/pin-png-gps-12.png')}}">
                        Office Address
                    </h5>
                    <dl class="pl-5">
                        <dd>Lorem ipsum dolor sit.</dd>
                        <dd>Lorem ipsum dolor sit amet consectetur.</dd>
                    </dl>
                </div>
                <div class="col-4">
                    <h5 class="text-warning">
                        <img width="50px" height="50px" src="{{asset('students_works/suren/2/icon/mail.svg')}}">
                        Email
                    </h5>
                    <dl class="pl-5">
                        <dd>info@mysite.com</dd>
                        <dd>info@greatwork.io</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="container-fluid backroundfooter">
            <div class="container d-flex justify-content-between align-items-center text-light">
                <div class="pt-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</p>
                </div>
                <div class="footersocial">
                    <a href="#">
                        <img width="50px" height="50ox" src="{{asset('students_works/suren/2/icon/facebook.png')}}">
                    </a>
                    <a href="#">
                        <img width="30px" height="30px" src="{{asset('students_works/suren/2/icon/twitter.png')}}">
                    </a>
                    <a href="#">
                        <img width="30px" height="30px" src="{{asset('students_works/suren/2/icon/youtube.png')}}">
                    </a>
                    <a href="#">
                        <img width="40px" height="40px" src="{{asset('students_works/suren/2/icon/pinterest.png')}}">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ******************** footer ^ ******************** -->

</body>
</html>