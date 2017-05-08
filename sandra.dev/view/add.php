<DOCTYPE>
<html>
<head>
    <title>
        Projekt MVC
    </title>
</head>
<style>
    
    a {
        color: black;
        text-decoration: none;
    }

    th {
        font-size: 20px;
        padding: 10px;
        
    }

    table {
        text-align: center;
        padding: 10px;
        background-color: lightgrey;
        width: 100%;
    }

</style>
<body>
<form action="/index.php?page=create" method="post">
<table>
    <thead>
        <tr>
            <th>Add artist<br><input type="text" name="Artist" value="" placeholder="Artist"/></th>
            <th>Add song<br><input type="text" name="Song" value="" placeholder="Song"/></th>
            <th>Add year<br><input type="text" name="Year" value="" placeholder="Year"/></th>
            <th><br><button type="submit">Add new artist</button><th>
            <th><br><button><a href="/index.php"/>Go back</button></th>

        </tr>
    </thead>
</table>
</form>

</body>
</html>
