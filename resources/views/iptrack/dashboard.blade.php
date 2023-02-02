@include('fronts.layouts.header')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" style="background:#888;margin-bottom: 50px;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="tg-innerbannercontent">
          <h1 style="color:#fff;margin-bottom:20px">My Books</h1>
          <ol class="tg-breadcrumb">
            <li><a href="{{ route('/') }}">home</a></li>
            <li class="tg-active">My Books</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="main">
<div class="container">
  <div id="content"  class="innersection">
    <div class="row"> 
<div class="col-md-3 sidebar sidebar-shop">
  <aside id="tg-sidebar" class="tg-sidebar">
              <div class="tg-widget tg-catagories">
                <div class="tg-widgettitle">
                  <h3>Categories</h3>
                </div>
                <div class="tg-widgetcontent">
                 
                    @include('iptrack.layouts.partials.categorymenu')
                 
                </div>
              </div>
          
            </aside>  
    
    
    

</div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
            <div id="tg-content" class="tg-content">
              <div class="tg-products">
                <div class="tg-productgrid">
                  <div class="tg-refinesearch">
                      <div class="listclear">
                           <div class="col-md-6">
                                 <h3>Search Books By title</h3>
                               
                           </div>
                           <div class="col-md-6">
                                               
                    <form name="form" method="post" action="{{ route('search-result-mybook') }}">
      <div id="custom-search-input">
        <input id="search"  name="search" type="text" style="width: 73%;" placeholder="Search" />
        @csrf
        <input name="submit" class="tg-btn tg-btnstyletwo" style="margin:0px !important" value="Search" type="submit">
      </div>
    </form>
                               
                           </div>
                          
                      </div>
                      
       
                  </div>
                  
                
                                    
                    <div class="listclear">
                        @if(count($bookdetails))   
      @foreach($bookdetails as $value)
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="tg-postbook">
                      <figure class="tg-featureimg">
                        <div class="tg-bookimg">
                          <div class="tg-frontcover">  <img src="{{ asset($value->book_cover) }}" alt="{{ asset($value->title) }}">  </div>
                          <div class="tg-backcover"><img src="images/books/img-01.jpg" alt="{{ asset($value->title) }}"></div>
                        </div>
                        <a class="tg-btnaddtowishlist" href="{{ route('read-your-book-ip',['id'=>base64_encode($value->id)]) }}"> <i class="fa fa-external-link"></i> <span>Read Now</span> </a> </figure>
                      <div class="tg-postbookcontent">
                       
                      
                        <div class="tg-booktitle">
                          <h3><a href="{{ route('read-your-book-ip',['id'=>base64_encode($value->id)]) }}">{{ $value->title }}...</a></h3>
                        </div>
                        <span class="tg-bookwriter">By: <a href="{{ route('read-your-book-ip',['id'=>base64_encode($value->id)]) }}">{{ $value->author_name }}</a></span>  </div>
                    </div>
                  </div>   
                   @endforeach 
                    @else
  No Record Found
  @endif
                
                                    </div>
                   </div>
                 </div>
            </div>
          </div>

  <div class="row">
          <div class="col-sm-12 text-left"></div>
          <!-- <div class="col-sm-12 text-right">Showing 1 to 8 of 8 (1 Pages)</div> -->
        </div>
                        <div> </div>
      </div>
    </div>
  </div>
</div>
@include('fronts.layouts.footer')
</div>
<script>
 $(document).ready(function() {
    $( "#search" ).autocomplete({
     
        source: function(request, response) {
            $.ajax({
            url: "{{route('autocomplete')}}",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
              
               var resp = $.map(data,function(obj){
                    //console.log(obj.city_name);
                    return obj.name;
               }); 
               
              response(data);
            }
        });
    },
    minLength: 1
 });
});
 
</script> 
