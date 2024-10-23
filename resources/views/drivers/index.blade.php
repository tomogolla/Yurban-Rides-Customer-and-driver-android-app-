<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drivers</title>
</head>
<body>
    <h1>Driver List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>License Number</th>
                <th>Vehicle Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $driver)
            <tr>
                <td>{{ $driver->id }}</td>
                <td>{{ $driver->name }}</td>
                <td>{{ $driver->license_number }}</td>
                <td>{{ $driver->vehicle_type }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
