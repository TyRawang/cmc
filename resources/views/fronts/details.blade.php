@extends('fronts.layouts.app')
@php
 $userlogin = Auth::User();
@endphp
@section('content')

<div id="heading" style="background-image: url({{ asset('assets/front/images/56.jpg')}});margin-top: 81px; padding:10px 0;">
  <div class="row row-tight" style=" margin:0 auto !important">
    <div class="medium-12 small-12 columns">
    
      <ol class="bredcrumdf clearfix" style="margin:0" >
        <li><a href="{{ route('/') }}">home</a></li>
        <li class="tg-active">{{ $book->title }}</li>
      </ol>
    </div>
  </div>
</div>






<main id="tg-main" class="tg-main tg-haslayout">
  <div class="tg-sectionspace tg-haslayout">
    <div class="container">
      <div class="row">
        <div id="tg-twocolumns" class="tg-twocolumns">
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-left">
            <div class="row">
              <div class="col-md-4">
              
              
              
              <div class="tg-postbook">
            <div class="tg-frontcover"><a ><img src="{{ asset($book->book_cover) }}"/> <img src="{{ asset($book->book_cover) }}" class="backimage"/></a></div></div>
              
              
              
              
              
              
              
              
               </div>
              <div class="col-md-8">
                <div class="detailsss">
                  <h1>{{ $book->title }}</h1>
                  <h2>By {{ $book->author_name }}</h2>
                  <div class="reviewsds clearfix"> <a href="javascript:void(0);"></a></span> <span class="tg-stars"><span></span></span> <span class="tg-addreviews"><a href="javascript:void(0);">Add Your Review</a></span> </div>
                  <span class="tg-bookprice"> <ins>$ {{ $book->price }}</ins> <del></del> </span>
                  <ul class="tg-productinfo">
                    <li><span>Year:</span><span>{{ $book->publish_year }}</span></li>
                    <li><span>ISBN:</span><span>{{ $book->isbn }}</span></li>
                  </ul>
                  <div class="clearfix"> @if($userlogin!='' && $userlogin->role_id==3) <a href="{{ route('student-dashboard') }}" class="tg-btn tg-active tg-btn-lg" >Read</a>  @else <a href="{{ route('user-login') }}" class="tg-btn tg-active tg-btn-lg" >Login</a> <a href="#" class="tg-btn tg-active tg-btn-lg ebookicon" >PDF View</a> @endif 
                    
                    @if($book->book_url) <a href="{{ $book->book_url }}" target="_blank" class="tg-btnaddtowishlist" >ADD TO BAG</a> @endif </div>
                  <div class="tg-share" style="padding:15px 0;"> <span>Share:</span>
                    <ul class="tg-socialicons">
                      <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                      <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                      <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                      <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                      <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div id="tg-content" class="tg-content">
              <div class="tg-productdetail">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="tg-productcontent">
                      <div class="tg-description"> {!! strip_tags($book->description) !!} </div>
                    </div>
                  </div>
                  <br />
                  <div class="tg-productdescription">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <ul class="tg-themetabs" role="tablist">
                         @if( $book->toc)
                      
                        <li role="presentation" ><a href="#description" data-toggle="tab">TOC</a></li>
                          @endif
                        
                         @if( $book->aboutauthors)
                        <li role="presentation" class=""><a href="#aboutauthor" data-toggle="tab">About Author</a></li>
                         @endif
                        
                        
                        <li role="presentation" class="active"><a href="#review" data-toggle="tab">Reviews</a></li>
                      </ul>
                      <div class="tg-tab-content tab-content">
                      
                        @if( $book->toc)
                        <div role="tabpanel" class="tg-tab-pane tab-pane " id="description">
                          <div class="tg-description"> {!! $book->description !!} </div>
                        </div>
                        @endif
                         @if( $book->aboutauthors)
                        <div role="tabpanel" class="tg-tab-pane tab-pane " id="aboutauthor">
                          <div class="tg-description"> {!! $book->aboutauthors !!} </div>
                        </div>
                         @endif
                        
                        <div role="tabpanel" class="tg-tab-pane tab-pane active" id="review">
                          <div class="tg-description">
                            <form class="form-horizontal" id="form-review">
                              <h2>Write a review</h2>
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group required nom">
                                    <div class="col-sm-24">
                                      <label class="control-label" for="input-name">Your Name</label>
                                      <input type="text" name="name" value="" id="input-name" class="form-control" />
                                    </div>
                                  </div>
                                  <div class="form-group required nom">
                                    <div class="col-sm-24 ">
                                      <label class="control-label" for="input-review">Your Review</label>
                                      <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                      <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                    </div>
                                  </div>
                                  <div class="form-group required nom">
                                    <div class="col-sm-24">
                                      <label class="control-label"><em><strong>Rating -</strong></em> </label>
                                      &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                      <input type="radio" name="rating" value="1" />
                                      &nbsp;
                                      <input type="radio" name="rating" value="2" />
                                      &nbsp;
                                      <input type="radio" name="rating" value="3" />
                                      &nbsp;
                                      <input type="radio" name="rating" value="4" />
                                      &nbsp;
                                      <input type="radio" name="rating" value="5" />
                                      &nbsp;Good</div>
                                  </div>
                                  <div class="buttoncartgroup clearfix">
                                    <div class="pull-right">
                                      <button type="button" id="button-review" data-loading-text="Loading..." class="sdbutton">Continue</button>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div id="review"></div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--<div class="tg-aboutauthor">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="tg-sectionhead">
                        <h2>About Author</h2>
                      </div>
                      <div class="tg-authorbox">
                        <figure class="tg-authorimg"> <img src="{{ asset('assets/front/images/author/imag-24.jpg')}}" alt="image description"> </figure>
                        <div class="tg-authorinfo">
                          <div class="tg-authorhead">
                            <div class="tg-leftarea">
                              <div class="tg-authorname">
                                <h2>Kathrine Culbertson</h2>
                                <span>Author Since: June 27, 2017</span> </div>
                            </div>
                            <div class="tg-rightarea">
                              <ul class="tg-socialicons">
                                <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="tg-description">
                            <p>Laborum sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis etation.</p>
                          </div>
                          <a class="tg-btn tg-active" href="javascript:void(0);">View All Books</a> </div>
                      </div>
                    </div>
                  </div>--> 
                  
                  @if(count($similarbook))
                  <div class="tg-relatedproducts">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="tg-sectionhead">
                        <h2><span>Related Products</span>You May Also Like</h2>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div id="tg-relatedproductslider" class="tg-relatedproductslider tg-relatedbooks owl-carousel"> @foreach($similarbook as $val)
                        <div class="item">
                          <div class="tg-postbook">
                            <figure class="tg-featureimg">
                              <div class="tg-bookimg">
                                <div class="tg-frontcover"><img src="{{ asset($val->book_cover) }}" alt="image description"></div>
                                <div class="tg-backcover"><img src="{{ asset($val->book_cover) }}" alt="image description"></div>
                              </div>
                              <a class="tg-btnaddtowishlist" href="{{ route('details',['slug1'=>$val->product_slug]) }}"> <i class="icon-heart"></i> <span>add to wishlist</span> </a> </figure>
                            <div class="tg-postbookcontent">
                              <ul class="tg-bookscategories">
                                <li><a href="javascript:void(0);">Adventure</a></li>
                                <li><a href="javascript:void(0);">Fun</a></li>
                              </ul>
                              <!---<div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>--->
                              <div class="tg-booktitle">
                                <h3><a href="{{ route('details',['slug1'=>$val->product_slug]) }}">{{ $val->title }}</a></h3>
                              </div>
                              <span class="tg-bookwriter">By: <a href="{{ route('details',['slug1'=>$val->product_slug]) }}">{{ $val->author_name }}</a></span> <span class="tg-stars"><span></span></span> <span class="tg-bookprice"> <ins>$25.18</ins> <del>$27.20</del> </span> <a class="tg-btn tg-btnstyletwo" href="{{ route('details',['slug1'=>$val->product_slug]) }}"> <i class="fa fa-shopping-basket"></i> <em>Add To Basket</em> </a> </div>
                          </div>
                        </div>
                        @endforeach </div>
                    </div>
                  </div>
                  @endif </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
            <aside id="tg-sidebar" class="tg-sidebar">
              <div class="tg-widget tg-catagories">
                <div class="tg-widgettitle">
                  <h3>Categories</h3>
                </div>
                <div class="tg-widgetcontent">
                 
                    <ul>
                      @include('fronts.layouts.categorymenu')
                    </ul>
                 
                </div>
              </div>
              
            </aside>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
</div>
<a id="scroll-top" href="#top" title="Scroll top"><i class="fa fa-angle-up"></i></a> 