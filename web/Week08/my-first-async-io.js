var fs = require('fs');

var path = process.argv[2];    
fs.readFile(path, handleFile)

function handleFile (error, text) 
{
  if (error) return console.error('Uhoh, there was an error: ', error)
  text = text + '';
  // otherwise, continue on and use `file` in your code
  var lines = text.split('\n');
  var newlines_count = lines.length - 1;
  console.log(newlines_count);
}