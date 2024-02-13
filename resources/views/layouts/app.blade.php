<!DOCTYPE html> 
<html lang="en"> 
<head> 
 <meta charset="UTF-8"> 
 <title>COMP3385 - Lab 1</title> 
 <link rel="stylesheet" href="{{ url('/css/app.css') }}" />
</head> 
<body> 
 <header> 
 <h1>COMP3385 - Lab 1</h1> 
 <img src="/public/images/penguin.png" alt="It's a penguin!"/>
 </header> 
 <main> 
 @yield('content') 
 </main> 
 <footer> 
 <p>Copyright &copy; 2024, COMP3385 Inc.</p> 
 </footer> 
</body> 
</html>