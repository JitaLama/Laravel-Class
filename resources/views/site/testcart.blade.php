<?php 
print_r(session()->all());
?>
<form action="{{route('postTestCart')}}" method="POST">
    @csrf()
    Product Id: <input type="text" name="productid"><br>
    Product Cost: <input type="text" name="productcost"><br>
    Product Quantity: <input type="number" name="productquantity"><br>
    <input type="submit" value="Add to Cart">
</form>