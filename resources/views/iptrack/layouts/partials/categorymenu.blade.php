@php

$ip =   $_SERVER["REMOTE_ADDR"];
            $categoryid = array();
            $expid = array();
            $bookdetails = array();
            $ipbook = \DB::table("institutes")
             ->whereRaw("find_in_set('".$ip."',static_ipaddress)")
            ->first();
            if($ipbook) {
            $staticip = $ipbook->static_ipaddress;
             $expid = explode(',',$staticip);
             if (in_array($ip, $expid)) {
                $ipbook1 = \DB::table("institutes")
                ->whereRaw("find_in_set('".$ip."',static_ipaddress)")
                ->get();
                foreach($ipbook1 as $val ) {
                    $categoryid[] = $val->cat_child;
                    $bookids[] = $val->book_id;
                }
             } 
            } 
           $uniquecat = array_unique($categoryid);
           $category = App\Category::whereIn('id',$uniquecat)->get(); 
@endphp 
 <ul class="shop-category-list accordion">
               @foreach($category as $value)
                <li><a href="{{ route('my-books',['list'=>$value->slug])}}" >{{ $value->category_name }}</a></li>
               @endforeach
            </ul>