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
        <a href="/">Home</a>
        <a href="/projects">Projects</a>
        <a href="/work_experience">Work Experience</a>
        <a href="/show">Blog</a>
    </div>

    <header>
        <h1>Arshad Khan Rumman</h1>
        <p>Welcome to Arshad Khan portfolio website</p>
    </header>
    <section class="blogUpload">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col">
                    <div class="text-center fw-3 ">
                        <h3>Upload Your Blog</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="blogForm">
                        <div class="form-container">
                            <form id="upload-form "

                                enctype="multipart/form-data">
                                <form action="{{ route('projects') }}"
                                method="POST">
                                @csrf
                                @method('post')
                                <div class="formWrapper">
                                    <div class="formGroupWrapper d-flex justify-content-between">
                                        <div class="form-group textInput mr-3">
                                            <label for="name">Text:</label>
                                            <textarea type="text" id="name" placeholder="Write your blog..." cols="100" rows="10"></textarea>
                                        </div>
                                        <div class="formGroupPreviewWrapper">
                                            <div class="form-group imageInput">
                                                <label for="image-input">Image:</label>

                                                <input type="file" id="file-input" name="files" multiple>
                                            </div>
                                            <div>
                                                <div id="image-preview"
                                                    class="image-preview d-flex justify-content-between"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="formBtn">
                                    <button class="m-auto" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
