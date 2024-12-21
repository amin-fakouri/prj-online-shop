<div>

    <table class="table shadow table-responsive table-responsive-lg table-light table-responsive-xxl table-responsive-sm table-responsive-md tab-content mx-auto">
        <tr>
            <th>نام</th>
            <th>نام خوانوادگی</th>
            <th>شماره تماس</th>
            <th>مبدا</th>
            <th>کد ملی</th>
            <th>نام کالا</th>
            <th>کد کالا</th>
            <th>قیمت</th>
            <th>زمان ارسال خرید</th>
        </tr>

        <tr>
            <td>{{ $find_code_product->f_name }}</td>
            <td>{{ $find_code_product->l_name }}</td>
            <td>{{ $find_code_product->phone_number }}</td>
            <td>{{ $find_code_product->your_location }}</td>
            <td>{{ $find_code_product->n_code }}</td>
            <td>{{ $find_code_product->name_product }}</td>
            <td>{{ $find_code_product->code_product }}</td>
            <td>{{ $find_code_product->price }}</td>
            @if($find_code_product->cart_or_money == 1)
                <td>نقدی</td>
            @elseif($find_code_product->cart_or_money == 2)
                <td>کارت به کارت</td>
            @endif
            <td>{{ $find_code_product->time_send }}</td>
        </tr>
    </table>

    <button type="button" onclick="window.print()">عکس فیش</button>
    <a href="{{\Illuminate\Support\Facades\URL::signedRoute('my_dashboard', ['user_id'=>auth()->user()->id])}}" wire:navigate>رفتن به صفه اصلی</a>
</div>
