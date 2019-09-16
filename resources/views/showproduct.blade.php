<div class="abc" style="text-align: center;color: green">
    @if (Session::has('success')) Đã thêm vào giỏ hàng @endif
</div>
@php
if (Session::has('deleted')){
echo "Đã xóa giỏ hàng";
}
@endphp

<h2>Giỏ hàng của bạn</h2>
<table>
    <tr>
        <td>Tên loại</td>
        <td>Giá</td>
    </tr>


@if((Session::get('cart')))
    @foreach (Session::get('cart') as $products)
        @foreach ($products as $product)
    <tr>
        <td>{{$product['name']}}</td>
        <td>{{$product['price']}}</td>
    </tr>
        @endforeach
    @endforeach
@endif

</table>
<table>
    <tr>
        <td>name</td>
        <td>price</td>
        <td>thao tác</td>
        <td> <a href="/delcart"> del cart</a></td>
    </tr>

    @forelse($data as $da)
        <tr>
             <td>{{$da->name}}</td>
            <td>{{$da->price}}</td>
            <td> <a class="jvv" href="/addproduct/{{$da->id}}"> addtocart  </a> </td>
        </tr>

    @empty
        <div style="padding-left: 30px">K có kết quả</div>

    @endforelse
    <script src="../../public/js/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".jvv").click(function(){
                $(".abc").fadeOut();
            });
        });

    </script>
</table>