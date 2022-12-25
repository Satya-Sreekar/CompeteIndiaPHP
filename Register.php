<!DOCTYPE html>
<html>
    <Head>
        <title>Register</title>
    </head>
    <style>
    html
        {
        background: linear-gradient(#141e30, #243b55);
        height:100%
        }
    table
        {
        margin-left:40%;
        margin-top:20%;
        text-align: center;
        font-size: large;
        border: 1px solid;
        border-radius:15px;
        background-color:#f2f2f2;padding:1%;
    }
    th
    {
        font-size: 30px;
    }
    td
    {
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
    
    </style>
    <body>
        
        <form action="/RegPro.php" method="POST">
            <table>
                <th colspan=2 style="align:center;">
                    Registration
                </th>
                <tr>
                    <TD>Username:</td>
                    <Td><input id='UN' name="UN" placeholder="Enter Username" type="Text"></input>
                </tr>
                <tr>
                    <td>Password:</td>
                    <Td><input id='PD' name="PD" placeholder="Enter Password" type="Password"></input>
                </tr>
                <tr>
                    <td>Email ID:</td>
                    <Td><input id='EM' name="EM" placeholder="Enter your email address" type="Text"></input>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <Td><input id='PN' name="PN" placeholder="Enter your Phone Number" type="Text"></input>
                </tr>
                <tr>
                    <td colspan=2 align="center"><button type="submit">Register</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>