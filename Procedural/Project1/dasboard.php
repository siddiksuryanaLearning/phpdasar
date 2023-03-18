<?php 
    require 'query.php';

    if (isset($_POST["submit"])){
        //get data from database & insert into variable 
        
        if(sendProblem($_POST) > 0 ){
            echo "
                <script>
                alert('Product suscess added');
                document.location.href = 'index.php';
                </script>
            
            ";
            die;
        }else{
            echo "
            <script>
            alert('Product failed added');
            document.location.href = 'index.php';
            </script>
            ";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="flex justify-start mt-6">
    <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-6 flex justify-center items-center rounded"> <a href="logout.php?">Log out</a></button>
</div>
    <div class="flex justify-center mt">
        <h1 class="text-2xl">Report a technical problem</h1>
    </div>

    <div class="flex justify-center mt-0">
    <P>_______________________________________________________________</P>
    </div>

    <div class="flex justify-center mt-2">
        <div class="bg-white-200 px-32 rounded-lg mx-80">
            <p>If you notice something isn't working correctly, like a broken feature or a technical problem, try updating the app. If it’s still not working after updating, you can report it to us.</p>
            <br>
            <p>Make sure to include as much detail about the problem as possible in your report. Information like the kind of phone or tablet you were using, what you were doing when the problem occurred and adding a screenshot may help us address the issue.</p>
        </div>

    </div>

    <div class="flex justify-center mt-6">
        <h1 class="flex-row text-2xl">Report Form </h1>
    </div>   

    <form action="" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="status" value="error" > 

        <div class="flex justify-center mt-6">
            <div class="w-2/5">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="date">
                Date
                </label>
                <input class="border rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" id="date" name="date">
            </div>
        </div>


        <div class="flex justify-center mt-4">
            <div class="w-2/5">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">
                    Message
                    </label>
                <textarea class="resize-none border rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" name="message" rows="6" placeholder="Enter your message here"></textarea>
            </div>
        </div>

        <div class="flex justify-center w-3/4 mx-14">
                <div class="mt-4">
                <label for="picture" class="block font-medium text-gray-700">Upload File:</label>
                <input name="picture" id="picture" type="file" class="mt-1 py-2 px-3 border border-gray-400 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
        </div>
        <div class="flex justify-center w-5/6 mx-80">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-14 rounded focus:outline-none focus:shadow-outline" type="sumbit" name="submit">
        Send
        </button>
                </div>

        
    </form>

</body>
</html>