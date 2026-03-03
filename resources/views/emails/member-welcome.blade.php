<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Rotadata!</title>
</head>
<body>
    <h2>Hello {{ $user->name }}!</h2>
    <p>Your account has been created by your admin.</p>
    
    <div style="background: #f0f8ff; padding: 20px; border-left: 4px solid #2196F3;">
        <h3>Login Details:</h3>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Temporary Password:</strong> {{ $password }}</p>
        <p><em>Please change your password after first login.</em></p>
    </div>
    
    <p>Login here: <a href="http://127.0.0.1:8000/login">Rotadata Login</a></p>
    
    <p>Best regards,<br>Rotadata Team</p>
</body>
</html>
