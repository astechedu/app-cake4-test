<div class="row"> 
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <!-- File:templates/Articles/index.php --> 
        <div> <?= $this->html->link('Add Article',['action' => 'add'], ['class' => 'btn btn-md btn-success']) ?>        
        </div>

        <h1 class="h1">Articles</h1>

        <table class="table table-striped">
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>User Id</th>
                <th>Created</th>
            </tr>

            <!-- Here is where we iterate through our $articles query object, printing out article info -->

            <?php foreach ($articles as $article): ?>
            <tr>
                <td>
                    <?= $article->id ?>
                </td>       
                <td>
                    <?= $this->Html->link(ucfirst($article->title), ['action' => 'view', $article->slug]) ?>
                </td>

                <td>
                    <?= ucfirst($article->slug) ?>
                </td>     
                <td>
                    <?= $article->user_id ?>
                </td>   
                <td><div class="text-center">                          
                     <?= $this->html->link('View', ['action' => 'view', $article->id], ['class' => 'btn btn-info']) ?> 
                     <?= $this->html->link('Edit', ['action' => 'edit', $article->id], ['class' => 'btn btn-success']) ?> 
                     <?= $this->Form->postLink('Delete', ['action' => 'delete', $article->id], ['class' => 'btn btn-danger']) ?>   
                     </div>    
                </td>               
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

