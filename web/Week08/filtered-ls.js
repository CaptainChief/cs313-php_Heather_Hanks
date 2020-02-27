var fs = require('fs');
var path = require('path');

var path = process.argv[2];    
fs.readFile(path, handleFile)

function handleFile (error, list) 
{
  if (error) return console.error('Uhoh, there was an error: ', error)
//   text = text + '';
  // otherwise, continue on and use `file` in your code
  for (var i = 0; i < list.length; i++)
  {
     if(path.extname(list[i]) == '.txt')
     {
        console.log(path.extname(list[i]));
     }
  }

}