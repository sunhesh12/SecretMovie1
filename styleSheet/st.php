<?php 
    header('Content-type:text/css; charset:UTF-8');
?>
.cart {
    text-align: center;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    max-width: 110%;
    max-height: 100%; 
    display: flex;
    overflow-x: auto; 
    flex-wrap: wrap; 
}
/* cart:hover{
    box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 1rem #6200ff,
    0 0 0.8rem #ffffff,
    0 0 2.8rem #ffffff,
    inset 0 0 1.3rem #ffffff;
} */
.product {
    border: 2px solid #ffffff;
    border-radius: 10px;
    padding: 10px;
    margin: 10px;
    height: 300px;
    text-align: center;
    width: 180px;
    box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 0.5rem #eff0ac,
    <!-- /* 0 0 0.8rem #ffffff, */ -->
    <!-- /* 0 0 2.8rem #ffffff, */ -->
    inset 0 0 1.3rem #ffffff;
}
.product h3 ,p
{
    color: #f1f1f1;
}

.product img {
    max-width: 100px;
    border-radius: 10px;
    height: 150px;
}

.add-to-cart {
    background-color: #eef3f0;
    border-radius: 40px;
    font-weight: bold;
    color: #0d26b8;
    border: none;
    padding: 15px 9px;
    cursor: pointer;
    transition: all 0.4s;
    box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 0.5rem #eff0ac,
    /* 0 0 0.8rem #ffffff, */
    /* 0 0 2.8rem #ffffff, */
    inset 0 0 1.3rem #ffffff;
}
.search1{
    background-color:transparent;
    border-radius: 40px;
    font-weight: bold;
    color: #0d26b8;
    border: none;
    padding: 15px 9px;
    cursor: pointer;
    transition: all 0.4s;
    box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 0.5rem #eff0ac,
    /* 0 0 0.8rem #ffffff, */
    /* 0 0 2.8rem #ffffff, */
    inset 0 0 1.3rem #ffffff;
    height:40px;
    margin-top: 5px;
    width:40px;
    position: relative;
    display: flex;
    justify-content: center; /* Horizontal centering */
    align-items: center; /* Vertical centering */
    text-align: center; /* Horizontal centering for text */
    
    
}  
.add-to-cart:hover{
    
    background-color: rgb(4, 0, 255);
    width: 150px;
    color: rgb(255, 255, 255);
    box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 0.5rem #eff0ac,
    /* 0 0 0.8rem #ffffff, */
    /* 0 0 2.8rem #ffffff, */
    /* inset 0 0 1.3rem #ffffff; */
} 

.Watch-Now:hover{
    background-color: green;
    width: 150px;
    color: rgb(255, 255, 255);
    box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 0.5rem #eff0ac,
    /* 0 0 0.8rem #ffffff, */
    /* 0 0 2.8rem #ffffff, */
    /* inset 0 0 1.3rem #ffffff; */

}

.search1:hover{
    content:"Search Movie";
    background-color:transparent;
    width: 80px;
    color: rgb(255, 255, 255);
    box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 0.5rem #eff0ac,
    /* 0 0 0.8rem #ffffff, */
    /* 0 0 2.8rem #ffffff, */
    /* inset 0 0 1.3rem #ffffff; */
}

.delete-watch-button{
    text-align: center;
    height: 150px; 
    width:200px; 
    background-color:transpereant;
    margin-left:950px;
    margin-top:-160px;
}
.delete-button{
    height: 60px; 
    width:200px; 
    <!-- background-color: -->
    margin-top:20px;

}
.watch-button{
    height: 60px; 
    width:200px; 
    <!-- background-color:transpereant; -->
    margin-top:20px;
}