<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="hxor">
    <title>Isun Cirebon - Info Surat Undangan dan Kehadiran</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/frontend/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="{{ asset('assets/frontend/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/frontend/css/freelancer.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav" style="padding-bottom: 0px;padding-top: 6px;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">
                <div>
                    <h3>Isun Cirebon</h3>
                    <p style="font-size: 11.5px; font-weight: normal;">Info Surat Undangan dan Kehadiran</p>
                </div>
            </a>
            {{-- <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/') }}#portfolio">Agenda</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/') }}#about">Tentang</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/') }}#contact">Kontak</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/schedule') }}">Jadwal</a>
                        </li>
                    </ul>
                </div> --}}
        </div>
    </nav>
    <section class="portfolio" id="schedule" style="padding-top: 140px;">
        <div class="container">
            

            @foreach ($agendas as $agenda)
            <div class="card border-info">
                {{-- <div class="card-header text-white bg-primary">
                    {{ $agenda->title }}
                </div> --}}
                <div class="card-body">
                    <h5 class="card-title">{{ $agenda->title }}</h5>
                    @if ($agenda->date_start == $agenda->date_end)
                    <p class="card-text"><strong>Jadwal</strong> : {{ $agenda->start_date }} - {{ $agenda->clock_start }} s/d {{ $agenda->clock_end == '00:00' ? 'Selesai' : $agenda->clock_end }}</p>
                    @else
                    <p class="card-text"><strong>Jadwal</strong> : {{ $agenda->start_date . ' ' . $agenda->clock_start }} - {{ $agenda->end_date . ' ' . $agenda->clock_end }}</p>
                    @endif
                    <p class="card-text"><strong>Lokasi</strong> : {{ $agenda->location }}</p>
                    <p class="card-text"><strong>Alamat</strong> : {{ $agenda->address }}</p>
                    <p class="card-text"><strong>Yang Menghadiri</strong> : {{ $agenda->disposition }}</p>
                </div>
            </div>
            <br>
            @endforeach

            
        </div>
    </section>

    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyright &copy; Isun Cirebon 2018</small>
        </div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('assets/frontend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Contact Form JavaScript -->
    <script src="{{ asset('assets/frontend/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/contact_me.js') }}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{ asset('assets/frontend/js/freelancer.min.js') }}"></script>
</body>
</html>