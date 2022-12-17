<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1,
  maximum-scale=5" />

  <link rel="icon" href="{{asset('img/devchallenges.png')}}" />
  
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >

  <title>{{ config('app.name')}}</title>
  
</head>

<body>



  


  <div class="upload-contianer">

    <h4 class="title">Upload your Image</h4>
    <p class="note1">File should be Jpeg, Png ...</p>

    <div class="img-container" id="drop-area">
      <img src="{{asset('img/image.svg')}}" alt="" class="symbol">
      <p class="note2" id="dragText"> Drog & Drop your image</p>
    </div>
    <p>or</p>
   
    <form action="upload" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" id="f-input" hidden  accept="image/*"> 
    <input type="submit" value="Click here to submit" id="submit">
    </form>
    <button class="button" id="button" type="submit"> Choose a file</button>
    

  </div>

  <script src="{{asset('js/drop.js')}}"></script>

 
</body>
</html>