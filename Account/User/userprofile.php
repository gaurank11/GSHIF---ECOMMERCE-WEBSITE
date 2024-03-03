<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link rel="stylesheet" href="style.css">

    <style>
     *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.container{
    max-width: 80%;
    margin:20px auto;
    padding: 20px;

}
.container h2{
    text-align: center;
}
.allbox{
    display: flex;
}
.box1{
    width: 25%;
    height: 160px;
    margin: 40px 50px;
    text-align: center;
    box-shadow: 2px 2px 4px grey;
    padding: 9px;
}
.box1 h3{
    margin: 5px;
}
.box1 p{
    opacity: 0.6;
}
.pic{
    height: 90px;
    width: 90px;
}
    </style>
</head>
<body>
    <div class="container">
        <h2>Customer Dashboard</h2>
        <div class="allbox">

            <div class="box1">
                <h3>Edit Profile</h3>
              <a href=""> <img class="pic"src="https://img.icons8.com/color/344/circled-user-male-skin-type-7--v1.png" alt=""></a>
            </div>
            <div class="box1">
                <h3>Customer Order</h3>
                <a href=""><img class="pic"src="https://cdn.icon-icons.com/icons2/362/PNG/512/Order_36735.png" alt=""></a>
            </div>
            <div class="box1">
                <h3> Order history </h3>
                <a href=""><img class="pic"src="https://cdn.icon-icons.com/icons2/1369/PNG/512/-history_89998.png" alt=""></a>
            </div>
        </div>
        <div class="allbox">

            <div class="box1">
                <h3> Help Center</h3>
                <a href="\php_practice\chatbot\index.html"><img class="pic"src="https://cdn.icon-icons.com/icons2/2270/PNG/512/support_call_center_help_information_customer_service_icon_140644.png" alt=""></a>
            </div>
            <div class="box1">
                <h3> Review </h3>
                <a href=""><img class="pic"src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/344/external-review-social-media-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png" alt=""></a>
            </div>
            <div class="box1">
                <h3> Wishlist</h3>
                <a href=""><img class="pic"src="https://cdn.icon-icons.com/icons2/2869/PNG/512/wishlist_icon_181875.png" alt=""></a>
            </div>
        </div>
    </div>
    
</body>
</html>