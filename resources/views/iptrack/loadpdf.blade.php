@include('student.layouts.partials.pdfheader')


<link href="{{ asset('assets/student/ebookfile/wow_book.css') }}" rel="stylesheet">
<script src="{{ asset('assets/student/ebookfile/jquery-1.11.2.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('assets/student/ebookfile/pdf.combined.min.js') }}"></script> 
<script src="{{ asset('assets/student/ebookfile/wow_book.min.js') }}"></script> 
<div id="pdfsection">
  @include('iptrack.layouts.partials.pdfsidebar')

    
    <!-- <div class="section">            
    
      <iframe id="fred" style="border:1px solid #666CCC" title="PDF in an i-Frame" src="{{ asset($bookpdf->pdf) }}" frameborder="1" scrolling="auto" height="1100" width="1000" ></iframe>
        </div>
   -->
    <div class='book_container'>
		<div id="book"></div>
	</div>
    

<script>
		$(function(){
			$(".book_container").on("contextmenu", "canvas", function(e) {
  				return false;
			});
			var bookOptions = {
				 height   : 600
				,width    : 850
				// ,maxWidth : 800
				,maxHeight : 700

				,centeredWhenClosed : true
				,hardcovers : true
				,pageNumbers: false
				,toolbar : "lastLeft, left, right, lastRight,zoomin, zoomout, slideshow, flipsound, fullscreen"
				,thumbnailsPosition : 'left'
				,responsiveHandleWidth : 50

				,container: window
				,containerPadding: "20px"

				// The pdf and your webpage must be on the same domain
				,pdf: "{{ asset($bookpdf->pdf) }}"

				
			};

			$('#book').wowBook( bookOptions ); // create the book

		})
	</script>


    </div>