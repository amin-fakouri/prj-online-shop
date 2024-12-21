<div>

    <hr>
    <form class="bg-light p-3 shadow-sm text-center mx-auto mt-5" style="border-radius: 10px; width: max-content" wire:submit="update({{ $find_sub_id->id }})">
        <h7>ویرایش نام زیر دسته</h7>
        <hr>
        <input class="form-control" value="{{ $find_sub_id->sub_name }}" disabled>
        <input class="form-control d-inline-flex focus-ring focus-ring-warning py-1 px-2 text-decoration-none border rounded-2 mt-4" wire:model="new_sub_name" placeholder="نام جدید زیر دسته">
        <hr>
        <button class="btn btn-dark w-100 text-center"  type="submit">ثبت</button>
        <a class="btn btn-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('create_sub_cat') }}">برگشت</a>

    </form>
</div>
