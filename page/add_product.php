<html>
   <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Register Page</title>
   </head>
   <body>
       <form name="form" method="post" action="add_product_finish.php" enctype="multipart/form-data" >
           產品名稱：<input type="text" name="name" /> <br><br>
           種類(自動/半自動/手動)：<input type="text" name="species" /> <br><br>
           規格：<TextArea Name="format" Cols="40" Rows="3"></TextArea> <br><br>
           特點：<TextArea Name="characteritic" Cols="40" Rows="3"></TextArea> <br> <br>
           定價：<input type="text" name="price" /> <br>
           分類：<input type="radio" name="type" value="1">咖啡機 <input type="radio" name="type" value="2">磨豆機 <input type="radio" name="type" value="3">耗材

           圖片：<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
           <input type="submit" name="button" value="確定" />
       </form>
       
       
   </body>
</html>
