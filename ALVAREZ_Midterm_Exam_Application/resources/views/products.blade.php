<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>

    <style>
        body {
            margin: 0;
            font-family: Century Gothic, sans-serif;
            background: url('/images/bg.png') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
			text-transform: uppercase;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Product List</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Brand</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>₱{{ $product['price'] }}</td>
            <td>{{ $product['brand'] }}</td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>