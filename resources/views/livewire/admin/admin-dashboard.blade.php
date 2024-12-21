<div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{\Illuminate\Support\Facades\URL::signedRoute('create_cat')}}">ایجاد دسته</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{\Illuminate\Support\Facades\URL::signedRoute('create_sub_cat')}}">ایجاد زیر دسته</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('match_sub_cat') }}">ادغام دسته و زیر مجموعه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('create_feature') }}">ایجاد ویژگی کالا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('create_pro') }}">ایجاد کالا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('match_fe_sub') }}">ادغام زیر مجموعه و ویژگی کالا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('write_about_site') }}">درباره سایت</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




</div>
