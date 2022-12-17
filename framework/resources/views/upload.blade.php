<!DOCTYPE html>
<head>
<title>Uploading</title>    
<link rel="stylesheet" href="{{ asset('css/loading-sty.css') }}">
<link rel="stylesheet" href="{{ asset('css/final-sty.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="{{ asset('js/test.js') }}" defer></script>
</head>
<body>
    <div class="loader-container" id="load">
        <h5>Uploading</h5>
        <div class="loader">
            <div class="progress"></div>
        </div>
    </div>
    <div class="final-container" id="show" style="diplay:none;">
        <i class="fa-solid fa-circle-check"></i> 
        <p>Uploaded Successfully</p>
        <img src="{{session('pic_path')}}" alt="">
        <div class="link-row">
            <input type="text" name="link" value="{{session('pic_path')}}" disabled id="my-link">
            <button id="copy" onclick="copyFunction()">Copy Link</button>
        </div>
    </div>
    

</body>