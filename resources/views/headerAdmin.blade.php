<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
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
            background-color:rgb(91, 203, 228); /* Very Dark Cyan */
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color:rgb(103, 153, 171); /* Lighter Cyan on Hover */
        }
        .btn-danger {
            background-color: #a8232e;
            border: none;
        }
        .btn-danger:hover {
            background-color: #821b24;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-custom">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <div>
            <a class="btn btn-custom me-2" href="/admin">Add Course</a>
            <a class="btn btn-custom me-2" href="/courses">Existing Courses</a>
            <a class="btn btn-danger" href="/login">Log Out</a>
        </div>
    </nav>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
