<!DOCTYPE html>
<html>

<head>
  <title>Translate API Example</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container" style="margin-top:50px;">
    <div class="row">
      <div class="col-md-12">
       <p> Tiger (Panthera tigris) is a large cat species on Eyrie m (11.1 ft) total body uzunluÿ between 3:38 Ulay and revelation of 388.7 kg (857 pounds) up to aÿırlıÿ. His most well-known özelliÿ lower light reddish-orange fur dark vertical stripes pattern. species classified in the genus Panthera, the lion, leopard, jaguar and snow leopard. Tigers apex predators that prey primarily, ungulates such as deer and Bovid. These territorial and generally solitary but social support needs often require large bitiÿik hunting habitat areas, animals. As such, they are some of the earth's population in more yoy birleÿtiÿ with local gerçeÿ, Activity of the roof olmuÿt people with meaningful causes.</p>
      </div>
    </div>
    <input type="button" value="turkey" id= "langChangetr" >
    <input type="button" value="English" id= "langChangeEn" >
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
    function translateText(response) {
      document.body.innerHTML = response.data.translations[0].translatedText;
    }
    $(document).ready(function($) {
      $("#langChangeEn").click(function(event) {
        var sourceText = escape(document.body.innerHTML);
        $.ajax({
          url: 'https://www.googleapis.com/language/translate/v2?key=AIzaSyDnlr2pbGEfUbpEH669KAuD9P0Sjq5ptS4&source=tr&target=en&callback=translateText&q=' + sourceText,
          type: "get"
        }).done(function (response) {
          console.log("translation completed!");
        });
      });

       $("#langChangetr").click(function(event) {
        var sourceText = escape(document.body.innerHTML);
        $.ajax({
          url: 'https://www.googleapis.com/language/translate/v2?key=AIzaSyDnlr2pbGEfUbpEH669KAuD9P0Sjq5ptS4&source=en&target=tr&callback=translateText&q=' + sourceText,
          type: "get"
        }).done(function (response) {
          console.log("translation completed!");
        });
      });
      
    });
  </script>
</body>

</html>
