@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fmaa2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/40740962_347352399342210_3703263992525881344_n.jpg?_nc_ht=instagram.fmaa2-1.fna.fbcdn.net&_nc_ohc=pJTjuFy9vdMAX-zjtHj&oh=87dbd2c80fce144969a5a49448d003fa&oe=5EBAACFF" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{$user -> username }}</h1><a href="">Add new post</a>  </div>
            <div class="d-flex">
                <div class="pr-5"><strong>11 </strong>posts</div>
                <div class="pr-5"><strong>177 </strong>followers</div>
                <div class="pr-5"><strong>17 </strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url }}</a></div>  <!--?? "N/A" -->
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fmaa2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c343.0.753.753a/s640x640/74347851_506539343523805_7511581988442608473_n.jpg?_nc_ht=instagram.fmaa2-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=5dKWhyr4jAEAX-rHYDE&amp;oh=f8e273560695a9a7cda848f5a3fdf693&amp;oe=5EBE4C57" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fmaa2-2.fna.fbcdn.net/v/t51.2885-15/e35/c257.0.566.566a/72730040_406471840028902_5174970187745021666_n.jpg?_nc_ht=instagram.fmaa2-2.fna.fbcdn.net&_nc_cat=110&_nc_ohc=TTAhYDr9LZ4AX_i3Znt&oh=1191891fb46dadae11ea07358d19d108&oe=5EBDC0B1" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fmaa2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c194.0.691.691a/s640x640/68752125_527757721308112_8715349046193044043_n.jpg?_nc_ht=instagram.fmaa2-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=-xJOgh6ueVIAX-G0cKI&oh=56c344112484db572a8bae5fc91a6787&oe=5EBC26B3" class="w-100">
        </div>
    </div>
</div>
@endsection
