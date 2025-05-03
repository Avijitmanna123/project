<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produt dectails</title>
    <link rel="stylesheet"href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
</head>
<body style="background-color:green;">
  <div class="conctainer">
   <div class="row">
 <div class=" col-md-6 m-auto border border-primary mt-5  bg-primary text-warning" >
      
      <form action="insert.php" method="post" enctype="multipart/form-data">
      <h3 class="text-center text-danger "><u><i>PRODUCT DETAIL </i></u></h3> <br>
      <div class="mb-3">
       <label class="form-label"> Product Name :</label>
       <input type="text"  name="Pname" class="form-control " placeholder="Enter Your Product Name " required>
      </div>
      <div class="mb-3">
       <label class="form-label"> Product price :</label>
       <input type="text" name="Pprice" class="form-control " placeholder="Enter Your Product Price " required>
      </div>
      <div class="mb-3">
       <label class="form-label"> Product Image :</label>
       <input type="File" name="Pimage" class="form-control " placeholder="Choose Your Product Image " required>
      </div>
      <div class="mb-3">
       <label class="form-label"> Select Page Catagory :</label>
       <select class="form-select" name="Ppage" aria-label="Default select example" required>
             <option selected>Open this select menu</option>
             <option value="Home" >Home</option>
             <option value="Phone">Phone</option>
             <option value="Bag">Bag</option>
             <option value="Laptop">Laptop</option>
        </select>
     
      </div>
      <div class="mb-3"></div>
        <button  name="Submit" class="submit bg-danger text-white form-control my-3">Upload</button>
      </div>
      </form>
 </div>
 </div>
 </div>
  <BR><BR>
    <!--FACH DADA-->
    <h1 style=" background-color:red  ; padding:10px ; margin:10px "><marquee> ALL PRODUCT DITALES TABLE</marquee></h1>
    
    <div class="contanier text-center my-3 ">
    <div class="row" >
    <div class="col-md-8 m-auto " >
     <table class="table table-hover border border-warning my-5">
   
      <thead >
        <th class="bg-dark text-white">ID</th>
        <th class="bg-dark text-white">PRODUCTS NAME</th>
        <th class="bg-dark text-white">PRODUCT PRICE</th>
        <th class="bg-dark text-white">PRODUCTCC IMAGE</th>
        <th class="bg-dark text-white">PRODUCT CATAGORY</th>
        <th class="bg-dark text-white">UPDATE</th>
        <th class="bg-dark text-white">DELETE</th>
      </thead>
      <tbody>

       <?php
          include 'Config.php';
          $R=mysqli_query($Con,"SELECT * From datatable ");
          while($row=mysqli_fetch_array($R))
           echo "
           <tr>
           <td>$row[ID]</td>
            <td>$row[Product_Name]</td>
           <td>$row[Produt_Price]</td>
           <td> <img src ='$row[Product_Image]' height='90px' width='100px'></td>
           <td> $row[Producct_Catagory]</td>
           <td><a href='UpdateProduct.php?PID=$row[ID]'class='btn btn-danger'> UPDATE</a></td>
           <td><a href='DeleteProduct.php?PID=$row[ID]' class='btn btn-danger'>DELETE</a></td>
          
           </tr>
           " ;
        ?>
      </tbody>

     </table>
     </div>
     </div>
     </div>
</body>
</html>