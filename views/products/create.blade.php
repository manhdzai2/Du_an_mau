@extends('layouts.admin')

@section('content')
    <h1>Create New Product</h1>
    <form action="{{route('product/store')}}" method="POST" enctype="multipart/form-data">
        <div>
            <label for="">Ten :</label>
            <input type="text" name="name" id="" required>
        </div>

        <div>
            <label for="">Gia :</label>
            <input type="number" name="price" id="" required>
        </div>

        <div>
            <label for="">Danh muc :</label>
            <select name="category_id" id="">
                @foreach ($categories as $category)
                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Ngay nhap :</label>
            <input type="date" name="date_entry" id="" value="{{date('y-m-d')}}" required>
        </div>
        <div>
            <label for="">Trang thai :</label>
            <select name="status" id="" required>
                <option value="1">Con hang</option>
                <option value="0">Het hang</option>
            </select>
        </div>
        <div>
            <label for="">Anh :</label>
            <input type="file" name="image_cover" id="" accept="image/*" required>
        </div>
        <button type="submit">Luu</button>
        <a href="{{route('products')}}">
            bank
        </a>
    </form>
@endsection