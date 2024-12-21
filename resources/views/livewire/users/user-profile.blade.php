<div>


    @foreach($my_profiles as $my_profile)

    @endforeach

        @if($my_profile->user_id != $user_id->id)
            <div style="margin: auto; width: 400px; position: relative; padding: 20px; border-radius: 25px">
                <form wire:submit="save">

                    <div class="row mb-3">
                        <div class="col">
                            <input class="form-control" wire:model="f_name" placeholder="نام">
                        </div>
                        <div class="col">
                            <input class="form-control" wire:model="l_name" placeholder="نام خانوادگی">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <input class="form-control" wire:model="user_name" placeholder="نام کاربری">
                        </div>
                        <div class="col">
                            <input class="form-control" disabled wire:model.fill="phone_number" value="{{ $user_id->phone_number }}">
                        </div>
                    </div>





                    <div class="row mb-3">
                        <div class="col">
                            <input class="form-control" wire:model="pic_url" type="file">
                        </div>
                        <div class="col">
                            <input class="form-control" wire:model="n_code" placeholder="کد ملی">
                        </div>
                    </div>


                    <div class="row p-3">
                        <input class="form-control mb-3" type="email" wire:model="e_mail" placeholder="یمیل">

                        <button class="btn btn-outline-dark mb-3 p-3" style="margin: auto; text-align: center; border-radius: 30px" type="submit">ذخیره</button>
                    </div>



                </form>
            </div>
        @endif
        @if($page_mode == 0)
        <ul class="nav nav-tabs w-50 mx-auto>
            <li class="nav-item">
                <button class="nav-link" wire:click="my_profile">دیدن مشخصات خود</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" wire:click="change_profile">تغیر مشخصات خود</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" wire:click="change_photo_profile">تغییر عکس خود</button>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('my_dashboard', ['user_id' => \Illuminate\Support\Facades\Auth::id()]) }}">برگشت</a>
            </li>
        </ul>



            <ol class="list-group list-group-numbered" style="margin-top: 20px">
                @php
                    $s=0;
                    $k=0;
                @endphp
                @foreach($products as $product)
                    @foreach($users_products as $user_product)
                        @if($product->id == $user_product->products_id and $user_product->users_id == auth()->user()->id)
                            @php $s+=1; $k+=1; @endphp

                            <li class="list-group-item shadow-sm mx-auto w-50 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <a class="fw-bold link-dark" href="{{ \Illuminate\Support\Facades\URL::signedRoute('buy_product_from_book_mark', ['id' => $user_product->id, 'i' => $user_product->number_of_product]) }}">{{ $product->p_name }}</a>
                                </div>
                                <span class="badge text-bg-primary rounded-pill">{{ $user_product->number_of_product }}</span>
                            </li>
                        @else
                        @endif
                    @endforeach

                @endforeach


            </ol>
    @elseif($page_mode == 1)
        @foreach($my_profiles as $my_profile)
            @if($my_profile->user_id == $user_id->id)

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <button class="nav-link active" wire:click="my_profile">دیدن مشخصات خود</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" wire:click="change_profile">تغیر مشخصات خود</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" wire:click="change_photo_profile">تغییر عکس خود</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" wire:click="home">خانه</button>
                    </li>
                </ul>


                <br>
                    <div style="text-align: center; margin: auto; width: 300px">
                        <img style="width: 200px; border-radius: 200px" src="{{ asset('storage/'.$my_profile['pic_url']) }}" class="d-block my_img" alt="...">
                        <h5>نام کاربری:{{$my_profile->user_name}}</h5>
                        <h5>نام:{{ $my_profile->f_name }}</h5>
                        <h5>نام خانوادگی:{{ $my_profile->l_name }}</h5>
                        <h5>شماره تلفن همراه:{{ $my_profile->phone_number }}</h5>
                        <h5>یمیل:{{ $my_profile->e_mail }}</h5>
                        <h5>کد ملی:{{ $my_profile->n_code }}</h5>
                    </div>
            @endif
        @endforeach
    @elseif($page_mode == 2)
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <button class="nav-link" wire:click="my_profile">دیدن مشخصات خود</button>
            </li>
            <li class="nav-item active">
                <button class="nav-link active" wire:click="change_profile">تغیر مشخصات خود</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" wire:click="change_photo_profile">تغییر عکس خود</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" wire:click="home">خانه</button>
            </li>
        </ul>
        @foreach($my_profiles as $my_profile)
            @if($my_profile->user_id == $user_id->id)
                <form wire:submit="save_profile({{ $my_profile->id }})">
                    <table>
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>ننام خانوادگی</th>
                            <th>نام کاربری</th>
                            <th>شماره تماس</th>
                            <th>یمیل</th>
                            <th>کد ملی</th>
                            <th>ذخیره</th>
                        </tr>


                        <tr>
                            <td>1</td>
                            <td><input disabled value="{{ $my_profile->f_name }}"></td>
                            <td><input disabled value="{{ $my_profile->l_name }}"></td>
                            <td><input disabled value="{{ $my_profile->user_name }}"></td>
                            <td><input disabled value="{{ $my_profile->phone_number }}"></td>
                            <td><input disabled value="{{ $my_profile->e_mail }}"></td>
                            <td><input disabled value="{{ $my_profile->n_code }}"></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td><input wire:model.fill="f_name_2" value="{{ $my_profile->f_name }}"></td>
                            <td><input wire:model.fill="l_name_2" value="{{ $my_profile->l_name }}"></td>
                            <td><input wire:model.fill="user_name_2" value="{{ $my_profile->user_name }}"></td>
                            <td><input wire:model.fill="phone_number_2" value="{{ $my_profile->phone_number }}"></td>
                            <td><input wire:model.fill="e_mail_2" value="{{ $my_profile->e_mail }}"></td>
                            <td><input wire:model.fill="n_code_2" value="{{ $my_profile->n_code }}"></td>
                            <td><button type="submit">خیره</button></td>
                        </tr>
                    </table>
                </form>
            @endif
        @endforeach
    @elseif($page_mode == 3)
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <button class="nav-link" wire:click="my_profile">دیدن مشخصات خود</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" wire:click="change_profile">تغیر مشخصات خود</button>
            </li>
            <li class="nav-item active">
                <button class="nav-link active" wire:click="change_photo_profile">تغییر عکس خود</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" wire:click="home">خانه</button>
            </li>
        </ul>
        @foreach($my_profiles as $my_profile)
            @if($my_profile->user_id == $user_id->id)
                <form wire:submit="save_photo_profile({{ $my_profile->id }})">
                    <img style="width: 200px; border-radius: 200px" src="{{ asset('storage/'.$my_profile['pic_url']) }}" class="d-block my_img" alt="...">
                    <input wire:model="pics_2" type="file">
                    <button type="submit">ذخیره</button>
                </form>
            @endif
        @endforeach
    @endif




</div>
