<h1 class="my-4">NeTa shop</h1>
            <div class="list-group">
                @foreach($category as $cate)
                <a href="{{route('product.getListProductByCategoryId',$cate->category_id)}}" class="list-group-item">{{$cate->category_name}}</a>
                @endforeach
            </div>