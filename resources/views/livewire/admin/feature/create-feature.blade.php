<div>
    <hr>
    <form class="bg-light p-3 shadow-sm mx-auto text-center" style="width: max-content; padding: 20px; border-radius: 10px" wire:submit="save">
        <h7>یجاد ویژگی</h7>
        <input class="mt-3 form-control d-inline-flex focus-ring focus-ring-warning mb-3 py-1 px-2 text-decoration-none border rounded-2" wire:model="fe_name" placeholder="نام ویژگی">
        <button class="btn btn-outline-dark w-100" type="submit">ذخیره</button>
        <a class="btn btn-link" style="float: right" href="{{\Illuminate\Support\Facades\URL::signedRoute('admin_dashboard', ['id'=>auth()->user()->id])}}" wire:navigate>برگشت</a>
        <br><br>
    </form>

    <br>

    <table class="table table-light">
        <tr>
            <th class="text-warning">#</th>
            <th class="text-warning">ویژگی ها</th>
            <th class="text-warning">ویرایش</th>
            <th class="text-warning">حذف</th>
        </tr>

        @php
            $i = 0;
        @endphp

        @foreach($fes as $fe)
            @php
                $i+=1;
            @endphp
            <tr>
                <td class="text-primary">@php echo $i; @endphp</td>
                <td>{{$fe->fe_name}}</td>
                <td><a class="btn btn-link link-info" href="{{\Illuminate\Support\Facades\URL::signedRoute('edite_fe', ['fe_id'=>$fe])}}" wire:navigate>یرایش</a></td>
                <td><input class="btn btn-outline-danger" type="submit" wire:click="delete({{ $fe->id }})" value="حذف"></td>
            </tr>
        @endforeach
    </table>
</div>
