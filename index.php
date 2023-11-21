
<?php
$conn = mysqli_connect(
    'db',
    'user1',
    'password',
    'lamp_stack'
);

$query = 'SELECT * FROM Table';
$result - mysqli_query( $query);

echo '<h1>MySQL Content,</h1>';

while($record = mysqli_fetch_assoc($result))
{
    echo'<h2>'.$record['Title'].'</h2>';
    echo'<p>'.$record['Body'].'</p>';
    echo 'Posted: '.$record['Date'];
    echo'<hr>';
}
?>