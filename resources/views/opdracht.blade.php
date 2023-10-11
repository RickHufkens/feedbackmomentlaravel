{{$name}}
<table>
    <tr>
    <th>Name</th>
    <th>Origin</th>
    <th>Stock</th>
    <th>Price</th>
    </tr>
@foreach($fruits as $fruit)
    <tr>
        <td>{{$fruit->name}}</td>
        <td>{{$fruit->origin}}</td>
        <td>{{$fruit->stock}}</td>
        <td>{{$fruit->price}}</td>
    </tr>
@endforeach
</table>