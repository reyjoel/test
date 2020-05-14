<!DOCTYPE html>
<html>
    <head>
        <title>Exam</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <button class="add">Create New Article</button>
        <div class="add_article hidden">
            <ul>
                <li>
                    Title: <input type="text" class="add_title" value="">
                </li>
                <li>
                    Content: <textarea class="add_content"></textarea>
                </li>
                <li>
                    <button class="submit">Submit</button>
                </li>
            </ul>
        </div>

        <div class="container">
            <div class="row article">
                <h1>Artical Title</h1>
                <p>
                    This is a content
                </p>
                Created Date:
                <button class="edit">Edit</button>
                <button class="del">Delete</button>
            </div>
        </div>
        
    </body>
    <script src="local.js"></script>
</html>