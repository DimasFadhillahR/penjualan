@extends("layout.app")

@section("title")
    Home
@endsection

@section("content")
    <div class ="row g-2 text-center">
        <div class="col-3">
            <div class="p-3 border bg-primary mt-3"> 10 Barang <i class="fa fa-boxes"></i> </div>
        </div>
   

    <div class="col-3 text-center">
        <div class="p-3 border bg-warning mt-3"> 15 Kategori <i class="fa fa-tag"></i></div>
    </div>

    <div class="col-3 text-center">
        <div class="p-3 border bg-danger mt-3"> 5 Suplier <i class="fa fa-truck"></i></div>
    </div>

    <div class="col-3 text-center">
        <div class="p-3 border bg-success mt-3"> 15 Kategori <i class="fa fa-tag"></i></div>
    </div>


@endsection
