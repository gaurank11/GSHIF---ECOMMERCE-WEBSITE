<style>
        .section2 .container{  
     display:flex;  
     width:100%;  
     height:max-content;  
     flex-wrap: wrap;  
     justify-content:center;  
     margin:10px auto;  
   }  
  .section2 .container .items{  
    margin: 10px;  
    width:200px;  
    height: 300px;  
    background-color:white;  
    border:2.5px solid black;  
    border-radius: 12px;  
  }  
  .section2 .container .items .name{  
  text-align:center;  
  background-color:rgb(240, 197, 6);  
  height:25px;  
  padding-top:4px;  
  color:white;  
 margin: 0;  
    }  
    .section2 .container .items .price{  
  float:left;  
  padding-left:10px;  
  display: block;  
  width:100%;  
  color:rgb(255, 0, 0);  
  font-weight: 650;  
    }  
    .section2 .container .items .info{  
      padding-left:10px;  
      color:rgb(243, 168, 7);  
    }  
    .section2 .container .items .img img{  
  width:200px;  
  height:200px;  
  margin: 0;  
  padding: 0;  
  border-radius:12px;  
  transition-duration:0.8s;  
    }  
    .section2 .container .items .img {  
      overflow: hidden;  
  margin: 0;  
   }  
    .section2 .container .items:hover .img img{  
      transform: scale(1.2);  
           transition-duration:0.8s;  
     border-radius:12px;  
    }  
    </style>