<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/childish" rel="stylesheet">   

        <title>Waroeng Djajan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/childish" rel="stylesheet"> 

        <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}     
        body {
            font-family: 'Nunito', sans-serif;
            min-height:100vh;
        }
        .carousel-inner {
            padding: 1em;
        }
        .card {
            margin: 0 0.5em;
            box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
            border: none;
        }
        .carousel-control-prev,
        .carousel-control-next {
            background-color: #e1e1e1;
            width: 6vh;
            height: 6vh;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }
        @media (min-width: 768px) {
            .carousel-item {
                margin-right: 0;
                flex: 0 0 25%;
                display: block;
            }
            .carousel-inner {
                display: flex;
            }
        }
        .card .img-wrapper {
            max-width: 100%;
            width: 20em;
            height: 12em;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card img {
            max-height: 100%;
        }
        @media (max-width: 767px) {
            .card .img-wrapper {
                height: 17em;
            }
        }
        .lebar-kartu{
            width:20em; 
        }
</style>
</head>
<body>
@include('navbar')
<h1 class="text-center p-2 my-3" style="font-family:'Childish';">DAFTAR HIDANGAN</h1>
<!-- Carousel -->
<!-- hidangan utama -->
<div class="container my-3">
    <div class="row border-top">
        <a class="text-center mt-2" href="hidanganutama"><h5><b>Hidangan Utama</b></h5></a>
        <div id="hidanganutama" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/satepadang.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Sate Padang</h5>
                            <p class="card-text">Olahan daging yang khas dengan bumbu kacang yang kental menyerupai bubur.</p>
                            <h5 class="card-text fw-bold">Rp 30.000/per porsi.</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/sopkonro.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Sop Konro</h5>
                            <p class="card-text">Iga sapi yang direbus lama atau dibakar dan kuah pekat coklat dengan bumbu rempah.</p>
                            <h5 class="card-text fw-bold">Rp 68.000/per porsi.</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/rawon.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Rawon</h5>
                            <p class="card-text">Irisan daging sapi, dengan kuah hitam gurih, kecambah mentah, tempe goreng, dan telur asin.</p>
                            <h5 class="card-text fw-bold">Rp 20.000/per porsi.</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/ayamcincane.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Ayam Cincane</h5>
                            <p class="card-text">Ayam berwarna merah dengan penuh bumbu rempah, biasa disajikan saat acara masyarakat Samarinda.</p>
                            <h5 class="card-text fw-bold">Rp 16.000/per porsi.</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/ayampop.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Ayam Pop</h5>
                            <p class="card-text">Daging ayam berwarna putih yang direbus dengan air kelapa serta bawang putih lalu digoreng.</p>
                            <h5 class="card-text fw-bold">Rp 20.000/per 2 potong</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/coto.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Coto Makassar</h5>
                            <p class="card-text">Sop jeroan sapi seperti hati, usus, dan paru-paru yang dimasak dengan air tajin.</p>
                            <h5 class="card-text fw-bold">Rp 30.000/per porsi</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card ">
                        <div class="img-wrapper"><img src="/image/rendang.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Rendang</h5>
                            <p class="card-text">Berasal dari Padang. Dengan bumbu khas berbahan serai, daun jeruk, salam, dan rempah lainnya.</p>
                            <h5 class="card-text fw-bold">Rp 24.000/per porsi</h5>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hidanganutama" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hidanganutama" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- hidangan cemilan -->
<div class="container my-3">
    <div class="row border-top">
        <a class="text-center mt-2" href="#"><h5><b>Cemilan</b></h5></a>
        <div id="cemilan" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/cemilan/bikatalago.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Bika Talago</h5>
                            <p class="card-text">Berbahan tepung beras, kelapa parut serta gula merah dan gula putih yang disajikan hangat-hangat.</p>
                            <h5 class="card-text fw-bold">Rp 3.000/per biji</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/cemilan/chaikue.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Chai Kue</h5>
                            <p class="card-text">Cemilan yang dikukus dan memiliki rasa gurih berisi lobak serta ebi, yang dilapisi dengan tepung beras dan bawan.</p>
                            <h5 class="card-text fw-bold">Rp 15.000/per porsi (isi 6)</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/cemilan/putucangkiri.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Putu Cangkiri</h5>
                            <p class="card-text">Terbuat dari tepung beras ketan baik ketan putih maupun hitam dan gula merah atau gula pasir.</p>
                            <h5 class="card-text fw-bold">Rp 10.000/per porsi (isi 9)</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/cemilan/dokocangkulin.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Doko-doko Cangkulin</h5>
                            <p class="card-text">Tepung beras yang dicampur dengan kentang, santan, dan gula merah sebagai isi lalu dibungkus daun pisan.</p>
                            <h5  class="card-text fw-bold">Rp 2.500/per bungkus</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/cemilan/klepon.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Klepon</h5>
                            <p class="card-text">Kue tradisional yang terbuat dari tepung beras ketan yang dibentuk bola kecil dan berisi gula merah.</p>
                            <h5 class="card-text fw-bold">Rp 12.000/per porsi</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/cemilan/kuedange.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Kue Dange</h5>
                            <p class="card-text">Seperti pukis namun berbahan utama parutan kelapa dan gula merah, memiliki rasa manis dan gurih.</p>
                            <h5 class="card-text fw-bold">Rp 10.000/per porsi</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card ">
                        <div class="img-wrapper"><img src="/image/cemilan/jalangkote.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Jalangkote</h5>
                            <p class="card-text">Berisi telur, wortel, kentang, dan bihun, dibungkus tebal dengan adonan dari tepung dan disajikan dengan saus cuka.</p>
                            <h5 class="card-text fw-bold">Rp 10.000/per porsi</h5>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#cemilan" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cemilan" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- minuman -->
<div class="container my-3">
    <div class="row border-top">
        <a class="text-center mt-2" href="#"><h5><b>Minuman</b></h5></a>
        <div id="minuman" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/minuman/aiakawa.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Aiakawa</h5>
                            <p class="card-text">Minuman dari daun kopi yang diseduh dengan air panas dan disajikan dengan wadah belahan tempurung kelapa dan bambu sebagai tatakan.</p>
                            <h5 class="card-text fw-bold">Rp 9.000/per gelas</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/minuman/Bandrek.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Bandrek</h5>
                            <p class="card-text">Minuman khas Sunda, berbahan utama jahe dan gula merah, dan ditambah rempah seperti serai, merica, dan pandan.</p>
                            <h5 class="card-text fw-bold">Rp 9.000/per gelas</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/minuman/eslidah.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Es Lidah</h5>
                            <p class="card-text">Berbahan tanaman lidah buaya, disajikan dengan es batu serta diberi tambahan irisan lemon yang baik untuk tubuh.</p>
                            <h5 class="card-text fw-bold">Rp 7.000/per gelas</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/minuman/kopijos.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Kopi Jos</h5>
                            <p class="card-text">Kopi yang dimasak dengan wadah ketel arang, kemudian disajikan dengan arang yang dicelupkan kedalam gelas kopi. Baik untuk menghangatkan
                                tubuh.</p>
                            <h5 class="card-text fw-bold">Rp 5.000/per gelas</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/minuman/sarabba.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Sarabba</h5>
                            <p class="card-text">Terbuat dari kombinasi kayu manis, jahe, bubuk pala, merica bubuk, gula jawa, santan, dan kuning telur yang disajikan saat hangat.</p>
                            <h5 class="card-text fw-bold">Rp 5.000/per gelas</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card lebar-kartu">
                        <div class="img-wrapper"><img src="/image/minuman/daweireng.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Dawei Ireng</h5>
                            <p class="card-text">Dawet dari abu jerami yang ditambahakan saat pembuatan cendol ditambah kuah santan dan gula jawa serta daun pandan.</p>
                            <h5 class="card-text fw-bold">Rp 5.000/per porsi</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card ">
                        <div class="img-wrapper"><img src="/image/minuman/esdoger.jpg" class="d-block w-100" alt="..."> </div>
                        <div class="card-body">
                            <h5 class="card-title">Es Doger</h5>
                            <p class="card-text">Minuman dengan perpaduan es, sirup, tape, dan buah segar seperti alpukat ditambah cincau hitam beserta kental manis.</p>
                            <h5 class="card-text fw-bold">Rp 7.000/per gelas</h5>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#minuman" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#minuman" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
@include('footer')
<script>
//hidangan utama
var hidanganutama = document.querySelector(
  "#hidanganutama"
);
if (window.matchMedia("(min-width: 768px)").matches) {
  var carousel = new bootstrap.Carousel(hidanganutama, {
    interval: false,
  });
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;
  $("#hidanganutama .carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 4) {
      scrollPosition += cardWidth;
      $("#hidanganutama .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $("#hidanganutama .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#hidanganutama .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  $(hidanganutama).addClass("slide");
}

//cemilan
var hidanganutama = document.querySelector(
  "#cemilan"
);
if (window.matchMedia("(min-width: 768px)").matches) {
  var carousel = new bootstrap.Carousel(cemilan, {
    interval: false,
  });
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;
  $("#cemilan .carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 4) {
      scrollPosition += cardWidth;
      $("#cemilan .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $("#cemilan .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#cemilan .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  $(cemilan).addClass("slide");
}

//minuman
var hidanganutama = document.querySelector(
  "#minuman"
);
if (window.matchMedia("(min-width: 768px)").matches) {
  var carousel = new bootstrap.Carousel(minuman, {
    interval: false,
  });
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;
  $("#minuman .carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 4) {
      scrollPosition += cardWidth;
      $("#minuman .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $("#minuman .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#minuman .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  $(minuman).addClass("slide");
}
</script>
</body>
</html>