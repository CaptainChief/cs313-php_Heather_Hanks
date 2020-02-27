var http = require('http');
var hostname = 'localhost';
var port = 8888
var server = http.createServer(Request);

 function Request(req, res)
 {

   if(req.url == '/home')
   {
      res.writeHead(200, {'Conent-Type': 'text/html'});
      res.write('<div style="text-align: center">');
      res.write('<h1> Welcome to the Home Page!!! </h1></div>');
      res.end();
   }
   else if(req.url == '/getData')
   {
      res.writeHead(200, {'Content-Type': 'application/json'});
      // res.write('html: <div style="text-align: center">');
      res.write('<b> {"name" : "Heather Hanks", "class" : "cs313"} </b></div>');
      res.end();
   }
   else if(req.url == '/add')
   {
      res.writeHead(200, {'Content-Type': 'text/html'});
      res.write('<hr><form action="" method="POST">');
      res.write('<div style="text-align: center">');
      res.write('Input number 1: <input type="text" id="num1"></text><br><br>');
      res.write('Input number 2: <input type="text" id="num2"></text><br><br>');
      res.write('<script> function blue(num1, num2){ alert(parseInt(num1, 10) + parseInt(num2, 10));} </script>');
      res.write('<input type="button" onclick="blue(document.getElementById(\'num1\').value, document.getElementById(\'num2\').value)" value="Click to Add!">  </button></div></form><hr>');
      res.end();
   }
   else
   {
      res.writeHead(404, {'Content-Type': 'text/html'});
      res.end();
   }
 }

 server.listen(port, hostname, () => 
 {
   console.log(`Server running at http://${hostname}:${port}/`);
 });




