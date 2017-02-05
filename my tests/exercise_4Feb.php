<?php 

$post = $_POST;

$form = array(
    'title' => 'Article title',
    'article' => 'Lorem Ipsum'
);


// checking for errors
$errors = [];

if (empty($post['title'])) {
  $errors['title'] = "Vyplňte prosím tituelek";
}

if (empty($post['article'])) {
  $errors['article'] = "Vyplňte prosím tituelek";
}

?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Articles</title>

  <style>

  </style>
</head>

<body>

  <ul id="menu">
    <li><a href="#politics">Politics</a></li>
    <li><a href="#culture">Culture</a></li>
    <li><a href="#sport">Sport</a></li>
  </ul>


<h1>Form</h1>
<form action="" method="post">
Title:
<?php if (isset($errors['title'])) { ?>
  <div class="error">
      <?php echo $errors['title']; ?>
  </div>
<?php } ?>
<input type= "text" name="title" >
<br><hr>


Article: 
<textarea name="article" <?php if (empty($_POST['article'])) {echo 'Error: please supply an article';} ?>></textarea>
<br><hr>



<input type="submit" value="Submit your article">
<br><hr>


</form>

    
  <h1>Articles</h1>
  <div id="articles">

 
<h2><?php echo $post['title'];?></h2>
<p><?php echo $post['article'];?></p>


    <div class="article" id="politics">
      <h2>An article about politics</h2>
      <div class="text">
        <p>Lorem ipsum dolor sit amet consectetuer vel ut urna id ut. Dui Vivamus platea Nam malesuada semper dui nascetur orci
          non sed. Vestibulum est nunc ridiculus Nam mus wisi elit at fames Proin. Dui sociis tellus non est semper Sed Nulla
          justo et ut. Urna Nulla Nulla Nam mattis Nulla nibh wisi mauris enim sed. Interdum Aenean elit urna Vestibulum
          sit ut tincidunt velit lacus convallis. Urna Vivamus purus Maecenas dolor morbi Quisque Curabitur Vestibulum elit
          sit. Nunc lacus vestibulum consequat nibh wisi sed Sed enim velit nec. Laoreet nibh ridiculus lacinia habitant
          interdum eu nonummy Vestibulum wisi penatibus. Adipiscing Sed nibh Phasellus In dapibus Vestibulum pede tellus
          ullamcorper Vestibulum. Leo urna Sed nibh tempus quis gravida ligula velit lacinia nibh. Id Vivamus fermentum Morbi
          dui tempus vitae adipiscing a laoreet sem. Consectetuer Curabitur mauris.</p>
        <p>Semper id ac feugiat hendrerit tellus in mattis Sed risus felis. Platea risus pede tincidunt Curabitur Vestibulum
          massa eget ligula et nonummy. Neque elit tempor nulla senectus quis Nunc adipiscing enim Nunc velit. Congue Quisque
          dictumst quis pretium et quis justo pretium dolor lobortis. Vestibulum eget hendrerit Aenean eget laoreet mattis
          consequat eget sem rutrum. Porta Cras adipiscing dapibus eu natoque sapien semper pellentesque risus Nunc. Euismod
          enim volutpat id molestie wisi sem convallis volutpat id Fusce. Laoreet platea pretium ligula.</p>
      </div>
    </div>

    <div class="article" id="culture">
      <h2>An article about culture</h2>
      <div class="text">
        <p>Et et condimentum leo habitant Aenean congue porta id justo justo. Sit ipsum hendrerit felis turpis senectus orci
          nibh lacinia Lorem sit. Pharetra Integer morbi vitae hac velit Aenean ut hac Curabitur Nulla. Curabitur adipiscing
          vel elit lacus pede Quisque libero cursus dolor senectus. Lacinia habitant volutpat eget Morbi Aliquam habitant
          id consectetuer interdum eros. Sed Nullam odio tincidunt dictum libero cursus nibh nec ridiculus augue. </p>
        <p>Fringilla neque mauris Curabitur vel faucibus congue nec orci dapibus sagittis. Fringilla senectus massa euismod
          Vivamus dignissim quis odio at nec ante. Nam sagittis porttitor enim mi sodales dui sit at dolor In. At Curabitur
          interdum In enim magnis sapien tincidunt Sed turpis pellentesque. Enim quam risus urna et vitae amet sodales Sed
          purus elit. Et convallis sed urna Curabitur In enim tortor sem lorem fringilla. Sed adipiscing gravida at habitant
          mauris mauris turpis In ipsum metus. Pretium ipsum aliquam quis neque eu Vestibulum vel sit et laoreet. Egestas
          tempor pede pellentesque.</p>
      </div>
    </div>

    <div class="article" id="sport">
      <h2>An article about sport</h2>
      <div class="text">
        <p>Sed euismod sed enim eget pellentesque Lorem ante malesuada adipiscing neque. Ac semper purus consequat Duis sit
          montes Curabitur nunc congue et. Sed Nullam nibh faucibus congue consequat Fusce ante Quisque fames cursus. Risus
          semper auctor sem pretium facilisis dis consectetuer enim id ut. Et et hendrerit at nunc semper lacinia velit Morbi
          feugiat dignissim. Et condimentum orci dapibus pretium pretium justo adipiscing a libero tincidunt. Pretium Pellentesque
          ante condimentum id eu nibh tortor quam lorem congue. Pede In malesuada ipsum mus elit In pretium morbi ac semper.
          Risus quis Proin id semper tristique congue justo vel massa porta. Egestas volutpat In iaculis in orci Nunc ridiculus
          Curabitur Fusce gravida. Accumsan et scelerisque accumsan ipsum Curabitur neque In faucibus Quisque vitae. Non
          ipsum Praesent sagittis id elit justo Vivamus lorem pellentesque laoreet. Laoreet quis.</p>
        <p>Volutpat in a ac id pretium Donec sapien ac Cum morbi. Lorem Duis Morbi laoreet dui eget nibh Phasellus ut non orci.
          Interdum et lorem purus nisl dictum nibh cursus enim et sagittis. Nibh tincidunt et at vel sed cursus nibh hac
          interdum In. Felis dictumst urna nibh vestibulum morbi scelerisque ut id Suspendisse et. Nulla Maecenas a tellus
          at consectetuer sapien id justo pede massa. Eget sollicitudin vel justo.</p>

      </div>
    </div>

  </div>

</body>

</html>