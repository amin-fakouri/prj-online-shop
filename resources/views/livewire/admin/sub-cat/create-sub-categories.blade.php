<div>

    <hr>
    <form class="bg-light p-3 shadow-sm mx-auto text-center" style="width: max-content; padding: 20px; border-radius: 10px" wire:submit="create">
        <h7>اسجاد زیر مجموعه</h7>
        <input class="form-control d-inline-flex focus-ring focus-ring-warning py-1 px-2 text-decoration-none border rounded-2" wire:model="sub_name" placeholder="نام زیر دسته">
        <hr>
        <button class="btn btn-dark text-center w-100" type="submit">ثبت</button>
        <a class="btn btn-link" href="{{\Illuminate\Support\Facades\URL::signedRoute('admin_dashboard', ['id'=>auth()->user()->id])}}" wire:navigate>برگشت</a>

    </form>

    <br>

    <table class="table table-light">
        <tr>
            <th class="text-warning">#</th>
            <th class="text-warning">نام زیر دسته</th>
            <th class="text-warning">ویرایش</th>
            <th class="text-warning">حذف</th>
        </tr>

        @php
            $i = 0;
        @endphp

        @foreach($sub_cats as $sub_cat)
            @php
                $i+=1;
            @endphp
            <tr>
                <td class="text-primary">@php echo $i; @endphp</td>
                <td>{{ $sub_cat->sub_name }}</td>
                <td><a class="btn btn-link link-info" href="{{ \Illuminate\Support\Facades\URL::signedRoute('edite_sub_cat', ['sub_id' => $sub_cat]) }}" >ویرایش</a></td>
                <td><input class="btn btn-outline-danger" type="submit" wire:click="delete({{ $sub_cat->id }})" value="حذف"></td>
            </tr>
        @endforeach
    </table>
</div>
