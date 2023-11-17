<?php 
    header('Content-type:text/css; charset:UTF-8');
?>
body {
    margin: 0;
    margin-top: 0px;
    margin-left: 0px;
    border: none;
    overflow: hidden; /* Remove default body margin and scrolling */
    /* background-color: rgb(255, 255, 255); */

}

.container {
    position: relative;
    /* margin: 0; */
    width: 100%;
    height: 100vh; /* 100% of viewport height */
    display: flex;
    justify-content: flex-start; /* Align container to the left of the viewport */
    Overflow-y:hide; 
    background-color: rgba(121, 173, 207, 0.774);

}

.img1{
    height: 100%;
    width: 100%;
    left :10px;
    position: absolute;
    box-shadow: 0 0 .2rem #ffffff,
    0 0 .2rem #ffffff,
    0 0 0.5rem #ffffff,
    /* 0 0 0.8rem #ffffff, */
    /* 0 0 2.8rem #ffffff, */
    inset 0 0 1.3rem #ffffff;
}

.transparent-box {
    width: 30rem;
    height: 20rem;
    box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
    border-radius: 10px;
    background-color: rgba(255, 255, 255, .50);
    backdrop-filter: blur(10px);
    
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    position: absolute;
    background-color: rgba(79, 78, 78, 0.2); /* Adjust the transparency as needed */
    width: 90%; /* Adjust the width of the transparent box as needed */
    height: 80%; /* Adjust the height of the transparent box as needed */
    top: 17%; /* Adjust the top position to center vertically */
    left: 5%; /* Adjust the left position to center horizontally */
    Overflow-y:scroll; 
    Overflow-x:scroll; 
    overflow: auto;
    box-shadow: 0 0 .2rem #ffffff,
    /* 0 0 .2rem #ffffff, */
    /* 0 0 0.5rem #ffffff, */
    /* 0 0 0.8rem #ffffff, */
    /* 0 0 2.8rem #ffffff, */
    inset 0 0 1.3rem #ffffff;
    
    &::-webkit-scrollbar {
        width: 10px;
        height: 10px;
      }
      &.more-width::-webkit-scrollbar{
        width: 14px;
      }

      
}

/*Scrollbar cuztermizing=================================START=============================*/
/* width */
::-webkit-scrollbar {
    width: 10px;
    height: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px rgba(255, 255, 255, 0.1); 
    border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: rgba(43, 41, 42, 0.7); 
    border-radius: 10px;

}

.singUp{
    width: 150px;
    font-weight: bold;
    height: 35px;
    border-radius: 50px;
    border: none;
    transition: all 0.2s; 
    text-decoration: none;
    color: black;
    margin-top: 10px;
    box-shadow: 0 0 .2rem #ffffff,
    0 0 .2rem #ffffff,
    0 0 0.5rem #01fdfd,
    0 0 0.8rem #ffffff,
    /* 0 0 2.8rem #ffffff, */
    inset 0 0 1.3rem #ffffff;
    

}
.singUpDiv{
    /* background-color: rgb(55, 0, 255); */
    width: 100%;
    height: 60px;
    position: relative;
    top: 100px;
    text-align: center;
}
.logIn{
    width: 150px;
    font-weight: bold;
    height: 35px;
    border-radius: 50px;
    border: none;
    transition: all 0.2s; 
    text-decoration: none;
    color: black;
    font-size: larger;
    width: 200px; 
    height: 50px; 
    font-size: medium;
    text-decoration: none;
    box-shadow: 0 0 .2rem #ffffff,
    0 0 .2rem #ffffff,
    0 0 0.5rem #01fdfd,
    0 0 0.8rem #ffffff,
    /* 0 0 2.8rem #ffffff, */
    inset 0 0 1.3rem #ffffff;
}

.usernm,.pass{
    position: relative;
    padding-left: 10px;
    border-radius: 50px;
    width: 80%;
    height: 80%;
    padding: 20px,10px,10px;
    /* background-color: transparent; */
    outline: none;
    box-shadow: none;
    font-weight: bolder;
    font-size: medium;
    border: none;
    box-shadow: 0 0 .2rem #ffffff,
    0 0 .2rem #ffffff,
    0 0 0.5rem #01fdfd,
    /* 0 0 0.8rem #ffffff, */
    /* 0 0 2.8rem #ffffff, */
    inset 0 0 1.3rem #ffffff;
    
}
.singupDiv{
    height: 50px; 
    width: 450px; 
    margin-top: 20px;
    margin-left: 25px;
    display: flex; 
    justify-content: center; 
    align-items: center;
}

transparent-box ::before{
    content: '';
    position: absolute;
    top:-50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
    z-index: 1;
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}
@keyframes animate{
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}

::placeholder {
    color: rgb(0, 0, 0);
    font-weight: bold;
    opacity: 90%; /* Firefox */
  }

  .Hlogin,.HlogOut{
    < position: absolute; 
    width: 100px; 
    height: 50px; 
    border-radius:50px; 
    font-weight: bold;
    border: none;
    box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 0.5rem #eff0ac,
     0 0 0.8rem #ffffff, 
     0 0 2.8rem #ffffff, 
     inset 0 0 1.3rem #ffffff; 
    transition: all 0.3s; 
    display: block;
    color: ;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    background-color:transparent;
  }

  .divHLog{
    height: 50px; 
    width: 80px; 
    margin-top: 0px;
    margin-right: 85px;
    right: 20px;
    position: absolute;
    display: flex; 
    justify-content: center; 
    text-align: center;
  }

    /* Style for the navigation bar =============================================================*/
.navbar {
    overflow: hidden;
}

/* Style for the navigation bar links */
.navbar a {
    float: left;
    font-size: 16px;
    color: #3b18e8;
    font-weight: bolder;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Style for the search bar */
.search-bar {
    float: left;
    margin: 6px 10px;
    position: relative;
    /* width: 80%;
    height: 90%; */
    padding: 20px,10px,10px;
    background-color: transparent;
    outline: none;
    box-shadow: none;
    font-weight: bolder;
    font-size: medium;
    border-radius: 30px;
    border-color: #3b18e8;

}
.navbar a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover {
    color: black;
   
    box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 0.5rem #eff0ac,
     0 0 0.8rem #ffffff, 
     0 0 2.8rem #ffffff, 
    inset 0 0 1.3rem #ffffff;
}

/* Style for the cart icon */
.cart1 {
    float: right;
    font-size: 20px;
    color: rgb(255, 255, 255);
    text-align: center;
    padding: 14px 16px;
}
/*======================Navigation bar settings==END=====================*/


/* flip cart  */
.flip-card {
    border: 2px solid #ffffff;
    border-radius: 10px;
    padding: 10px;
    margin: 10px;
    height: 300px;
    text-align: center;
    width: 180px;
    width: 200px;
    height: 300px;
    perspective: 1000px;

  }
  
  .flip-card-inner {
    width: 100%;
    height: 100%;
    transition: transform 0.5s;
    transform-style: preserve-3d;
    box-shadow: 0 0 .2rem #fff,
    0 0 .2rem #fff,
    0 0 0.5rem #eff0ac,
    /* 0 0 0.8rem #ffffff, */
    /* 0 0 2.8rem #ffffff, */
    inset 0 0 1.3rem #ffffff;
  }
  
  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }
  
  .flip-card-front,
  .flip-card-back {
    width: 100%;
    height: 100%;
    position: absolute;
    backface-visibility: hidden;
  }
  
  .flip-card-front {
    background-color: #f3f3f3;
  }
  
  .flip-card-back {
    background-color: #ffffff00;
    color: white;
    transform: rotateY(180deg);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  /* ================================================================================================
  ================================================================================================ */

  /* Style for the shopping cart icon and item count */
  /* .cart {
      position: relative;
      display: inline-block;
  }

  .cart img {
      width: 50px;
      height: 50px;
  }

  .item-count {
      position: absolute;
      top: -10px;
      right: -10px;
      background-color: rgba(252, 252, 252, 0.267);
      color: rgb(0, 0, 0);
      border-radius: 50%;
      padding: 5px 10px;
      font-size: 16px;
  } */

  .Watch-Now{
    width:120px;
    background-color: #eef3f0;
    border-radius: 40px;
    font-weight: bold;
    margin-top:10px;
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
  .delete-Now{
    width:120px;
    background-color: #eef3f0;
    border-radius: 40px;
    font-weight: bold;
    margin-top:10px;
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


  @import url('https://fonts.googleapis.com/css?family=Bad+Script');
        .neon-logo{
            font-family: 'Bad Script',cursive ;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 20vh;
            /* background: rgba(121, 173, 207, 0.774); */
        }
        .neon-h1{
            margin: 0;
            padding: 0;
            color: rgba(121, 173, 207, 0.774);;
            font-size: 5em;
        }
        .neon-h1 span{
            display: table-cell;
            margin: 0;
            padding: 0;
            animation: animate 2s linear infinite;
        }
        .neon-h1 span:nth-child(1){
            animation-delay: 0s;
        }
        .neon-h1 span:nth-child(2){
            animation-delay: 0.25s;
        }
        .neon-h1 span:nth-child(3){
            animation-delay: 0.5s;
        }
        .neon-h1 span:nth-child(4){
            animation-delay: 0.75s;
        }
        .neon-h1 span:nth-child(5){
            animation-delay: 1s;
        }
        .neon-h1 span:nth-child(6){
            animation-delay: 1.25s;
        }
        .neon-h1 span:nth-child(7){
            animation-delay: 1.5s;
        }
        .neon-h1 span:nth-child(8){
            animation-delay: 1.75s;
        }

        @keyframes animate{
            0%,100%{
                color:#ffffff;
                filter: blur(2px);
                text-shadow: 0 0 10px #ffffff,
                0 0 10px #ffffff,
                0 0 20px #00b3ff,
                0 0 40px #00b3ff,
                0 0 80px #00b3ff,
                0 0 120px #00b3ff,
                0 0 200px #00b3ff,
                0 0 300px #00b3ff,
                0 0 400px #00b3ff;

            }
            10%,90%{
                color:rgba(121, 173, 207, 0.774);
                filter: blur(0px);
                text-shadow: none;
            }}
 

