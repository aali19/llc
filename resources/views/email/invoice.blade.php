<div class="container">
    <div class="text-success">Thank You ! Your invoice has been generated. please click the link below</div>
    Name: {{ $brand }} <br>
    Email: {{ $email}} <br>
    <a href="{{url("invoice",["q"=>$url])}}">Click here</a>
</div>
