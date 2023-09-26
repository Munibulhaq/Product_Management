<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link href="css/form.css" rel="stylesheet">

<div style="display:flex;width:100%;">
    
    <form action="{{route('product.update',$product->id)}}" method="POST">
                            @method ('PUT')
                            @csrf
          @csrf
        <div style="width:100%;">
            <p>Product NAME</p>
            <input name="name" type="text" value="{{$product->Name}}">
        </div>
        <div style="width:100%;">
            <p>Product Description</p>
            <input name="description" type="text" value="{{$product->Description}}">
        </div>

        <div style="width:47%;">
            <p>Price</p>
            <input name="price" type="number" value="{{$product->Price}}">
        </div>
        <div style="width:47%;margin-left:6%">
            <p>Quantity</p>
            <input  name="quantity" type="number" value="{{$product->Quantity}}">
        </div>
        <div style="width:100%;">
            <p>Product Description</p>
            <input type="file" onchange="previewFile(this)" name="file">
        </div>

        

        <p>
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Save</button>
        </p>
        
    </form> 
    
</div>