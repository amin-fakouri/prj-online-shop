<div>




    <form wire:submit="login">
        <div class="card mx-auto bg-base-100 p-3 w-96 border-primary shadow-lg mt-4">
            <figure class="px-10 pt-10 m-2">
                <h1><strong>ورود به سیستم</strong></h1>
            </figure>

            <hr>

            <div class="card-body items-center text-center">
                <input dir="ltr" wire:model="phone_number" type="text" placeholder="شماره تماس" class="input text-center input-bordered w-full max-w-xs" />

                @error('phone_number')
                <div class="toast toast-start">
                    <div role="alert" class="alert alert-error">
                        <span style="color: white">{{ $message }}</span>
                    </div>
                </div>
                @enderror



                <div class="card-actions">
                    <button class="btn btn-outline-primary btn-wide">بعدی</button>
                </div>
                <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('my_register') }}" class="link">تا به حال ثبت نام نکرده ام!</a>
            </div>
        </div>
    </form>




</div>
