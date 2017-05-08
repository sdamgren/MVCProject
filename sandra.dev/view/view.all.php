<?php
$music = $this->getAllMusic();
?>

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


<table>
<thead>
    <tr>
        <th>Artist</th>
        <th>Song</th>
        <th>Year</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
</thead>
<tbody>
<?php foreach ($music as $music) { ?>
    <tr>
        <td><?= $music->getArtist()?></td>
        <td><?= $music->getSong()?></td>
        <td><?= $music->getYear()?></td>
        <td>
        <button><a  name="btn-delete" href="/index.php?page=delete&id=<?php echo $music->getId(); ?>">Delete artist</a></button>
        </td>
        <td>
        <button><a  name="btn-update" href="/index.php?page=update&id=<?php echo $music->getId(); ?>">Update artist</a></button>
        </td>
        
    </tr>
<?php } ?>
<tr>
    <td id=button><a href="/index.php?page=add"><button type="button">Add new artist</button></a></td>
    
</tr>


</tbody>
</table>


</body>
</html>
