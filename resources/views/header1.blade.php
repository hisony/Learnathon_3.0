<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navigation Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Dark Cyan Gradient Background */
        .navbar-custom {
            background: linear-gradient(90deg, #005766, #003c47); /* Darker Cyan Shades */
            padding: 12px 20px;
        }
        .navbar-brand {
            font-weight: bold;
            color: white !important;
        }
        .btn-custom {
            background-color: rgb(91, 203, 228); /* Cyan Button */
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-custom:hover {
            background-color: rgb(103, 153, 171); /* Slightly Darker Cyan */
        }
        .btn-danger {
            background-color: #a8232e;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-danger:hover {
            background-color: #821b24;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-custom">
        <a class="navbar-brand" href="#">Learning With Fun</a>
        <div>
            <a class="btn btn-custom me-2" href="/">Home</a>
            <a class="btn btn-custom me-2" href="/login">Login</a>
            <a class="btn btn-custom" href="/registration">Registration</a>
        </div>
    </nav>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
