@include('emails.template.header') 
<p class="p-class" style="color: #000000; font-family: Arial, Helvetica, sans-serif; font-size: 13px; margin: 0 0 .75em 0;">
    <div style="padding-bottom: 10px;">
       Hi , Admin
    </div>
    <div style="padding-bottom: 10px;">
     <b>{{ $input['name'] }} is want contact with us </b>
    </div>
    <div style="padding-bottom: 10px;">
      Subject : <b>{{ $input['subject'] }}</b>
    </div>

     <div style="padding-bottom: 10px;">
      Message : <b>{{ $input['message'] }}</b>
    </div>
    <div style="padding-bottom: 10px">
      <i>Have a great day!</i>
    </div>
</p>
@include('emails.template.footer') 