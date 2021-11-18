<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{margin: 0; padding: 0; box-sizing: border-box;}
        h1{ 
            text-align: center;
            line-height: 20vh;
            color: blue;
            font-size: 3.5rem;
        }
        .maindiv{
            width: 100%;
            height: 80vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .left img{
width: 430px;
height: 300px;
border-radius:15px;
        }
        .right{
width: 400px;
height: 300px;
background-color: #F97F51;
border-radius:15px;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
        }
p{
    margin-top: 20px;
}
.in1{
    width: 250px;
    height: 40px;
    padding: 5px;
    outline: none;
    border: 1px solid red;
    border-radius: 5px;

}
.selection{
    width: 100%;
    margin: 20px 0;
}
.btn{
padding: 10px 16px;
border-radius: 5px;
outline: none;
border:none ;
background-color:blue ;
color: white;
font-size: 0.9rem;

}
@media (max-width:500px){
    html{
        font-size: 50%;    
    }
    h1{
        font-size: 30px;
        font-weight: bold;
    }
.maindiv{
    display: block;
margin-left: 12px;
}
.left img{
    width: 330px;
    margin-top: 20px;
}
.right{
    width: 330px;
    margin-top: 20px;
}
.selection{
    width: 100%;
    margin: 20px 0;
    font-size: 20px;
}
.btn{
padding: 10px 10px;
border-radius: 5px;
outline: none;
border:none ;
background-color:blue ;
color: white;
font-size: 1.9rem;

}
p{
    margin-top: 20px;
    font-size:20px;
}
}
    </style>
</head>
<body>
    <h1>Temperature Converture</h1>
    <div class="maindiv">
        <div class="left">
<img src="./img/p4.jfif">
        </div>
        <div class="right">
           <form method="POST">
               <input type="text" name="num" placeholder="Enter Value" class="in1">
                <div class="selection">
                    <label>Calcious</label>
                    <input type="radio" name="unit" value="cel">
                    <label>Farenheit</label>
                    <input type="radio" name="unit" value="feh">
                </div>
                <input type="submit" name="submit" value="Convert now" class="btn">
           </form>

<div>
    <p>
<?php
if(isset($_POST['submit'])){
    $num=$_POST['num'];
    $temp=$_POST['unit'];
    if($temp=="cel"){
        $result=$num*9/5 + 32;
        echo "Farenheit = $result";
    }
    else {
        $result= ($num-32)*5/9;
        echo "Celcious = $result";
    }

}
?>
    </p>
</div>

        </div>
    </div>
</body>
</html>