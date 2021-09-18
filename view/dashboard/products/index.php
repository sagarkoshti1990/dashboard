
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Products</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
        </div>
    </div>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col" style="width:100px">image</th>
        <th scope="col">Content hierarchy</th>
        <th scope="col">Description</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($item['data'] as $key=>$product): ?>
        <tr>
            <td><?=$product['id']?></td>
            <td><?=$product['title']?></td>
            <td><img src="<?= $url.'/'.$product['image_url']; ?>" class="card-img-top" alt="..."></td>
            <td><?= $product['content_hierarchy']; ?></td>
            <td><?= $product['description']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>