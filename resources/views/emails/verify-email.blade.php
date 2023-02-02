@include('emails.template.header') 
<style type="text/css">
  div{
    padding-bottom: 7px;
  }
</style>
<p class="p-class" style="color: #000000; font-family: Arial, Helvetica, sans-serif; font-size: 13px; margin: 0 0 .75em 0;">
    <div style="padding-bottom: 10px;">
       Hi ,  
    </div>
    <div style="padding-bottom: 10px;">
     Please click the button below to verify your email address.
    </div>

    <div style="padding-bottom: 10px;">
       <a href="{{ $url }}">
            {{ $url }}
        </a>
    </div>

    <div style="padding-bottom: 10px;">
      If you did not create an account, no further action is required.
    </div>
</p>
@include('emails.template.footer') 