<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/movie-cards.css') }}" >
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    </head>
    <body>
        <div class="movie-card">
          
          <div class="container">
            
            <a href="#"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_cover.jpg" alt="cover" class="cover" /></a>
                
            <div class="hero">
                    
              <div class="details">
              
                <div class="title1" id="name"></div>

                <div class="title2"></div>    
                
                <fieldset class="rating">
            <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
            <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
            <input type="radio" id="star4" name="rating" value="4" checked /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
            <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
            <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
            <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
            <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
            <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
            <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
            <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
          </fieldset>
                
                <span class="likes">109 likes</span>
                
              </div> <!-- end details -->
              
            </div> <!-- end hero -->
            
            <div class="description">
              
              <div class="column1">
                <span class="tag">action</span>
                <span class="tag">fantasy</span>
                <span class="tag">adventure</span>
              </div> <!-- end column1 -->
              
              <div class="column2">
                
                <p id="description"></p>
                
                <div class="avatars">
                  <a href="#" data-tooltip="Person 1" data-placement="top">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_avatar1.png" alt="avatar1" />
                  </a>
                  
                  <a href="#" data-tooltip="Person 2" data-placement="top">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_avatar2.png" alt="avatar2" />
                  </a>
                  
                  
                  <a href="#" data-tooltip="Person 3" data-placement="top">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/hobbit_avatar3.png" alt="avatar3" />
                  </a>
                  
                </div> <!-- end avatars -->
                
                
                
              </div> <!-- end column2 -->
            </div> <!-- end description -->
            
           
          </div> <!-- end container -->
        </div> <!-- end movie-card -->
        <script type="text/javascript">  
            $( document ).ready(function() {
                $.ajax({url: "http://localhost/films/public/films/1", success: function(result){
                    console.log(result);
                    $("#name").html(result.data.name);
                    $("#description").html(result.data.description);
                }});
            });
        </script>
    </body>
</html>
