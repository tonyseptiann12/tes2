const request = require("request");

request({
    url: "https://api.covid19api.com",
    json: true
}, (err, response, body) => {
    console.log(body);
});