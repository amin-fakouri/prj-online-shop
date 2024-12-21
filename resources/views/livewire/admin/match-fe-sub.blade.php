<div>
    <form class="bg-light p-3 shadow-sm mx-auto text-center" style="width: max-content; padding: 20px; border-radius: 10px" wire:submit="save">
        <h7>ادغام زیر مجموعه و ویژگی</h7>
        <br><br>
        <select class="form-select d-inline-flex focus-ring focus-ring-warning py-1 px-2 text-decoration-none mb-3 border rounded-2" wire:model="sub_cat_id">
            <option>انتخاب زیر مجموعه...</option>
            @foreach($subcategories as $subcategory)
                <option value="{{ $subcategory->id }}">{{ $subcategory->sub_name }}</option>
            @endforeach
        </select>

        <select class="form-select d-inline-flex focus-ring focus-ring-warning py-1 px-2 text-decoration-none mb-3 border rounded-2" wire:model="fe_id">
            <option>امتخاب ویژگی...</option>
            @foreach($fes as $fe)
                <option value="{{ $fe->id }}">{{ $fe->fe_name }}</option>
            @endforeach
        </select>

        <button class="mt-3 btn btn-outline-dark w-100" type="submit">ادغام</button>
        <a class="btn btn-link" href="{{\Illuminate\Support\Facades\URL::signedRoute('admin_dashboard', ['id'=>auth()->user()->id])}}" wire:navigate>برگشت</a>
        <br><br>
    </form>

    <hr>

    <div class="bg-light p-3 shadow-sm" style="border-radius: 10px">
        @foreach($subcategories as $subcategory)
            <hr>{{ $subcategory->sub_name }}:
            @foreach($subcategory->feature as $fea_ture)
                @foreach($fes_subs as $fe_sub)
                    @if($subcategory->id == $fe_sub->sub_categories_id and $fea_ture->id == $fe_sub->features_id)
                        <input class="btn btn-outline-danger" wire:click="delete_feature({{ $fe_sub->id }})" type="submit" value="حذف">
                    @endif
                @endforeach
                {{ $fea_ture->fe_name }},
            @endforeach
        @endforeach
    </div>

</div>
