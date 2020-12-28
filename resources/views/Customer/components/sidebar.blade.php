<h1 class="my-4">NeTa shop</h1>
            <div class="list-group">
                @foreach($category as $cate)
                <a href="{{route('product.getListProductByCategoryId',$cate->id)}}" class="list-group-item">{{$cate->name}}</a>
                @endforeach
            </div>