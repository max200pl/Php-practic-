<?php 
if (count($_POST) > 0) {
     $title = $_POST ["text"];
     $text = $_POST ["area"];
     file_put_contents("articles.txt", "$title<@>$text\n", FILE_APPEND); 
     
     $lines = file("articles.txt"); 

     $lastLine = $lines[count($lines)-1]; 

     $lastArr = explode("<@>", $lastLine); // будет лежать массив из 2 элементов 

     $newTitle = $lastArr[0];
     $newPost = $lastArr[1];
}

?>



<form method="post">
     <label for="text">Тема статьи</label>
     <input class="form-control" type="text" name="text">

     <div class="form-group">
          <label for="my-textarea">Описание статьи</label>
          <textarea id="my-textarea" class="form-control" name="area" rows="3"></textarea>
     </div>

     <input class="form-control" type="submit" value="Загрузить статью">
</form>



<? foreach ($lastArr as $country => $towns): ?>

<h1> <?= $newTitle;?> </h1>

<? endforeach; ?>
</h1>
<p>
     <span>Описание статьи:</span>

</p>




































<style>
form {
     color: white;
     background: green;
     margin: auto;
     max-width: 200px;
     border: 1px solid #000;
     padding: 10px;
}

label {
     padding: 10px
}

.form-group {
     padding-bottom: 10px;
}

.form-control {
     padding: 10px;
}
</style>