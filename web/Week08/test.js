var http = require('http');
var hostname = 'localhost';
var port = 8888
var server = http.createServer(Request);
// http.createServer(Request())
// {
//    res.writeHead(200, {'Content-Type': 'text/html'});
//    res.end('Hello World!');
//  }).listen(8080);

 function Request(req, res)
 {
   if(req.url == '/home')
   {
      res.writeHead(200, {'Conent-Type': 'text/html'})
      res.end('<h3> Welcome to the Home Page!!!</h3>')
   }
   else if(req.url == '/getData')
   {
      res.writeHead(200, {'Content-Type': 'text/html'});
      res.json({key:'{"name" : "Heather Hanks", "class" : "cs313"'});
   }
   else
   {
      console.log("Nothing happened");
   }
 }

 server.listen(port, hostname, () => 
 {
   console.log(`Server running at http://${hostname}:${port}/`);
 });

