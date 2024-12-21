<div>

    <form style="width: max-content; text-align: center; padding: 20px; margin: auto; border-radius: 10px" class="bg-body-tertiary p-3 shadow-sm" wire:submit="save">
        <h7>ایجاد کالا</h7>
        <div class="row">

            <div class="col">
                <select class="form-select" wire:model="sub_cat_id" required>
                    <option>انتخاب زیر مجموعه...</option>
                    @foreach($sub_categories as $sub_category)
                        <option value="{{ $sub_category->id }}">{{ $sub_category->sub_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col">
                <select class="form-select" wire:model="location_page" required>
                    <option>درکدام اسلایدر باشد</option>
                    <option value="0">هیچ کدام</option>
                    <option value="1">اسلادر ۱</option>
                    <option value="2">اسلایدر ۲</option>
                </select>
            </div>

            <div class="col">
                <input class="form-control" wire:model="p_name" placeholder="نام کالا" required>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <input class="form-control" wire:model="p_price" placeholder="قیمت کالا" required>
            </div>

            <div class="col">
                <input class="form-control" wire:model="pic_url" type="file">
            </div>

            <div class="col">
                <textarea wire:model="about_pro" placeholder="درباره کالا.." class="form-control"></textarea>
            </div>
        </div>

        <hr>

        <div class="row">
            <button class="btn btn-dark w-100" type="submit">ثبت کالا</button>
            <a href="{{\Illuminate\Support\Facades\URL::signedRoute('admin_dashboard', ['id'=>auth()->user()->id])}}" wire:navigate>برگشت</a>
        </div>




    </form>

    <br>

    @php $i=0; @endphp

    <table class="table table-light">
        <tr>
            <th>#</th>
            <th>زیر مجموعه</th>
            <th>نام کالا</th>
            <th>کد کالا</th>
            <th>عکس</th>
            <th>درباره کالا</th>
            <th>اسلایدر</th>
            <th>قیمت</th>
            <th>دیدن اطلاعات بیشتر</th>
            <th>حذف</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>@php $i+=1; echo $i;@endphp</td>
                @foreach($sub_categories as $sub_category)
                    @if($product->sub_cat_id == $sub_category->id)
                        <td>{{ $sub_category->sub_name }}</td>
                    @endif
                @endforeach
                <td>{{ $product->p_name }}</td>
                <td>{{ $product->p_code }}</td>
                <td><img style="width: 10%; height: 10%" src="{{ asset('storage/'.$product['pic_url']) }}"></td>
                <td>{{ $product->about }}</td>
                <td>{{ $product->location_page }}</td>
                <td>{{ $product->p_price }}</td>
                <td><a class="btn btn-link link-info" href="{{ \Illuminate\Support\Facades\URL::signedRoute('detail_pro', ['pro_id' => $product]) }}">دیدن اطلاعات</a> </td>
                <td><input class="btn btn-outline-danger" wire:click="delete({{ $product->id }})" type="submit" value="حذف"></td>
            </tr>
        @endforeach

    </table>
</div>
