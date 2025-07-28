@extends('layouts.admin')

@section('content')
    <h1>Products</h1>
    <a href="{{route('product/create')}}"><button>Them</button></a>

    <table border="1">
        <thead>
            <th>STT</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Date entry</th>
            <th>Status</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)
                <tr>
                    <td>{{$index + 1}}</td>
                    <td>
                        @if (!empty($product['image_cover']))
                            <img src="{{file_url($product['image_cover'])}}" alt="{{$product['name']}}" width="200">
                        @else
                            <em>Khong co anh</em>
                        @endif
                    </td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['price']}}</td>
                    <td>{{$product['category_name']}}</td>
                    <td>{{$product['date_entry']}}</td>
                    <td>{{$product['status'] == 1 ? 'Con hang' : 'Het hang'}}</td>
                    <td>
                        <a href="{{route('product/show/') . $product['id']}}">
                            <button>Xem</button>
                        </a>
                        <a href="{{route('product/edit/') . $product['id']}}">
                            <button>Sua</button>
                        </a>
                        <form action="{{route('product/destroy/') .$product['id']}}" method="POST" onsubmit="return confirm('Ban co chac chan muon xoa khong?')">
                            <button>Xoa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection