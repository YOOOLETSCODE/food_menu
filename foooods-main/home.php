       <link href="css/main.css" rel="stylesheet" />
        <section class="home" id="home">
            <div class="container">
                <div class="home-wrapper d-grid">
                    <div class="col-left">
                        <h3>Welcome TO</h3>
                        <h1>FOODLAND</h1>

                        <p> Ordering food online just makes it so easy.</p>
                        

                    </div>
                    <div class="col-right">
                        <img data-tilt src="./assets/img/hero-img.png" alt="Home image" class="img-fluid">
                    </div>
                </div>
            </div>

        </section>
	<section class="page-section" id="menu">
        <div id="menu-field" class="card-deck">
                <?php 
                    include'admin/db_connect.php';
                    $qry = $conn->query("SELECT * FROM  product_list order by rand() ");
                    while($row = $qry->fetch_assoc()):
                    ?>
                    <?php "<br>" ?>
                    <div class="col-lg-3" style="margin-bottom: 20px;">
                     <div class="card menu-item ">
                        <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" alt="...">
                        
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['name'] ?></h5>
                          <h6 class="card-title">Price: <?php echo $row['price'] ?></h6>
                          <div class="text-center">
                              <button class="btn btn-sm btn-outline-primary view_prod btn-block" data-id=<?php echo $row['id'] ?>><i class="fa fa-eye"></i> View</button>
                              
                          </div>
                        </div>
                        
                      </div>
                      </div>
                    <?php endwhile; ?>
        </div>
    </section>
    <script>
        
        $('.view_prod').click(function(){
            uni_modal_right('Product','view_prod.php?id='+$(this).attr('data-id'))
        })
    </script>
	
