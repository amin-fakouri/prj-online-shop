<div>
    <form class="bg-light p-3 shadow-sm text-center mx-auto mt-5" style="border-radius: 10px; width: max-content" wire:submit="update({{ $find_fe_id->id }})">
        <h7>تغیر نام دسته</h7>
        <hr>
        <input class="form-control" value="{{ $find_fe_id->fe_name }}" disabled>
        <input class="form-control d-inline-flex focus-ring mb-3 focus-ring-warning py-1 px-2 text-decoration-none border rounded-2 mt-4" wire:model="new_fe_name" placeholder="نام جدید را بنویسید" required>
        <button class="btn btn-dark w-100 text-center mt-3" type="submit">ثبت</button>
        <hr>


        <a class="btn btn-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('create_feature') }}">برگشت</a>
    </form>
</div>
