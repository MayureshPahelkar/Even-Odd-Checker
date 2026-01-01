<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Or Odd Number Checker</title>
       <style>
        body{
            font-family: Arial, sans-serif;
            background:#dc00ff54; 
        }

        .box{
            width:350px;
            margin:80px auto;
            background:#ffffff;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
            text-align:center;
        }

        h2{
            color:#2f3640;
        }

        input{
            width:100%;
            padding:10px;
            margin:15px 0;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:10px;
            background:#40739e;
            color:white;
            border:none;
            border-radius:5px;
            font-size:16px;
            cursor:pointer;
        }

        button:hover{
            background:#273c75;
        }

        p{
            margin-top:15px;
            font-size:18px;
            font-weight:bold;
        }
    </style>
</head>
<body>
   
<div class="box">
    <h2>Even / Odd Checker</h2>

     <form method="post">
        <input type="number" name="number" placeholder="Enter a Number">
        <button type="submit" name="submit">Check</button>
    </form>

    <p>
        <?php
          if(isset($_POST['submit'])){

            $num=$_POST['number'];

                if($num === ""){
                   echo "❌ Please enter a number";
                }elseif($num%2==0){
                   echo " ✅ $num is an Even Number";
                }else{
                    echo "🔵 $num is an Odd Number";
                }
          }
        ?>
    </p>
</div>
</body>
</html>