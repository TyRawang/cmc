@include('emails.template.header') 
<style type="text/css">
  div{
    padding-bottom: 7px;
  }
</style>
<p class="p-class" style="color: #000000; font-family: Arial, Helvetica, sans-serif; font-size: 13px; margin: 0 0 .75em 0;">
    <div style="padding-bottom: 10px;">
       Hi {{ $userdata->name }},  
    </div>
    <div style="padding-bottom: 10px;">
      You are receiving this email because we received a password reset request for your account.
    </div>

    <div style="padding-bottom: 10px;">
       <a href="{{ url('password/reset/'.$token.'?email='.$input['email']) }}">
            {{ url('password/reset/'.$token.'?email='.$input['email']) }}
        </a>
    </div>

    <div style="padding-bottom: 10px;">
       This password reset link will expire in 60 minutes.
    </div>
    
    <div>
       If you did not request a password reset, no further action is required.
    </div>
</p>
@include('emails.template.footer') 