<div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
        background: linear-gradient(135deg, #43a047 0%, #1e88e5 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .login-container {
        max-width: 400px;
        padding: 40px;
        background: rgba(255, 255, 255, 0.98);
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        backdrop-filter: blur(8px);
        transition: transform 0.3s ease;
    }
    .login-container:hover {
        transform: translateY(-3px);
    }
    .login-header {
        text-align: center;
        margin-bottom: 35px;
    }
    .login-header img {
        width: 100px;
        height: 100px;
        object-fit: contain;
        margin-bottom: 15px;
        filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.15));
        transition: transform 0.3s ease;
    }
    .login-header img:hover {
        transform: scale(1.05);
    }
    .login-header h2 {
        margin-bottom: 10px;
        font-weight: bold;
        color: #1a237e;
        font-size: 26px;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 1.8rem;
        position: relative;
    }
    .form-control {
        border-radius: 8px;
        padding: 12px 20px;
        border: 2px solid #e3f2fd;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.9);
    }
    .form-control:focus {
        box-shadow: 0 0 0 3px rgba(30, 136, 229, 0.2);
        border-color: #1e88e5;
    }
    .btn-login {
        width: 100%;
        border-radius: 8px;
        padding: 12px;
        background: linear-gradient(45deg, #43a047, #1e88e5);
        border: none;
        color: white;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }
    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(30, 136, 229, 0.3);
        background: linear-gradient(45deg, #388e3c, #1976d2);
    }
    .text-center {
        margin-top: 25px;
        color: #546e7a;
    }
    .text-center a {
        color: #1e88e5;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    .text-center a:hover {
        color: #43a047;
        text-decoration: underline;
    }
    .form-control {
        transform-origin: left;
        animation: slideIn 0.5s ease forwards;
        opacity: 0;
    }
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-10px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    </style>
</head>

<body>
    {{$slot}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
</div>
