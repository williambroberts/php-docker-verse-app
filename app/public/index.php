<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles.css" >
    <title>Bible verse selector</title>
    <style>
        <?php  include_once 'styles.css';?>
    </style>
</head>
<body>

    <?php
    include_once './header.php'
    ?>
    <main>
        <?php


//todo strict equal


// only have 1 pdo connection
// use same pdo across each class instance  
$bookNumber=1;
$chapterNumber=1;
$verseNumber=1;
?>

<div class="verse__container">
    <h3 id="title">   
    </h3>
    <span id="text">  
    </span>
    <br>
</div>
<br>
<div class="">
<form action="" method="POST" id="form">
<label for="book" id="bookLabel">Book number:</label>
<input type="number" placeholder="book number"
aria-labelledby="bookLabel" required
min="1" max="66" name="book" id="book" value="<?php echo $bookNumber;?>" />
<label for="chapter" id="chapterLabel">Chapter number:</label>
<input type="number" required
aria-labelledby="chapterLabel" value="<?php echo $chapterNumber;?>"
placeholder="chapter number" min="1"  name="chapter" id="chapter" />
<label for="verse" id="verseLabel">Verse number:</label>
<input type="number" required
aria-labelledby="verseLabel"  value="<?php echo $verseNumber;?>"
placeholder="verses number" min="1"   name="verse" id="verse"/>
<button type="submit" id="submit">submit</button>
</form>

</div>
<script defer>
    document.getElementById('form').addEventListener('submit',submit)
function queryDatabase(){
    let book = document.getElementById('book').value
    let chapter = document.getElementById('chapter').value
    let verse = document.getElementById('verse').value
    
   
    let formData = new FormData()
    formData.append('book',book)
    formData.append('chapter',chapter)
    formData.append('verse',verse)
    console.log(formData)
    fetch('fetch.php',{
        method:'POST',
        body:formData
    })
    .then(res=>res.json())
    .then(data=>{
        if (data===false){
            displayError()
        }else{
            displayText(data)
        }
    })
}
queryDatabase()
function submit(e){
    e.preventDefault()
    queryDatabase()
}
function queryCache(){
    let book = document.getElementById('book').value
    let chapter = document.getElementById('chapter').value
    let verse = document.getElementById('verse').value
}
function displayError(){
    let span = document.getElementById('text')
    span.classList.add('error')
    span.textContent = "No verse found"
}
function displayText(result){
    if (result === false){
    console.log(result)
}else {
    let filteredText = result?.text.replaceAll(/\{[^}]*\}/g,"")
let span = document.getElementById('text')

let title = document.getElementById('title')
if (title){
    title.textContent = result?.book_name + " "+ result?.chapter + ":"   + result?.verse
}
if (span){
    span.classList.remove('error')
    span.textContent = filteredText 
}
}

}



</script>


</main>

</body>
</html> -->


<?php

class classA {
    protected static $name = "A";
    public static function getName(){
        //var_dump(self::class);
        var_dump(get_called_class());
        return static::$name;
    }
}

class classB extends classA {
    protected static $name="B";
   
}

echo classA::getName() .'<br>';
echo classB::getName() . '<br>';  
?>