@php
$currentURL = \Request::fullUrl();
$menuquery = App\Category::where('isActive',1)->get();
$exp = explode('/',$currentURL);
$parentcategories = $exp[4];
$parentcategoriesnew = explode('?',$parentcategories);
$parentcategoriesnews =$parentcategoriesnew[0];
$category  = App\Category::Orderby('category_name','ASC')->where('slug',$parentcategoriesnews)->get();
$subcategory = App\Category::Orderby('order_by_cat','ASC')->where('p_id','!=','0')->get();

@endphp
<div class="leftcategoryies"> @foreach($category as   $value)
  <h3   ><a href="{{ route('category-list',['list'=>$value->slug])}}" >{{ $value->category_name }}</a></h3>
  <ul>
    @foreach($subcategory as $v)
    @if($value->id == $v->p_id)
    <li><a href="{{ route('category-list',['list'=>$value->slug,'catlist'=>$v->slug])}}" >{{ $v->category_name }} --{{ $v->id }}</a></li>
    @endif
    @endforeach
  </ul>
  @endforeach </div>
