// credit to VellaG xd
const fs = require("fs");
const http = require("http");
const post_message = "Testing POST request!";
var html;


fs.readFile('./index.html', function (err, index) {
  if (err) throw err;
  html = index;
});


http.createServer(function(req, res) {
  if (req.method === 'POST') {
    req.on("data", (data) => {
        console.log("POST message: " + data);
    });
  } else {
    res.writeHead(200, {"Content-Type": "text/html"});
    res.write(html);
    res.end();
  };
}).listen(process.env.PORT);


// Below tests the POST request function above.

var options = {
    host: 'localhost',
    port: '8080',
    path: '/',
    method: 'POST',
    headers: {
        'Content-Type': 'text/plain'
    }
};

var post_req = http.request(options, (res) => {
    res.on('data', function(chunk) {
        console.log('Response: ' + chunk);
    });
});

post_req.write(post_message);
post_req.end();