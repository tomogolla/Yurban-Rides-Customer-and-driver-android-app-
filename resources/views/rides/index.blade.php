<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rides</title>
</head>
<body>
    <h1>Ride List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer ID</th>
                <th>Driver ID</th>
                <th>Status</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rides as $ride)
            <tr>
                <td>{{ $ride->id }}</td>
                <td>{{ $ride->customer_id }}</td>
                <td>{{ $ride->driver_id }}</td>
                <td>{{ $ride->status }}</td>
                <td>{{ $ride->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
