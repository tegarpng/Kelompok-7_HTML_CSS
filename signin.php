<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <style> link rel = "stylese sheet" href="style.css"</style>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .card-flex {
      display: flex;
      min-height: 70vh; /* biar full tinggi layar */
    }

    .card-flex > div {
      flex: 1; /* otomatis bagi rata */
      padding: 10px;
      
    }

    footer {
      
    }
  </style>
</head>
<body>

  <div class="card-flex">
    <div style = "margin-left: 20px;">
        <p>Login</p>
        <h2 style = "text-align: center;">Log In</h2>
        <p style = "text-align: center;"> Lorem ipsum dolor sit amet adipiiscing elit.</p><br>

        <form action="" style = "margin-left: 20px; margin-right: 30px"> 
      <label >Email*</label><br> 
      <input type="email*" style = "color: black; padding: 5px; border: solid 1px black; width: 100%; margin-right: 20px"><br><br> 
      <div style="display:flex; justify-content:space-between; align-items:center;">
  <label for="password">Password*</label>
  <a href="/forgot-password" style="font-size:14px; color:black;">
    forgot your password?
  </a>
</div> 
      <input type="password*" style = "color: black; padding: 5px; border: solid 1px black; width: 100%; margin-right: 20px">
       </form><br>
      <button style=" display: block; color:white; width: 94%; background-color:black; padding:10px; text-align: center;  margin-left: 20px;"> sign up </button><br> 
      <button style = "display: block; color: black; width: 94%; padding: 10px; border: solid 1px black; text-align: center; margin-right: 20px; margin-left: 20px"> 
        <img src= "gugel.jpg" 
       alt=""  style="width:15px; height:15px; margin-right: 5px;"> Sign Up with Google</button>
      <p style = "text-align: center;"> Don't have an account? Sign Up </p>
    </div>        
    <div>
      <img src="kopi.jpg" alt="" style = "width: 800px; height: 550px">
    </div>
   
  </div>
  <footer style = "margin-left: 20px;">© 2025 NamaKelompok</footer>

</body>
</html>