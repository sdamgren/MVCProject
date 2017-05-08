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



<form action="/index.php?page=update" method="post">
<table>
    <thead>
        <tr>
            <th>Update artist<br><input type="text" name="Artist" value="<?= $music->getArtist() ?>" placeholder="Artist"/></th>
            <th>Update song<br><input type="text" name="Song" value="<?= $music->getSong() ?>" placeholder="Song"/></th>
            <th>Update year<br><input type="text" name="Year" value="<?= $music->getYear() ?>" placeholder="Year"/></th>
            <th>
            <th>
             <input type="hidden" name="id" value="<?= $music->getId() ?>"/>       
            <br><button type="submit">Update artist</button><th>
            <th><br><button><a href="/index.php"/>Go back</button></th>
        </td>

        </tr>
    </thead>
</table>
</form>


</body>
</html>
