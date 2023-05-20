<div class="row">    
    <!-- File:templates/Articles/index.php -->         
    <?php foreach ($products as $product): ?>

        <div class="card m-2" style="width: 10rem;">
        <h5 class="card-title"><?php echo $product->name; ?></h5>

          <img src="" class="card-img-top" alt="...">

          <div class="">
            <?php echo $this->Html->image('/img/products/'.$product->img,['class' => 'img-thumbnail']);?>
          </div>

          <div class="card-body">            
            <p class="card-text">Desc:<?php echo $product->description; ?></p>
            <p class="card-text">Price:<?php echo $product->price; ?></p>
            <input type="hidden" id="id" name="id" value='<?php echo $product->id; ?>' />
            <a href="#" class="btn btn-primary">Buy Now</a>
            <button class="btn btn-md btn-info">Button</button>
          </div>
        </div>   

     <?php endforeach; ?>       
      
</div>


<script type="text/javascript">  

$(function(){ 
    // Fetch single record
     $('button').on('click',function(){           

        let id = $('#id').val();
        let url = "<?php echo $this->Url->build(['controller' => 'Products','action' => 'test']) ?>";
          //let url = "<?php echo $this->Url->webroot ?>/ProductsController/test";
           // AJAX request
           $.ajax({
               url: url,
               type: "POST",
               data: {"id": id},
               //dataType: 'json',
               cache: false,  
                             
               headers:{
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
               },  

               success: function(response){
                    
                    alert("Ok");
               },
               error: function(response){
                   
                    alert("error");
               }               
           });
     });
});
    
  
</script>