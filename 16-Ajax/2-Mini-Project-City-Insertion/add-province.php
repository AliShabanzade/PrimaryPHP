<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Province</title>

    <style>
        body {
            /* webpage background color  */
            background: linear-gradient(109.6deg, rgba(156, 252, 248, 1) 11.2%, rgba(110, 123, 251, 1) 91.1%);
            background-size: cover;
        }

        input[type="text"],
        button {
            line-height: 30px;
            font-size: medium;
            font-family: auto;
            padding: 0 30px;
            border-radius: 5px;
            border: 2px solid blueviolet;
        }

        div#ajax-result {
            margin: 20px;
            font-family: auto;
        }

        span.success {
            color: #d7fd9a;
            font-size: large;
        }


        span.error {
            color: red;
            font-size: large;
        }
    </style>

</head>

<body style="text-align: center">

    <form action="ajax-save-province.php" method="post" id="provinceForm">
        <input type="text" name="province" id="province" style="text-align:center; direction:rtl">
        <button type="submit">افزودن</button>
        <div id="ajax-result"></div>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            var form = $('#provinceForm');
            var resultTag = $('#ajax-result');

            form.submit(function() {
                resultTag.html('<img src="Pinwheel.gif">');
                event.preventDefault();

                $.ajax({
                    // url: 'ajax-save-province.php',
                    // The attr() method sets or returns attributes and values of the selected elements
                    // form.attr('action') get the url that ajax should send to it Dynamically
                    url: form.attr('action'),
                    // method: 'post',
                    // The attr() method sets or returns attributes and values of the selected elements
                    //form.attr('method') gets method from form Dynamically
                    method: form.attr('method'),
                    //data: {province: $("input#province").val()}
                    //The serialize() method creates a URL encoded text string by serializing form values
                    //the serialize() javascript function , sends all the variables to the server with the name given in the form Dynamically
                    data: form.serialize(),

                    success: function(response) {
                        resultTag.html(response);
                    }
                });
            });
        });
    </script>

</body>

</html>