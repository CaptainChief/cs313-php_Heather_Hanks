var fs = require('fs');

var path = process.argv[2];    
var text = fs.readFileSync(path).toString();
var lines = text.split('\n');
var newlines_count = lines.length - 1;
console.log(newlines_count);