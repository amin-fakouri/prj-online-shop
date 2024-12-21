<div>
    @foreach($products as $product)
        @if($product->sub_cat_id == $find_sub_product->id)
            <div style="display: inline-block; padding: 10px; margin-right: 25px; border-radius: 20px">
                <div class="card my_card shadow-sm" style="width: 20rem; border-radius: 20px; outline: none; border: none; background-color: #f8f8f8; ">
                    <img style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1.5; object-fit: contain" class="card-img-top" src="{{ asset('storage/'.$product['pic_url']) }}">
                    <div class="card-body">
                        <h6 class="card-title">{{ $product->p_name }}</h6>
                        <p class="card-text">{{ $product->about }}</p>
                        <hr>
                        <div>
                            <a class="btn btn-primary" href="{{ \Illuminate\Support\Facades\URL::signedRoute('see_products', ['id' => $product->id ]) }}">خرید</a>
                            <h6 style="color: green; text-align: left; margin-top: -30px">{{ $product->p_price }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
