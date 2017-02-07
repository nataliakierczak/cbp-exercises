<?php 

$books = array(
    array(
        'author' => 'Milo Yiannopoulos',
        'title' => 'Dangerous',
        'price' => '$15.62'
    ),
    array(
        'author' => 'Margaret Atwood',
        'title' => 'The Handmaid\'s Tale',
        'price' => '$8.69'
    ),
    array(
        'author' => 'George Orwell',
        'title' => '1984',
        'price' => '$7.09'
    ),
    array(
        'author' => 'Rupi Kaur',
        'title' => 'Milk and Honey',
        'price' => '$8.99'
    ),
    array(
        'author' => 'Neil Gaiman',
        'title' => 'Norse Mythology',
        'price' => '$15.57'
    )
);

echo '<table border="1">';
echo '<tr><th>Author</th><th>Title</th><th>Price</th></tr>';
foreach( $books as $book )
{
    echo '<tr>';
    foreach( $book as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>
<body>
    
    <table>
        <thead>
            <tr><th>Author</th><th>Title</th><th>Price</th></tr>
        </thead>
        <tbody>
    
        </tbody>
    </table>

</body>
</html>