<div class="container">
    Name: {{ $sender_name }} <br>
    Email: {{ $reply_to_email}} <br>
    Phone: {{ $company }} <br>
    Message : {{ $brief}}
    @if(!empty($package))
       <br> Package : {{ $package}}
    @endif
</div>
