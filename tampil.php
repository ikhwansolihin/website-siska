<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikhwan Siska</title>
    <style>
      *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Courier New', Courier, monospace;
}
body
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #07252d;
}
h1
{
    display: flex;
    /* color: transparent; */
    font-size: 8vw;
  width: 90%;
}
h1 span
{
    animation: animate 3s linear infinite;
    animation-delay: calc(0.1s * var(--1));
}

h2
{
    position: relative;
    font-size: 3em;
    letter-spacing: 15px;
    color: #0e3742;
    text-transform: uppercase;
    width: 70%;
    text-align: center;
    -webkit-box-reflect: below 1px linear-gradient(transparent,#0008);
    line-height: 0.70em;
    outline: none;
    animation: animate 5s linear infinite;
}
@keyframes animate
{
    0%,18%,20%,50.1%,60%,65.1%,80%,90.1%,92%
    {
        color: #0e3742;
        text-shadow: none;
    }
    18.1%,20.1%,30%,50%,60.1%,65%,80.1%,90%,92.1%,100%
    {
        color: #fff;
        text-shadow: 0 0 10px #03bcf4,
                     0 0 20px #03bcf4,
                     0 0 40px #03bcf4,
                     0 0 80px #03bcf4,
                     0 0 160px #03bcf4;
    }
}
.action-btn {
    display: inline-block;
    text-decoration: none;
    color: white;
    font-weight: 700;
    background: linear-gradient(90deg,#a701c8,#55e7fc);
    padding: 0.5em 2em;
    border-radius: 60px;
    margin: 1em 0;
    transition: 0.3s;
  }
    </style>
</head>
<body>
    <center>
    <h1>
        <span style="--i:1;">H</span>
        <span style="--i:2;">A</span>
        <span style="--i:3;">P</span>
        <span style="--i:4;">P</span>
        <span style="--i:5;">Y</span>
        <span style="--i:6;margin-left:3vw;">B</span>
        <span style="--i:7;">I</span>
        <span style="--i:8;">R</span>
        <span style="--i:9;">T</span>
        <span style="--i:10;">H</span>
        <span style="--i:11;">D</span>
        <span style="--i:12;">A</span>
        <span style="--i:13;">Y</span>
    </h1>
    <h2>SISKA KARTIKA</h2>
    <br>
       <br>
       <br>
    <h4><a class="action-btn" href="tampil1.html">surprise 1</a></h4>
    <h4><a class="action-btn" href="tampil2.html">surprise 2</a></h4>
    </center>
</body>
</html>