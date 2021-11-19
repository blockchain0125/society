    <button onclick="marco()">Marco Fine Arts</button>  
    <button onclick="dream()">DreamJunction</button>
    <div id="result"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        function marco(){
            $.get("<?php echo site_url('index.php/Society/marco'); ?>", function(data, status){
                document.getElementById("result").innerHTML = data;
                // showResult(JSON.parse(data));
            });
        };

        function dream(){
            $.get("<?php echo site_url('index.php/Society/dream'); ?>", function(data, status){
                document.getElementById("result").innerHTML = data;
                // showResult(JSON.parse(data));
            });
        };

        // function showResult(data){
        //     result = "";
        //     for (let index = 0; index < data.length; index++) {

        //         for (const x in data[index]) {
        //             result += x + " : " + data[index][x] + ", ";
        //         }
        //         result += "<br>"
        //     }
        //     document.getElementById("result").innerHTML = result;
        // }

    </script>