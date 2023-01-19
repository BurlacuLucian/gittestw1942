<!DOCTYPE html>
<html lang="en">
<head>
   
</head>

<?php 
$conn=msqli_connect('localhost', 'root','', 'example');
if(isset($_POST['submit'])){
    $fileName=$_FILES['file']['name'];
    $path="files/".$fileName;a
    $query="INSERT INTO";

}
?>



<table border="1px" align="center">
    <tr>
        <td>
            <form action="fileupload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file">
                <button type="submit" name="submit">Upload</button>
            </form>
        </td>
    </tr>

</table>


</body>
</html>