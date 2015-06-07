// Open a socket IO connection
var socket = io('http://192.168.10.10:3000');

socket.on('download-events:DownloadDidUpdate', function(msg){
    console.log('received: ' + msg);
});