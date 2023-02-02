@include('emails.template.header') 
<p class="p-class" style="color: #000000; font-family: Arial, Helvetica, sans-serif; font-size: 13px; margin: 0 0 .75em 0;">
    <div style="padding-bottom: 10px;">
       Hi , Admin
    </div>


  <table border="0" cellspacing="0" cellpadding="0" style="width:100%">
    <tr>
      <td style="border: 1px solid #DDD;padding: 10px;">Name</td> 
      <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['name'] }}</td>
    </tr>

    <tr>
      <td style="border: 1px solid #DDD;padding: 10px;">Phone Number</td> 
      <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['phone'] }}</td>
    </tr>

    <tr>
      <td style="border: 1px solid #DDD;padding: 10px;">Email</td> 
      <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['email'] }}</td>
    </tr>

	@if($input['from_venue_country'] == "" && $input['from_venue_city'] == "")
		<tr>
		  <td style="border: 1px solid #DDD;padding: 10px;">Moving From Address</td> 
		  <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['from_location'] }}</td>
		</tr>		
	@else
		<tr>
		  <td style="border: 1px solid #DDD;padding: 10px;">Moving From Country</td> 
		  <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['from_venue_country'] }}</td>
		</tr>

		<tr>
		  <td style="border: 1px solid #DDD;padding: 10px;"> Moving From State</td> 
		  <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['from_venue_state'] }}</td>
		</tr>

		<tr>
		  <td style="border: 1px solid #DDD;padding: 10px;">Moving From City</td> 
		  <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['from_venue_city'] }}</td>
		</tr>

		<tr>
		  <td style="border: 1px solid #DDD;padding: 10px;">Moving From Zip</td> 
		  <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['from_venue_postal_code'] }}</td>
		</tr>		
	@endif


	@if($input['to_venue_country'] == "" && $input['to_venue_city'] == "")
		<tr>
		  <td style="border: 1px solid #DDD;padding: 10px;">Moving To Address</td> 
		  <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['to_location'] }}</td>
		</tr>		
	@else
		<tr>
		  <td style="border: 1px solid #DDD;padding: 10px;">Moving To Country</td> 
		  <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['to_venue_country'] }}</td>
		</tr>

		<tr>
		  <td style="border: 1px solid #DDD;padding: 10px;"> Moving To State</td> 
		  <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['to_venue_state'] }}</td>
		</tr>

		<tr>
		  <td style="border: 1px solid #DDD;padding: 10px;">Moving To City</td> 
		  <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['to_venue_city'] }}</td>
		</tr>

		<tr>
		  <td style="border: 1px solid #DDD;padding: 10px;">Moving To Zip</td> 
		  <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['to_venue_postal_code'] }}</td>
		</tr>		
	@endif


    <tr>
      <td style="border: 1px solid #DDD;padding: 10px;"> Move Date</td> 
      <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['move_date'] }}</td>
    </tr>


    <tr>
      <td style="border: 1px solid #DDD;padding: 10px;"> Move Size</td> 
      <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['propery_size'] }}, {{ $input['property_type'] }}</td>
    </tr>

  <tr>
      <td style="border: 1px solid #DDD;padding: 10px;">Storage</td> 
      <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['storage'] }}</td>
    </tr>

   <tr>
      <td style="border: 1px solid #DDD;padding: 10px;">Car Transport</td> 
      <td style="border: 1px solid #DDD;padding: 10px;">{{ (isset($input['transport']) && $input['transport'] == "Yes") ? $input['transport'] : 'N/A' }}</td>
    </tr>

 @if($input['transport'] == 'Yes')
    <tr>
      <td style="border: 1px solid #DDD;padding: 10px;">Vehicle Year</td> 
      <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['year'] }}</td>
    </tr>

    <tr>
      <td style="border: 1px solid #DDD;padding: 10px;">Vehicle Make</td> 
      <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['make'] }}</td>
    </tr>


    <tr>
      <td style="border: 1px solid #DDD;padding: 10px;">Vehicle Model</td> 
      <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['model'] }}</td>
    </tr>

    <tr>
      <td style="border: 1px solid #DDD;padding: 10px;">Car running condition</td> 
      <td style="border: 1px solid #DDD;padding: 10px;">{{ $input['car_running_cond'] }}</td>
    </tr>



    @endif





  </table>
     
    </div>
</p>
@include('emails.template.footer') 