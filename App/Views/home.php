<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8" />
    	<title>super titre null</title>
	</head>

	<body>
    	<h1>Titre super nul !</h1>
    	
        <div>
            <?php
            // var_dump($array_bdd_template);
            ?>
          

            <h3>
                <?php echo $array_bdd_template['title']; ?>
            </h3>

            <p>
                <?php echo $array_bdd_template['content']; ?>
            </p>
            
        </div>

	</body>
</html>