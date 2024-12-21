<div>
    <h2>ادغام دسته و زیر مجموعه</h2>
    <hr>
    <form class="bg-light p-3 shadow-sm mx-auto text-center" style="width: max-content; padding: 20px; border-radius: 10px" wire:submit="save">
        <select class="form-select d-inline-flex focus-ring focus-ring-warning py-1 px-2 text-decoration-none mb-3 border rounded-2" wire:model="cat_id">
            <option>انتخاب دسته...</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
            @endforeach
        </select>

        <select class="form-select d-inline-flex focus-ring focus-ring-warning py-1 px-2  mb-3text-decoration-none border rounded-2" wire:model="sub_cat_id">
            <option>انتخاب زیر مجموعه...</option>
            @foreach($sub_categories as $sub_category)
                <option value="{{ $sub_category->id }}">{{ $sub_category->sub_name }}</option>
            @endforeach
        </select>
        <button type="submit" class="mt-3 btn btn-outline-dark w-100">ذخیره</button>
        <a class="btn btn-link" style="float: right"  href="{{\Illuminate\Support\Facades\URL::signedRoute('admin_dashboard', ['id'=>auth()->user()->id])}}" wire:navigate>برگشت</a>
        <br><br>
    </form>

    <br>
    <div class="bg-light p-3 shadow-sm" style="border-radius: 10px">
        @foreach($categories as $category)
            <hr>{{ $category->cat_name }}:
            @foreach($category->sub_cat as $sub_cate)
                @foreach($cat_sub_cats as $cat_sub_cat)
                    @if($category->id == $cat_sub_cat->categories_id and $sub_cate->id == $cat_sub_cat->sub_categories_id)
                        <input class="btn btn-outline-danger" wire:click="delete({{ $cat_sub_cat->id }})" type="submit" value="حذف">
                    @endif
                @endforeach
                {{ $sub_cate->sub_name }},
            @endforeach
        @endforeach
    </div>

</div>
