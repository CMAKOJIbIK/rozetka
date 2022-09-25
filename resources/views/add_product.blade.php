@extends("layouts.app")
@section("title_name", "add_product")
@section("content")
    <div class="content">
        <div class="add_product">
            <h2>Добавить товар</h2>
            <div class="add_content_product">

                <form action="{{route("create_product")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="img">
                    <textarea name="name" class="description"></textarea>

                    <button type="submit">Добавить товар</button>
                </form>

            </div>
        </div>
    </div>
@stop
