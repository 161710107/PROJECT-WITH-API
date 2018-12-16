@extends('layouts.front')
 @section('scripts')
<script>
    $.get('http://127.0.0.1:8000/api/event', function (data) {
        $.each(data.data, function(index, value) {
          $('#event').append(
                    '<figure class="featured-image">'+

                        '<a href="{{ url('/buy') }}">'+
                                 '<img src="'+'http://127.0.0.1:8000/backEnd/images/barang/'+''+value.image+'" alt="" height="230">'+
                                  '<h3><a href="{{ url('/buy') }}">'+value.title+'</a></h3>'+
                                  '<p>'+value.desc+'</p>'+
                            '</a>'+
                            '</figure'+
                 
          );
        })
    });
</script>
@endsection
@section('content')
 

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="lineup-artists-headline">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>The Lineup Artists-Headliners</h2>
                        </div><!-- entry-title -->

                        <div class="lineup-artists">
                            <div class="lineup-artists-wrap flex flex-wrap">
                                <figure class="featured-image">
                                    <a href="#"> <img src="front/images/black-chick.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <div class="lineup-artists-description">
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Jamila Williams
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>
                                        </div><!-- entry-content -->

                                        <div class="box-link">
                                            <a href=""><img src="front/images/box.jpg" alt=""></a>
                                        </div><!-- box-link -->
                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->
                            </div><!-- lineup-artists-wrap -->

                            <div class="lineup-artists-wrap flex flex-wrap">
                                <div class="lineup-artists-description">
                                    <figure class="featured-image d-md-none">
                                        <a href="#"> <img src="front/images/mathew-kane.jpg" alt=""> </a>
                                    </figure><!-- featured-image -->

                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            Sandra Superstar
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>
                                        </div><!-- entry-content -->

                                        <div class="box-link">
                                            <a href="#"><img src="front/images/box.jpg" alt=""></a>
                                        </div><!-- box-link -->
                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->

                                <figure class="featured-image d-none d-md-block">
                                    <a href="#"> <img src="front/images/mathew-kane.jpg" alt=""> </a>
                                </figure><!-- featured-image -->
                            </div><!-- lineup-artists-wrap -->

                            <div class="lineup-artists-wrap flex flex-wrap">
                                <figure class="featured-image">
                                    <a href="#"> <img src="front/images/eric-ward.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <div class="lineup-artists-description">
                                    <div class="lineup-artists-description-container">
                                        <div class="entry-title">
                                            DJ Crazyhead
                                        </div><!-- entry-title -->

                                        <div class="entry-content">
                                            <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>
                                        </div><!-- entry-content -->

                                        <div class="box-link">
                                            <a href="#"> <img src="front/images/box.jpg" alt=""></a>
                                        </div><!-- box-link -->
                                    </div><!-- lineup-artists-description-container -->
                                </div><!-- lineup-artists-description -->
                            </div><!-- lineup-artists-wrap -->
                        </div><!-- lineup-artists -->
                    </div><!-- lineup-artists-headline -->
                </div><!-- col-12 -->
            </div><!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="the-complete-lineup">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>The Complete Lineup</h2>
                        </div><!-- entry-title -->

                        <div class="row the-complete-lineup-artists">
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="front/images/image-1.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Miska Smith</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="front/images/image-2.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Hayley Down</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="front/images/image-3.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>The Band Song</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="front/images/image-4.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Pink Machine</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="front/images/image-5.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Brasil Band</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="front/images/image-6.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Mickey</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="front/images/image-7.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>DJ Girl</h2>
                            </div><!-- artist-single -->

                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="front/images/image-8.jpg" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="front/images/box.jpg" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>Stan Smith</h2>
                            </div><!-- artist-single -->
                        </div><!-- the-complete-lineup-artists -->

                        <div class="row justify-content-center">
                            <div class="see-complete-lineup">
                                <div class="entry-footer">
                                    <a href="#" class="btn">See all lineup</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- the-complete-lineup -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->

         <div class="homepage-next-events">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="entry-title">
                            <p>JUST THE BEST</p>
                            <h2>Our Next Events</h2>
                        </div><!-- entry-title -->
                    </div><!-- col-12 -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="next-event-slider-wrap">
                <div class="swiper-container next-event-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"id="event">
                            <div class="next-event-content">
                                <figure id="event">
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="front/images/next-event-2.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="front/images/next-event-3.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="front/images/next-event-1.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">
                                    <img src="front/images/next-event-2.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->

                        <div class="swiper-slide">
                            <div class="next-event-content">
                                <figure class="featured-image">

                                    <img src="front/images/next-event-3.jpg" alt="">

                                    <a href="#" class="entry-content flex flex-column justify-content-center align-items-center">
                                        <h3>Welcoming Party 2018</h3>
                                        <p>Green Palace, 22 Street, 23-28, Los Angeles California</p>
                                    </a>
                                </figure><!-- featured-image -->
                            </div><!-- next-event-content -->
                        </div><!-- swiper-slide" -->
                    </div><!-- .swiper-wrapper -->
                </div><!-- .swiper-container -->

                <div class="swiper-button-next">
                    <img src="front/images/button.png" alt="">
                </div><!-- .slider-button -->
            </div><!-- .next-event-slider-wrap -->
        </div><!-- homepage-next-events -->

        <div class="home-page-last-news">
            <div class="container">
                <div class="header">
                    <div class="entry-title">
                        <p>JUST THE BEST</p>
                        <h2>Our Last News</h2>
                    </div><!-- entry-title -->
                </div><!-- header -->

                <div class="home-page-last-news-wrap">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#"> <img src="front/images/news-image-1.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href="#">03.12.18</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2><a href="#">10 Festival Tips</a></h2>
                                    </div><!-- entry-header -->

                                    <div class="entry-meta">
                                        <span class="author-name"><a href="#"> By James Williams</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">3 comments</a></span>
                                    </div><!-- entry-meta -->

                                    <div class="entry-description">
                                        <p>Quisque at erat eu libero consequat tempus.
                                            Quisque mole stie convallis tempus.
                                            Ut semper purus metus, a euismod sapien sodales ac.
                                            Duis viverra eleifend fermentum.</p>
                                    </div><!-- entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-6 -->

                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#"> <img src="front/images/news-image-1.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="box-link-date">
                                <a href="">03.12.18</a>
                            </div>

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2><a href="#">New event calendar for this year</a></h2>
                                    </div><!-- entry-header -->

                                    <div class="entry-meta">
                                        <span class="author-name"><a href="#">By James Williams</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">3 comments</a></span>
                                    </div><!-- entry-meta -->

                                    <div class="entry-description">
                                        <p>Quisque at erat eu libero consequat tempus.
                                            Quisque mole stie convallis tempus.
                                            Ut semper purus metus, a euismod sapien sodales ac.
                                            Duis viverra eleifend fermentum.</p>
                                    </div><!-- entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- .content-wrapper -->
                        </div><!-- col-6 -->
                    </div><!-- row -->
                </div><!-- home-page-last-news-wrap -->
            </div><!-- container -->
        </div><!-- home-page-last-news -->
    </div>
 @endsection


<!--  @section('scripts')
  <script>
  $.get('http://127.0.0.1:8000/api/event', function(data, url, type, full) {
      $('.imagevent').empty();
      $('.imagevent').append('src="'+'http://127.0.0.1:8000/backEnd/images/barang/'+''+url+'"/>';
    ;

    $.each(data.data, function(index, value) {
      $('.imagevent').append(
      );
    })
  });
</script>
@endsection -->



<!-- <script>
    
    $('#users').on( 'click', '.userPanel', function ( user ) {
        let login = $( this ).find( 'div.col-md-9  span.login' ).text();
       
        $.ajax({
            url:'https://api.github.com/users/'+login+'/repos'+auth

        }).done(function ( repos ) {
            $.each(repos,function ( index, repo ) {

                $('.repositories').append(`
                <h5 class="page-header">${repo.name}</h5>
                    `)
            });

        });

    });
</script> -->