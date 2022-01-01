<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="get">
        <div class="mainForm">
            <div class="row">
                <div class="lable">نام</div>
                <div class="formelement">
                    <input type="text" name="username">
                </div>

            </div>
            <div class="row">
                <div class="lable">پسوورد </div>
                <div class="formelement">
                    <input type="password" name="password">
                </div>
                
            </div>

            <div class="row">
                <input type="submit" name="btn" value="ثبت نام " class=" btn">
            </div>

        </div>
    </form>
</body>
</html>