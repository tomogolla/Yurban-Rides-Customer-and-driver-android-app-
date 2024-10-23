<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    @auth
        <h1>Welcome to the Dashboard</h1>        
    
        <h2>Actions</h2>
        <ul>
            <li><a href="/customers">Manage Customers</a></li>
            <li><a href="/drivers">Manage Drivers</a></li>
            <li><a href="/rides">Manage Rides</a></li>
        </ul>
        <a href="/dashboard">Go to Dashboard</a>
        <form action="/logout" method="POST">
            @csrf
            <button>Log Out</button>
        </form>
    @else
        <div style="border: 3px solid black;">
            <h2>Register</h2>
            <form action="/register" method="POST">
                @csrf
                <input name="name" type="text" placeholder="Name">
                <input name="email" type="text" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <button>Register</button>
            </form>
        </div>

        <div style="border: 3px solid black;">
            <h2>Login</h2>
            <form action="/login" method="POST">
                @csrf
                <input name="loginname" type="text" placeholder="Name">
                <input name="loginpassword" type="password" placeholder="Password">
                <button>Login</button>
            </form>
        </div>
    @endauth
</body>
</html>
