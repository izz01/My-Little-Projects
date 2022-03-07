<?php 
	include 'koneksi1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>News Slider With Slick</title>
</head>
<body>
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 text-center">
                <p class="h3">Berita Terkini</p>
            </div>
        </div>
    <div class="row no-gutters" style="text-align: -webkit-center;">
    <div class="autoplay">
<?php
include "koneksi1.php";

$detail = mysqli_query($conn, "SELECT * FROM berita order by id DESC LIMIT 10" );
              while ($row = mysqli_fetch_array($detail)){
                $date = new DateTime($row['tgl_post']);
                $potong =substr($row['isi'],0,18);


                extract($row);
                  
                echo '<div class="col-lg-3 col-md-6 col-sm-12 mr-lg-4 lg-px-3 shadow-card" style="font-size:12px;">
                <a href="detail-berita.php?id='.$id.''.$judul.'"><img class="card-img-top" src="images/berita/'.$gambar.'" style="height:200px; overflow:hidden; width:224px" alt="gambar-berita-alazhar"></a>
                    <div class="card-body">
                    <span class="icon-calendar"></span> '.date_format($date,'d F Y').'
                    <span class="icon-person"></span>Admin
                    <span class="icon-eye"></span> '.$lihat.'
                  <a href="detail-berita.php?id='.$id.''.$judul.'"><h6 class="card-title">'.$potong.'...</a></h6>
                    </div>
        </div>
        '
;}?>
        </div>
        </div>
    </div>

<div class="container-fluid"style="height:300px">
    
</div>

 <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('.autoplay').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,

      }
    },
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,

      }
    },
    {
      breakpoint: 770,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,

      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,

        }
    }
  ]
});
}); 
</script>
</body>
</html>