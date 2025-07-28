@extends('layouts.admin')

@section('content')
    <h1>Chi tiet</h1>
    <ul>
        <li>
            <img src="{{file_url($product['image_cover'])}}" alt="{{$product['name']}}" width="200">
        </li>
        <li>
            Ten: {{$product['name']}}
        </li>
        <li>
            Gia : {{$product['price']}}
        </li>
        <li>
            Gia : {{$product['category_name']}}
        </li>
        <li>
            Gia : {{$product['date_entry']}}
        </li>
        <li>
            Gia : {{$product['status'] ?'Con Hang' : 'Het Hang'}}
        </li>
    </ul>
@endsection