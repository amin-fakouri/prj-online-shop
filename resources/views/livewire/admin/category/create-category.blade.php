<div>
    <form class="bg-light p-3 shadow-sm mx-auto text-center" style="width: max-content; padding: 20px; border-radius: 10px" wire:submit="create">
        <h7>ایجاد دسته</h7>
        <input class="form-control d-inline-flex focus-ring focus-ring-warning py-1 px-2 text-decoration-none border rounded-2" wire:model="cat_name" placeholder="یجاد دسته" required>
        <hr>
        <button class="btn btn-dark text-center w-100" type="submit">ثبت</button>
        <a class="btn btn-link" href="{{\Illuminate\Support\Facades\URL::signedRoute('admin_dashboard', ['id'=>auth()->user()->id])}}" wire:navigate>برگشت</a>

    </form>


    <br>

    <table class="table table-light">

        <tr>
            <th scope="col" class="text-warning">#</th>
            <th class="text-warning" scope="col">دسته ها</th>
            <th class="text-warning" scope="col">ویرایش</th>
            <th class="text-warning" scope="col">حذف</th>
        </tr>

        @php
            $i = 0;
        @endphp

        @foreach($cats as $cat)
            @php
                $i+=1;
            @endphp
            <tr>
                <th class="text-primary" scope="row">@php echo $i; @endphp</th>
                <td>{{$cat->cat_name}}</td>
                <td><a class="btn btn-link link-info" href="{{\Illuminate\Support\Facades\URL::signedRoute('edite_cat', ['cat_id'=>$cat])}}" wire:navigate>ویرایش</a></td>
                <td><input class="btn btn-outline-danger" type="submit" wire:click="delete({{ $cat->id }})" value="حذف"></td>
            </tr>
        @endforeach

    </table>
</div>
