<div class="row">    
    <!-- File:templates/Articles/index.php -->     
    
    <?php foreach ($products as $product): ?>

        <div class="card" style="width: 18rem;">
        <h5 class="card-title"><?php echo $product->name; ?></h5>

          <img src="" class="card-img-top" alt="...">

          <div class="">
            <?php echo $this->Html->image('/img/products/'.$product->img,['class' => 'img-thumbnail']);?>
          </div>

          <div class="card-body">            
            <p class="card-text">Desc:<?php echo $product->description; ?></p>
            <p class="card-text">Price:<?php echo $product->price; ?></p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>        
     <?php endforeach; ?>       
      
</div>

