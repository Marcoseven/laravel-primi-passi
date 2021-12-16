<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
       /* common_general_rules */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /* /common_general_rules */

        h2 {
            text-align: center;
            margin: 1rem 0;
            font-size: 30px;
        }

        ul{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 2rem 0;
            list-style: none;
        }

        li{
            margin: 0 1rem;
            text-align: center;
            text-align: decoration;
        }

        a {
            text-decoration: none;
            text-align: center;
        }

        img{
            width: 100px;
        }

        #laravel img{
            width: 150px;
        }

   </style>
    <title>Contacts page</title>
</head>
<body>
    <h2>Contacts page</h2>
    <ul>
        <li>
            <a href="https://github.com/Marcoseven">
                <img src="https://loghi-famosi.com/wp-content/uploads/2021/01/GitHub-Logo.png" alt="logo GitHub">
            </a>
        <li>
            <a id="laravel" href="https://laravel.com/">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Logo.min.svg/2560px-Logo.min.svg.png" alt="logo Laravel">
            </a>
        </li>
        <li>
            <a href="https://laracasts.com/">
                <img src="data:image/png;base64,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" alt="logo Laracasts">
            </a>
        </li>
    </ul>
</body>
</html>