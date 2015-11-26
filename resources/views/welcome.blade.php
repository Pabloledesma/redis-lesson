<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>New Users</h1>

        <ul>
            <li v-for="user in users">@{{ user }}</li>
        </ul>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.3.7/socket.io.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.js"></script>

        <script type="text/javascript">
        
        var socket = io('http://192.168.10.10:3000');
        

        new Vue({
            el: 'body',

            data: {
                users: []
            },

            ready: function(){
                socket.on('test-channel:UserSignedUp', function(data){
                    this.users.push( data.username );
                }.bind(this));
            }
        });
        </script>
    </body>
</html>