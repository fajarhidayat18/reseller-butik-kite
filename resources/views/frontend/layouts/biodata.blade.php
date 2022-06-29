<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  {{-- my css --}}
  <link rel="stylesheet" href="{{ asset('userpage/css/gaya.css') }}">
  {{-- responsive page --}}
  <link rel="stylesheet" href="{{ asset('userpage/css/responsive_mobile.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  {{-- swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
</head>
<body>
        <div class="container">
            <div class="row mt-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Coment-tab" data-toggle="tab" href="#Coment" role="tab"
                            aria-controls="Coment" aria-selected="false">Coment</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore laboriosam obcaecati
                        eligendi, ipsa veniam, sunt libero eveniet cum repudiandae expedita illum ea quia, incidunt
                        optio! Tenetur quis cupiditate laboriosam error molestias suscipit possimus porro, incidunt
                        minus nostrum odio aspernatur assumenda hic ipsa neque amet vero pariatur rerum doloremque?
                        Suscipit vero rerum quasi. Odio autem illo, magni necessitatibus iure, quidem adipisci optio
                        recusandae est aliquid labore nostrum tempore! Aspernatur doloremque quia tenetur odio
                        quidem, cumque omnis itaque placeat rerum ullam? Nulla ipsum fugit, vel veniam vero officia
                        dolorum repudiandae modi suscipit nobis voluptatem magni eos asperiores aperiam praesentium
                        laboriosam quam! Porro asperiores placeat officia dolor aut non, rem sit quas sunt, sint,
                        magni doloremque reprehenderit architecto adipisci doloribus ipsum saepe inventore eos
                        minima. Excepturi eos est odit amet esse consectetur! Minus repellendus, fugiat suscipit
                        praesentium sed iure officiis nemo voluptatibus tenetur, aut facere culpa ut dolor non
                        corporis distinctio tempore dolores animi inventore odit harum voluptatem. Possimus, ex
                        officiis accusantium voluptates cumque quia asperiores! Ut quisquam laborum ea veniam
                        dignissimos autem nobis est nam quaerat pariatur. Odit illo molestiae, natus tempore nulla
                        vel rem atque iste iusto sint quia dicta impedit architecto quidem omnis quisquam nostrum
                        tempora fuga distinctio, repellendus deserunt?</div>
                    <div class="tab-pane fade" id="Coment" role="tabpanel" aria-labelledby="Coment-tab">
                        <p><br>
                            <div class="container">
                                <textarea placeholder="Komentar Here" name="" id="" cols="30" rows="5"
                                    class="form-control float-left">
                                        </textarea>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>    
</body>
</html>