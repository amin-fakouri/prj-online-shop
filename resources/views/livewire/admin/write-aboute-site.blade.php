<div>

    <form class="bg-body-tertiary p-3 shadow-sm" style="border-radius: 10px; width: max-content; margin: auto;" wire:submit="save">
        <h7>درباره سایت توضیحاتی بدهید</h7>
        <textarea class="form-control mt-3" wire:model="about" placeholder="درباره سایت توضیحاتی بدهید"></textarea>
        <button type="submit" class="btn btn-outline-dark w-100 mt-3">ثبت</button>
        <a class="btn btn-link" href="{{\Illuminate\Support\Facades\URL::signedRoute('admin_dashboard', ['id'=>auth()->user()->id])}}" wire:navigate>برگشت</a>
    </form>

    <table class="table table-light">
        <tr>
            <th>#</th>
            <th>توضیحات</th>
            <th>حذف</th>
            <th>فعال/غیر فعال</th>
        </tr>

        @php $i=0; @endphp

        @foreach($abouts as $about)
            @php $i+=1; @endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $about->about }}</td>
                <td><input class="btn btn-danger" wire:click="delete({{ $about->id }})" type="submit" value="حذف"></td>
                @if($about['oN/oF'] == 0)
                    <form wire:submit="on_upda({{ $about->id }})">

                        <td>
                            <input hidden wire:model.fill="about_update" value="{{ $about->about }}">
                            <button class="btn btn-primary" value="فعال" type="submit">فعال</button>
                        </td>
                    </form>
                @elseif($about['oN/oF'] == 1)
                    <form wire:submit="of_upda({{ $about->id }})">

                        <td>
                            <input hidden wire:model.fill="about_update" value="{{ $about->about }}">
                            <button class="btn btn-outline-primary" value="غیر فعال" type="submit">غیر فعال</button>
                        </td>
                    </form>
                @endif

            </tr>
        @endforeach
    </table>
</div>
