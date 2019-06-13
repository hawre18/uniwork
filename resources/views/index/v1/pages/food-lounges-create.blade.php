@extends('index.v1.template.default')
@section('content')
    <p>افزودن رکورد جدید</p>
    <div>
        <form method="post" action="{{ route('food-lounges.store')}}">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <label for="title">عنوان</label>
            <input id="title" name="title" type="text" tabindex="1"  />
            <br>
            <label for="description">توضیحات</label>
            <input id="description" name="description" type="text" tabindex="2"  />
            <br>
            <input tabindex="3" type="submit" name="submit" value="افزودن" >
        </form>
    </div>
@endsection