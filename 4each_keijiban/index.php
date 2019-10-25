<!DOCTYPE HTML>
<html lang="ja">

	<head>
  <meta charset="UTF-8">
  <title>4each_keijiban</title>
	 
  <link rel="stylesheet"type="text/css"href="style.css">
	</head>
  
 <body>
 <?php
 
 mb_internal_encoding("utf8");
 $pdo = new PDO("mysql:dbname=itou;host=localhost;","root","mysql");
 $stmt = $pdo->query("select*from 4each_keijiban");
 
 
 
 
 ?>
	 
	 
 <div class="logo">
		<img src="4eachblog_logo.jpg">
	</div>
		
		<header>
			
			<ul class="menu">
			   <li>トップ</li>
			   <li>プロフィール</li>
			   <li>4each</li>
			   <li>登録フォーム</li>
				<li>問い合わせ</li>
				<li>その他</li>
			</ul>
		
		</header>		
 	
 <main>
			
		
			
			<div class="main-container">
			
				
			  <div class="left">
		       <h1>プログラミングに役立つ掲示板</h1> 		
		
			
			  	
			  	
			  	<div class="nyuuryoku">
	     	<form method="post" action="insert.php">
	     	  
	     	    	<div class="textnyu">入力フォーム</div>
	     	    	<label>ハンドルネーム</label>
	     	    	<br>
	     	    	<input type="text" size="35" name="handlename">
	     	   	
	     		
	     		<div>
	     		 <label><br>タイトル</label>
	     		 <br>
	     		 <input type="text" size="35" name="title">
	     		
	     		</div>
	     		
	     	
	     	    <div>
	     	       <label><br>コメント</label>
	     	    	<br>
	     	    	<textarea cols="60" rows="7" name="comments"></textarea>
	     	    	
	     	    </div>
	     	    
	     		<div>
	     		   <input type="submit" value="送信する">
	     		
	     		</div>
				
	     	</form>
			</div>	
        
         　
         
            <?php
			while($row=$stmt->fetch()){
			echo"<div class='kiji'>";
			echo"<h3>".$row['title']."</h3>";
			echo"<div class='contents'>";
			echo $row['comments'];
			echo"<div class='handlename'>posted by".$row['handlename']."</div>";
			echo"</div>";	
			echo"</div>";	
			}
            ?>
          
            
          
          
          
          
          
	          </div>
	 
	 <div class="right">
		  <h2>人気の記事</h2>
		<ul>
		<li>PHP オススメ本</li>	
		<li>PHP MyAdminの使い方</li>
		<li>今人気のエディタTop5</li>	
		<li>HTMLの基礎</li>
			
			
			</ul>
			<br>
		
		  <h2>オススメリンク</h2>
			<ul>
			 <li>インターノウス株式会社</li>
			　<li>XAMPPのダウンロード</li>
			　<li>Eclipseのダウンロード</li>
			　<li>Bracketetsのダウンロード</li>
			
			</ul>
			<br>
			
			<h2>カテゴリ</h2>
			　<ul>
			   <li>HTML</li>
			   <li>PHP</li>
			   <li>MySQL</li>
			   <li>javascript</li>
			
			</ul>
			
			
			
	 </div>		
	 
	 </div>
	 </main>
 	
 	<footer>
		 
		  <p>	
			copyright © internous | 4each blog is the one which provides A to Z about programming.
			</p>
		</footer>
 	
 	
 	
 	
 	
 </body>
	
</html>