<?php

echo '<style>
    input {
    height: 40px;
    width: 80%;
    }
    button {
    height: 40px;
    width: 50%;
    }
</style>
<form action="insert.php" method="post" style="height: 400px;border: black 1px solid;width: 600px;margin: 100px auto;text-align: center">
<h1>Add product</h1>
<input type="text" name="name" placeholder="enter product name">
<br><br>
<input type="text" name="price" placeholder="enter price">
<br><br>
<input type="text" name="thumbnail" placeholder="enter thumbnail"><br><br>
<button>submit</button><br><br>
<a href="index.php">back</a>
</form>';