<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arshad Khan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        h1 {
            font-size: 36px;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #555;
        }
        .portfolio-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="/home">Home</a>
        <a href="/projects">Projects</a>
        <a href="/work_experience">Work Experience</a>
    </div>

    <header>
        <h1>Arshad Khan Rumman</h1>
        <p>Welcome to Arshad Khan portfolio website</p>
    </header>
    <div class="portfolio-item">
        <h1>Personal Information</h1>
        <p>Name: {{ $data['data']['Name'] }}</p>
        <p>Designation: {{ $data['data']['Designation']}}</p>
        <p>E-mail: {{ $data['data']['E-mail'] }}</p>
        <p>Phone: {{ $data['data']['Phone'] }}</p>
        <p>Address: {{$data['data']['Address'] }}</p>
   </div>

    <div class="portfolio-item">
        <h2>Vlog 1</h2>
        <p>{{ $data['data']['Volg1'] }}</p>
    </div>
    <div class="portfolio-item">
        <h2>Vlog 2</h2>
        <p>{{ $data['data']['Volg2'] }}</p>
    </div>

</body>
</html>
