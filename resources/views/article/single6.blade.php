@extends('layouts.app')

@section('title', 'Tech-Single')

@section('content')
<section class="section single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area text-center">
                        <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active">Top 10 phone applications and 2017 mobile design awards</li>
                        </ol>

                        <span class="color-orange"><a href="tech-category-01.html" title="">Technology</a></span>

                        <h3>Perbedaan Cloud dan Server Traditional</h3>

                        <div class="blog-meta big-meta">
                            <small><a href="tech-single.html" title="">21 July, 2017</a></small>
                            <small><a href="tech-author.html" title="">by Jessica</a></small>
                            <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                        </div><!-- end meta -->

                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->

                    <div class="single-post-media">
                        <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                    </div><!-- end media -->

                    <div class="blog-content">
                        <div class="pp">

                            <p>Memahami perbedaan antara cloud dan server adalah hal yang penting, terutama karena ruang penyimpanan menjadi isu besar bagi perusahaan. Banyak perusahaan mengalami kehilangan data ketika server mengalami kerusakan, serta menghadapi biaya tinggi untuk membeli dan memelihara server.</p>
                            <p>Apakah Anda masih menggunakan server tradisional untuk menyimpan file dan data penting? Bayangkan jika server tersebut tiba-tiba rusak dan data Anda hilang—apa yang akan Anda lakukan?</p>
                            <p>Mari kenali cloud server sebagai solusi untuk menyimpan file dan data Anda dengan aman.</p>
                            <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                                <br>
                            <h5><strong>Cloud Server</strong></h5>
                            <p>Cloud server adalah metode penyimpanan yang memanfaatkan beberapa server yang terhubung melalui jaringan internet dan menggunakan teknologi Cloud Computing. Metode ini menyimpan database, perangkat lunak, server untuk situs web perusahaan, dan kebutuhan lainnya. Cloud server menghubungkan beberapa server untuk mendistribusikan beban tugas, sehingga proses penyimpanan data dapat terdistribusi secara merata tanpa membebani satu server saja.</p>
                            <p>Metode penyimpanan ini sangat cocok untuk perusahaan kecil yang baru memulai, karena biayanya relatif terjangkau. Selain itu, sistem cloud dapat diperbarui kapan saja dan digunakan secara terus-menerus 24 jam sehari tanpa memerlukan banyak pemeliharaan.</p>
                            <p>Namun, cloud server masih belum sepenuhnya umum dan semua data disimpan melalui jaringan internet, sehingga memerlukan koneksi internet yang cepat. Penggunaan cloud server juga melibatkan berbagi sumber daya dengan pengguna lain.</p>
                            <br>
                            <h5><strong>Server Traditional</strong></h5>
                            <p>Server tradisional adalah metode penyimpanan yang sering digunakan untuk menyimpan data dalam satu server yang terpasang pada perangkat keras fisik. Metode ini memberikan akses penuh kepada pengguna dan sangat cocok untuk perusahaan besar karena menawarkan fasilitas lengkap seperti kustomisasi server, pemeliharaan, dan pengelolaan server tanpa harus berbagi dengan pengguna lain, sehingga kapasitas penyimpanan bisa lebih besar. Selain itu, server tradisional juga memungkinkan peningkatan lalu lintas situs web melalui Search Engine Optimization (SEO).</p>
                            <p>Namun, penggunaan server tradisional memerlukan investasi yang cukup besar untuk membeli server, router, menyiapkan sumber daya manusia (SDM) yang bertugas melakukan pemeliharaan penyimpanan, dan mempersiapkan infrastruktur. SDM yang digunakan haruslah tenaga ahli di bidang TI karena server tradisional memerlukan pemeliharaan rutin dengan tingkat keamanan data yang tinggi.</p>
                            <br>
                            <p>Dengan penjelasan ini, Anda seharusnya sudah memiliki gambaran mengenai perbedaan antara cloud hosting dan web hosting tradisional—terutama dari segi fisik ruang penyimpanan. Untuk perbandingan yang lebih mendetail, Anda bisa melihat penjelasan berikut ini.</p>
                            <br>

                            <h5><strong>1. Segi Peforma   </strong></h5>
                            <p>Mari kita bahas poin yang sering menjadi pertimbangan utama dalam memilih hosting untuk situs web, yaitu performa. Seperti yang telah dijelaskan sebelumnya, web hosting tradisional menyediakan server yang digunakan oleh banyak pengguna sekaligus. Hal ini mengakibatkan keterbatasan dalam kapasitas penyimpanan dan bandwidth yang tersedia, sehingga seringkali situs web membutuhkan waktu lama untuk memuat.</p>
                                <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                            <p>Sebaliknya, cloud hosting tidak memiliki ruang penyimpanan fisik karena pada dasarnya merupakan layanan virtual. Meskipun Anda berbagi layanan ini dengan pengguna lain, sistem cloud dapat segera memindahkan server Anda jika mengalami masalah seperti loading yang lambat. Dengan demikian, Anda tidak perlu khawatir tentang kendala tersebut dan performa situs web Anda dapat tetap optimal.</p>

                            <h5><strong>2. Segi kontrol data   </strong></h5>
                            <p>Dalam web hosting tradisional, Anda harus berbagi server dengan pengguna lain, sehingga Anda tidak memiliki kontrol penuh atas server yang telah dibeli. Sebagai contoh, jika pengguna lain membutuhkan performa yang lebih baik, situs web Anda berisiko menjadi lambat dan sulit diakses.<p>
                                <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                            <p>Sebaliknya, dengan cloud hosting, Anda menyewa ruang tertentu di server cloud, sehingga ruang tersebut sepenuhnya berada dalam kendali Anda sebagai pengguna. Meskipun web hosting tradisional dapat memengaruhi performa situs web Anda karena sumber daya dan bandwidth yang terbagi dengan pengguna lain, cloud hosting mengatasi masalah ini dengan mengalokasikan sumber daya secara terpisah untuk setiap paket. Jika bandwidth terbatas, cloud hosting dapat memindahkan Anda ke server dengan kapasitas lebih besar, sehingga performa situs web tetap terjaga.</p>

                            <h5><strong>3. Segi Biaya  </strong></h5>
                            <p>Ketika menggunakan layanan web hosting tradisional, Anda harus membayar untuk server dan perangkat keras yang digunakan, meskipun ruang tersebut juga digunakan oleh pengguna lain. Biaya ini bisa menjadi sangat mahal, terutama jika Anda memilih tipe dedicated server.</p>
                            <p>Di sisi lain, cloud hosting menawarkan model pembayaran yang lebih fleksibel. Anda hanya perlu membayar sesuai dengan layanan yang Anda gunakan, tanpa perlu membayar tambahan untuk server yang mungkin tidak sepenuhnya dimanfaatkan. Jika diibaratkan, biaya cloud hosting mirip dengan membayar tagihan listrik atau biaya berlangganan operator seluler.</p>

                            <h5><strong>4. Segi Keamanan  </strong></h5>
                            <p>Setelah membahas perbedaan dalam penyimpanan data antara cloud hosting dan web hosting, tentu kamu sudah bisa membayangkan perbedaan dalam hal keamanan. Web hosting tradisional yang menyimpan data dalam bentuk fisik (hardware) di server memiliki risiko keamanan yang lebih tinggi. Data bisa saja rusak, hilang, terbakar, atau bahkan dicuri.</p>
                            <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                            <p>Sebaliknya, cloud hosting, yang menyimpan data secara non-fisik di cloud (awan), menawarkan tingkat keamanan yang lebih baik. Data dalam cloud hosting lebih terlindungi dari kerusakan, kehilangan, atau pencurian. Cloud hosting juga menyediakan fitur keamanan tambahan seperti kontrol akses data, kerahasiaan, dan integritas data yang lebih baik.</p>
                            </div><!-- end pp -->




                    </div><!-- end content -->

                    <div class="blog-title-area">
                        <div class="tag-cloud-single">
                            <span>Tags</span>
                            <small><a href="#" title="">lifestyle</a></small>
                            <small><a href="#" title="">colorful</a></small>
                            <small><a href="#" title="">trending</a></small>
                            <small><a href="#" title="">another tag</a></small>
                        </div><!-- end meta -->

                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="{{asset('assets/img/upload/loh.png')}}" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis1">

                    <div class="custombox prevnextpost clearfix">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between text-right">
                                                <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid float-right">
                                                <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                                <small>Prev Post</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-6">
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid float-right">
                                                <h5 class="mb-1">Let's make an introduction to the glorious world of history</h5>
                                                <small>Next Post</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end author-box -->

                    <hr class="invis1">

                    <div class="custombox authorbox clearfix">
                        <h4 class="small-title">About author</h4>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle">
                            </div><!-- end col -->

                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                <h4><a href="#">Jessica</a></h4>
                                <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a> amet, consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl eget, finibus odio. Duis tempus elit quis risus congue feugiat. Thanks for stop Tech Blog!</p>

                                <div class="topsocial">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                </div><!-- end social -->

                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end author-box -->

                    <hr class="invis1">

                    <div class="custombox clearfix">
                        <h4 class="small-title">You may also like</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class=""></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="tech-single.html" title="">We are guests of ABC Design Studio</a></h4>
                                        <small><a href="blog-category-01.html" title="">Trends</a></small>
                                        <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->

                            <div class="col-lg-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class=""></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="tech-single.html" title="">Nostalgia at work with family</a></h4>
                                        <small><a href="blog-category-01.html" title="">News</a></small>
                                        <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end custom-box -->

                    <hr class="invis1">

                    <div class="custombox clearfix">
                        <h4 class="small-title">3 Comments</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="comments-list">
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img src="upload/author.jpg" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading user_name">Amanda Martines <small>5 days ago</small></h4>
                                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean.</p>
                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img src="upload/author_01.jpg" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body">

                                            <h4 class="media-heading user_name">Baltej Singh <small>5 days ago</small></h4>

                                            <p>Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small.</p>

                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                        </div>
                                    </div>
                                    <div class="media last-child">
                                        <a class="media-left" href="#">
                                            <img src="upload/author_02.jpg" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body">

                                            <h4 class="media-heading user_name">Marie Johnson <small>5 days ago</small></h4>
                                            <p>Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small.</p>

                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end custom-box -->

                    <hr class="invis1">

                    <div class="custombox clearfix">
                        <h4 class="small-title">Leave a Reply</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-wrapper">
                                    <input type="text" class="form-control" placeholder="Your name">
                                    <input type="text" class="form-control" placeholder="Email address">
                                    <input type="text" class="form-control" placeholder="Website">
                                    <textarea class="form-control" placeholder="Your comment"></textarea>
                                    <button type="submit" class="btn btn-primary">Submit Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- end page-wrapper -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="{{asset('assets/img/upload/banner.jpg')}}" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Trend Videos</h2>
                        <div class="trend-videos">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="tech-single.html" title="">
                                        <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span class="videohover"></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <h4><a href="tech-single.html" title="">We prepared the best 10 laptop presentations for you</a></h4>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="tech-single.html" title="">
                                        <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span class="videohover"></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <h4><a href="tech-single.html" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="tech-single.html" title="">
                                        <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span class="videohover"></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <h4><a href="tech-single.html" title="">Both blood pressure monitor and intelligent clock</a></h4>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end videos -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Popular Posts</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                                        <h5 class="mb-1">5 Beautiful buildings you need..</h5>
                                        <small>12 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                                        <h5 class="mb-1">Let's make an introduction for..</h5>
                                        <small>11 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                                        <h5 class="mb-1">Did you see the most beautiful..</h5>
                                        <small>07 Jan, 2016</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Recent Reviews</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                                        <h5 class="mb-1">Banana-chip chocolate cake recipe..</h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </a>

                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid">
                                        <h5 class="mb-1">10 practical ways to choose organic..</h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </a>

                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="{{asset('assets/img/upload/post.jpg')}}" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">We are making homemade ravioli..</h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Follow Us</h2>

                        <div class="row text-center">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button facebook-button">
                                    <i class="fa fa-facebook"></i>
                                    <p>27k</p>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button twitter-button">
                                    <i class="fa fa-twitter"></i>
                                    <p>98k</p>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button google-button">
                                    <i class="fa fa-google-plus"></i>
                                    <p>17k</p>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button youtube-button">
                                    <i class="fa fa-youtube"></i>
                                    <p>22k</p>
                                </a>
                            </div>
                        </div>
                    </div><!-- end widget -->

                    <div class="widget">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="{{asset('assets/img/upload/footer.jpg')}}" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
