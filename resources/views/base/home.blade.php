
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Laravel</title>

    
        <style type="text/css">
            .container0 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  background-image: url("../public/assets/img/81744.jpg");
  
}

.container {
  width: 790px;
  background: #fff;
  border-radius: 2px;
  padding: 55px 95px 68px 95px;
}
button {
  font-family: Raleway-SemiBold;
  font-size: 13px;
  color: purple;
  line-height: 1.5;
  text-transform: uppercase;
  width: 50%;
    width: calc((50% - 40px) / 2);
  padding-bottom: 11px;
margin-left: 40%;
  margin-top: 3%;
  float: left;
}
        </style>
    
    
    </head>
    <body>
        
    <div class="container0">
	<div class="container">
        <form action="{{url('login')}}" method="get">
            @csrf
            <button type="submit" class="a1">
                Login
            </button>
    </div>
    </div>
        </form>
    </body>
</html>