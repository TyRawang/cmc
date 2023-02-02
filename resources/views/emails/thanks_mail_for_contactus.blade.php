@include('emails.template.header') 
<p class="p-class" style="color: #000000; font-family: Arial, Helvetica, sans-serif; font-size: 13px; margin: 0 0 .75em 0;">
    <div style="padding-bottom: 10px;">
       Hi , {{ $input['name'] }} 
    </div>
    <div style="padding-bottom: 10px;">
     <b>Thank you for getting in touch! </b>
    </div>
    <div style="padding-bottom: 10px;">
      We appreciate you contacting us. One of our colleagues will get back in touch with you soon!
    </div>
    <div style="padding-bottom: 10px">
      <i>Have a great day!</i>
    </div>
</p>
@include('emails.template.footer') 