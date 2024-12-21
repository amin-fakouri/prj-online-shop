<div>
    <hr>
    <form class="bg-body-tertiary p-3 shadow-sm" style="border-radius: 10px; width: max-content; margin: auto;" wire:submit="save">
        <h7>دیدن اطلاعات</h7>
        <input hidden class="form-control mb-3" wire:model.fill="pro_id" value="{{ $find_id_product->id }}">
        <select class="form-select mb-3" wire:model="fe_id">
            <option>ویژگی مورد نظر خود را انتخاب کنید...</option>
            @foreach($sub_cat->feature as $fea_ture)
                <option value="{{ $fea_ture->id }}">{{ $fea_ture->fe_name }}</option>
            @endforeach
        </select>
        <input class="form-control mb-3" wire:model="val" placeholder="مقداری برای ویژگی خود بگذارید.." required>
        <button class="btn btn-outline-dark w-100" type="submit">ثبت</button>
        <a class="btn btn-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('create_pro') }}">برگشت</a>
    </form>

    <hr>

    <table class="table table-light">
        <tr>
            @foreach($sub_cat->feature as $fea_ture)
                <th>{{ $fea_ture->fe_name }}</th>
            @endforeach
        </tr>
        <tr>
            @foreach($fe_pros as $fe_pro)
                @if($fe_pro['pro_id'] == $find_id_product->id)
                    <td>{{ $fe_pro['val'] }}</td>
                @endif
            @endforeach
        </tr>
    </table>
</div>
