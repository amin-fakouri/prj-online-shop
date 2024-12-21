<div>

    <form class="bg-light p-3 shadow-sm text-center mx-auto mt-5" style="border-radius: 10px; width: max-content" wire:submit="update({{ $find_category->id }})">
        <h7 class="text-center">تغییر نام دسته</h7>
        <hr>
        <input class="form-control" value="{{ $find_category->cat_name }}" disabled>
        <input class="form-control d-inline-flex focus-ring focus-ring-warning py-1 px-2 text-decoration-none border rounded-2 mt-4" wire:model="new_cat_name" placeholder="نام جدید را بنویسید" required>
        <hr>
        <button class="btn btn-dark w-100 text-center" type="submit">ثبت</button>
        <a class="btn btn-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('create_cat') }}">برگشت</a>

    </form>

</div>
