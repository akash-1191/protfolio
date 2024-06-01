<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card with Shadow</title>
    <style>
        body {
            background-color: #000000; /* Black background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #808080; /* Gray background */
            width: 18rem; /* Adjust width as needed */
            padding: 1rem;
            border-radius: 0.75rem; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Dark gray shadow */
            transition: transform 0.5s;
        }
        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="card">
        <p>Transaction details go here</p>
    </div>
</body>
</html>
