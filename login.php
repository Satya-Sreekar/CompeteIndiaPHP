<!DOCTYPE html>
<html>
    <Head>
        <title>Login</title>
    </head>
    <style>
    html
    {
        background: linear-gradient(#141e30, #243b55);
        height:100%
    }
    table{
        margin-left:30%;
        margin-top:10%;
        text-align: center;
        font-size: larger;
        border: 1px solid;
        border-radius:15px;
        background-color:#f2f2f2;padding:1%;
    }
    td{
        padding: auto;
        align:center;
    }
    button {
        background-color: #04AA6D; /* Green */
        border: none;
        border-radius: 8px;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }
    a{
        text-decoration: none;
    }
    </style>
    <body>
        <table width=35% style="">
            <form action="process.php" method="POST">
                <TH>
                    <H1>Login</H1>
                </TH>
                <tr>
                    <td>Username:</td>
                </tr>
                <tr> 
                    <td><input type="text" id="UN" name="UN" value="" placeholder="Enter Username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                </tr>
                <tr>
                    <td>
                        <input type="Password" id="pd" name="pd" value="" placeholder="Enter Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" value="submit"> Login</button>
                    </td>
                </tr>
                <tr>
                    <td style="padding:15px"></td>
                </tr>
                <tr>
                    <td >Not Regestered Yet?</td>
                    </tr>

                <tr>
                    <td>
                        <button>
                            <a href="/Register.php">Register Here!</a>
                        </button>
                    </td>
                </tr>

            </form>
        </table>
    </body>
</html>