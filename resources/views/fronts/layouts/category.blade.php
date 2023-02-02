 
 @php
$menuquery = App\Category::where('isActive',1)->get();
$category  = App\Category::Orderby('order_by_cat','ASC')->where('p_id',NULL)->get();
$subcategory = App\Category::Orderby('order_by_cat','ASC')->where('p_id','!=',NULL)->get();
@endphp 
 <div class="widget widget-box widget-shop-category active">
           <ul class="shop-category-list accordion">
               @foreach($category as $value)
                <li><a href="{{ route('category-list',['list'=>$value->slug])}}" >{{ $value->category_name }}</a></li>
                  @foreach($subcategory as $v)
                    @if($value->id == $v->p_id)
                    <li><a href="{{ route('category-list',['list'=>$value->slug,'catlist'=>$v->slug])}}" >{{ $v->category_name }}</a></li>
                    @endif
                  @endforeach
               @endforeach
            </ul>
         
        </div> 