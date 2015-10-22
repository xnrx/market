<?php
use App\Library\View;
?>

<div class="row">
    <div class="col-md-offset-3">
        <div class="col-md-8">
            <h2>Create shop item</h2>
            <hr/>
            <form action="/shop/create" method="post">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" value="<?php if($viewParams['request']->hasPost('name')) echo View::escape($viewParams['request']->post['name']); ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="Price" value="<?php if($viewParams['request']->hasPost('price')) echo View::escape($viewParams['request']->post['price']); ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="image" class="form-control" placeholder="Image url" value="<?php if($viewParams['request']->hasPost('image')) echo View::escape($viewParams['request']->post['image']); ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="description" class="form-control" placeholder="Description" value="<?php if($viewParams['request']->hasPost('description')) echo View::escape($viewParams['request']->post['description']); ?>">
                </div>
                <?php if(isset($viewParams['request']->errors[0])): ?>
                    <?php foreach($viewParams['request']->errors as $error): ?>
                        <p class="text-danger"><?php echo $error; ?></p>
                    <?php endforeach ?>
                <?php endif ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>