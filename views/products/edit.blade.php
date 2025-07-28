@extends('layouts.admin')

@section('content')
    <h1>Sua</h1>
        <form action="{{ route('product/update' . $product['id']) }}" method="POST" enctype="multipart/form-data">
        <div>
            <label for="">Ten san pham :</label>
            <input type="text" name="name" value="{{$product['name']}}" required>
        </div>

        <div>
            <label for="">Gia :</label>
            <input type="number" name="price" value="{{$product['name']}}" required>
        </div>
        <div>
            <label for="">Danh muc :</label>
            <select name="category_id" id="" required>
                <option value="">Chon danh muc</option>
                @foreach ($categories as $category)
                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Ngay nhap :</label>
            <input type="date" name="date_entry" value="{{$product['date_entry']}}" required>
        </div>
        <div>
            <label for="">Trang thai :</label >
            <select name="status" id="" required>
                <option value="1"{{$product['status'] == 1 ? 'selected' : ''}}>Con hang</option>
                <option value="0"{{$product['status'] == 0 ? 'selected' :''}}>Het hang</option>
            </select>
        </div>
        <div>
            <label for="">Hinh anh :</label>
            @if (!empty($product['image_cover']))
                <div>
                    <img src="{{file_url($product['image_cover'])}}" alt="{{$product['name']}}" width="200">
                </div>
            @endif
            <input type="file" name="image_cover" accept="image/*">
        </div>
        
        <button type="submit">Luu</button>
        <a href="{{route('products')}}">Back</a>
    </form>
@endsection