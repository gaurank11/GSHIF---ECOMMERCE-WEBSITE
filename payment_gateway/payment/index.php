<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<style>
 .form{
    background-color:white;
    height:300px;
    width:300px;
    display:block;
    margin:200px 600px;
    border-radius:4px;
    border:4px solid black;
 }


 .text{
    background:none;
        width:300px;
        position:absolute;
        margin-top:20px;
        margin-left:20px;

 }
    

    .btn{
        background:#666;
        width:100px;
        position:absolute;
        margin-top:30px;
        margin-left:20px;

    }

    .logo img{
        width:50px;
        position:absolute;
        margin-top:7px;
        margin-left:120px;
    }

    .heading{
       
        position:absolute;
        margin-top:50px;
        margin-left:50px;
    }

    </style>
<form>
    <div class="form">

    <div class="logo">
        <img src="gshiflogo.ico"><h4>
     
        <div class="heading">
            <h5>Please Enter details and Proceed to pay<h5>
        <div class="text">
    <input type="textbox" name="name" id="name" placeholder="Enter your name"/><br/><br/>
    
    <input type="button" name="btn" class="btn" value="Pay Now" onclick="pay_now()"/>
</div>
</form>

<script>
    function pay_now(){
        var name=jQuery('#name').val();
        var amt=jQuery('#amt').val();
        
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+amt+"&name="+name,
               success:function(result){
                   var options = {
                        "key": "rzp_test_IsLKLWoMsXeUEG", 
                        "amount": 500*100, 
                        "currency": "INR",
                        "name": "G-SHIF",
                        "description": "Secure Payment",
                        "image": "gshiflogo.ico",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>